<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pharmacie CHAABIA</title>
  <link rel="icon" type="image/png" href="../images/miniLogo.png">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/GererOrdonnace.css">

</head>

<body>


  <?php

            require_once "cbd.php";
            session_start();
            if(isset($_SESSION["id-message"])){
              $id_Msg = $_SESSION["id-message"];
            }
            if(isset($_GET['id-message'])){
            $id_Msg = $_GET['id-message'];
            $_SESSION["id-message"] = $id_Msg;
            }
            $SelectMsg = "SELECT * FROM messages_ordonnance WHERE ID_MSG = '$id_Msg'"; 
            $msgInfos= mysqli_query($conn,$SelectMsg);
            $msg = mysqli_fetch_array($msgInfos);
            $id_user = $msg['ID_UTILISATEUR'];

            $SelectUser = "SELECT * FROM utilisateurs WHERE ID_UTILISATEUR = '$id_user'"; 
            $userInfos= mysqli_query($conn,$SelectUser);
            $user = mysqli_fetch_array($userInfos);


            $nom_profile = $_SESSION['profile'];
            if($nom_profile == "employe"){
                $location = "employe.php";
            }else{
                $location = "pharmacien.php";
            }
            
                         

            if(isset($_POST['modifier'])){
                $status = $_POST["status"];

                if($status != $msg['STATUT']){
                  $modifier = "UPDATE messages_ordonnance  SET `STATUT` = '$status' WHERE `messages_ordonnance`.`ID_MSG` = '$id_Msg' ;"; 
                  $modifier_message= mysqli_query($conn, $modifier);   
                  } 
                }
            if(isset($_POST['supprimer'])){

                $supprimer = "DELETE FROM messages_ordonnance WHERE ID_MSG = '$id_Msg';"; 
                $supprimerCat = mysqli_query($conn, $supprimer);
                header('location: '.$location);
            }
            ?>



  <div class="container">
    <form action="gererOrdonnace.php" method="post" enctype="multipart/form-data">
      <p class="title">
        <a href="gererOrdonnace.php">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"
            stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-ccw">
            <polyline points="1 4 1 10 7 10"></polyline>
            <polyline points="23 20 23 14 17 14"></polyline>
            <path d="M20.49 9A9 9 0 0 0 5.64 5.64L1 10m22 4l-4.64 4.36A9 9 0 0 1 3.51 15"></path>
          </svg>
        </a>
        <span>Modifier Ordonnace</span>
        <a href="<?php echo $location; ?>">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"
            stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
            <line x1="5" y1="12" x2="19" y2="12"></line>
            <polyline points="12 5 19 12 12 19"></polyline>
          </svg>
        </a>
      </p>
      <div class="infos__spaceB">
        <span>Nom :</span>
        <input class="mini__input" type="text" name="nom" placeholder="Nom" value="<?php echo $user['NOM']; ?>" readonly>
        <span class="margin-left">Prénom :</span>
        <input class="mini__input" type="text" name="prenom" placeholder="Prénom"
          value="<?php echo $user['PRENOM']; ?>" readonly>
      </div>

      <?php 
      if($msg['ORDONNANCE'] != NULL && $msg['ORDONNANCE'] != "NULL"){
      ?>
      <div class="infos__spaceB center">
        <span>Ordonnace :</span>
        <img class="image__S__cat" id="myImg" src="../<?php echo $msg['ORDONNANCE']; ?>" alt="Ordonnance">
      </div> 
      <?php 
      }
      ?> 
        <p class="input__title">Message :</p>
        <textarea name="message" placeholder="Message :" readonly><?php echo $msg['MESSAGE']; ?></textarea><br>
        <? if( $msg['STATUT'] !== NULL){ ?>
        <div class="infos__spaceB">
        <span>Status :</span>
          <select name="status">
          <option value="<?php echo $msg['STATUT']; ?>"><?php echo $msg['STATUT'] ?></option>
          <?php 
              if($msg['STATUT'] == "en-cours"){
                  $option2 = "preparer";
                  $option3 = "effectuer";
              }elseif ($msg['STATUT'] == "preparer") {
                $option2 = "en-cours";
                $option3 = "effectuer";               
              }else{
                $option2 = "en-cours";
                $option3 = "preparer";   
              }
              ?>
          <option value="<?php echo $option2; ?>"><?php echo $option2; ?></option>
          <option value="<?php echo $option3; ?>"><?php echo $option3; ?></option>
        </select>
        <input type="submit" name="modifier" value="Modifier">
          </div>
        <?php
        } 
        ?>
      <input type="submit" name="supprimer" class="delete" value="Supprimer">
      <input onclick="window.location.href='repondreOrdonnace.php?id-msg=<?php echo $id_Msg; ?>'" type="button" name="repondre" value="Répondre">
  <br>
      <img src="../images/consulterMessage.png" alt="Categorie">
    </form>

    <div class="drops">
      <div class="drop drop-1"></div>
      <div class="drop drop-2"></div>
      <div class="drop drop-3"></div>
      <div class="drop drop-4"></div>
      <div class="drop drop-5"></div>
    </div>
    <div class="spacer"></div>
  </div>
  
  <div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
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