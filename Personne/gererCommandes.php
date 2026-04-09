<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pharmacie CHAABIA</title>
  <link rel="icon" type="image/png" href="../images/miniLogo.png">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/gererCommandes.css">
  <script src="https://kit.fontawesome.com/64d58efce2.js"></script>
</head>

<body>


  <?php

            require_once "cbd.php";
            session_start();
            if(isset($_SESSION["id-commande"])){
              $id_commande = $_SESSION["id-commande"];
            }
            if(isset($_GET['id-commande'])){
            $id_commande = $_GET['id-commande'];
            $_SESSION["id-commande"] = $id_commande;
            }
            $SelectOrder = "SELECT * FROM commandes WHERE ID_COMMANDE = '$id_commande'"; 
            $orderInfos= mysqli_query($conn,$SelectOrder);
            $order = mysqli_fetch_array($orderInfos);

            $id_utilisateur = $order['ID_UTILISATEUR'];
            $SelectUser = "SELECT * FROM utilisateurs WHERE ID_UTILISATEUR = '$id_utilisateur'"; 
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
                if($status != $order['STATUT']){
                $modifier = "UPDATE commandes  SET `STATUT` = '$status',`DATE_STATUT` = NOW() WHERE `commandes`.`ID_COMMANDE` = '$id_commande' ;"; 
                $modifier_compte = mysqli_query($conn, $modifier);   
                }
                }
            if(isset($_POST['supprimer'])){

                $supprimerConcerner = "DELETE FROM concerner WHERE ID_COMMANDE = '$id_commande';"; 
                $supprimerC = mysqli_query($conn, $supprimerConcerner);
                $supprimer = "DELETE FROM commandes WHERE ID_COMMANDE = '$id_commande';"; 
                $supprimerCommande = mysqli_query($conn, $supprimer);
                header('location: '.$location);
            }
            ?>



  <div class="container">
    <form action="gererCommandes.php" method="post" enctype="multipart/form-data">
      <p class="title">
      <a href="gererCommandes.php">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-ccw"><polyline points="1 4 1 10 7 10"></polyline><polyline points="23 20 23 14 17 14"></polyline><path d="M20.49 9A9 9 0 0 0 5.64 5.64L1 10m22 4l-4.64 4.36A9 9 0 0 1 3.51 15"></path></svg>  
      </a>
      <span>Modifier Commande</span> 
      <a href="<?php echo $location; ?>">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
      </a>
    </p>
        <div class="infos__spaceB">
        <span>Nom :</span>
        <input class="mini__input" type="text" name="nom" placeholder="Nom"
          value="<?php echo $user['NOM']; ?>" readonly>
          <span class="margin-left">D. commande :</span>
        <input class="priceInput" type="text" name="dateStatus" placeholder="Email"
          value="<?php echo $order['DATE_COMMMANDE']; ?>"readonly>
          </div>
        <div class="infos__spaceB">
        <span>Prénom :</span>
        <input class="mini__input" type="text" name="prenom" placeholder="Prénom"
          value="<?php echo $user['PRENOM']; ?>"readonly>
          <span>D. status :</span>
        <input class="priceInput" type="text" name="dateStatus" placeholder="Email"
          value="<?php echo $order['DATE_STATUT']; ?>"readonly>
          </div>
        <div class="infos__spaceB">
        <span >Quantité t. :</span>
        <input class="mini__input" type="text" name="qtt" placeholder="Quantité total"
          value="<?php echo $order['QUANTITE_TOTALE']; ?>"readonly>
          <span class="margin-left">Status :</span>
          <select name="status">
          <option value="<?php echo $order['STATUT'] ?>"><?php echo $order['STATUT'] ?></option>
          <?php 
              if($order['STATUT'] == "en-cours"){
                  $option2 = "preparer";
                  $option3 = "effectuer";
              }elseif ($order['STATUT'] == "preparer") {
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
          </div>
        <div class="infos__spaceB">
        <span>Montant t. :</span>
        <input class="mini__input" type="text" name="montant" placeholder="Montant"
          value="<?php echo $order['MONTANT_TOTAL']; ?> DH" readonly>
          <span class="margin-left">Produits :</span>
          <select name="produits">
          <?php 
            $SelectProducts = "SELECT * FROM concerner WHERE ID_COMMANDE = '$id_commande'"; 
            $ProductsInfos= mysqli_query($conn,$SelectProducts);
            while($products = mysqli_fetch_array($ProductsInfos)){
            $id_product = $products['ID_PRODUIT'];
            $SelectProduct = "SELECT * FROM produits WHERE ID_PRODUIT = '$id_product'"; 
            $ProductInfos= mysqli_query($conn,$SelectProduct);
            $product = mysqli_fetch_array($ProductInfos);
            echo $SelectProduct;
              ?>
          <option><?php echo $product['NOM']; ?></option>
            <?php
            }
            ?>
        </select>
          </div>
          <input type="submit" name="supprimer" class="delete" value="Supprimer">
          <input type="submit" name="modifier" value="Modifier"><br>
      <img src="../images/manageOrders.png" alt="Produit">
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