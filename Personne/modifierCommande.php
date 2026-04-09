<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pharmacie CHAABIA</title>
  <link rel="icon" type="image/png" href="../images/miniLogo.png">
  <link rel="stylesheet" href="../css/modifierCommande.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.js" defer></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" defer></script>
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
            $SelectCommande = "SELECT * FROM commandes WHERE ID_COMMANDE = '$id_commande'"; 
            $commandeInfos= mysqli_query($conn,$SelectCommande);
            $commande = mysqli_fetch_array($commandeInfos);
                                     

            if(isset($_POST['modifier'])){
                $qtt = $_POST["qtt"];
                $qttInitial = $_POST["qttInitial"];
                $idProduit = $_POST["idProduit"];
                echo "<p>" . $idProduit."</p>";


                if($qtt !== $qttInitial){
                  $id_commande = $commande['ID_COMMANDE'];
                  $modifier = "UPDATE concerner SET `QUANTITE_PRODUIT` = '$qtt' WHERE `ID_COMMANDE` = '$id_commande' AND ID_PRODUIT = '$idProduit';"; 
                  $modifier_Concerner = mysqli_query($conn, $modifier);   

                  $SelectCommmandeInfos = "SELECT * FROM concerner WHERE ID_COMMANDE = '$id_commande'"; 
                  $commandeTable= mysqli_query($conn,$SelectCommmandeInfos);
                  $total_price = 0;
                  $total_products = 0;

                   while($commandeLigne = mysqli_fetch_array($commandeTable)){
                    $id_produit = $commandeLigne['ID_PRODUIT'];
                    $SelectPoduct = "SELECT * FROM produits WHERE ID_PRODUIT = '$id_produit'"; 
                    $ProductInfos= mysqli_query($conn,$SelectPoduct);
                    $product= mysqli_fetch_array($ProductInfos);
                    $productPrice = (int)$product['PRIX'];
                    if($product['PRIX_PROMO'] != NULL){
                      $productPrice = (int)$product['PRIX_PROMO'];
                    }
                    $qttProduit = (int)$commandeLigne['QUANTITE_PRODUIT'];

                    $total_price += $productPrice * $qttProduit;
                    $total_products += $qttProduit;

                   }

                   $modifierMontant = "UPDATE commandes SET `MONTANT_TOTAL` = '$total_price', `QUANTITE_TOTALE` = '$total_products' WHERE `ID_COMMANDE` = '$id_commande';"; 
                   $modifier_Montant = mysqli_query($conn, $modifierMontant);   
                  

                }

                
    
                }



                if(isset($_POST['supprimer'])){
                $idProduit = $_POST["idProduit"];

                $supprimer = "DELETE FROM concerner WHERE `ID_COMMANDE` = '$id_commande' AND ID_PRODUIT = '$idProduit';"; 
                $supprimerCat = mysqli_query($conn, $supprimer);


                $SelectCommmandeInfos = "SELECT * FROM concerner WHERE ID_COMMANDE = '$id_commande'"; 
                  $commandeTable= mysqli_query($conn,$SelectCommmandeInfos);
                  $total_price = 0;
                  $total_products = 0;

                   while($commandeLigne = mysqli_fetch_array($commandeTable)){
                    $id_produit = $commandeLigne['ID_PRODUIT'];
                    $SelectPoduct = "SELECT * FROM produits WHERE ID_PRODUIT = '$id_produit'"; 
                    $ProductInfos= mysqli_query($conn,$SelectPoduct);
                    $product= mysqli_fetch_array($ProductInfos);
                    $productPrice = (int)$product['PRIX'];
                    if($product['PRIX_PROMO'] != NULL){
                      $productPrice = (int)$product['PRIX_PROMO'];
                    }
                    $qttProduit = (int)$commandeLigne['QUANTITE_PRODUIT'];

                    $total_price += $productPrice * $qttProduit;
                    $total_products += $qttProduit;

                   }


                   $modifierMontant = "UPDATE commandes SET `MONTANT_TOTAL` = '$total_price', `QUANTITE_TOTALE` = '$total_products' WHERE `ID_COMMANDE` = '$id_commande';"; 
                   $modifier_Montant = mysqli_query($conn, $modifierMontant); 




                header('location: modifierCommande.php');

            }

            if(isset($_POST['supprimerCommande'])){
              $supprimerConcerner = "DELETE FROM concerner WHERE `ID_COMMANDE` = '$id_commande';"; 
              $supprimerCon = mysqli_query($conn, $supprimerConcerner);
              $supprimerCommande = "DELETE FROM commandes WHERE `ID_COMMANDE` = '$id_commande';"; 
              $supprimerCom = mysqli_query($conn, $supprimerCommande);
              header('location: clientPatient.php');
            }

            ?>




  <div class="main">
    <div class="container a-container" id="a-container">
      <form class="form" id="a-form" method="POST">
        <h2 class="form_title title" onclick="location.href='modifierCommande.php'">Informations Techniques </h2>
        <div class="order__infos"><span>N° commande :</span><input class="form__input" type="text"
            value="<?php echo $commande['ID_COMMANDE'] ?>" placeholder="N° commande :" readonly></div>
        <div class="order__infos"><span>Quantité t. :</span><input class="form__input" type="text"
            value="<?php echo $commande['QUANTITE_TOTALE'] ?>" placeholder="Quantité :" readonly></div>
        <div class="order__infos"><span>Montant t. :</span><input class="form__input" type="text"
            value="<?php echo $commande['MONTANT_TOTAL'] ?> DH" placeholder="Montant :" readonly></div>
        <div class="order__infos"><span>Statut :</span><input class="form__input" type="text"
            value="<?php echo $commande['STATUT'] ?>" placeholder="Statut :" readonly></div>
        <div class="order__infos"><span>Date Statut :</span><input class="form__input" type="text"
            value="<?php echo $commande['DATE_STATUT'] ?>" placeholder="Date Statut :" readonly></div>
        <div class="order__infos"><span>Date Commande :</span><input class="form__input" type="text"
            value="<?php echo $commande['DATE_COMMMANDE'] ?>" placeholder="Statut :" readonly></div>
        <div class="buttons__div">
        <button class="switch__button button submit" type="button"
          onclick="location.href='clientPatient.php'">RETOUR</button>
        <button class="switch__button delete__button submit" type="submit" name="supprimerCommande">SUPPRIMER</button>
        </div>
      </form>
    </div>
      <div class="switch" id="switch-cnt">
        <div class="switch__circle"></div>
        <div class="switch__circle switch__circle--t"></div>
        <div class="switch__container" id="switch-c1">
          <h2 class="switch__title title">Vos produits</h2>
          <?php

            $SelectPrduit = "SELECT * FROM concerner WHERE ID_COMMANDE = '$id_commande'"; 
            $produitsInfos= mysqli_query($conn,$SelectPrduit);
            while($produits= mysqli_fetch_array($produitsInfos)){
            $id_produit = $produits['ID_PRODUIT'];
            $SelectPoduct = "SELECT * FROM produits WHERE ID_PRODUIT = '$id_produit'"; 
            $ProductInfos= mysqli_query($conn,$SelectPoduct);
            $product= mysqli_fetch_array($ProductInfos);

          ?>
             <form action="modifierCommande.php" method="post">
          <div class="product__infos"><span><?php echo $product['NOM']; ?></span>
            <div class="justify">
              <input name="qtt" class="form__input mini__input" type="text"
                value="<?php echo $produits['QUANTITE_PRODUIT']; ?>" placeholder="Quantité :">
              <input name="qttInitial" class="qtt" type="text"
                value="<?php echo $produits['QUANTITE_PRODUIT']; ?>">
              <input name="idProduit" class="qtt" type="text"
                value="<?php echo $produits['ID_PRODUIT']; ?>">
              <input class="src" type="text" value="../<?php echo $product['IMAGE']; ?>"><img class="product myImg"
                src="../<?php echo $product['IMAGE']; ?>" alt="Produit">
              <button class="button deleteBtn" type="submit" name="supprimer">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="feather feather-trash">
                  <polyline points="3 6 5 6 21 6"></polyline>
                  <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                </svg>
              </button>
              <button class="button editBtn" name="modifier" type="submit">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
              </button>
            </div>
          </div>
          </form>
          <?php
      }
      ?>
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

    document.querySelectorAll(".myImg").forEach((img) => {
      img.addEventListener("click", (event) => {
        modal.style.display = "block";
        var val = $(event.currentTarget)
          .closest(".product__infos")
          .find(".src")
          .val();
        modalImg.src = val;
      });
    });

    var span = document.getElementsByClassName("close")[0];

    span.onclick = function () {
      modal.style.display = "none";
    }
  </script>





</body>

</html>