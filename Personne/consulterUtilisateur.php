<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pharmacie CHAABIA</title>
  <link rel="icon" type="image/png" href="../images/miniLogo.png">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/consulterUtilisateur.css">
  <script src="https://kit.fontawesome.com/64d58efce2.js"></script>
</head>

<body>


  <?php

            require_once "cbd.php";
            session_start();
            if(isset($_SESSION["id-utilisateur"])){
              $id_utilisateur = $_SESSION["id-utilisateur"];
            }
            if(isset($_GET['id-utilisateur'])){
            $id_utilisateur = $_GET['id-utilisateur'];
            $_SESSION["id-utilisateur"] = $id_utilisateur;
            }
            $SelectUser = "SELECT * FROM utilisateurs WHERE ID_UTILISATEUR = '$id_utilisateur'"; 
            $userInfos= mysqli_query($conn,$SelectUser);
            $user = mysqli_fetch_array($userInfos);

            $id_profil = $user['ID_PROFIL'];
            $SelectProfil = "SELECT * FROM profils WHERE ID_PROFIL = '$id_profil'"; 
            $profilInfos= mysqli_query($conn,$SelectProfil);
            $profil = mysqli_fetch_array($profilInfos);
            
            ?>



  <div class="container">
    <form action="consulterUtilisateur.php" method="post" enctype="multipart/form-data">
      <p class="title">
      <a href="consulterUtilisateur.php">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-ccw"><polyline points="1 4 1 10 7 10"></polyline><polyline points="23 20 23 14 17 14"></polyline><path d="M20.49 9A9 9 0 0 0 5.64 5.64L1 10m22 4l-4.64 4.36A9 9 0 0 1 3.51 15"></path></svg>  
      </a>
      <span>Consulter Utilisateur</span> 
      <a href="pharmacien.php">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
      </a>
    </p>
        <div class="infos__spaceB">
        <span>Nom :</span>
        <input class="mini__input" type="text" name="nom" placeholder="Nom"
          value="<?php echo $user['NOM']; ?>">
        <span class="margin-left">Prénom :</span>
        <input class="mini__input" type="text" name="prenom" placeholder="Prénom"
          value="<?php echo $user['PRENOM']; ?>">
          </div>
        <div class="infos__spaceB">
        <span>N° télé. :</span>
        <input class="mini__input" type="text" name="tele" placeholder="N° téléphone"
          value="<?php echo $user['TELEPHONE']; ?>">
          <span class="margin-left">Profil :</span>
        <input class="mini__input" type="text" name="date" placeholder="Profil" value="<?php echo $profil['NOM_PROFILE']; ?>">
          </div>
          <div class="infos__spaceB"> 
          <span>Email :</span>
        <input class="priceInput" type="text" name="email" placeholder="Email"
          value="<?php echo $user['EMAIL']; ?>">
          </div>
        <div class="infos__spaceB">
        <span>Inscrit le:</span>
        <input class="priceInput" type="text" name="date" placeholder="D. d'inscription"
          value="<?php echo $user['DATE_INSCRIPTION']; ?>">
          </div>
      <img src="../images/viewProfil.png" alt="Utilisateur">
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

</body>

</html>