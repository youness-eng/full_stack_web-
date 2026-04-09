<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacie CHAABIA</title>
    <link rel="icon" type="image/png" href="../images/miniLogo.png">
    <link rel="stylesheet" href="../css/categorie.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js" defer></script>
    <script src="../js/categorie.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <header>
        <div class="logo">
            <a href="../index.php"><img id="logo" src="../images/logo du site web.png" alt="Logo"></a>
        </div>
        <a class="icone-quitter"><i class="fa fa-long-arrow-right" id="quitter"
                onclick="window.history.go(-1); return false;"></i></a>

    </header>

    <?php
        if(isset($_GET["id-categorie"]) && !empty(trim($_GET["id-categorie"]))){
            require_once "cbd.php";

            $id = trim($_GET["id-categorie"]);
            $Cat = "SELECT * FROM categories WHERE ID_CATEGORIE = '$id'";
            $CatTable= mysqli_query($conn,$Cat);
            $CatLigne = mysqli_fetch_array($CatTable);
            $nomCat = $CatLigne['NOM_CATEGORIE'];

            $SousCat = "SELECT * FROM sous_categories WHERE ID_CATEGORIE = '$id'";
            $sousCatTable= mysqli_query($conn,$SousCat);
            $sousCatLigne = mysqli_fetch_array($sousCatTable);
            $id_sous_cat = $sousCatLigne['ID_SCATEGORIE'];
            $nom_sous_cat = $sousCatLigne['NOM_SCATEGORIE'];
            
            $sousSousCat = "SELECT * FROM sous_sous_categories WHERE ID_SCATEGORIE = '$id_sous_cat'";
            $sousSousCatTable= mysqli_query($conn,$sousSousCat);  
            $sousSousCatLigne = mysqli_fetch_array($sousSousCatTable);       
            $id_sous_sous_cat = $sousSousCatLigne['ID_SSCATEGORIE'];
            $nom_sous_sous_cat = $sousSousCatLigne['NOM_SSCATEGORIE'];
       
          
            if($nom_sous_sous_cat != $nom_sous_cat && $nom_sous_sous_cat != $nomCat && $nom_sous_cat != $nomCat){
            
    ?>

<h1 class="h1"><?php echo $nomCat; ?></h1>
<h4 class="h4">Sélectionner par sous catégories ou sous sous catégories</h4>

<div class="filters">

  <h3 class="h3">Sous catégories</h3>
  <div class="ui-group">
    <div class="button-group js-radio-button-group" data-filter-group="maincat">
      <button class="button is-checked" data-filter="">Tous</button>
      <?php
      mysqli_data_seek($sousCatTable, 0);
      while($sousCatLigne2 = mysqli_fetch_array($sousCatTable))
      {
      ?>
      <button class="button" data-filter=".<?php echo $sousCatLigne2['NOM_SCATEGORIE']; ?>"><?php echo $sousCatLigne2['NOM_SCATEGORIE']; ?></button>
      <?php
      }
      ?>
    </div>
  </div>

 <h3 class="h3">Sous sous catégories</h3>
  <div class="ui-group">
    <div class="button-group js-radio-button-group" data-filter-group="subject">
      <button class="button is-checked" data-filter="">Tous</button>
      <?php
      mysqli_data_seek($sousSousCatTable, 0);
      while($sousSousCatLigne2 = mysqli_fetch_array($sousSousCatTable))
      {
      ?>
      <button class="button" data-filter=".<?php echo $sousSousCatLigne2['NOM_SSCATEGORIE']; ?>"><?php echo $sousSousCatLigne2['NOM_SSCATEGORIE']; ?></button>

      <?php
      }
      ?>
    </div>
  </div>



</div>

<div class="grid">
      <?php
      mysqli_data_seek($sousCatTable, 0);
      while($sousCatLigne2 = mysqli_fetch_array($sousCatTable))
      {
      $id_sous_cat = $sousCatLigne2['ID_SCATEGORIE'];
      $nom_sous_cat = $sousCatLigne2['NOM_SCATEGORIE'];
      $sousSousCat2 = "SELECT * FROM sous_sous_categories WHERE ID_SCATEGORIE = '$id_sous_cat'";
      $sousSousCatTable= mysqli_query($conn,$sousSousCat2);  
      $sousSousCatLigne3 = mysqli_fetch_array($sousSousCatTable); 
        
      mysqli_data_seek($sousSousCatTable, 0);
      while($sousSousCatLigne3 = mysqli_fetch_array($sousSousCatTable))
      {
      $id_sous_sous_cat = $sousSousCatLigne3['ID_SSCATEGORIE'];
      $nom_sous_sous_cat = $sousSousCatLigne3['NOM_SSCATEGORIE'];
      $produits = "SELECT * FROM produits WHERE ID_SSCATEGORIE = '$id_sous_sous_cat'";
      $produitTable= mysqli_query($conn,$produits);
      while($produit = mysqli_fetch_array($produitTable))
      {
        $id_marque_recherche = $produit['ID_MARQUE'];
        $SelectionnerMarque = "SELECT * FROM marques WHERE ID_MARQUE = '$id_marque_recherche' ;";
        $runQuery = mysqli_query($conn, $SelectionnerMarque);
        $row = mysqli_fetch_array($runQuery);  
      ?>
  
  <a href="detailsProduits.php?id-produit=<?php echo $produit['ID_PRODUIT']; ?>"><div class="element-item <?php echo $nom_sous_cat ; ?> <?php echo $nom_sous_sous_cat; ?> ">
    <p class="logo"><img src="../<?php echo $produit['IMAGE']; ?>" alt=""></p>
    <h3 class="name"><?php echo $produit['NOM']; ?> </h3>
    <p class="subtitle"><?php echo $row['NOM_MARQUE']; ?> .</p>
  </div></a>
  
  <?php 
              }
            }
          } 

          ?>

          </div>
          
          <?php
       
      }elseif($nom_sous_sous_cat == $nom_sous_cat && $nom_sous_sous_cat != $nomCat && $nom_sous_cat != $nomCat){

        ?>
        <div class="filters">

              <h3 class="h3">Sous catégories</h3>
              <div class="ui-group">
                <div class="button-group js-radio-button-group" data-filter-group="maincat">
                  <button class="button is-checked" data-filter="">Tous</button>
                  <?php
                  mysqli_data_seek($sousCatTable, 0);
                  while($sousCatLigne2 = mysqli_fetch_array($sousCatTable))
                  {
                  ?>
                  <button class="button" data-filter=".<?php echo $sousCatLigne2['NOM_SCATEGORIE']; ?>"><?php echo $sousCatLigne2['NOM_SCATEGORIE']; ?></button>
                  <?php
                  }
                  ?>
                </div>
              </div>

              </div>


        <div class="grid">
              <?php
              mysqli_data_seek($sousCatTable, 0);
              while($sousCatLigne2 = mysqli_fetch_array($sousCatTable))
              {
              $id_sous_cat = $sousCatLigne2['ID_SCATEGORIE'];
              $nom_sous_cat = $sousCatLigne2['NOM_SCATEGORIE'];
              $sousSousCat2 = "SELECT * FROM sous_sous_categories WHERE ID_SCATEGORIE = '$id_sous_cat'";
              $sousSousCatTable= mysqli_query($conn,$sousSousCat2);  
              $sousSousCatLigne3 = mysqli_fetch_array($sousSousCatTable); 
                
              mysqli_data_seek($sousSousCatTable, 0);
              while($sousSousCatLigne3 = mysqli_fetch_array($sousSousCatTable))
              {
              $id_sous_sous_cat = $sousSousCatLigne3['ID_SSCATEGORIE'];
              $nom_sous_sous_cat = $sousSousCatLigne3['NOM_SSCATEGORIE'];
              $produits = "SELECT * FROM produits WHERE ID_SSCATEGORIE = '$id_sous_sous_cat'";
              $produitTable= mysqli_query($conn,$produits);
              while($produit = mysqli_fetch_array($produitTable))
              {
                $id_marque_recherche = $produit['ID_MARQUE'];
                $SelectionnerMarque = "SELECT * FROM marques WHERE ID_MARQUE = '$id_marque_recherche' ;";
                $runQuery = mysqli_query($conn, $SelectionnerMarque);
                $row = mysqli_fetch_array($runQuery);  
              ?>
          
          <a href="detailsProduits.php?id-produit=<?php echo $produit['ID_PRODUIT']; ?>"><div class="element-item <?php echo $nom_sous_cat ; ?> ">
            <p class="logo"><img src="../<?php echo $produit['IMAGE']; ?>" alt=""></p>
            <h3 class="name"><?php echo $produit['NOM']; ?> </h3>
            <p class="subtitle"><?php echo $row['NOM_MARQUE']; ?> .</p>
          </div></a>
          
  <?php 
              }
            }
          } 

          ?>

          </div>


        <?php

       }else{
         ?>

<div class="grid">
              <?php
              mysqli_data_seek($sousCatTable, 0);
              while($sousCatLigne2 = mysqli_fetch_array($sousCatTable))
              {
              $id_sous_cat = $sousCatLigne2['ID_SCATEGORIE'];
              $nom_sous_cat = $sousCatLigne2['NOM_SCATEGORIE'];
              $sousSousCat2 = "SELECT * FROM sous_sous_categories WHERE ID_SCATEGORIE = '$id_sous_cat'";
              $sousSousCatTable= mysqli_query($conn,$sousSousCat2);  
              $sousSousCatLigne3 = mysqli_fetch_array($sousSousCatTable); 
                
              mysqli_data_seek($sousSousCatTable, 0);
              while($sousSousCatLigne3 = mysqli_fetch_array($sousSousCatTable))
              {
              $id_sous_sous_cat = $sousSousCatLigne3['ID_SSCATEGORIE'];
              $nom_sous_sous_cat = $sousSousCatLigne3['NOM_SSCATEGORIE'];
              $produits = "SELECT * FROM produits WHERE ID_SSCATEGORIE = '$id_sous_sous_cat'";
              $produitTable= mysqli_query($conn,$produits);
              while($produit = mysqli_fetch_array($produitTable))
              {
                $id_marque_recherche = $produit['ID_MARQUE'];
                $SelectionnerMarque = "SELECT * FROM marques WHERE ID_MARQUE = '$id_marque_recherche' ;";
                $runQuery = mysqli_query($conn, $SelectionnerMarque);
                $row = mysqli_fetch_array($runQuery);  
              ?>
          
          <a href="detailsProduits.php?id-produit=<?php echo $produit['ID_PRODUIT']; ?>"><div class="element-item">
            <p class="logo"><img src="../<?php echo $produit['IMAGE']; ?>" alt=""></p>
            <h3 class="name"><?php echo $produit['NOM']; ?> </h3>
            <p class="subtitle"><?php echo $row['NOM_MARQUE']; ?> .</p>
          </div></a>
          
  <?php 
              }
            }
          } 

          ?>

        <?php
         
       }
    }
  ?>
  


</body>

</html>