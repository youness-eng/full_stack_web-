<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pharmacie CHAABIA</title>
  <link rel="icon" type="image/png" href="../images/miniLogo.png">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/GererSousCat.css">
  <script src="https://kit.fontawesome.com/64d58efce2.js"></script>
</head>

<body>


  <?php

            require_once "cbd.php";
            session_start();
            if(isset($_SESSION["id-categorie"])){
              $id_cat = $_SESSION["id-categorie"];
            }
            if(isset($_GET['id-categorie'])){
            $id_cat = $_GET['id-categorie'];
            $_SESSION["id-categorie"] = $id_cat;
            }
            $SelectCat = "SELECT * FROM sous_categories WHERE ID_SCATEGORIE  = '$id_cat'"; 
            $catInfos= mysqli_query($conn,$SelectCat);
            $cat = mysqli_fetch_array($catInfos);

            $subject = $cat['IMAGE_SCATEGORIE']; ;
            $search = 'images/' ;
            $trimmed = str_replace($search, '', $subject) ;


            $nom_profile = $_SESSION['profile'];
            if($nom_profile == "employe"){
                $location = "employe.php";
            }else{
                $location = "pharmacien.php";
            }
            
                         

            if(isset($_POST['modifier'])){
                $nom = $_POST["nom"];
                $image = $_FILES["image"]["name"];

                $image = $_FILES["image"]["name"];  

                if($trimmed !== $image && trim($image) != "" ){
                  $image = "images/".$image;
                  $dst = "../".$image; 
                  move_uploaded_file($_FILES["image"]["tmp_name"],$dst); 
                }else{
                  $image = "images/".$trimmed;
                }


                $modifier = "UPDATE sous_categories  SET `NOM_SCATEGORIE` = '$nom', `IMAGE_SCATEGORIE` = '$image' WHERE `sous_categories`.`ID_SCATEGORIE` = '$id_cat' ;"; 
                $modifier_cat = mysqli_query($conn, $modifier);   
    
                }
            if(isset($_POST['supprimer'])){

                $supprimer = "DELETE FROM sous_categories WHERE ID_SCATEGORIE = '$id_cat';"; 
                $supprimerCat = mysqli_query($conn, $supprimer);
                header('location: '.$location);
            }
            ?>



  <div class="container">
    <form action="gerersousCat.php" method="post" enctype="multipart/form-data">
      <p class="title">
      <a href="gerersousCat.php">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-ccw"><polyline points="1 4 1 10 7 10"></polyline><polyline points="23 20 23 14 17 14"></polyline><path d="M20.49 9A9 9 0 0 0 5.64 5.64L1 10m22 4l-4.64 4.36A9 9 0 0 1 3.51 15"></path></svg>  
      </a>
      <span>Modifier Catégorie</span> 
      <a href="<?php echo $location; ?>">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
      </a>
    </p>
        <div class="infos__spaceB">
        <span>Nom :</span>
        <input class="mini__input" type="text" name="nom" placeholder="Nom"
          value="<?php echo $cat['NOM_SCATEGORIE']; ?>" > 
          </div>

          <div class="image">
        <span class="input__title">Image :</span>
        <label class="selectionner-image">
          <input type="file" name="image" id="input-image"placeholder="Image" onchange="copierLocation()" />
          Image
        </label>
        <span id="image-location"><?php echo $trimmed ;?></span><br>
      </div>
      <img class="image__S__cat" src="../<?php echo $cat['IMAGE_SCATEGORIE']; ?>" alt="">
      <input type="submit" name="supprimer" class="delete" value="Supprimer">
          <input type="submit" name="modifier" value="Modifier"><br>
      <img src="../images/editSousCat.png" alt="Categorie">
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