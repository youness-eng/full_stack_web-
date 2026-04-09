<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pharmacie CHAABIA</title>
  <link rel="icon" type="image/png" href="../images/miniLogo.png">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/gererProduit.css">
  <script src="https://kit.fontawesome.com/64d58efce2.js"></script>
</head>

<body>


  <?php

            require_once "cbd.php";
            session_start();
            if(isset($_SESSION["id-produit"])){
              $id_produit = $_SESSION["id-produit"];
            }
            if(isset($_GET['id-produit'])){
            $id_produit = $_GET['id-produit'];
            $_SESSION["id-produit"] = $id_produit;
            }
            $SelectProduit = "SELECT * FROM produits WHERE ID_PRODUIT  = '$id_produit'"; 
            $produitInfos= mysqli_query($conn,$SelectProduit);
            $produit = mysqli_fetch_array($produitInfos);

            $id_marque = $produit['ID_MARQUE'];
            $SelectMarque= "SELECT * FROM marques WHERE ID_MARQUE  = '$id_marque'"; 
            $MarqueInfos= mysqli_query($conn,$SelectMarque);
            $marque = mysqli_fetch_array($MarqueInfos);

            $id_categorie = $produit['ID_SSCATEGORIE'];
            $SelectCategorie= "SELECT * FROM sous_sous_categories WHERE ID_SSCATEGORIE = '$id_categorie'"; 
            $catInfos= mysqli_query($conn,$SelectCategorie);
            $cat = mysqli_fetch_array($catInfos);

            if(!isset($_POST["prix-promos"]) || trim($_POST["prix-promos"]) == "" || $_POST["prix-promos"] == 0)
            {
              $prixPromos = "NULL";
            }else{
              $prixPromos = $_POST["prix-promos"];
            }
            if(!isset($_POST["indications"]) || trim($_POST["indications"]) == "")
            {
              $indications = "NULL";
            }else{
              $indications = mysqli_real_escape_string($conn, $_POST["indications"]);
            }
            if(!isset($_POST["contre-indications"]) || trim($_POST["contre-indications"]) == '')
            {
              $contreIndications = "NULL";
            }else{
              $contreIndications = mysqli_real_escape_string($conn, $_POST["contre-indications"]);
            }
            if(!isset($_POST["effets-secondaires"]) || trim($_POST["effets-secondaires"]) == "")
            {
              $effetsSecondaires = "NULL";
            }else{
              $effetsSecondaires = mysqli_real_escape_string($conn, $_POST["effets-secondaires"]);
            }
            if(!isset($_POST["informations-supplemantaires"]) || trim($_POST["informations-supplemantaires"]) == "")
            {
              $infomationsSupplemantaires = "NULL";
            }else{
              $infomationsSupplemantaires = mysqli_real_escape_string($conn, $_POST["informations-supplemantaires"]);
            }


            $subject = $produit['IMAGE']; ;
            $search = 'images/Produits/' ;
            $trimmed = str_replace($search, '', $subject) ;

            $nom_profile = $_SESSION['profile'];
            if($nom_profile == "employe"){
                $location = "employe.php";
            }else{
                $location = "pharmacien.php";
            }

            

            if(isset($_POST['modifier'])){
                $nom = $_POST["nom"];
                $prix = $_POST["prix"];               
                $quantite = $_POST["quantite"];
                $codebBarre = $_POST["code-barre"];
                $marqueId = $_POST["marque"];
                $categorie = $_POST["categorie"];
                $description = mysqli_real_escape_string($conn, $_POST["description"]);

                 $image = $_FILES["image"]["name"];  

                if($trimmed !== $image && trim($image) != "" ){
                  $image = "images/Produits/".$image;
                  $dst = "../".$image; 
                  move_uploaded_file($_FILES["image"]["tmp_name"],$dst); 
                }else{
                  $image = "images/Produits/".$trimmed;
                }
                $modifier = "UPDATE produits  SET `CODE_BARRES` = '$codebBarre',`ID_SSCATEGORIE` = '$categorie', `ID_MARQUE` = '$marqueId', `NOM` = '$nom', `IMAGE` = '$image', `PRIX` = '$prix', `PRIX_PROMO` = '$prixPromos', `DESCRIPTION` = '$description', `INDICATIONS` = '$indications', `CONTRE_INDICATIONS` = '$contreIndications', `EFFETS_SECONDAIRES` = '$effetsSecondaires', `INFORMATIONS_SUPPLEMENTAIRES` = '$infomationsSupplemantaires', `QUANTITE` = '$quantite'  WHERE `produits`.`ID_PRODUIT` = '$id_produit' ;"; 
                $modifier_compte = mysqli_query($conn, $modifier);
                }
                if(isset($_POST['supprimer'])){
                  $supprimer = "DELETE FROM produits WHERE ID_PRODUIT = '$id_produit';"; 
                  $supprimerProduit = mysqli_query($conn, $supprimer);
                header('location: pharmacien.php');
                }
            
            ?>



  <div class="container">
    <form action="gererProduit.php" method="post" enctype="multipart/form-data">
      <p class="title">
      <a href="gererProduit.php">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-ccw"><polyline points="1 4 1 10 7 10"></polyline><polyline points="23 20 23 14 17 14"></polyline><path d="M20.49 9A9 9 0 0 0 5.64 5.64L1 10m22 4l-4.64 4.36A9 9 0 0 1 3.51 15"></path></svg>  
      </a>
      <span>Modifier Produit</span> 
      <a href="<?php echo $location; ?>">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
      </a>
    </p>
      <div class="infos__spaceB">
        <span>Nom :</span>
        <input class="priceInput" type="text" name="nom" placeholder="Nom Produit"
          value="<?php echo $produit['NOM']; ?>">
        <span class="margin-left">Prix :</span><input name="prix" type="text" class="mini-input"
          placeholder="Prix Produit" value="<?php echo $produit['PRIX']; ?> DH"><span class="margin-left">Prix-Promo
          :</span><input class="mini-input" type="text" name="prix-promos" placeholder="Promo"
          value="<?php echo $produit['PRIX_PROMO'];?>">
        <span class="margin-left">Quantité :</span><input name="quantite" type="text" class="mini-input"
          placeholder="Quantité" value="<?php echo $produit['QUANTITE']; ?>">
      </div>
      <div class="infos__spaceB">
        <span>Code B. :</span><input name="code-barre" type="text" class="priceInput" placeholder="Code barres"
          value="<?php echo $produit['CODE_BARRES']; ?>"><span class="margin-left">Marque :</span>
        <select name="marque">
          <option value="<?php echo $marque['ID_MARQUE'] ?>"><?php echo $marque['NOM_MARQUE'] ?></option>
          <?php 
              $SelectBrands= "SELECT * FROM marques WHERE NOT ID_MARQUE = '$id_marque'"; 
              $BrandsInfos= mysqli_query($conn,$SelectBrands);
              while($brand = mysqli_fetch_array($BrandsInfos)){
              ?>
          <option value="<?php echo $brand['ID_MARQUE'] ?>"><?php echo $brand['NOM_MARQUE'] ?></option>
          <?php 
              }
              ?>
        </select>
        <span class="margin-left">Catégorie :</span>
        <select name="categorie">
          <option value="<?php echo $cat['ID_SSCATEGORIE'] ?>"><?php echo $cat['NOM_SSCATEGORIE'] ?></option>
          <?php 
              $SelectCategory= "SELECT * FROM sous_sous_categories WHERE NOT ID_SSCATEGORIE = '$id_categorie'"; 
              $categoryInfos= mysqli_query($conn,$SelectCategory);
              while($category = mysqli_fetch_array($categoryInfos)){
              ?>
          <option value="<?php echo $category['ID_SSCATEGORIE'] ?>"><?php echo $category['NOM_SSCATEGORIE'] ?></option>
          <?php 
              }
              ?>
        </select>
      </div>
      <p class="input__title">Description :</p>
      <textarea name="description"
        placeholder="Description :"><?php if( $produit['DESCRIPTION'] !== "NULL"){ echo $produit['DESCRIPTION'];} ?></textarea>

      <p class="input__title">Indications :</p>
      <textarea name="indications"
        placeholder="Indications :"><?php if( $produit['INDICATIONS'] !== "NULL"){ echo $produit['INDICATIONS'];} ?></textarea>

      <p class="input__title">Contre indications :</p>
      <textarea name="contre-indications"
        placeholder="Contre indications :"><?php if( $produit['CONTRE_INDICATIONS'] !== "NULL"){ echo $produit['CONTRE_INDICATIONS'];} ?></textarea>

      <p class="input__title">Effets secondaire :</p>
      <textarea name="effets-secondaires"
        placeholder="Effets secondaire :"><?php if( $produit['EFFETS_SECONDAIRES'] !== "NULL"){ echo $produit['EFFETS_SECONDAIRES'];} ?></textarea>

      <p class="input__title">Informations supplémentaires :</p>
      <textarea name="informations-supplemantaires"
        placeholder="Informations supplémentaires :"><?php if( $produit['INFORMATIONS_SUPPLEMENTAIRES'] !== "NULL"){ echo $produit['INFORMATIONS_SUPPLEMENTAIRES'];} ?></textarea>

      <div class="image">
        <span class="input__title">Image :</span>
        <label class="selectionner-image">
          <input type="file" name="image" id="input-image" onchange="copierLocation()" />
          Image
        </label>
        <span id="image-location"><?php echo $trimmed ;?></span><br>
      </div>
      <input type="submit" name="supprimer" class="delete" value="Supprimer"><input type="submit" name="modifier"
        value="Modifier"><br>
      <img src="../<?php  echo $produit['IMAGE']; ?>" alt="Produit">
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