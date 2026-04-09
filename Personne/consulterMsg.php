<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pharmacie CHAABIA</title>
  <link rel="icon" type="image/png" href="../images/miniLogo.png">
  <link rel="stylesheet" href="../css/viewImage.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.js" defer></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" defer></script>
</head>

<body>

  <?php 

            require_once "cbd.php";
            session_start();
            if(isset($_SESSION["id-message"])){
              $id_msg = $_SESSION["id-message"];
            }
            if(isset($_GET['id-message'])){
            $id_msg = $_GET['id-message'];
            $_SESSION["id-message"] = $id_msg;
            }
            $SelectMsg = "SELECT * FROM messages_ordonnance WHERE ID_MSG = '$id_msg'"; 
            $msgInfos= mysqli_query($conn,$SelectMsg);
            $msg = mysqli_fetch_array($msgInfos);
                                     
            ?>




  <div class="main">
    <div class="container a-container" id="a-container">
      <form class="form" id="a-form">
        <h2 class="form_title title">Consulter message</h2>
        <div class="infos__spaceB">
        <span>Date Messasge :</span><input class="form__input date" type="text"
            value="<?php echo $msg['DATE_MESSAGE'] ?>" placeholder="Date message :" readonly>
          </div>
          <span>Message :</span>
          <textarea class="form__input" id="message"><?php echo $msg['MESSAGE'] ?>"</textarea> 
          <?php 
          if($msg['ORDONNANCE'] != NULL){
          ?>         
          <div class="infos__spaceB">
          <span>Ordonnance :</span>
        <img src="../<?php echo $msg['ORDONNANCE'] ?>" id="myImg" alt="Ordonnance">
        </div>
        <?php 
          }
        ?>
        <button class="switch__button button submit" type="button"
          onclick="location.href='clientPatient.php'">RETOUR</button>
      </form>
    </div>
    <div class="switch" id="switch-cnt">
      <div class="switch__circle"></div>
      <div class="switch__circle switch__circle--t"></div>
      <div class="switch__container" id="switch-c1">

        <img class="viewImage" src="../images/consMessage.png" alt="Consulter MESSAGE">


      </div>
    </div>
  </div>
  <div id="myModal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="img01">
    <div id="caption">Produit</div>
  </div>



  <script>
  var modal = document.getElementById("myModal");

    var img = document.getElementById("myImg");
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    img.onclick = function(){
      modal.style.display = "block";
      modalImg.src = this.src;
      captionText.innerHTML = this.alt;
    }
    var span = document.getElementsByClassName("close")[0];

    span.onclick = function() {
      modal.style.display = "none";
}
</script>




</body>

</html>