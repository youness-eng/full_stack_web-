<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pharmacie CHAABIA</title>
  <link rel="icon" type="image/png" href="../images/miniLogo.png">
  <link rel="stylesheet" href="../css/consulterC.css">
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
                                     
            ?>




  <div class="main">
    <div class="container a-container" id="a-container">
      <form class="form" id="a-form">
        <h2 class="form_title title">Informations Techniques </h2>
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
        <button class="switch__button button submit" type="button"
          onclick="location.href='clientPatient.php'">RETOUR</button>
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

        <div class="product__infos"><span><?php echo $product['NOM']; ?></span>
          <div class="justify"><input class="form__input mini__input" type="text"
              value="<?php echo $produits['QUANTITE_PRODUIT'] ?>" placeholder="Quantité :" readonly>
            <input class="src" type="text" value="../<?php echo $product['IMAGE']; ?>">
            <img class="product myImg" src="../<?php echo $product['IMAGE']; ?>" alt="Produit">
          </div>
        </div>
        <?php
      }
      ?>
        <button class="switch__button button switch-btn" type="button"
          onclick="location.href='modifierCommande.php'">MODIFIER</button>
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