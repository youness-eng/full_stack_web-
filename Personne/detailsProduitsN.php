<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pharmacie CHAABIA</title>
	<link rel="icon" type="image/png" href="../images/miniLogo.png">
	<link rel="stylesheet" href="../css/detailsPN.css">
	<script src="https://code.jquery.com/jquery-3.6.0.js" defer></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" defer></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
	<header>
		<div class="logo">
			<a href="clientPatient.php"><img id="logo" src="../images/logoNoir.png" alt="Logo"></a>
		</div>
		<a class="icone-quitter"><i class="fa fa-long-arrow-right" id="quitter"
				onclick="window.history.go(-1); return false;"></i></a>

	</header>

	<?php
        if(isset($_GET["id-produit"]) && !empty(trim($_GET["id-produit"]))){
            require_once "cbd.php";

            $id = trim($_GET["id-produit"]);
            $sql = "SELECT * FROM produits WHERE ID_PRODUIT = '$id'";
            $produits = mysqli_query($conn,$sql);
            $produit = mysqli_fetch_array($produits);
            
			$id_marque_recherche = $produit['ID_MARQUE'];
			$SelectionnerMarque = "SELECT * FROM marques WHERE ID_MARQUE = '$id_marque_recherche' ;";
			$runQuery = mysqli_query($conn, $SelectionnerMarque);
			$row = mysqli_fetch_array($runQuery);
            
    ?>

	<section class="product">
		<div class="product__photo">
			<div class="photo-container">
				<div class="photo-main">
					<img src="../<?php echo  $produit["IMAGE"]; ?>"
						alt="green apple slice">
				</div>
			</div>
		</div>
		<div class="product__info">
			<div class="title">
				<h1><?php echo  $produit["NOM"]; ?></h1>
				<span><?php echo  $produit["CODE_BARRES"]; ?></span><span id="brand"><?php echo  $row["NOM_MARQUE"]; ?></span>
			</div>
			<div class="price">
				<?php 
				if($produit["PRIX_PROMO"] != NULL){
				?>
				<span id="promo"><?php echo  $produit["PRIX_PROMO"]; ?> DH</span><span id="prix"><?php echo  $produit["PRIX"]; ?> DH</span> 
				<?php 
				}else{
				?>
				<span id="promo"><?php echo  $produit["PRIX"]; ?></span> DH  
				<?php 
				}
				?>
			</div>
			<div class="variant">
				<h3>DESCRIPTION</h3>
				<p><?php echo  $produit["DESCRIPTION"]; ?></p>
			</div>
			<?php 
				if($produit["INDICATIONS"] != NULL){
			?>
			<div class="info">
				<h3>INDICATIONS</h3>
				<p><?php echo  $produit["INDICATIONS"]; ?></p>
			</div>
			<?php 
				}
				if($produit["CONTRE_INDICATIONS"] != NULL){
			?>
			<div class="info">
				<h3>CONTRE INDICATIONS</h3>
				<p><?php echo  $produit["CONTRE_INDICATIONS"]; ?></p>
			</div>
			<?php 
				}
				if($produit["EFFETS_SECONDAIRES"] != NULL){
			?>
			<div class="info">
				<h3>EFFETS SECONDAIRES</h3>
				<p><?php echo  $produit["EFFETS_SECONDAIRES"]; ?></p>
			</div>
			<?php 
				}
				if($produit["INFORMATIONS_SUPPLEMENTAIRES"] != NULL){
			?>
			<div class="info">
				<h3>INFORMATIONS SUPPLEMENTAIRES</h3>
				<p><?php echo  $produit["INFORMATIONS_SUPPLEMENTAIRES"]; ?></p>
			</div>
			<?php 
				}
			?>
			<button class="buy--btn" onclick="location.href = '../index.php';">Commander</button>
		</div>
	</section>

</body>
	<?php 
		}
	?>

</html>