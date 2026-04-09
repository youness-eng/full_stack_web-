<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pharmacie CHAABIA</title>
  <link rel="icon" type="image/png" href="../images/miniLogo.png">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/GererMessages.css">

</head>

<body>


  <?php

            require_once "cbd.php";
            session_start();
            if(isset($_SESSION["id-messageA"])){
              $id_Msg = $_SESSION["id-messageA"];
            }
            if(isset($_GET['id-messageA'])){
            $id_Msg = $_GET['id-messageA'];
            $_SESSION["id-messageA"] = $id_Msg;
            }
            $SelectMsg = "SELECT * FROM messages_pharmacien WHERE ID_MESSAGE = '$id_Msg'"; 
            $msgInfos= mysqli_query($conn,$SelectMsg);
            $msg = mysqli_fetch_array($msgInfos);



            $nom_profile = $_SESSION['profile'];
            if($nom_profile == "employe"){
                $location = "employe.php";
            }else{
                $location = "pharmacien.php";
            }

            if(isset($_POST['supprimer'])){

                $supprimer = "DELETE FROM messages_pharmacien WHERE ID_MESSAGE = '$id_Msg';"; 
                $supprimerMsg = mysqli_query($conn, $supprimer);
                header('location: '.$location);
            }
            
                        
            ?>



  <div class="container">
    <form action="gererMessages.php" method="post" enctype="multipart/form-data">
      <p class="title">
        <a href="gererMessages.php">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"
            stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-ccw">
            <polyline points="1 4 1 10 7 10"></polyline>
            <polyline points="23 20 23 14 17 14"></polyline>
            <path d="M20.49 9A9 9 0 0 0 5.64 5.64L1 10m22 4l-4.64 4.36A9 9 0 0 1 3.51 15"></path>
          </svg>
        </a>
        <span>Consulter Message</span>
        <a href="<?php echo $location; ?>">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"
            stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
            <line x1="5" y1="12" x2="19" y2="12"></line>
            <polyline points="12 5 19 12 12 19"></polyline>
          </svg>
        </a>
      </p>
      <div class="infos__spaceB">
        <span>Objet :</span>
        <input class="mini__input" type="text" name="nom" placeholder="Nom" value="<?php echo $msg['OBJET']; ?>" readonly>
      </div>
      <div class="infos__spaceB">
        <span>Email :</span>
        <input class="mini__input" type="text" name="prenom"
          value="<?php echo $msg['EMAIL']; ?>" readonly>
      </div>

        <p class="input__title">Message :</p>
        <textarea name="message" placeholder="Message :" readonly><?php echo $msg['MESSAGE']; ?></textarea><br>

        <input type="submit" name="supprimer" class="delete" value="Supprimer">
      <a href="pharmacien.php"><input type="button" value="Retour"></a><br>
      <img src="../images/gererMessagesO.png" alt="Categorie">
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

</body>

</html>