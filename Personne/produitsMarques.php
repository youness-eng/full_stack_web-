
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacie CHAABIA</title>
    <link rel="icon" type="image/png" href="../images/miniLogo.png">
    <link rel="stylesheet" href="../css/produitsMarques.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" defer></script>
    <script src="../js/produitsMarques.js" defer></script>
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

    <div class="cards">
    <?php
        if(isset($_GET["id-marque"]) && !empty(trim($_GET["id-marque"]))){
            require_once "cbd.php";

            $id = trim($_GET["id-marque"]);
            $sql = "SELECT * FROM produits WHERE ID_MARQUE = '$id'";
            $produits= mysqli_query($conn,$sql);
            if(mysqli_num_rows($produits) > 0){
            while($produit = mysqli_fetch_array($produits))
            {
            
    ?>

        <div class="card">
            <div class="card__image-holder">
                <img class="card__image" src="../<?php echo  $produit["IMAGE"]; ?>" alt="Produit" />
            </div>
            <div class="card-title">
                <a href="#" class="toggle-info btn">
                    <span class="left"></span>
                    <span class="right"></span>
                </a>
                <h2>
                    <?php echo  $produit["NOM"]; ?>
                    <small><?php echo  $produit["PRIX"]; ?> DH</small>
                </h2>
            </div>
            <div class="card-flap flap1">
                <div class="card-description">
                <?php echo  $produit["DESCRIPTION"]; ?>
                </div>
                <div class="card-flap flap2">
                    <div class="card-actions">
                        <a href="detailsProduits.php?id-produit=<?php echo $produit['ID_PRODUIT']; ?>" class="btn">Voir les details</a>
                    </div>
                </div>
            </div>
        </div>
    <?php
             }
    ?>

    </div>
    
    <?php
    }
    else{
        ?>
     <section class="NoResultsFound">
        <img src="../images/AucunProduit.png" alt="Aucun resultat">
        <h1 class="title">Aucun résultat trouvé.</h1>
        <p>La marque n'a aucun produit pour le moment, veuillez réessayer plus tard</p>
    </section>

        <?php
    }
    } 
    else{
        header("location: ../index.php");
        exit();
    }
    ?>





</body>

</html>