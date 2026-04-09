<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pharmacie CHAABIA</title>
  <link rel="icon" type="image/png" href="../images/miniLogo.png">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/repondreAuO.css">

</head>

<body>


  <?php

            require_once "cbd.php";
            session_start();

            $id_utilisateur = $_SESSION['id'];


            if(isset($_SESSION["id-msg"])){
              $id_Msg = $_SESSION["id-msg"];
            }
            if(isset($_GET['id-msg'])){
            $id_Msg = $_GET['id-msg'];
            $_SESSION["id-msg"] = $id_Msg;
            }
            $SelectMsg = "SELECT * FROM messages_ordonnance WHERE ID_MSG = '$id_Msg'"; 
            $msgInfos= mysqli_query($conn,$SelectMsg);
            $msg = mysqli_fetch_array($msgInfos);
            $id_user = $msg['ID_UTILISATEUR'];

            $SelectUser = "SELECT * FROM utilisateurs WHERE ID_UTILISATEUR = '$id_user'"; 
            $userInfos= mysqli_query($conn,$SelectUser);
            $user = mysqli_fetch_array($userInfos);
            $userId = $user['ID_UTILISATEUR'];

                                     

            if(isset($_POST['envoyer'])){
                $msg =  mysqli_real_escape_string($conn, $_POST["message"]);
                $image = $_FILES["image"]["name"];  

                if(trim($image) != "" ){
                    $image = "images/messages/".$image;
                    $dst = "../".$image; 
                    move_uploaded_file($_FILES["image"]["tmp_name"],$dst); 
                  }else{
                    $image = "NULL";
                  }

                  $inserer = "INSERT INTO messages_ordonnance (ID_UTILISATEUR, ID_DESTINATAIRE, MESSAGE, ORDONNANCE, STATUT) VALUES ('$id_utilisateur', '$id_user', '$msg', '$image', NULL);"; 
                  $inserer_message= mysqli_query($conn, $inserer);  
                  } 
            ?>



  <div class="container">
    <form action="repondreOrdonnace.php" method="post" enctype="multipart/form-data">
      <p class="title">
        <a href="repondreOrdonnace.php">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"
            stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-ccw">
            <polyline points="1 4 1 10 7 10"></polyline>
            <polyline points="23 20 23 14 17 14"></polyline>
            <path d="M20.49 9A9 9 0 0 0 5.64 5.64L1 10m22 4l-4.64 4.36A9 9 0 0 1 3.51 15"></path>
          </svg>
        </a>
        <span>Répondre au message</span>
        <a href="gererOrdonnace.php">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"
            stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
            <line x1="5" y1="12" x2="19" y2="12"></line>
            <polyline points="12 5 19 12 12 19"></polyline>
          </svg>
        </a>
      </p>
      <div class="infos__spaceB">
        <span>À :</span>
        <input class="mini__input" type="text" name="nom" placeholder="Nom" value="<?php echo $user['NOM']; ?> <?php echo $user['PRENOM']; ?>" readonly>
      </div>
        <p class="input__title">Message :</p>
        <textarea name="message" placeholder="Votre Message :"></textarea><br>

        <div class="image">
        <span class="input__title">Image :</span>
        <label class="selectionner-image">
          <input type="file" name="image" id="input-image"placeholder="Image" onchange="copierLocation()" />
          Image
        </label>
        <span id="image-location">Image</span><br>
      </div>


 
      <input type="submit" name="envoyer" value="Envoyer"><br>
      <img src="../images/MessagesOrdonnance.svg" alt="Categorie">
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
    //fonction pour copier la nom du fichier sur la machine de l'utilisateur

    function copierLocation() {
      var inputImage = document.getElementById("input-image");
      var imageLocation = document.getElementById("image-location");
      if (inputImage.value) {
        imageLocation.innerHTML = inputImage.value.match(
          /[\/\\]([\w\d\s\.\-\(\)]+)$/
        )[1];
      } else {
        imageLocation.innerHTML = "Sélectionnez image";
      }
    };
    var input = document.getElementById("input-image");
    input.onclick = copierLocation;
  </script>


</body>

</html>