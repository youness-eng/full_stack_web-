<?php
    session_start();
    require_once "cbd.php";
    $id_utilisateur = $_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pharmacie CHAABIA</title>
    <link rel="icon" type="image/png" href="../images/miniLogo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/clientPatient.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" defer></script>
    <script src="https://kit.fontawesome.com/64d58efce2.js" defer></script>
    <script src="../js/clientPatient.js" defer></script>
</head>

<body>


    <div class="app-container">

        <!-- Header de l'application -->

        <div class="app-header">
            <div class="app-header-left">
                <span class="app-icon">
                    <svg viewBox="0 0 493 512" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M290.333 0C222.77 0 181.917 8 165.448 24.448C155.027 34.187 151.64 49.318 156.915 62.571C163.519 77.133 178.366 86.164 194.334 85.334C210.419 85.334 222.217 71.681 234.718 57.259C249.971 39.574 265.779 21.334 290.334 21.334C296.225 21.334 301.001 16.558 301.001 10.667C301.001 4.776 296.224 0 290.333 0Z"
                            fill="currentColor" />
                        <path
                            d="M258.333 341.333C252.442 341.333 247.666 336.557 247.666 330.666C247.666 324.775 252.442 319.999 258.333 319.999C314.29 319.999 418.333 226.794 418.333 138.666C418.333 52.053 349.384 21.333 290.333 21.333C284.442 21.333 279.666 16.557 279.666 10.666C279.666 4.775 284.442 0 290.333 0C364.658 0 439.666 42.88 439.666 138.667C439.666 234.454 331.592 341.333 258.333 341.333Z"
                            fill="currentColor" />
                        <path
                            d="M322.333 512C316.442 512 311.666 507.224 311.666 501.333C311.666 458.858 278.109 433.066 214.599 426.666C139.506 419.114 101.532 389.162 102.834 363.519C103.998 350.043 115.865 340.063 129.341 341.226C129.672 341.255 130.003 341.29 130.333 341.332C136.224 341.332 141 346.108 141 351.999C141 357.89 136.224 362.666 130.333 362.666C126.962 362.666 124.168 363.498 124.125 364.522C123.677 373.759 149.725 398.655 216.733 405.397C317.896 415.595 333 469.867 333 501.397C332.965 507.263 328.199 512 322.333 512Z"
                            fill="currentColor" />
                        <path
                            d="M343.667 149.333H45C39.109 149.333 34.333 154.109 34.333 160C34.686 235.876 88.047 301.173 162.333 316.629V373.333C162.334 378.229 165.668 382.495 170.418 383.68L213.085 394.347C213.93 394.557 214.796 394.664 215.666 394.667C221.557 394.667 226.333 389.891 226.333 384V316.629C300.619 301.172 353.98 235.876 354.333 160C354.333 154.109 349.558 149.333 343.667 149.333Z"
                            fill="currentColor" />
                        <path
                            d="M285.576 492.459L226.333 452.95V448C226.332 443.104 222.998 438.838 218.248 437.653L175.581 426.986C172.394 426.215 169.029 426.929 166.429 428.927C163.843 430.949 162.332 434.05 162.333 437.332V452.948L103.09 492.457C98.189 495.725 96.865 502.348 100.133 507.249C102.11 510.214 105.436 511.995 108.999 511.998H279.666C285.557 511.993 290.329 507.214 290.324 501.323C290.322 497.762 288.541 494.435 285.576 492.459Z"
                            fill="currentColor" />
                        <path
                            d="M151.667 106.667H130.334C124.443 106.667 119.667 101.891 119.667 96C119.667 90.109 124.443 85.333 130.334 85.333H147.251L165.47 67.114C169.707 63.021 176.46 63.139 180.553 67.376C184.545 71.51 184.545 78.063 180.553 82.196L159.22 103.529C157.218 105.538 154.501 106.666 151.667 106.667Z"
                            fill="currentColor" />
                        <path
                            d="M151.667 128C145.776 128 141 123.224 141 117.333V96C141 90.109 145.776 85.333 151.667 85.333C157.558 85.333 162.333 90.109 162.333 96V117.333C162.333 123.224 157.558 128 151.667 128Z"
                            fill="currentColor" />
                    </svg>
                </span>
                <p class="app-name">Chaabia</p>
                <form action="clientPatient.php" method="get">
                    <div class="search-wrapper">
                        <input name="searchedWord" class="search-input" type="text" placeholder="Rechercher produit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            class="feather feather-search" viewBox="0 0 24 24">
                            <defs></defs>
                            <circle cx="11" cy="11" r="8"></circle>
                            <path d="M21 21l-4.35-4.35"></path>
                        </svg>
                    </div>
                </form>
            </div>
            <div class="app-header-right">
                <button type="button" class="mode-switch" title="Changer Theme">
                    <svg class="moon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" width="24" height="24" viewBox="0 0 24 24">
                        <defs></defs>
                        <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
                    </svg>
                </button>
                <button type="button" class="add-btn prescriptionLink" title="Ajouter ordonnace">
                    <svg class="btn-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-plus">
                        <line x1="12" y1="5" x2="12" y2="19" />
                        <line x1="5" y1="12" x2="19" y2="12" /></svg>
                </button>
                <button type="button" id="cart-btn" class="cart-btn cartLink hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart">
                        <circle cx="9" cy="21" r="1"></circle>
                        <circle cx="20" cy="21" r="1"></circle>
                        <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                    </svg>
                </button>
                <button type="button" class="profile-btn">
                    <span>
                        <?php 
                        require_once "cbd.php";
                        $selectUtilisateur = "SELECT * FROM utilisateurs WHERE ID_UTILISATEUR = '$id_utilisateur'";
                        $UtilisateurInfo = mysqli_query($conn,$selectUtilisateur);
                        $Utilisateur = mysqli_fetch_array($UtilisateurInfo);
                        $prenomPremierLettre = $Utilisateur['PRENOM'][0];
                        echo $Utilisateur['NOM']. " " . $prenomPremierLettre . "." ;
                    ?>
                    </span>
                </button>
                <form action="deconnecter.php" method="get">
                    <button class="exitBtn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-log-out">
                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                            <polyline points="16 17 21 12 16 7"></polyline>
                            <line x1="21" y1="12" x2="9" y2="12"></line>
                        </svg>
                    </button>
                </form>
            </div>
        </div>

        <!-- Le contenu de l'application -->

        <div class="app-content">

            <!-- Le barre latérale  -->

            <div class="app-sidebar">
                <a id="home" class="app-sidebar-link activeL" tooltip="Accueil" flow="right">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-home">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                        <polyline points="9 22 9 12 15 12 15 22" /></svg>
                </a>
                <a id="orders" class="app-sidebar-link" tooltip="Commandes" flow="right">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-shopping-bag">
                        <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <path d="M16 10a4 4 0 0 1-8 0"></path>
                    </svg>
                </a>
                <a id="messages" class="app-sidebar-link" tooltip="Messages" flow="right">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-message-square">
                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                    </svg>
                </a>
                <a id="prescription" class="app-sidebar-link" tooltip="Ordonnance" flow="right">

                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-file">
                        <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                        <polyline points="13 2 13 9 20 9"></polyline>
                    </svg>
                </a>
            </div>

            <!-- Section d'accueil -->

            <div class="products-section">

                <div class="products-section-header">
                    <p>Commandes :</p>
                    <p class="time"><?php echo date("F j, Y");  ?></p>
                </div>
                <div class="products-section-line">
                    <div class="projects-status">
                        <div class="item-status">
                            <?php 
                            $selectCommandePreparer = "SELECT * FROM commandes WHERE ID_UTILISATEUR = '$id_utilisateur' AND STATUT ='preparer' ";
                            $tableCP= mysqli_query($conn,$selectCommandePreparer);
                            $tottaleLigneCP=mysqli_num_rows($tableCP);
                            $selectCommandeEffectuer = "SELECT * FROM commandes WHERE ID_UTILISATEUR = '$id_utilisateur' AND STATUT ='effectuer' ";
                            $tableCE= mysqli_query($conn,$selectCommandeEffectuer);
                            $tottaleLigneCE=mysqli_num_rows($tableCE);
                            $selectCommande = "SELECT * FROM commandes WHERE ID_UTILISATEUR = '$id_utilisateur'";
                            $tableC= mysqli_query($conn,$selectCommande);
                            $tottaleLigneC=mysqli_num_rows($tableC);
                            ?>
                            <span class="status-number"><?php echo $tottaleLigneCP; ?></span>
                            <span class="status-type">Préparée</span>
                        </div>
                        <div class="item-status">
                            <span class="status-number"><?php echo $tottaleLigneCE; ?></span>
                            <span class="status-type">Effectuée</span>
                        </div>
                        <div class="item-status">
                            <span class="status-number"><?php echo $tottaleLigneC; ?></span>
                            <span class="status-type">Totale commandes</span>
                        </div>
                    </div>
                    <div class="view-actions ordersLink">
                        <span class="status-type Add__prescription">Voir Plus</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-more-horizontal">
                            <circle cx="12" cy="12" r="1"></circle>
                            <circle cx="19" cy="12" r="1"></circle>
                            <circle cx="5" cy="12" r="1"></circle>
                        </svg>
                    </div>
                </div>
                <div class="products-section-header">
                    <p>Produits :</p>
                    <p class="time">Total produits :
                        <?php 
                    $selectProduits = "SELECT * FROM produits";
                    $tableP= mysqli_query($conn,$selectProduits);
                    $tottaleLignetableP = mysqli_num_rows($tableP);
                    echo $tottaleLignetableP;
                    ?>

                    </p>
                </div>
                <!-- produits -->

                <div class="project-boxes jsGridView">

                    <?php 

                if(isset($_GET["searchedWord"]) && trim($_GET["searchedWord"]) != ''){
                    $searchedWord = trim($_GET["searchedWord"]);
                    $sql = "SELECT * FROM produits WHERE NOM LIKE '%$searchedWord%'";
                } 
                if(!isset($sql)){
                    $sql = "SELECT * FROM produits";
                }

                $produits= mysqli_query($conn,$sql);
                if(mysqli_num_rows($produits) > 0){
                while($produit = mysqli_fetch_array($produits)){

                    $id_marque = $produit['ID_MARQUE'];
                    $selectionnerMarque = "SELECT * FROM marques WHERE ID_MARQUE = '$id_marque';";
                    $marqueInfo = mysqli_query($conn,$selectionnerMarque); 
                    $marque = mysqli_fetch_array($marqueInfo);

                    $description =substr($produit['DESCRIPTION'], 0, 80);
                    $indications =substr($produit['INDICATIONS'], 0, 80);
                    $contreIndications =substr($produit['CONTRE_INDICATIONS'], 0, 70);

                ?>

                    <div class="cardContainer inactive">
                        <div class="card">
                            <div class="side front">
                                <div class="img img1"
                                    style="background-image: url('../<?php echo  $produit["IMAGE"]; ?>');"></div>
                                <div class="info">
                                    <h2><?php echo  $produit["NOM"]; ?></h2>

                                    <?php

                                    if($produit["PRIX_PROMO"] !== NULL){
                                    ?>
                                    <p><span class="new"><?php echo  $produit["PRIX_PROMO"]; ?> DH</span><span
                                            class="old"><?php echo  $produit["PRIX"]; ?> DH</span></p>
                                    <?php 
                                    }else{
                                    ?>
                                    <p class="new"><?php echo  $produit["PRIX"]; ?> DH</p>
                                    <?php 
                                    }
                                    ?>


                                    <p><?php echo  $marque["NOM_MARQUE"]; ?>

                                        <button class="add-to-cart" id="addToCart">
                                            <div class="default">Ajt au panier</div>
                                            <div class="success">Ajouté</div>
                                            <div class="cart">
                                                <div>
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                            </div>
                                            <div class="dots"></div>
                                        </button>
                                    </p>
                                </div>
                            </div>
                            <div class="side back">
                                <div class="info">
                                    <h2><?php echo  $produit["NOM"]; ?></h2>
                                    <div class="reviews">
                                        <span><?php echo  $marque["NOM_MARQUE"]; ?> </span>
                                        <p><?php echo  $produit["CODE_BARRES"]; ?></p>
                                    </div>
                                    <ul>
                                        <?php

                                    if($produit["DESCRIPTION"] !== NULL){
                                    ?>
                                        <li><?php echo $description;?> ...</li>
                                        <?php
                                    }                               
                                    if($produit["INDICATIONS"] !== NULL){
                                    ?>
                                        <li><?php echo $indications;?> ...</li>
                                        <?php
                                    }                               
                                    if($produit["CONTRE_INDICATIONS"] !== NULL){
                                    ?>
                                        <li><?php echo $contreIndications;?> ...</li>
                                        <?php
                                    }                               
                                    ?>
                                    </ul>
                                    <a class="btn" href="detailsProduitsN.php?id-produit=<?php echo  $produit["ID_PRODUIT"]; ?>">
                                        <h4>Voir Plus</h4>
                                        <svg fill="#fff" height="24" viewBox="0 0 24 24" width="24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z" />
                                            <path d="M0-.25h24v24H0z" fill="none" /></svg>
                                    </a>
                                    <a href="../index.php" class="btn2">
                                        <h4>Commandez</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php 
                }}
                else{
                ?>

                    <div class="NoResultsFound">
                        <img src="../images/notfound.png" alt="Aucun resultat">
                        <h1 class="title">Aucun résultat trouvé.</h1>
                        <p>S'il vous plaît vérifier votre mot-clé s'il contient des erreurs et réessayer une autre fois
                        </p>
                    </div>

                    <?php
                }
                ?>




                </div>
            </div>


            <!-- Section du panier -->

            <div class="cart-section">
                <div class="projects-section-header">
                    <p>Mon Panier</p>
                </div>
                <div class="messages">

                    <?php
                if(!isset($sqlC)){
                    $sqlC = "SELECT * FROM produits";
                }

                $produitsC = mysqli_query($conn,$sqlC);
                if(mysqli_num_rows($produitsC) > 0){
                while($produitC = mysqli_fetch_array($produitsC)){
                    $id_marque = $produitC['ID_MARQUE'];
                    $selectionnerMarque = "SELECT * FROM marques WHERE ID_MARQUE = '$id_marque';";
                    $marqueInfo = mysqli_query($conn,$selectionnerMarque); 
                    $marque = mysqli_fetch_array($marqueInfo);

                ?>
                    <div class="cart-box">
                        <img src="../<?php echo  $produitC["IMAGE"]; ?>" alt="Image Produit">
                        <div class="cart-content">
                            <span class="message-header">
                                <div class="name"><?php echo  $produitC["NOM"]; ?></div>
                            </span>
                            <span class="brand">
                                <?php echo  $marque["NOM_MARQUE"]; ?>
                            </span>
                        </div>
                        <div class="quantity">
                            1
                        </div>
                        <div class="addSubtractBtns">
                            <svg class="addPoduct" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="12" y1="8" x2="12" y2="16"></line>
                                <line x1="8" y1="12" x2="16" y2="12"></line>
                            </svg>
                            <svg class="subtructPoduct" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus-circle">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="8" y1="12" x2="16" y2="12"></line>
                            </svg>
                        </div>
                        <p class="priceCart">
                            <?php echo  $produitC["PRIX"]; ?> DH
                        </p>
                        <a class="delete">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-x-circle">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="15" y1="9" x2="9" y2="15"></line>
                                <line x1="9" y1="9" x2="15" y2="15"></line>
                            </svg>
                        </a>
                    </div>

                    <?php
                        }
                    }else{

                    }
                    ?>


                </div>
            </div>







































            <!-- Section des commandes -->


            <div class="orders-section">

                <div class="products-section-header">
                    <p>Commandes</p>
                    <p class="time"><?php echo date("F j, Y");  ?></p>
                </div>
                <div class="products-section-line">
                    <div class="projects-status">
                        <div class="item-status">
                            <?php 
                            $selectCommandePreparer = "SELECT * FROM commandes WHERE ID_UTILISATEUR = '$id_utilisateur' AND STATUT ='preparer' ";
                            $tableCP= mysqli_query($conn,$selectCommandePreparer);
                            $tottaleLigneCP=mysqli_num_rows($tableCP);
                            $selectCommandeEffectuer = "SELECT * FROM commandes WHERE ID_UTILISATEUR = '$id_utilisateur' AND STATUT ='effectuer' ";
                            $tableCE= mysqli_query($conn,$selectCommandeEffectuer);
                            $tottaleLigneCE=mysqli_num_rows($tableCE);
                            $selectCommande = "SELECT * FROM commandes WHERE ID_UTILISATEUR = '$id_utilisateur'";
                            $tableC= mysqli_query($conn,$selectCommande);
                            $tottaleLigneC=mysqli_num_rows($tableC);
                            ?>
                            <span class="status-number"><?php echo $tottaleLigneCP; ?></span>
                            <span class="status-type">Préparée</span>
                        </div>
                        <div class="item-status">
                            <span class="status-number"><?php echo $tottaleLigneCE; ?></span>
                            <span class="status-type">Effectuée</span>
                        </div>
                        <div class="item-status">
                            <span class="status-number"><?php echo $tottaleLigneC; ?></span>
                            <span class="status-type">Totale commandes</span>
                        </div>
                    </div>
                    <div class="view-actions homeLink">
                        <span class="status-type">Ajouter une commande</span>
                        <svg class="addOrder" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-square">
                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="12" y1="8" x2="12" y2="16"></line>
                            <line x1="8" y1="12" x2="16" y2="12"></line>
                        </svg>
                    </div>
                </div>


                <!-- Les commandes  -->

                <div class="products-area-wrapper tableView">

                    <!-- Entete de la table des commandes  -->

                    <div class="products-header">
                        <div class="product-cell image">
                            Produits
                            <button class="sort-button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                        d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
                                </svg>
                            </button>
                        </div>
                        <div class="product-cell category">Quantité total<button class="sort-button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                        d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
                                </svg>
                            </button></div>
                        <div class="product-cell price-cell">Mentant total<button class="sort-button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                        d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
                                </svg>
                            </button></div>
                        <div class="product-cell sales">Status<button class="sort-button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                        d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
                                </svg>
                            </button></div>
                        <div class="product-cell stock">Date status<button class="sort-button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                        d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
                                </svg>
                            </button></div>
                        <div class="product-cell price">Date commande<button class="sort-button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                        d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
                                </svg>
                            </button></div>
                        <div class="product-cell price">Action<button class="sort-button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                        d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
                                </svg>
                            </button></div>
                    </div>

                    <?php 

                    // Selectionner tous si variable sqlO n'existe pas

                    $sqlO = "SELECT * FROM commandes WHERE ID_UTILISATEUR = '$id_utilisateur'";
                    $commandes= mysqli_query($conn,$sqlO);
                      
                    while($commande = mysqli_fetch_array($commandes))
                    {
                    $id_commande = $commande["ID_COMMANDE"];
                    ?>
                    <div class="products-row">
                        <button class="cell-more-button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-more-vertical">
                                <circle cx="12" cy="12" r="1" />
                                <circle cx="12" cy="5" r="1" />
                                <circle cx="12" cy="19" r="1" /></svg>
                        </button>
                        <div class="product-cell category">
                            <?php 
                            $sqlProduit = "SELECT * FROM concerner WHERE ID_COMMANDE = '$id_commande'";
                            $tousProduits= mysqli_query($conn,$sqlProduit);
                             
                            while($produitConcerner = mysqli_fetch_array($tousProduits))
                            {
                                $id_produit_concerner = $produitConcerner['ID_PRODUIT'];
                                $sqlProduitC = "SELECT * FROM produits WHERE ID_PRODUIT = '$id_produit_concerner'";
                                $tousProduitsC= mysqli_query($conn,$sqlProduitC);
                                $tousProduitsCInfo = mysqli_fetch_array($tousProduitsC);
                            ?>
                            <div class="product-cell image noMargin">
                                <img src="../<?php echo  $tousProduitsCInfo["IMAGE"]; ?>" alt="Produit">
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="product-cell quantiteTotale"><?php echo  $commande["QUANTITE_TOTALE"] ?></div>
                        <div class="product-cell motantTotal"><?php echo  $commande["MONTANT_TOTAL"]; ?> Dh
                        </div>
                        <div class="product-cell status"><?php echo  $commande["STATUT"]; ?></div>
                        <div class="product-cell dateStatus"><?php echo  $commande["DATE_STATUT"]; ?></div>
                        <div class="product-cell dateCommande"><?php echo  $commande["DATE_COMMMANDE"]; ?></div>
                        <div class="product-cell action" id="deleteOrderD">
                            <a class="orderLink" href="consulterCommande.php?id-commande=<?php echo  $id_commande; ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                    fill="none" stroke="#2869ff" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-eye">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                    <circle cx="12" cy="12" r="3"></circle>
                                </svg>
                            </a>
                            <a class="orderLink" href="modifierCommande.php?id-commande=<?php echo  $id_commande; ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                    fill="none" stroke="#2869ff" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-edit">
                                    <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                    <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                </svg>
                            </a>
                            <a class="orderLink deleteOrderL" href="?id-commande=<?php echo  $id_commande; ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                    fill="none" stroke="#FF0000" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-trash-2">
                                    <polyline points="3 6 5 6 21 6"></polyline>
                                    <path
                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                    </path>
                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                </svg>
                            </a>

                            <input type="text" name="hiddenInput" class="OrderClass"
                                value="<?php  echo  $id_commande; ?>">
                        </div>
                    </div>
                    <?php
                    }
                ?>

                </div>


            </div>
















































            <!-- Section des messages -->


            <div class="messages-section">

                <div class="products-section-header">
                    <p>Messages : <span id="sent" class="linkClicked">Envoyés</span><span id="received">Reçus</span></p>
                    <p class="time"><?php echo date("F j, Y");  ?></p>
                </div>
                <div class="products-section-line">
                    <div class="projects-status">
                        <div class="item-status">
                            <?php 
                            $selectMessagesE = "SELECT * FROM messages_ordonnance WHERE ID_UTILISATEUR = '$id_utilisateur'";
                            $tableMessagesE = mysqli_query($conn,$selectMessagesE);
                            $tottaleMessagesE =mysqli_num_rows($tableMessagesE);

                            $selectMessagesR = "SELECT * FROM messages_ordonnance WHERE ID_DESTINATAIRE = '$id_utilisateur'";
                            $tableMessagesR= mysqli_query($conn,$selectMessagesR);
                            $tottaleMessagesR=mysqli_num_rows($tableMessagesR);

                            $totalMessage = (int)$tottaleMessagesE + (int)$tottaleMessagesR;

                        ?>
                            <span class="status-number"><?php echo $tottaleMessagesE; ?></span>
                            <span class="status-type">Envoyé</span>
                        </div>
                        <div class="item-status">
                            <span class="status-number"><?php echo $tottaleMessagesR; ?></span>
                            <span class="status-type">Reçu</span>
                        </div>
                        <div class="item-status">
                            <span class="status-number"><?php echo $totalMessage; ?></span>
                            <span class="status-type">Totale messages</span>
                        </div>
                    </div>
                    <div class="view-actions prescriptionLink">
                        <span class="status-type">Ajouter une ordonnance</span>
                        <svg class="addOrder" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-plus">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                            <line x1="12" y1="18" x2="12" y2="12"></line>
                            <line x1="9" y1="15" x2="15" y2="15"></line>
                        </svg>
                    </div>
                </div>


                <!-- Les messages envoyees  -->

                <div class="products-area-wrapper tableView" id="SentMessages">

                    <!-- Entete des messages envoyees  -->

                    <div class="products-header">
                        <div class="product-cell image">
                            Ordonnance
                            <button class="sort-button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                        d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
                                </svg>
                            </button>
                        </div>
                        <div class="product-cell category">Message<button class="sort-button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                        d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
                                </svg>
                            </button></div>
                        <div class="product-cell price-cell">Date message<button class="sort-button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                        d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
                                </svg>
                            </button></div>
                        <div class="product-cell price">Action<button class="sort-button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                        d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
                                </svg>
                            </button></div>

                    </div>

                    <?php 

                // Selectionner messages envoyes

                
                while($message = mysqli_fetch_array($tableMessagesE))
                {
                    $id_message = $message["ID_MSG"];
                ?>
                    <div class="products-row">
                        <button class="cell-more-button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-more-vertical">
                                <circle cx="12" cy="12" r="1" />
                                <circle cx="12" cy="5" r="1" />
                                <circle cx="12" cy="19" r="1" /></svg>
                        </button>
                        <?php 
                        if($message["ORDONNANCE"] !== NULL ){
                        ?>
                        <div class="product-cell image ordonnance">
                            <img src="../<?php echo  $message["ORDONNANCE"]; ?>" alt="Ordonnance">
                        </div>
                        <?php
                        }else{
                        ?>
                        <div class="product-cell quantiteTotale">Pas d'ordonnance</div>
                        <?php
                        }
                        ?>
                        <div class="product-cell quantiteTotale"><?php echo  $message["MESSAGE"] ?></div>
                        <div class="product-cell motantTotal"><?php echo  $message["DATE_MESSAGE"]; ?></div>
                        <div class="product-cell action" id="deleteMessageD">
                            <a class="orderLink" href="consulterMsg.php?id-message=<?php echo  $id_message; ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                    fill="none" stroke="#2869ff" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-eye">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                    <circle cx="12" cy="12" r="3"></circle>
                                </svg>
                            </a>
                            <a class="orderLink prescriptionLink">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                    fill="none" stroke="#2869ff" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-send">
                                    <line x1="22" y1="2" x2="11" y2="13"></line>
                                    <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                                </svg>
                            </a>
                            <a class="orderLink deleteMessageL" href="?id-message=<?php echo  $id_message; ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                    fill="none" stroke="#FF0000" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-trash-2">
                                    <polyline points="3 6 5 6 21 6"></polyline>
                                    <path
                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                    </path>
                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                </svg>
                            </a>

                            <input type="text" name="hiddenInput" class="hIMessageId"
                                value="<?php  echo  $id_message; ?>">
                        </div>
                    </div>
                    <?php
                    }
                ?>


                </div>









                <!-- Les messages recus  -->

                <div class="products-area-wrapper tableView" id="receivedMessages">

                    <!-- Entete des messages recus  -->

                    <div class="products-header">
                        <div class="product-cell image">
                            Ordonnance
                            <button class="sort-button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                        d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
                                </svg>
                            </button>
                        </div>
                        <div class="product-cell category">Message<button class="sort-button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                        d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
                                </svg>
                            </button></div>
                        <div class="product-cell price-cell">Daye message<button class="sort-button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                        d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
                                </svg>
                            </button></div>
                        <div class="product-cell price">Action<button class="sort-button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                        d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
                                </svg>
                            </button></div>

                    </div>

                    <?php 

                // Selectionner messages recues

                
                while($message = mysqli_fetch_array($tableMessagesR))
                {
                    $id_message = $message["ID_MSG"];
                ?>
                    <div class="products-row">
                        <button class="cell-more-button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-more-vertical">
                                <circle cx="12" cy="12" r="1" />
                                <circle cx="12" cy="5" r="1" />
                                <circle cx="12" cy="19" r="1" /></svg>
                        </button>
                        <?php 
                        if($message["ORDONNANCE"] !== NULL &&  $message["ORDONNANCE"] !== "NULL"){
                        ?>
                        <div class="product-cell image ordonnance">
                            <img src="../<?php echo  $message["ORDONNANCE"]; ?>" alt="Ordonnance">
                        </div>
                        <?php
                        }else{
                        ?>
                        <div class="product-cell quantiteTotale">Pas d'ordonnance</div>
                        <?php
                        }
                        ?>
                        <div class="product-cell quantiteTotale"><?php echo  $message["MESSAGE"] ?></div>
                        <div class="product-cell motantTotal"><?php echo  $message["DATE_MESSAGE"]; ?></div>
                        <div class="product-cell action">
                            <a class="orderLink" href="consulterMsg.php?id-message=<?php echo  $id_message; ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                    fill="none" stroke="#2869ff" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-eye">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                    <circle cx="12" cy="12" r="3"></circle>
                                </svg>
                            </a>
                            <a class="orderLink prescriptionLink">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                    fill="none" stroke="#2869ff" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-send">
                                    <line x1="22" y1="2" x2="11" y2="13"></line>
                                    <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                                </svg>
                            </a>
                            <a class="orderLink" href="?id-message=<?php echo  $id_message; ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                    fill="none" stroke="#FF0000" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-trash-2">
                                    <polyline points="3 6 5 6 21 6"></polyline>
                                    <path
                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                    </path>
                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <?php
                    }
                ?>

                </div>



            </div>




















            <!-- Section des commandes -->


            <div class="prescription-section">

                <?php

            if(isset($_POST['addPrescription'])){
            $message = mysqli_real_escape_string($conn, $_POST["message"]); 
            $fnm = $_FILES["image"]["name"];  
            $dst = "images/Ordonnace/".$fnm;
            $statut = "en-cours";
            $insert = "INSERT INTO `messages_ordonnance` (`ID_UTILISATEUR`, `ID_DESTINATAIRE`, `MESSAGE`, `ORDONNANCE`, `STATUT`) VALUES ('$id_utilisateur', NULL, '$message', '$dst' , '$statut');";
            $nouveauLocation = "../images/Ordonnace/".$fnm; 
            move_uploaded_file($_FILES["image"]["tmp_name"],$nouveauLocation);  
            $ajouter = mysqli_query($conn, $insert);
            }

            ?>

                <div class="prescription-content">
                    <form class="form" method="POST" action="clientPatient.php" enctype="multipart/form-data">
                        <h2 class="form_title title">Ajouter Ordonnance</h2>
                        <span class="form__span">Ne perdez plus de temps ! Envoyez votre ordonnance en ligne à notre
                            pharmacie</span>
                        <div class="form__input" id="desciption">
                            <textarea name="message" autocomplete="off" placeholder="Votre message"></textarea>
                        </div>
                        <div class="form__input" id="image__selector">
                            <label class="selectionner-image">
                                <input type="file" name="image" id="input-image" onchange="copierLocation()" />
                                Ordonnance
                            </label>
                            <span id="image-location">Sélectionnez image</span>
                        </div>
                        <button class="button" type="submit" name="addPrescription">Enovoyez</button>
                        <span class="form__span">Une fois que nous avons reçu et traité votre demande, vous recevrez un
                            message de confirmation sur votre numéro whatsapp et sur votre compte. Il ne reste plus qu’à venir retirer vos
                            médicaments dans notre pharmacie.</span>
                    </form>
                    <img class="sendUsPUlustration" src="../images/preseciption.png" alt="Envoyez Nous ordonnance">
                </div>
            </div>













































            <!-- Section de mon compte -->


            <div class="monCompte-section">

                <?php

                $MoncompteQuery = "SELECT * FROM utilisateurs WHERE ID_UTILISATEUR = '$id_utilisateur'"; 
                $MoncompteInfos= mysqli_query($conn,$MoncompteQuery);
                 
                $Moncompte = mysqli_fetch_array($MoncompteInfos);

                if(isset($_POST['modifierSonCompte'])){
                    $nom = $_POST["nom"];
                    $prenom = $_POST["prenom"];
                    $email = $_POST["email"];
                    $num = $_POST["num"];
                    $pass = $_POST["pass"];
                    $pass2 = $_POST["pass2"];
                    $pass_Hasher = password_hash($pass,PASSWORD_DEFAULT);
                if(trim($pass) == ""){
                    $modifier = "UPDATE utilisateurs SET `NOM` = '$nom',`PRENOM` = '$prenom', `TELEPHONE` = '$num', `EMAIL` = '$email' WHERE `utilisateurs`.`ID_UTILISATEUR` = '$id_utilisateur' ;"; 
                    $modifier_compte = mysqli_query($conn, $modifier);
                    }else{
                    $modifier = "UPDATE utilisateurs  SET `NOM` = '$nom',`PRENOM` = '$prenom', `TELEPHONE` = '$num', `EMAIL` = '$email', `MOT_DE_PASSE` = '$pass_Hasher'  WHERE `utilisateurs`.`ID_UTILISATEUR` = '$id_utilisateur' ;"; 
                    $modifier_compte = mysqli_query($conn, $modifier);
                    }
                }
                ?>

                <div class="prescription-content">
                    <form class="form" method="POST" action="clientPatient.php">
                        <h2 class="form_title title" id="prescription__title">Modifier Votre compte</h2>

                        <div class="input-field" id="divNom">
                            <i class="fas fa-user"></i>
                            <input type="text" placeholder="Votre nom" name="nom"
                                value="<?php echo $Moncompte["NOM"] ;?>">
                        </div>
                        <div class="input-field">
                            <i class="fas fa-user"></i>
                            <input type="text" placeholder="Votre prénom" name="prenom"
                                value="<?php echo $Moncompte["PRENOM"] ;?>">
                        </div>
                        <div class="input-field">
                            <i class="fas fa-envelope"></i>
                            <input type="email" placeholder="Votre email" name="email"
                                value="<?php echo $Moncompte["EMAIL"] ;?>">
                        </div>
                        <div class="input-field">
                            <i class="fa fa-phone"></i>
                            <input type="text" placeholder="Votre numéro de téléphone" name="num"
                                value="<?php echo $Moncompte["TELEPHONE"] ;?>">
                        </div>
                        <div class="input-field" id="divPass">
                            <i class="fas fa-lock"></i>
                            <input type="password" placeholder="Votre mot de passe" name="pass">
                        </div>
                        <div class="input-field" id="confirme-pass">
                            <i class="fas fa-lock"></i>
                            <input type="password" placeholder="Confirmation de votre mot de passe" name="pass2">
                        </div>


                        <button class="button" id="editAccount" type="submit" name="modifierSonCompte">Modifier</button>

                    </form>
                    <img class="EditProfile" src="../images/editProfile.png" alt="Modifier Compte">
                </div>
            </div>




            <button id="modal__button" data-modal-target="#modal">Open Modal</button>
            <div class="modal" id="modal">
                <button data-close-button class="close-button">&times;</button>
                <div class="modal-body">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                        xml:space="preserve">
                        <g>
                            <g>
                                <path d="M501.362,383.95L320.497,51.474c-29.059-48.921-99.896-48.986-128.994,0L10.647,383.95
                                    c-29.706,49.989,6.259,113.291,64.482,113.291h361.736C495.039,497.241,531.068,433.99,501.362,383.95z M256,437.241
                                    c-16.538,0-30-13.462-30-30c0-16.538,13.462-30,30-30c16.538,0,30,13.462,30,30C286,423.779,272.538,437.241,256,437.241z
                                    M286,317.241c0,16.538-13.462,30-30,30c-16.538,0-30-13.462-30-30v-150c0-16.538,13.462-30,30-30c16.538,0,30,13.462,30,30
                                    V317.241z" />
                            </g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                    </svg>
                    <div class="titleM">Attention !</div>
                    <p>Voulez vous vraiment supprimer ce message de façon permanente</p>
                </div>

                <div class="modal-footer">
                    <form action="clientPatient.php" method="get">
                        <input type="text" name="ID_MSG" id="idMessage" value="">
                        <input type="text" name="ID_Commande" id="idCommande" value="">
                        <button type="submit" name="BtnDeleteM" class="buttonM buttonMD">Supprimer</button>
                    </form>
                    <button data-close-button class="buttonM buttonMC">Annulez</button>
                </div>

            </div>
            <div id="overlay"></div>



            
            <?php
                
                if(isset($_GET['BtnDeleteM'])){
                    if(isset($_GET['ID_MSG']) && trim($_GET['ID_MSG']) != "" ){
                    $id_message = $_GET['ID_MSG'];
                    $supprimerRequete = "DELETE FROM `messages_ordonnance` WHERE `messages_ordonnance`.`ID_MSG` = $id_message";
                    $supprimermessage = mysqli_query($conn,$supprimerRequete);
                    }else{
                    $id_commande = $_GET['ID_Commande'];

                    $supprimerConcerner = "DELETE FROM `concerner` WHERE `ID_COMMANDE` = $id_commande";
                    $supprimerConcernerSql = mysqli_query($conn,$supprimerConcerner);

                    $supprimerRequete = "DELETE FROM `commandes` WHERE `commandes`.`ID_COMMANDE` = $id_commande";
                    $supprimercommande = mysqli_query($conn,$supprimerRequete);
                    }
            }
            
            
            ?>




























        </div>




    </div>



</body>

</html>