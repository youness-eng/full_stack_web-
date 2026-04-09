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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pharmacie CHAABIA</title>
  <link rel="icon" type="image/png" href="../images/miniLogo.png">
  <link rel="stylesheet" href="../css/pharmacien.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js" defer></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" defer></script>
  <script src="https://kit.fontawesome.com/64d58efce2.js" defer></script>
  <script src="../js/employe.js" defer></script>
</head>

<body>


  <div class="app-container">

    <!-- barre -->

    <div class="sidebar">

      <div class="sidebar-header">
        <div class="app-icon">
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

        </div>
      </div>

      <!-- liens de de liste  -->

      <ul class="sidebar-list">
        <li class="sidebar-list-item active">
          <a id="homeLink">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="feather feather-home">
              <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
              <polyline points="9 22 9 12 15 12 15 22" /></svg>
            <span>Accueil</span>
          </a>
        </li>
        <li class="sidebar-list-item">
          <a id="productsLink">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="feather feather-shopping-bag">
              <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z" />
              <line x1="3" y1="6" x2="21" y2="6" />
              <path d="M16 10a4 4 0 0 1-8 0" /></svg>
            <span>Produits</span>
          </a>
        </li>
        <li class="sidebar-list-item">
          <a id="ordersLink">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="feather feather-file-text">
              <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
              <polyline points="14 2 14 8 20 8"></polyline>
              <line x1="16" y1="13" x2="8" y2="13"></line>
              <line x1="16" y1="17" x2="8" y2="17"></line>
              <polyline points="10 9 9 9 8 9"></polyline>
            </svg>
            <span>Commandes</span>
          </a>
        </li>
        <li class="sidebar-list-item addsmenu2">
          <a id="categoriesLink" class="categoriesLink">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="feather feather-grid">
              <rect x="3" y="3" width="7" height="7"></rect>
              <rect x="14" y="3" width="7" height="7"></rect>
              <rect x="14" y="14" width="7" height="7"></rect>
              <rect x="3" y="14" width="7" height="7"></rect>
            </svg>
            <span>Catégories</span>
          </a>
          <div class="smenu2">
            <a class="smenuL" id="categorieLink">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-chevron-right">
                <polyline points="9 18 15 12 9 6"></polyline>
              </svg>
              <span>Catégories</span>
            </a>
            <a class="smenuL" id="sousCatL">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-chevron-right">
                <polyline points="9 18 15 12 9 6"></polyline>
              </svg>
              <span>Sous cat.</span></a>
            <a class="smenuL" id="sousSousCatL">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-chevron-right">
                <polyline points="9 18 15 12 9 6"></polyline>
              </svg>
              <span>Sous sous cat.</span></a>
          </div>
        </li>
        <li class="sidebar-list-item">
          <a id="brandLink">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="feather feather-delete">
              <path d="M21 4H8l-7 8 7 8h13a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2z"></path>
              <circle cx="10" cy="12" r="2"></circle>
            </svg>
            <span>Marques</span>
          </a>
        </li>
        <li class="sidebar-list-item addsmenu">
          <a id="messageLink">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="feather feather-message-square">
              <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
            </svg>
            <span>Messages</span>
          </a>
        </li>
      <li class="sidebar-list-item">
        <a href="deconnecter.php">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-log-out">
            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
            <polyline points="16 17 21 12 16 7"></polyline>
            <line x1="21" y1="12" x2="9" y2="12"></line>
          </svg>
          <span>Se déconnecter</span>
        </a>
      </li>
      </ul>

      <div class="account-info">
        <div class="account-info-picture">
          <img src="../images/pharmacienProfile.jpg" alt="Pharmacien">
        </div>
        <div class="account-info-name">
          <?php
            require_once "cbd.php";
            $selectUtilisateur = "SELECT * FROM utilisateurs WHERE ID_UTILISATEUR = '$id_utilisateur'";
            $UtilisateurInfo = mysqli_query($conn,$selectUtilisateur);
            $Utilisateur = mysqli_fetch_array($UtilisateurInfo);
            $prenomPremierLettre = $Utilisateur['PRENOM'][0];
            echo $Utilisateur['NOM']. " " . $prenomPremierLettre . "." ;
        ?>
        </div>
        <button class="account-info-more">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-more-horizontal">
            <circle cx="12" cy="12" r="1" />
            <circle cx="19" cy="12" r="1" />
            <circle cx="5" cy="12" r="1" /></svg>
        </button>
      </div>

    </div>

    <!-- Section Accueil -->

    <section id="accueil">

      <div class="welcome__back">
        <div class="welcomeContainer">
          <div class="welcome">
            <span class="welcome__text">Bienvenue sur le tableau de bord</span>
            <span class="date"><?php echo date("F j, Y");  ?></span>
          </div>
          <div class="welcomePlusName">
            <span> Bonjour <?php echo $Utilisateur['NOM'] . " " . $Utilisateur['PRENOM'];  ?>, bienvenue sur votre
              tableau de bord !</span>
            <button class="mode-switch" title="Thème">
              <span> Changer le thème</span>
              <svg class="moon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2" width="40" height="40" viewBox="0 0 24 24">
                <defs></defs>
                <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
              </svg>
            </button>
          </div>
        </div>
      </div>
      <div class="infos__cards">
        <div class="info__Card productLink">
          <a>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-package">
              <line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line>
              <path
                d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
              </path>
              <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
              <line x1="12" y1="22.08" x2="12" y2="12"></line>
            </svg>
          </a>
          <div class="totale__value">
            <div class="infosEssetiel">
              <span class="number">
                <?php 
                $selectProducts = "SELECT * FROM produits";
                $tableU= mysqli_query($conn,$selectProducts);
                $tottaleUsers=mysqli_num_rows($tableU);
                echo $tottaleUsers;
              ?>
              </span>
              <span class="type">Produits</span>
            </div>
            <div class="more__infos">
              <?php
            $selectProductsC = "SELECT * FROM produits WHERE PRIX_PROMO IS NULL";
            $tableUC= mysqli_query($conn,$selectProductsC);
            $tottaleUsersC=mysqli_num_rows($tableUC);
            $selectProductsE = "SELECT * FROM produits WHERE PRIX_PROMO IS NOT NULL";
            $tableUE= mysqli_query($conn,$selectProductsE);
            $tottaleUsersE=mysqli_num_rows($tableUE);
           
           
            echo $tottaleUsersC . " avec promtion et " . $tottaleUsersE . " sans promotion.";

            ?>

            </div>
          </div>
        </div>

        <div class="info__Card ordersLink">
          <a class="second__card">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file">
              <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
              <polyline points="13 2 13 9 20 9"></polyline>
            </svg>
          </a>
          <div class="totale__value">
            <div class="infosEssetiel">
              <span class="number">
                <?php 
          require_once "cbd.php";
          $selectOrders = "SELECT * FROM commandes";
          $tableO= mysqli_query($conn,$selectOrders);
          $tottaleOrders=mysqli_num_rows($tableO);
          echo $tottaleOrders;
          ?>
              </span>
              <span class="type">Commandes</span>
            </div>
            <div class="more__infos second__link">
              <?php
            $selectOrdersG = "SELECT * FROM commandes WHERE STATUT = 'en-cours'";
            $tableOG= mysqli_query($conn,$selectOrdersG);
            $tottaleOrdersG=mysqli_num_rows($tableOG);
            $selectOrdersD = "SELECT * FROM commandes WHERE STATUT = 'effectuer'";
            $tableOD= mysqli_query($conn,$selectOrdersD);
            $tottaleOrdersD=mysqli_num_rows($tableOD);
            $selectOrdersC = "SELECT * FROM commandes WHERE STATUT = 'preparer'";
            $tableOC= mysqli_query($conn,$selectOrdersC);
            $tottaleOrdersC=mysqli_num_rows($tableOC);
           
           
            echo $tottaleOrdersG . " en-cours, " . $tottaleOrdersD . " effectuées et " . $tottaleOrdersC . " préparées.";

            ?>

            </div>
          </div>
        </div>

        <div class="info__Card messagesLink">
          <a class="third__card">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
              <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
              <polyline points="22,6 12,13 2,6"></polyline>
            </svg>
          </a>
          <div class="totale__value">
            <div class="infosEssetiel">
              <span class="number">
                <?php 
          require_once "cbd.php";
          $selectMO = "SELECT * FROM messages_ordonnance";
          $tableMO= mysqli_query($conn,$selectMO);;
          $tottaleMO=mysqli_num_rows($tableMO);
          echo $tottaleMO;
          ?>
              </span>
              <span class="type">Messages</span>
            </div>
            <div class="more__infos third__link">
              <?php
           
            echo $tottaleMO . " messages d'ordonnances.";

            ?>

            </div>
          </div>
        </div>

      </div>










      <div class="cards__wrapper">


        <!-- Les produits  -->


        <div class="products-area-wrapper tableViewH productLink">

          <div class="table__header">
            <span class="table__title">Dernières produits ajoutés</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-package">
              <line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line>
              <path
                d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
              </path>
              <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
              <line x1="12" y1="22.08" x2="12" y2="12"></line>
            </svg>
          </div>
          <!-- Entete de la table produits -->

          <div class="products-header">
            <div class="product-cell image">
              Articles
              <button class="sort-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
                  <path fill="currentColor"
                    d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
                </svg>
              </button>
            </div>
            <div class="product-cell sales">Marque<button class="sort-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
                  <path fill="currentColor"
                    d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
                </svg>
              </button></div>

            <div class="product-cell price">Prix<button class="sort-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
                  <path fill="currentColor"
                    d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
                </svg>
              </button></div>
          </div>

          <?php 

            require_once "cbd.php";

            // Selectionner tous si variable produits n'existe pas

            $sqlT = "SELECT * FROM produits ORDER BY ID_PRODUIT DESC LIMIT 3 ";
            $produitsT= mysqli_query($conn,$sqlT);
            while($produit = mysqli_fetch_array($produitsT))
            {
            $id_marque = $produit['ID_MARQUE'];
            $selectionnerMarque = "SELECT * FROM marques WHERE ID_MARQUE = '$id_marque';";
            $marqueInfo = mysqli_query($conn,$selectionnerMarque); 
            $marque = mysqli_fetch_array($marqueInfo);

            ?>

          <div class="products-row">
            <button class="cell-more-button">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-more-vertical">
                <circle cx="12" cy="12" r="1" />
                <circle cx="12" cy="5" r="1" />
                <circle cx="12" cy="19" r="1" /></svg>
            </button>
            <div class="product-cell image">
              <img src="../<?php echo  $produit["IMAGE"]; ?>" alt="Produit">
              <span><?php echo  $produit["NOM"]; ?></span>
            </div>
            <div class="product-cell sales"><span class="cell-label">Marque:</span><?php echo  $marque["NOM_MARQUE"]; ?>
            </div>
            <?php 
            if($produit["PRIX_PROMO"] !== NULL){
            ?>
            <div class="product-cell price-cell">
              <span class="cell-label">Prix:</span>
              <span class="price active"><?php echo  $produit["PRIX_PROMO"]; ?> DH</span>
            </div>
            <?php 
            }else{
            ?>
            <div class="product-cell status-cell">
              <span class="cell-label">Prix:</span>
              <span class="price disabled"><?php echo  $produit["PRIX"]; ?> DH</span>
            </div>
            <?php 
            }
            ?>
          </div>
          <?php
            }
            ?>

        </div>


        <!-- Les commandes  -->

        <div class="products-area-wrapper tableViewH ordersLink">

          <div class="table__header second__header">
            <span class="table__title">Dernières commandes ajoutés</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file">
              <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
              <polyline points="13 2 13 9 20 9"></polyline>
            </svg>
          </div>
          <!-- Entete de la table  -->

          <div class="products-header">
            <div class="product-cell image">
              Nom
              <button class="sort-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
                  <path fill="currentColor"
                    d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
                </svg>
              </button>
            </div>
            <div class="product-cell stock">Montant<button class="sort-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
                  <path fill="currentColor"
                    d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
                </svg>
              </button></div>
            <div class="product-cell price">Status<button class="sort-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
                  <path fill="currentColor"
                    d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
                </svg>
              </button></div>
          </div>



          <?php


// Selectionner tous si variable sqlo n'existe pas

if(!isset($sqlOrders)){
$sqlOrders = "SELECT * FROM commandes  ORDER BY ID_COMMANDE DESC LIMIT 4";
}  
$ordersTable = mysqli_query($conn,$sqlOrders);
while($order = mysqli_fetch_array($ordersTable))
{
$id_utilisateur = $order["ID_UTILISATEUR"];
$selectionnerUtilisateur = "SELECT * FROM utilisateurs WHERE ID_UTILISATEUR = '$id_utilisateur'";
$utilisateurInfo= mysqli_query($conn,$selectionnerUtilisateur);
$utilisateur = mysqli_fetch_array($utilisateurInfo);

?>
          <div class="products-row">
            <button class="cell-more-button">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-more-vertical">
                <circle cx="12" cy="12" r="1" />
                <circle cx="12" cy="5" r="1" />
                <circle cx="12" cy="19" r="1" /></svg>
            </button>
            <div class="product-cell image">
              <span><?php echo  $utilisateur["NOM"]; ?></span>
            </div>
            <div class="product-cell sales"><?php echo  $order["MONTANT_TOTAL"]; ?> DH
            </div>
            <div class="product-cell status-cell">
              <span class="price <?php echo  $order["STATUT"]; ?>"><?php echo  $order["STATUT"]; ?></span>
            </div>

          </div>
          <?php
}
?>

        </div>











        <!-- Les messages -->


        <div class="products-area-wrapper tableViewH messagesLink">

          <!-- Entete de la table  -->

          <div class="table__header third__header">
            <span class="table__title">Dernières messages ajoutés</span>



            <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0)">
                <path
                  d="M47.1762 34.1257C47.1945 34.1035 47.2133 34.0822 47.2312 34.06C47.2828 33.996 47.3329 33.9307 47.3822 33.8651C47.3906 33.854 47.3994 33.843 47.4078 33.8315C48.2479 32.6974 48.7039 31.3295 48.7039 29.8978V4.02948C48.7039 1.80741 46.893 0 44.6669 0H21.0525C18.8264 0 17.0151 1.80741 17.0151 4.02948V13.2145C15.9013 13.1493 14.7704 13.3397 13.7388 13.7772C12.284 14.3944 11.0969 15.4442 10.3049 16.8137L6.44378 23.4872L2.58263 30.1614C2.20844 30.8084 1.94624 31.4897 1.78991 32.1832C1.73755 32.414 1.69742 32.6467 1.66875 32.8794C1.65423 32.9957 1.64276 33.1125 1.63397 33.2292C1.61677 33.4623 1.61104 33.6954 1.61639 33.9281C1.61906 34.0555 1.62633 34.1821 1.63588 34.3091C1.68748 34.9878 1.83387 35.6561 2.07046 36.2928C2.14002 36.4797 2.21838 36.6632 2.30323 36.844C2.3189 36.8772 2.33304 36.9112 2.3491 36.9443C2.9595 38.1967 3.93721 39.287 5.23368 40.0343C5.27076 40.0556 5.30783 40.0755 5.34529 40.0961C5.37778 40.114 5.41027 40.1327 5.44314 40.1502C5.46913 40.164 5.4955 40.1769 5.52149 40.1907C5.56698 40.2139 5.61208 40.2376 5.65794 40.2601C5.67438 40.2681 5.69081 40.2754 5.70725 40.2834C5.76343 40.3104 5.82 40.3375 5.87695 40.3631C5.88116 40.365 5.88536 40.3665 5.88957 40.3684C6.81873 40.785 7.82855 41.0028 8.84792 41.0028C9.90437 41.0028 10.9406 40.7716 11.8865 40.3372C11.8938 40.3337 11.9011 40.3307 11.9087 40.3272C11.9156 40.3242 11.9225 40.3215 11.9293 40.3181C12.1487 42.7839 13.2121 45.0762 14.9798 46.8538C16.9735 48.8585 19.6291 49.9754 22.4583 49.9991H22.4667H22.4671H22.48C22.5026 49.9994 22.5248 49.9998 22.5469 49.9998C27.4282 49.9998 31.5535 46.7089 32.8129 42.2334H36.5318C37.4836 42.2334 38.42 42.0233 39.2762 41.6357C39.3002 41.6265 39.3243 41.6177 39.3476 41.6071C39.4741 41.5479 39.5972 41.4839 39.7191 41.4175C39.7199 41.4171 39.7203 41.4167 39.7211 41.4163C39.8155 41.3648 39.9083 41.311 39.9997 41.2554C40.005 41.2523 40.01 41.2489 40.0154 41.2458C40.1017 41.1928 40.187 41.1375 40.2711 41.0806C40.2799 41.0745 40.2886 41.0684 40.2974 41.0627C40.3766 41.0082 40.4545 40.9525 40.5314 40.8949C40.544 40.8853 40.5566 40.8758 40.5692 40.8663C40.6407 40.8117 40.7106 40.7556 40.7798 40.698C40.7962 40.6847 40.8127 40.6717 40.8287 40.658C40.8941 40.603 40.9575 40.5458 41.021 40.4882C41.0386 40.4718 41.0569 40.4562 41.0745 40.4398C41.1498 40.3692 41.2239 40.2971 41.2962 40.2227C41.2988 40.2197 41.3019 40.217 41.3046 40.2139L46.8372 34.506C46.8826 34.4591 46.9255 34.4106 46.9694 34.3625C46.9923 34.3374 47.016 34.313 47.039 34.2878C47.0856 34.2348 47.1307 34.1802 47.1762 34.1257ZM11.9997 17.7899C12.9525 16.1423 14.7383 15.1536 16.5962 15.1536C16.9868 15.1536 17.3813 15.1974 17.7715 15.2882C18.278 15.4061 18.7645 15.5984 19.2174 15.8593C20.848 16.7992 21.8605 18.5521 21.8605 20.4339C21.8605 21.3536 21.6159 22.2634 21.1522 23.0645L17.7807 28.8926L8.62776 23.6184L11.9997 17.7899ZM11.7638 38.178C11.7203 38.2063 11.6767 38.2349 11.6324 38.2619C11.6136 38.2738 11.5941 38.2845 11.575 38.2959C11.5372 38.3188 11.499 38.3413 11.4604 38.3634C11.4371 38.3764 11.4134 38.389 11.39 38.4019C11.3556 38.4206 11.3212 38.4393 11.2865 38.4573C11.2589 38.4714 11.231 38.4851 11.2031 38.4988C11.1729 38.5141 11.1424 38.5286 11.1118 38.5431C11.0793 38.5583 11.0468 38.5732 11.0139 38.5877C10.9883 38.5992 10.9631 38.6102 10.9375 38.6213C10.8993 38.6377 10.8611 38.6533 10.8224 38.6686C10.8037 38.6762 10.7846 38.6835 10.7659 38.6911C10.7204 38.7083 10.6749 38.7254 10.629 38.7418C10.6195 38.7453 10.6099 38.7483 10.6004 38.7518C9.47437 39.1431 8.23408 39.1485 7.09393 38.7476C7.0924 38.7472 7.09049 38.7464 7.08896 38.746C7.03469 38.727 6.98079 38.7067 6.92728 38.6858C6.91658 38.6816 6.90588 38.6774 6.89556 38.6732C6.85046 38.6552 6.80574 38.6366 6.76102 38.6175C6.74573 38.6106 6.73044 38.6041 6.71515 38.5973C6.67426 38.5797 6.63412 38.5606 6.59399 38.5419C6.57679 38.5339 6.55959 38.5259 6.54277 38.5175C6.50264 38.4981 6.46251 38.4779 6.42314 38.4573C6.40709 38.4492 6.39103 38.4412 6.37498 38.4328C6.32032 38.4039 6.26605 38.3737 6.21216 38.3428C3.68876 36.8883 2.82113 33.6561 4.27738 31.1376L7.64929 25.3095L16.6482 30.4952C16.6157 30.5169 16.584 30.5394 16.5515 30.5616C16.5136 30.5871 16.4754 30.6131 16.438 30.639C16.4231 30.6493 16.4085 30.6592 16.394 30.6699C16.3669 30.689 16.3401 30.7088 16.3134 30.7279C16.3118 30.729 16.3107 30.7302 16.3092 30.7309C16.2717 30.758 16.2342 30.7847 16.1976 30.8122C16.1804 30.8248 16.1632 30.8378 16.146 30.8507C16.1165 30.8728 16.0875 30.8954 16.058 30.9179C16.0263 30.9423 15.9942 30.9663 15.9625 30.9911C15.9426 31.0067 15.9231 31.0224 15.9036 31.038C15.8727 31.0624 15.8425 31.0869 15.8123 31.1116C15.7859 31.1334 15.7592 31.1544 15.7328 31.1761C15.7106 31.1944 15.6888 31.2135 15.667 31.2318C15.6357 31.2585 15.6044 31.2852 15.573 31.3119C15.552 31.3302 15.5302 31.3485 15.5092 31.3669C15.4847 31.3882 15.4606 31.4107 15.4366 31.4325C15.4045 31.4611 15.3724 31.4897 15.3406 31.5187C15.3242 31.5336 15.3078 31.5484 15.2913 31.5633C15.2646 31.5881 15.2386 31.6137 15.2122 31.6388C15.1793 31.6697 15.1468 31.7006 15.1147 31.7315C15.0727 31.7727 15.031 31.8139 14.9898 31.8555C14.9588 31.8868 14.9278 31.9177 14.8969 31.949C14.8911 31.9551 14.885 31.9612 14.8789 31.9673C14.843 32.0047 14.8078 32.0428 14.7723 32.0806C14.7444 32.1103 14.7157 32.1397 14.6882 32.1695C14.6855 32.1725 14.6825 32.176 14.6798 32.179C14.6419 32.2202 14.6052 32.2622 14.5682 32.3037C14.5437 32.3312 14.5189 32.3583 14.4948 32.3858C14.489 32.3926 14.4833 32.3991 14.4776 32.406C14.4443 32.4445 14.4118 32.4838 14.379 32.5227C14.353 32.5536 14.327 32.5841 14.3014 32.615C14.28 32.6413 14.259 32.6677 14.2376 32.694C14.2234 32.7115 14.21 32.7291 14.1959 32.7463C14.1703 32.7791 14.1439 32.8115 14.1183 32.8443C14.1099 32.8554 14.1007 32.8664 14.0923 32.8775C14.0659 32.9118 14.0403 32.9465 14.0147 32.9812C13.991 33.0125 13.9673 33.0438 13.944 33.0755C13.9325 33.0915 13.9207 33.1071 13.9092 33.1228C13.8848 33.1567 13.8607 33.1914 13.8366 33.2254C13.8163 33.254 13.7957 33.2826 13.7758 33.3116C13.7617 33.3318 13.7476 33.352 13.7338 33.3722C13.7109 33.4062 13.6883 33.4402 13.6658 33.4741C13.6486 33.5 13.6314 33.526 13.6145 33.5515C13.5981 33.5767 13.5817 33.6015 13.5656 33.6267C13.5442 33.6599 13.5232 33.6934 13.5022 33.727C13.4876 33.7503 13.4735 33.7732 13.4594 33.7961C13.441 33.8258 13.423 33.8556 13.4051 33.8853C13.3852 33.9181 13.3653 33.9513 13.3458 33.9845C13.3344 34.0043 13.3229 34.0246 13.3111 34.0448C13.2912 34.0791 13.2717 34.1134 13.2522 34.1478C13.2339 34.1806 13.2155 34.213 13.1975 34.2458C13.1926 34.2546 13.188 34.2637 13.183 34.2729C13.1777 34.2824 13.1723 34.2924 13.1673 34.3023C13.1471 34.3397 13.1268 34.377 13.107 34.4144C13.0791 34.4675 13.0519 34.5209 13.0248 34.5743C13.0061 34.6109 12.9881 34.6475 12.9701 34.6841C12.943 34.7394 12.9162 34.7948 12.8902 34.8504C12.8734 34.8859 12.8574 34.9214 12.8409 34.9569C12.839 34.9611 12.8371 34.9653 12.8352 34.9695C12.8279 34.9859 12.8203 35.0019 12.8126 35.0183C12.7962 35.0557 12.7798 35.0927 12.7637 35.1301C12.75 35.1617 12.7366 35.1934 12.7232 35.2251C12.7137 35.2476 12.7041 35.2701 12.6949 35.2926C12.6781 35.3326 12.6617 35.3731 12.6452 35.4135C12.6345 35.4402 12.6246 35.4669 12.6139 35.4936C12.6043 35.5188 12.5944 35.5436 12.5848 35.5688C12.568 35.6126 12.5516 35.6561 12.5352 35.7C12.5275 35.7217 12.5199 35.7435 12.5118 35.7652C12.5023 35.7927 12.4924 35.8205 12.4828 35.848C12.4664 35.8949 12.4495 35.9422 12.4335 35.9895C12.4281 36.0063 12.4228 36.0235 12.4174 36.0403C12.4079 36.0693 12.3983 36.099 12.3892 36.1284C12.3681 36.1936 12.3475 36.2588 12.328 36.3248C12.32 36.3523 12.3119 36.3801 12.3039 36.408C12.2844 36.4763 12.2649 36.5442 12.2466 36.6128C12.2409 36.6346 12.2355 36.6567 12.2298 36.6788C12.1942 36.8146 12.1614 36.9516 12.1315 37.0893C12.127 37.1107 12.1216 37.1316 12.117 37.153C12.1033 37.219 12.0906 37.2858 12.078 37.3521C12.0711 37.3865 12.0643 37.4204 12.0582 37.4548C12.057 37.4597 12.0562 37.4647 12.0551 37.47C12.0452 37.5261 12.036 37.5825 12.0268 37.639C12.0211 37.6745 12.015 37.7096 12.0096 37.7451C12.0081 37.7546 12.0066 37.7649 12.0054 37.7744C11.9974 37.8271 11.9905 37.8801 11.9832 37.9327C11.9817 37.9457 11.9798 37.9587 11.9779 37.9716C11.9752 37.9934 11.9718 38.0148 11.9691 38.0361C11.9141 38.0762 11.8583 38.1151 11.8021 38.1528C11.7895 38.1616 11.7765 38.1696 11.7638 38.178ZM13.8431 39.3594C13.8431 39.1157 13.8534 38.8715 13.8748 38.6285C13.8821 38.5404 13.8905 38.4531 13.9008 38.3657C13.9195 38.2005 13.9432 38.0365 13.9715 37.874C13.9731 37.8645 13.9742 37.8549 13.9761 37.8454C13.9872 37.7824 13.9994 37.7199 14.012 37.6573C14.0166 37.634 14.0208 37.6108 14.0254 37.5879C14.0369 37.5326 14.0499 37.4776 14.0625 37.4227C14.0694 37.3926 14.0755 37.3624 14.0828 37.3327C14.0942 37.2839 14.1072 37.2362 14.1194 37.1877C14.129 37.1519 14.1374 37.1156 14.1473 37.0798C14.1592 37.0355 14.1726 36.9916 14.1856 36.9474C14.1967 36.9081 14.2077 36.8684 14.2196 36.8295C14.2322 36.7883 14.2456 36.7479 14.259 36.7075C14.2723 36.6655 14.2849 36.6231 14.2991 36.5816C14.3125 36.543 14.3266 36.5045 14.3404 36.466C14.3553 36.4233 14.3702 36.3798 14.3859 36.337C14.4 36.2997 14.4149 36.263 14.429 36.2257C14.4462 36.1822 14.4627 36.1387 14.4799 36.0952C14.4944 36.0597 14.5101 36.0246 14.525 35.9895C14.5437 35.9453 14.5617 35.9006 14.5812 35.8572C14.5961 35.8232 14.6121 35.7896 14.6274 35.7561C14.6481 35.711 14.6683 35.666 14.6893 35.6218C14.705 35.5897 14.7211 35.5581 14.7367 35.526C14.7593 35.4806 14.7814 35.4349 14.8044 35.3898C14.8204 35.3586 14.8376 35.3281 14.8541 35.2972C14.8781 35.2518 14.9018 35.2067 14.9263 35.1617C14.9431 35.1316 14.9607 35.1018 14.9779 35.0721C15.0035 35.0271 15.0287 34.9821 15.0551 34.9374C15.0727 34.9077 15.091 34.8787 15.109 34.8493C15.1358 34.8051 15.1625 34.7608 15.19 34.7169C15.2088 34.6879 15.2279 34.6593 15.247 34.6303C15.2749 34.5872 15.3028 34.5437 15.3318 34.5006C15.3513 34.472 15.3712 34.4442 15.3911 34.416C15.4205 34.3732 15.4496 34.3309 15.4798 34.2885C15.5 34.2607 15.521 34.2332 15.5417 34.2054C15.5723 34.1638 15.6028 34.1218 15.6342 34.081C15.6556 34.0532 15.6774 34.0265 15.6991 33.999C15.7309 33.9586 15.7622 33.9178 15.7947 33.8777C15.8176 33.8502 15.8409 33.8231 15.8639 33.7957C15.8964 33.7568 15.9285 33.7179 15.9617 33.6793C15.9854 33.6519 16.0099 33.6252 16.034 33.5981C16.0672 33.5603 16.1005 33.5229 16.1345 33.4859C16.159 33.4588 16.1846 33.4329 16.2094 33.4062C16.2442 33.3696 16.2782 33.333 16.3134 33.2971C16.339 33.2708 16.3653 33.2452 16.3913 33.2193C16.4265 33.1838 16.4617 33.1483 16.498 33.1136C16.5247 33.0877 16.5523 33.0625 16.5794 33.0369C16.6157 33.003 16.6512 32.9687 16.6879 32.9355C16.7162 32.9099 16.7449 32.8851 16.7732 32.8599C16.8102 32.8275 16.8466 32.7947 16.884 32.7627C16.9134 32.7371 16.9436 32.7127 16.9738 32.6879C17.0109 32.657 17.0476 32.6257 17.0854 32.5952C17.116 32.5708 17.1477 32.5467 17.1787 32.5223C17.2165 32.493 17.254 32.4628 17.2926 32.4338C17.3243 32.4098 17.3568 32.3865 17.3889 32.3629C17.4275 32.3346 17.4658 32.306 17.5047 32.2782C17.5376 32.2549 17.5712 32.2324 17.6045 32.2095C17.6439 32.1824 17.6828 32.155 17.7226 32.1283C17.7566 32.1058 17.7914 32.0836 17.8262 32.0615C17.8655 32.036 17.9049 32.01 17.945 31.9852C17.9806 31.9631 18.0169 31.9417 18.0528 31.92C18.0922 31.8963 18.1312 31.8719 18.1713 31.849C18.1759 31.8464 18.1809 31.8437 18.1855 31.841C18.2971 31.7762 18.4106 31.7151 18.5253 31.6556C18.5547 31.6404 18.5845 31.6251 18.6139 31.6102C18.7297 31.5519 18.8463 31.495 18.9644 31.4416C18.9656 31.4412 18.9667 31.4405 18.9679 31.4401C19.7659 31.0811 20.6167 30.8439 21.4878 30.7378V47.9822C17.1909 47.4562 13.8431 43.7769 13.8431 39.3594ZM23.4448 48.0013V30.7187C23.4471 30.7187 23.4493 30.7191 23.4516 30.7195C23.5808 30.7328 23.7093 30.7493 23.8365 30.7679C23.8438 30.7691 23.8511 30.7702 23.8583 30.771C23.9818 30.7897 24.1041 30.8114 24.226 30.8355C24.2402 30.8381 24.2543 30.8408 24.2688 30.8435C24.3862 30.8671 24.502 30.8934 24.6174 30.9217C24.6354 30.9259 24.6533 30.9301 24.6713 30.9346C24.784 30.9629 24.896 30.9938 25.0073 31.0266C25.0264 31.0323 25.0459 31.038 25.0654 31.0437C25.1751 31.0769 25.2844 31.1124 25.3922 31.1498C25.4113 31.1563 25.4304 31.1631 25.4495 31.17C25.5577 31.2082 25.6651 31.2482 25.7713 31.2909C25.7885 31.2978 25.8053 31.3047 25.8225 31.3115C25.9307 31.3554 26.0377 31.4012 26.1436 31.4493C26.1566 31.4554 26.1692 31.4615 26.1822 31.4676C26.2919 31.5179 26.4004 31.5702 26.5075 31.6251C26.5132 31.6282 26.5193 31.6312 26.5254 31.6346C26.6305 31.6884 26.7341 31.7449 26.8365 31.8033C26.8469 31.809 26.8572 31.8143 26.8671 31.8204C26.9684 31.878 27.0678 31.9383 27.1664 32.0001C27.1813 32.0096 27.1966 32.0188 27.2115 32.0283C27.3063 32.0886 27.3999 32.1512 27.4924 32.2152C27.5096 32.2271 27.5268 32.2389 27.544 32.2507C27.6346 32.3144 27.7237 32.38 27.812 32.4468C27.8292 32.4602 27.8467 32.4735 27.8643 32.4869C27.9515 32.5544 28.0375 32.6234 28.1219 32.6936C28.1384 32.7077 28.1552 32.7218 28.1716 32.7356C28.2565 32.8077 28.3398 32.8809 28.422 32.9557C28.4361 32.9687 28.4503 32.982 28.4644 32.9954C28.5477 33.0724 28.6303 33.1514 28.7106 33.2319C28.7209 33.2422 28.7312 33.2532 28.7415 33.2635C28.8245 33.3475 28.9062 33.4329 28.9861 33.5203C28.9907 33.5256 28.9953 33.5306 28.9999 33.5359C29.0782 33.6221 29.1547 33.7102 29.2296 33.7999C29.2376 33.8094 29.2457 33.819 29.2537 33.8285C29.3274 33.9174 29.3989 34.0078 29.4693 34.0997C29.48 34.1138 29.491 34.1276 29.5017 34.1417C29.5694 34.2317 29.6351 34.3229 29.6997 34.4152C29.7112 34.4324 29.723 34.4488 29.7345 34.4655C29.7976 34.5575 29.8587 34.6506 29.918 34.7448C29.9294 34.7627 29.9405 34.7806 29.952 34.799C30.0105 34.8936 30.0678 34.9893 30.1228 35.0866C30.1332 35.1045 30.1431 35.1224 30.153 35.1404C30.2085 35.2392 30.262 35.3391 30.3132 35.4402C30.3212 35.4558 30.3289 35.4715 30.3369 35.4871C30.3892 35.5916 30.4397 35.6969 30.4879 35.8037C30.4932 35.8152 30.4982 35.8266 30.5031 35.8381C30.5528 35.9498 30.601 36.0631 30.6465 36.1776C30.6476 36.1803 30.6484 36.1829 30.6495 36.1856C30.6946 36.2997 30.7371 36.4152 30.7772 36.5316C30.7806 36.5419 30.7845 36.5518 30.7879 36.5621C30.8265 36.6754 30.8624 36.7898 30.8968 36.9051C30.9014 36.9203 30.906 36.9356 30.9106 36.9512C30.9431 37.0637 30.9733 37.1774 31.0012 37.2919C31.0058 37.3102 31.0103 37.3281 31.0146 37.3468C31.0417 37.4601 31.0665 37.5742 31.0891 37.6894C31.0929 37.7088 31.0967 37.7279 31.1002 37.7473C31.122 37.8629 31.1414 37.9789 31.1586 38.096C31.1613 38.1143 31.164 38.133 31.1667 38.1517C31.1831 38.2707 31.1976 38.3901 31.2095 38.5103C31.211 38.5263 31.2122 38.5423 31.2137 38.5583C31.2252 38.6823 31.2343 38.8067 31.2404 38.9322C31.2408 38.9425 31.2412 38.9528 31.2416 38.9631C31.2477 39.0943 31.2511 39.2267 31.2511 39.3598C31.2511 39.5017 31.2477 39.6436 31.2404 39.7852C31.2393 39.8149 31.2359 39.8443 31.2343 39.8737C31.2278 39.9851 31.2206 40.0964 31.2095 40.2075C31.2049 40.2536 31.1984 40.2994 31.193 40.3455C31.1827 40.4375 31.1724 40.5298 31.159 40.6213C31.1495 40.6866 31.1372 40.7507 31.1262 40.8155C31.1143 40.8861 31.1032 40.9567 31.0895 41.0269C30.3644 44.7359 27.2677 47.6084 23.4448 48.0013ZM33.1683 40.2803C33.1691 40.2723 33.1691 40.2643 33.1699 40.2559C33.1813 40.1197 33.1901 39.9824 33.1966 39.8447C33.1974 39.8237 33.1982 39.8027 33.1989 39.7817C33.2043 39.6417 33.2081 39.501 33.2081 39.3598C33.2081 38.3657 33.0705 37.4033 32.8136 36.49H34.5772C35.1176 36.49 35.5557 36.0528 35.5557 35.5134C35.5557 34.9744 35.1176 34.5369 34.5772 34.5369H32.0484C30.2834 31.0872 26.6871 28.7194 22.5469 28.7194C22.5259 28.7194 22.5049 28.7198 22.4839 28.7202L22.4648 28.7206H22.4579C22.3459 28.7214 22.2339 28.7244 22.1219 28.729C22.0978 28.7297 22.0737 28.7317 22.0501 28.7328C21.9656 28.7366 21.8815 28.7412 21.7974 28.7469C21.7492 28.7503 21.7015 28.7549 21.6533 28.7587C21.5941 28.7637 21.5348 28.7687 21.476 28.7748C21.4167 28.7805 21.3575 28.7877 21.2982 28.7946C21.2512 28.8003 21.2038 28.8057 21.1564 28.8118C21.0907 28.8205 21.0253 28.8301 20.9596 28.84C20.9195 28.8461 20.8793 28.8518 20.8392 28.8587C20.7696 28.8697 20.6997 28.882 20.6301 28.8945C20.5946 28.901 20.5594 28.9075 20.5239 28.9144C20.4516 28.9285 20.3794 28.943 20.3071 28.9586C20.2747 28.9655 20.2422 28.9727 20.2097 28.98C20.1363 28.9964 20.0625 29.0136 19.9895 29.0315C19.9781 29.0342 19.967 29.0364 19.9559 29.0395L22.8466 24.0411C23.4818 22.9436 23.8174 21.6962 23.8174 20.4339C23.8174 17.8567 22.43 15.4561 20.1963 14.1682C20.1072 14.1171 20.0167 14.0683 19.9261 14.0206C19.8974 14.0057 19.8684 13.9916 19.8397 13.9771C19.7755 13.9447 19.7113 13.9134 19.6463 13.8829C19.6138 13.8676 19.5817 13.8527 19.5488 13.8379C19.4823 13.8081 19.4154 13.7791 19.3478 13.7513C19.3199 13.7398 19.292 13.7276 19.2637 13.7162C19.1689 13.6784 19.0737 13.6422 18.9774 13.6082C18.9759 13.6078 18.974 13.6071 18.9721 13.6063V4.02948C18.9721 2.8843 19.9054 1.95313 21.0525 1.95313H44.6669C45.814 1.95313 46.747 2.8843 46.747 4.02948V29.8974C46.747 30.3464 46.6831 30.7866 46.5608 31.207H41.4873C39.5391 31.207 37.9541 32.789 37.9541 34.7337V40.0572C37.4969 40.2029 37.0173 40.2803 36.5318 40.2803H33.1683ZM39.911 38.8429V34.7337C39.911 33.8659 40.6181 33.1602 41.4873 33.1602H45.418L40.3586 38.381L39.911 38.8429Z"
                  fill="#8f64e0" stroke="#8f64e0" stroke-width="2" />
                <path
                  d="M25.055 10.6854H40.5979C41.1383 10.6854 41.5763 10.2482 41.5763 9.70882C41.5763 9.16942 41.1383 8.73225 40.5979 8.73225H25.055C24.5146 8.73225 24.0766 9.16942 24.0766 9.70882C24.0766 10.2482 24.5146 10.6854 25.055 10.6854V10.6854Z"
                  fill="#8f64e0" stroke="#8f64e0" stroke-width="2" />
                <path
                  d="M40.8348 17.3337H40.8326C40.2921 17.3337 39.8552 17.7712 39.8552 18.3102C39.8552 18.8496 40.2944 19.2868 40.8348 19.2868C41.3753 19.2868 41.8133 18.8496 41.8133 18.3102C41.8133 17.7712 41.3753 17.3337 40.8348 17.3337V17.3337Z"
                  fill="#8f64e0" stroke="#8f64e0" stroke-width="2" />
                <path
                  d="M37.6544 18.3102C37.6544 17.7712 37.2164 17.3337 36.6759 17.3337H25.055C24.5146 17.3337 24.0766 17.7712 24.0766 18.3102C24.0766 18.8496 24.5146 19.2868 25.055 19.2868H36.6759C37.2164 19.2868 37.6544 18.8496 37.6544 18.3102Z"
                  fill="#8f64e0" stroke="#8f64e0" stroke-width="2" />
                <path
                  d="M41.5763 26.912C41.5763 26.3726 41.1383 25.9355 40.5979 25.9355H29.8159C29.2759 25.9355 28.8374 26.3726 28.8374 26.912C28.8374 27.4511 29.2759 27.8886 29.8159 27.8886H40.5979C41.1383 27.8886 41.5763 27.4514 41.5763 26.912V26.912Z"
                  fill="#8f64e0" stroke="#8f64e0" stroke-width="2" />
              </g>
              <defs>
                <clipPath id="clip0">
                  <rect width="50" height="50" fill="white" />
                </clipPath>
              </defs>
            </svg>



          </div>
          <div class="products-header">
            <div class="product-cell category">Ordonnance<button class="sort-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
                  <path fill="currentColor"
                    d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
                </svg>
              </button></div>
            <div class="product-cell image">
              Nom
            </div>
            <div class="product-cell category">Date de message<button class="sort-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
                  <path fill="currentColor"
                    d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
                </svg>
              </button></div>
          </div>

          <?php

  $sqlPrescription = "SELECT * FROM messages_ordonnance  ORDER BY DATE_MESSAGE DESC LIMIT 5 ";
  $pTable= mysqli_query($conn,$sqlPrescription);

  while($messageLigne = mysqli_fetch_array($pTable))
  {
    $idUtilisateur = $messageLigne['ID_UTILISATEUR'];
    $selectionnerU = "SELECT * FROM utilisateurs WHERE ID_UTILISATEUR = '$idUtilisateur'";
    $utilisateur = mysqli_query($conn,$selectionnerU);
    $utilisateurInfo =  mysqli_fetch_array($utilisateur);
  ?>

          <div class="products-row">
            <?php
      if($messageLigne["ORDONNANCE"] !== NULL){
      ?>
            <div class="product-cell image">
              <img src="../<?php echo   $messageLigne["ORDONNANCE"]; ?>" alt="ordonnance"></div>
            <?php 
      }else{
      ?>
            <div class="product-cell stock">Pas d'ordonnace</div>
            <?php
      }
      ?>
            <div class="product-cell stock"><?php echo  $utilisateurInfo["NOM"]; ?></div>
            <div class="product-cell stock"><?php echo  $messageLigne["DATE_MESSAGE"]; ?></div>
          </div>
          <?php
  }
  ?>


        </div>











































      </div>















    </section>














    <!-- section produits -->

    <section id="products">

      <div class="app-content">

        <!-- Entete du section produits -->

        <div class="app-content-header">
          <h1 class="app-content-headerText">Produits</h1>
          <button class="mode-switch" title="Thème">
            <svg class="moon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
              stroke-width="2" width="18" height="18" viewBox="0 0 24 24">
              <defs></defs>
              <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
            </svg>
          </button>
          <button class="app-content-headerButton">Ajouter un produit</button>
        </div>

        <!-- Rechercher avec des filtres -->

        <?php 
        require_once "cbd.php";
        ?>

        <form action="pharmacien.php" method="get">
          <div class="app-content-actions">
            <input class="search-bar" name="searchByWord" placeholder="Rechercher..." type="text">
            <div class="app-content-actions-wrapper">
              <div class="filter-button-wrapper">
                <button type="button" class="action-button filter jsFilter" id="1"><span>Filtre</span><svg
                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-filter">
                    <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3" /></svg></button>
                <div class="filter-menu" id="2">
                  <label>Catégorie</label>
                  <select name="categorie">
                    <option value="tous">Tous les catégories</option>
                    <?php
                    $selectCategorie = "SELECT * FROM sous_sous_categories";
                    $categotireTable= mysqli_query($conn,$selectCategorie);
                
                    while($categotireLigne = mysqli_fetch_array($categotireTable))
                    {
                    ?>
                    <option value="<?php echo  $categotireLigne["ID_SSCATEGORIE"]; ?>">
                      <?php echo  $categotireLigne["NOM_SSCATEGORIE"]; ?></option>
                    <?php
                    }
                    ?>
                  </select>
                  <label>Promotions</label>
                  <select name="promo">
                    <option value="tous">Tous les prix</option>
                    <option value="avec">Avec promotion</option>
                    <option value="sans">Sans promotion</option>
                  </select>
                  <div class="filter-menu-buttons">
                    <button type="reset" class="filter-button reset">
                      Annuler
                    </button>
                    <button name="filterProductBtn" type="submit" class="filter-button apply">
                      Appliquer
                    </button>
                  </div>
                </div>
              </div>
            </div>
        </form>
        <button type="button" class="action-button list active" title="Liste vue">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-list">
            <line x1="8" y1="6" x2="21" y2="6" />
            <line x1="8" y1="12" x2="21" y2="12" />
            <line x1="8" y1="18" x2="21" y2="18" />
            <line x1="3" y1="6" x2="3.01" y2="6" />
            <line x1="3" y1="12" x2="3.01" y2="12" />
            <line x1="3" y1="18" x2="3.01" y2="18" /></svg>
        </button>
        <button type="button" class="action-button grid" title="Grille vue">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-grid">
            <rect x="3" y="3" width="7" height="7" />
            <rect x="14" y="3" width="7" height="7" />
            <rect x="14" y="14" width="7" height="7" />
            <rect x="3" y="14" width="7" height="7" /></svg>
        </button>
      </div>

      <!-- Les produits  -->

      <div class="products-area-wrapper tableView">

        <!-- Entete de la table  -->

        <div class="products-header">
          <div class="product-cell image">
            Articles
            <button class="sort-button">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
                <path fill="currentColor"
                  d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
              </svg>
            </button>
          </div>
          <div class="product-cell category">Catégorie<button class="sort-button">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
                <path fill="currentColor"
                  d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
              </svg>
            </button></div>
          <div class="product-cell price-cell">Code Barres<button class="sort-button">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
                <path fill="currentColor"
                  d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
              </svg>
            </button></div>
          <div class="product-cell sales">Marque<button class="sort-button">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
                <path fill="currentColor"
                  d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
              </svg>
            </button></div>
          <div class="product-cell stock">Stock<button class="sort-button">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
                <path fill="currentColor"
                  d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
              </svg>
            </button></div>
          <div class="product-cell price">Prix<button class="sort-button">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
                <path fill="currentColor"
                  d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
              </svg>
            </button></div>
        </div>

        <?php 

  // Filter avec nom

  if(isset($_GET["searchByWord"]) && trim($_GET["searchByWord"]) != ''){
    $searchedWord = trim($_GET["searchByWord"]);
    $sql = "SELECT * FROM produits WHERE NOM LIKE '%$searchedWord%'";
    $produits= mysqli_query($conn,$sql);
    } 


  if(isset($_GET['filterProductBtn'])){

  // Filter avec categorie

  if($_GET['categorie'] !== 'tous'){
  $searchedcat = trim($_GET["categorie"]);
  $sql = "SELECT * FROM produits WHERE ID_SSCATEGORIE LIKE '$searchedcat'";
  $produits= mysqli_query($conn,$sql);
  }

  // Filter avec promos

  if($_GET['promo'] !== 'tous'){
  $searchedPromos = trim($_GET["promo"]);
  if($searchedPromos === 'avec'){
  $sql = "SELECT * FROM produits WHERE PRIX_PROMO IS NOT NULL";
  $produits= mysqli_query($conn,$sql);
  }
  else{
  $sql = "SELECT * FROM produits WHERE PRIX_PROMO IS NULL";
  $produits= mysqli_query($conn,$sql);
  }
  }

  // Filter avec promos et cat

  if($_GET['promo'] !== 'tous' && $_GET['categorie'] !== 'tous'){
  $searchedcat = trim($_GET["categorie"]);
  $searchedPromos = trim($_GET["promo"]);
  if($searchedPromos === 'avec'){
  $sql = "SELECT * FROM produits WHERE ID_SSCATEGORIE LIKE '$searchedcat' AND PRIX_PROMO IS NOT NULL";
  $produits= mysqli_query($conn,$sql);
  }
  else{
  $sql = "SELECT * FROM produits WHERE ID_SSCATEGORIE LIKE '$searchedcat' AND PRIX_PROMO IS NULL";
  $produits= mysqli_query($conn,$sql);
  }
  }

  // Filter avec promos et cat et nom

  if($_GET['promo'] !== 'tous' && $_GET['categorie'] !== 'tous' && isset($_GET["searchByWord"]) && trim($_GET["searchByWord"]) != ''){
  $searchedWord = trim($_GET["searchByWord"]);
  $searchedcat = trim($_GET["categorie"]);
  $searchedPromos = trim($_GET["promo"]);
  if($searchedPromos === 'avec'){
  $sql = "SELECT * FROM produits WHERE NOM LIKE '%$searchedWord%' AND ID_SSCATEGORIE LIKE '$searchedcat' AND PRIX_PROMO IS NOT NULL";
  $produits= mysqli_query($conn,$sql);
  }
  else{
  $sql = "SELECT * FROM produits WHERE NOM LIKE '%$searchedWord%' AND ID_SSCATEGORIE LIKE '$searchedcat' AND PRIX_PROMO IS NULL";
  $produits= mysqli_query($conn,$sql);
  }
  }


  }


  // Selectionner tous si variable produits n'existe pas

  if(!isset($sql)){
  $sql = "SELECT * FROM produits";
  $produits= mysqli_query($conn,$sql);
  }
  while($produit = mysqli_fetch_array($produits))
  {
  $id_marque = $produit['ID_MARQUE'];
  $selectionnerMarque = "SELECT * FROM marques WHERE ID_MARQUE = '$id_marque';";
  $marqueInfo = mysqli_query($conn,$selectionnerMarque); 
  $marque = mysqli_fetch_array($marqueInfo);

  $id_SSCtaegorie = $produit['ID_SSCATEGORIE'];
  $selectionnerSScategorie= "SELECT * FROM sous_sous_categories WHERE ID_SSCATEGORIE = '$id_SSCtaegorie';";
  $sSCategorieInfo = mysqli_query($conn,$selectionnerSScategorie); 
  $sSCategorie = mysqli_fetch_array($sSCategorieInfo);
  ?>

        <div class="products-row">
          <button class="cell-more-button">
            <a href="gererProduit.php?id-produit=<?php echo  $produit["ID_PRODUIT"]; ?>" class="more-link">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-more-vertical">
                <circle cx="12" cy="12" r="1" />
                <circle cx="12" cy="5" r="1" />
                <circle cx="12" cy="19" r="1" /></svg>
            </a>
          </button>
          <div class="product-cell image">
            <img src="../<?php echo  $produit["IMAGE"]; ?>" alt="Produit">
            <span><?php echo  $produit["NOM"]; ?></span>
          </div>
          <div class="product-cell category"><span
              class="cell-label">Catégorie:</span><?php echo  $sSCategorie["NOM_SSCATEGORIE"]; ?></div>
          <div class="product-cell codebarres"><span class="cell-label">Code
              Barres:</span><?php echo  $produit["CODE_BARRES"]; ?></div>
          <div class="product-cell sales"><span class="cell-label">Marque:</span><?php echo  $marque["NOM_MARQUE"]; ?>
          </div>
          <div class="product-cell stock"><span class="cell-label">Stock:</span><?php echo  $produit["QUANTITE"]; ?>
          </div>
          <?php 
  if($produit["PRIX_PROMO"] !== NULL){
  ?>
          <div class="product-cell price-cell">
            <span class="cell-label">Prix:</span>
            <span class="price active"><?php echo  $produit["PRIX_PROMO"]; ?> DH</span>
          </div>
          <?php 
  }else{
?>
          <div class="product-cell status-cell">
            <span class="cell-label">Prix:</span>
            <span class="price disabled"><?php echo  $produit["PRIX"]; ?> DH</span>
          </div>
          <?php 
  }
?>
        </div>
        <?php
}
  ?>

      </div>

    </section>




































    <!-- Section utilisateurs -->

    <section id="users">

      <div class="app-content">

        <!-- Entete du section utilisateurs -->

        <div class="app-content-header">
          <h1 class="app-content-headerText">Utilisateurs</h1>
          <button class="mode-switch" title="Thème">
            <svg class="moon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
              stroke-width="2" width="18" height="18" viewBox="0 0 24 24">
              <defs></defs>
              <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
            </svg>
          </button>
          <button class="app-content-headerButton">Ajouter un utilisateur</button>
        </div>

        <!-- Rechercher avec des filtres -->

        <?php 
            require_once "cbd.php";
        ?>

        <form action="pharmacien.php" method="get">
          <div class="app-content-actions">
            <input class="search-bar" name="searchByWordUser" placeholder="Rechercher..." type="text">
            <div class="app-content-actions-wrapper">
              <div class="filter-button-wrapper">
                <button type="button" class="action-button filter jsFilter" id="3"><span>Filtre</span><svg
                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-filter">
                    <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3" /></svg></button>
                <div class="filter-menu moveLeft" id="4">
                  <label>Profil</label>
                  <select name="profil">
                    <option value="tous">Tous les profils</option>
                    <option value="pharmacien">Pharmacien</option>
                    <option value="employe">Employé</option>
                    <option value="client">Client</option>
                  </select>
                  <label>Date inscription</label>
                  <select name="date">
                    <option value="tous">Tous les dates</option>
                    <option value="ASC">Ascendant</option>
                    <option value="DESC">Descendant</option>
                  </select>
                  <div class="filter-menu-buttons">
                    <button type="reset" class="filter-button reset">
                      Annuler
                    </button>
                    <button name="filterUsersBtn" type="submit" class="filter-button apply">
                      Appliquer
                    </button>
                  </div>
                </div>
              </div>
        </form>
      </div>
  </div>

  <!-- Les utilisateurs  -->

  <div class="products-area-wrapper tableView">

    <!-- Entete de la table  -->

    <div class="products-header">
      <div class="product-cell image">
        Nom
        <button class="sort-button">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
            <path fill="currentColor"
              d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
          </svg>
        </button>
      </div>
      <div class="product-cell category">Prénom <button class="sort-button">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
            <path fill="currentColor"
              d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
          </svg>
        </button></div>
      <div class="product-cell price-cell">Profil<button class="sort-button">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
            <path fill="currentColor"
              d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
          </svg>
        </button></div>
      <div class="product-cell sales">N° téléphone<button class="sort-button">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
            <path fill="currentColor"
              d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
          </svg>
        </button></div>
      <div class="product-cell stock">Email<button class="sort-button">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
            <path fill="currentColor"
              d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
          </svg>
        </button></div>
      <div class="product-cell price">Date d'inscription<button class="sort-button">
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

        // Filter avec nom

        if(isset($_GET["searchByWordUser"]) && trim($_GET["searchByWordUser"]) != ''){
          $searchedWord = trim($_GET["searchByWordUser"]);
          $sqlU = "SELECT * FROM utilisateurs WHERE NOM LIKE '%$searchedWord%'";
          $utilisateurs= mysqli_query($conn,$sqlU);
          }

        if(isset($_GET['filterUsersBtn'])){

        // Filter avec date d'inscription

        if($_GET['date'] !== 'tous'){
        $dateOrder = trim($_GET["date"]);
        $sqlU = "SELECT * FROM utilisateurs ORDER BY DATE_INSCRIPTION $dateOrder;";
        $utilisateurs= mysqli_query($conn,$sqlU);
        }

        // Filter avec profil

        if($_GET['profil'] !== 'tous'){
        $searchedProfil = trim($_GET["profil"]);
        $sql = "SELECT * FROM profils WHERE NOM_PROFILE = '$searchedProfil';";
        $profils= mysqli_query($conn,$sql);

        if($_GET['date'] !== 'tous'){
        $dateOrder = trim($_GET["date"]);
        $sql = "SELECT * FROM profils WHERE NOM_PROFILE = '$searchedProfil' ORDER BY ID_PROFIL $dateOrder;"; 
        $profils= mysqli_query($conn,$sql);
        }
          while($profil = mysqli_fetch_array($profils)){
          $id_profil = $profil["ID_PROFIL"];
          
          $sqlU = "SELECT * FROM utilisateurs WHERE ID_PROFIL = '$id_profil';";

          $utilisateurs= mysqli_query($conn,$sqlU);
          $utilisateur = mysqli_fetch_array($utilisateurs);
        
        ?>
    <div class="products-row">
      <button class="cell-more-button">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
          class="feather feather-more-vertical">
          <circle cx="12" cy="12" r="1" />
          <circle cx="12" cy="5" r="1" />
          <circle cx="12" cy="19" r="1" /></svg>
      </button>
      <div class="product-cell image">
        <span><?php echo  $utilisateur["NOM"]; ?></span>
      </div>
      <div class="product-cell category"><?php echo  $utilisateur["PRENOM"]; ?></div>
      <div class="product-cell codebarres"><?php echo  $profil["NOM_PROFILE"] ?></div>
      <div class="product-cell sales"><?php echo  $utilisateur["TELEPHONE"]; ?>
      </div>
      <div class="product-cell stock"><?php echo  $utilisateur["EMAIL"]; ?></div>
      <div class="product-cell stock"><?php echo  $utilisateur["DATE_INSCRIPTION"]; ?></div>
      <div class="product-cell stock">
        <a href="?id-utilisateur=<?php echo  $utilisateur["ID_UTILISATEUR"]; ?>">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
            stroke="#2869ff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-eye">
            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
            <circle cx="12" cy="12" r="3"></circle>
          </svg>
        </a>
        <a href="?id-utilisateur=<?php echo  $utilisateur['ID_UTILISATEUR']; ?>">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
            stroke="#2869ff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-edit">
            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
          </svg>
        </a>
        <a href="?id-utilisateur=<?php echo  $utilisateur['ID_UTILISATEUR']; ?>">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
            stroke="#FF0000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-trash-2">
            <polyline points="3 6 5 6 21 6"></polyline>
            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
            <line x1="10" y1="11" x2="10" y2="17"></line>
            <line x1="14" y1="11" x2="14" y2="17"></line>
          </svg>
        </a>
      </div>
    </div>
    <?php
             }
          }
        

      }


        // Selectionner tous si variable sqlU n'existe pas

        if(!isset($sqlU)){
        $sqlU = "SELECT * FROM utilisateurs";
        $utilisateurs= mysqli_query($conn,$sqlU);
        }  
        if(!isset($profils)){
        while($utilisateur = mysqli_fetch_array($utilisateurs))
        {
        $id_profil = $utilisateur['ID_PROFIL'];
        $selectionnerProfil = "SELECT * FROM profils WHERE ID_PROFIL = '$id_profil';";
        $profilInfo = mysqli_query($conn,$selectionnerProfil); 
        $profil = mysqli_fetch_array($profilInfo);
        
        ?>
    <div class="products-row">
      <button class="cell-more-button">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
          class="feather feather-more-vertical">
          <circle cx="12" cy="12" r="1" />
          <circle cx="12" cy="5" r="1" />
          <circle cx="12" cy="19" r="1" /></svg>
      </button>
      <div class="product-cell image">
        <span><?php echo  $utilisateur["NOM"]; ?></span>
      </div>
      <div class="product-cell category"><?php echo  $utilisateur["PRENOM"]; ?></div>
      <div class="product-cell codebarres"><?php echo  $profil["NOM_PROFILE"] ?></div>
      <div class="product-cell sales"><?php echo  $utilisateur["TELEPHONE"]; ?>
      </div>
      <div class="product-cell stock"><?php echo  $utilisateur["EMAIL"]; ?></div>
      <div class="product-cell stock"><?php echo  $utilisateur["DATE_INSCRIPTION"]; ?></div>
      <div class="product-cell stock" id="deleteUserD">
        <a href="?id-utilisateur=<?php echo  $utilisateur["ID_UTILISATEUR"]; ?>">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
            stroke="#2869ff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-eye">
            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
            <circle cx="12" cy="12" r="3"></circle>
          </svg>
        </a>
        <a href="?id-utilisateur=<?php echo  $utilisateur['ID_UTILISATEUR']; ?>">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
            stroke="#2869ff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-edit">
            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
          </svg>
        </a>
        <a class="deleteUserL" href="?id-utilisateur=<?php echo  $utilisateur['ID_UTILISATEUR']; ?>">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
            stroke="#FF0000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-trash-2">
            <polyline points="3 6 5 6 21 6"></polyline>
            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
            <line x1="10" y1="11" x2="10" y2="17"></line>
            <line x1="14" y1="11" x2="14" y2="17"></line>
          </svg>
        </a>
        <input type="text" name="hiddenInput" class="UserId" value="<?php  echo   $utilisateur['ID_UTILISATEUR']; ?>">
      </div>
    </div>
    <?php
      }}
        ?>

  </div>

  </div>
  </section>

















































































  <!-- Section commandes -->

  <section id="orders">

    <div class="app-content">

      <!-- Entete du section utilisateurs -->

      <div class="app-content-header">
        <h1 class="app-content-headerText">Commandes</h1>
        <button class="mode-switch" title="Thème">
          <svg class="moon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
            stroke-width="2" width="18" height="18" viewBox="0 0 24 24">
            <defs></defs>
            <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
          </svg>
        </button>
        <button class="app-content-headerButton">Ajouter une commande</button>
      </div>

      <!-- Rechercher avec des filtres -->

      <?php 
            require_once "cbd.php";
        ?>

      <form action="pharmacien.php" method="get">
        <div class="app-content-actions">
          <input class="search-bar" name="searchByWordOrder" placeholder="Rechercher..." type="text">
          <div class="app-content-actions-wrapper">
            <div class="filter-button-wrapper">
              <button type="button" class="action-button filter jsFilter" id="5"><span>Filtre</span><svg
                  xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="feather feather-filter">
                  <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3" /></svg></button>
              <div class="filter-menu moveLeft" id="6">
                <label>Profil</label>
                <select name="status">
                  <option value="tous">Tous les status</option>
                  <option value="en-cours">En cours</option>
                  <option value="preparer">Préparé</option>
                  <option value="effectuer">Effectué</option>
                </select>
                <label>Date commande</label>
                <select name="date">
                  <option value="tous">Tous les dates</option>
                  <option value="ASC">Ascendant</option>
                  <option value="DESC">Descendant</option>
                </select>
                <div class="filter-menu-buttons">
                  <button type="reset" class="filter-button reset">
                    Annuler
                  </button>
                  <button name="filterOrdersBtn" type="submit" class="filter-button apply">
                    Appliquer
                  </button>
                </div>
              </div>
            </div>
      </form>
    </div>
    </div>

    <!-- Les commandes  -->

    <div class="products-area-wrapper tableView">

      <!-- Entete de la table  -->

      <div class="products-header">
        <div class="product-cell image">
          Nom
          <button class="sort-button">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
              <path fill="currentColor"
                d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
            </svg>
          </button>
        </div>
        <div class="product-cell category">Prénom<button class="sort-button">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
              <path fill="currentColor"
                d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
            </svg>
          </button></div>
        <div class="product-cell sales">Quantité<button class="sort-button">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
              <path fill="currentColor"
                d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
            </svg>
          </button></div>
        <div class="product-cell stock">Montant<button class="sort-button">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
              <path fill="currentColor"
                d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
            </svg>
          </button></div>
        <div class="product-cell price">Status<button class="sort-button">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
              <path fill="currentColor"
                d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
            </svg>
          </button></div>
        <div class="product-cell price">Date statut<button class="sort-button">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
              <path fill="currentColor"
                d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
            </svg>
          </button></div>
        <div class="product-cell price">Date Commande<button class="sort-button">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
              <path fill="currentColor"
                d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
            </svg>
          </button></div>
      </div>



      <?php


          // Filter avec nom

        if(isset($_GET["searchByWordOrder"]) && trim($_GET["searchByWordOrder"]) != ''){
          $searchedWord = trim($_GET["searchByWordOrder"]);
          $sqlO = "SELECT * FROM commandes WHERE DATE_COMMMANDE LIKE '%$searchedWord%' OR DATE_STATUT LIKE '%$searchedWord%'";
          }

          if(isset($_GET['filterOrdersBtn'])){

          if($_GET['status'] !== 'tous'){
          $searchedStatus= trim($_GET["status"]);
          $sqlO = "SELECT * FROM commandes WHERE STATUT = '$searchedStatus';";
          }
          if($_GET['date'] !== 'tous'){
          $dateCommende = trim($_GET["date"]);
          $sqlO = "SELECT * FROM commandes ORDER BY DATE_COMMMANDE $dateCommende;"; 
          }
          if($_GET['date'] !== 'tous' && $_GET['status'] !== 'tous'){
          $dateCommende = trim($_GET["date"]);
          $searchedStatus= trim($_GET["status"]);
          $sqlO = "SELECT * FROM commandes  WHERE STATUT = '$searchedStatus' ORDER BY DATE_COMMMANDE $dateCommende;"; 
          }

        }



        // Selectionner tous si variable sqlo n'existe pas

        if(!isset($sqlO)){
        $sqlO = "SELECT * FROM commandes";
        }  
        $orders= mysqli_query($conn,$sqlO);
        while($order = mysqli_fetch_array($orders))
        {
        $id_utilisateur = $order["ID_UTILISATEUR"];
        $selectionnerUtilisateur = "SELECT * FROM utilisateurs WHERE ID_UTILISATEUR = '$id_utilisateur'";
        $utilisateurInfo= mysqli_query($conn,$selectionnerUtilisateur);
        $utilisateur = mysqli_fetch_array($utilisateurInfo);

        ?>
        <a href="gererCommandes.php?id-commande=<?php echo  $order["ID_COMMANDE"]; ?>">
      <div class="products-row">
        <button class="cell-more-button">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-more-vertical">
            <circle cx="12" cy="12" r="1" />
            <circle cx="12" cy="5" r="1" />
            <circle cx="12" cy="19" r="1" /></svg>
        </button>
        <div class="product-cell image">
          <span><?php echo  $utilisateur["NOM"]; ?></span>
        </div>
        <div class="product-cell category"><?php echo  $utilisateur["PRENOM"]; ?></div>
        <div class="product-cell codebarres"><?php echo  $order["QUANTITE_TOTALE"] ?></div>
        <div class="product-cell sales"><?php echo  $order["MONTANT_TOTAL"]; ?> DH
        </div>
        <div class="product-cell status-cell">
          <span class="price <?php echo  $order["STATUT"]; ?>"><?php echo  $order["STATUT"]; ?></span>
        </div>
        <div class="product-cell stock"><?php echo  $order["DATE_STATUT"]; ?></div>
        <div class="product-cell stock"><?php echo  $order["DATE_COMMMANDE"]; ?></div>

      </div>
        </a>
      <?php
      }
        ?>

    </div>




    </div>
  </section>



































































  <!-- section categories -->

  <section id="categories">

    <div class="app-content" id="categoriesSection">

      <!-- Entete du section categories -->

      <div class="app-content-header">
        <h1 class="app-content-headerText">Catégories</h1>
        <button class="mode-switch" title="Thème">
          <svg class="moon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
            stroke-width="2" width="18" height="18" viewBox="0 0 24 24">
            <defs></defs>
            <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
          </svg>
        </button>
        <button class="app-content-headerButton">Ajouter une Catégorie</button>
      </div>

      <!-- Rechercher avec des filtres -->

      <?php 
  require_once "cbd.php";
  ?>

      <form action="pharmacien.php" method="get">
        <div class="app-content-actions">
          <input class="search-bar" name="searchByWord" placeholder="Rechercher..." type="text">
          <div class="app-content-actions-wrapper">
            <div class="filter-button-wrapper">
              <button type="button" class="action-button filter jsFilter" id="7"><span>Filtre</span><svg
                  xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="feather feather-filter">
                  <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3" /></svg></button>
              <div class="filter-menu" id="8">
                <label>Catégorie</label>
                <label>Promotions</label>
                <select name="promo">
                  <option value="tous">Tous les prix</option>
                  <option value="avec">Avec promotion</option>
                  <option value="sans">Sans promotion</option>
                </select>
                <div class="filter-menu-buttons">
                  <button type="reset" class="filter-button reset">
                    Annuler
                  </button>
                  <button name="filterProductBtn" type="submit" class="filter-button apply">
                    Appliquer
                  </button>
                </div>
              </div>
            </div>
      </form>
      <button type="button" class="action-button list active" title="Liste vue">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
          class="feather feather-list">
          <line x1="8" y1="6" x2="21" y2="6" />
          <line x1="8" y1="12" x2="21" y2="12" />
          <line x1="8" y1="18" x2="21" y2="18" />
          <line x1="3" y1="6" x2="3.01" y2="6" />
          <line x1="3" y1="12" x2="3.01" y2="12" />
          <line x1="3" y1="18" x2="3.01" y2="18" /></svg>
      </button>
      <button type="button" class="action-button grid" title="Grille vue">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
          class="feather feather-grid">
          <rect x="3" y="3" width="7" height="7" />
          <rect x="14" y="3" width="7" height="7" />
          <rect x="14" y="14" width="7" height="7" />
          <rect x="3" y="14" width="7" height="7" /></svg>
      </button>
    </div>
    </div>

    <!-- Les categories  -->

    <div class="products-area-wrapper tableView">

      <!-- Entete de la table  -->

      <div class="products-header">
        <div class="product-cell image">
          Nom
          <button class="sort-button">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
              <path fill="currentColor"
                d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
            </svg>
          </button>
        </div>
        <div class="product-cell category">Intérêt<button class="sort-button">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
              <path fill="currentColor"
                d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
            </svg>
          </button></div>
        <div class="product-cell price-cell">Définition<button class="sort-button">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
              <path fill="currentColor"
                d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
            </svg>
          </button></div>
      </div>

      <?php 


        

        // Selectionner tous si variable produits n'existe pas

        if(!isset($sqlC)){
        $sqlC = "SELECT * FROM categories";
        }
        $categories= mysqli_query($conn,$sqlC);
        while($categorie = mysqli_fetch_array($categories))
        {

        ?>
      <a href="gererCategorie.php?id-categorie=<?php echo  $categorie["ID_CATEGORIE"]; ?>">
      <div class="products-row">
        <button class="cell-more-button">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-more-vertical">
            <circle cx="12" cy="12" r="1" />
            <circle cx="12" cy="5" r="1" />
            <circle cx="12" cy="19" r="1" /></svg>
        </button>
        <div class="product-cell image">
          <img src="../<?php echo  $categorie["IMAGE_CATEGORIE"]; ?>" alt="categorie">
          <span><?php echo  $categorie["NOM_CATEGORIE"]; ?></span>
        </div>
        <div class="product-cell category"><span class="cell-label">Intérêt
            :</span><?php echo  $categorie["INTERET"]; ?></div>
        <div class="product-cell codebarres"><span class="cell-label">Définition
            :</span><?php echo  $categorie["DEFINITION"]; ?></div>
      </div>
      </a>
      <?php
        }
        ?>

    </div>

    </div>














    <div class="app-content" id="SousCategories">

      <!-- Entete du section categories -->

      <div class="app-content-header">
        <h1 class="app-content-headerText">Sous Catégories</h1>
        <button class="mode-switch" title="Thème">
          <svg class="moon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
            stroke-width="2" width="18" height="18" viewBox="0 0 24 24">
            <defs></defs>
            <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
          </svg>
        </button>
        <button class="app-content-headerButton">Ajouter une sous Catégorie</button>
      </div>

      <!-- Rechercher avec des filtres -->

      <?php 
    require_once "cbd.php";
    ?>

      <form action="pharmacien.php" method="get">
        <div class="app-content-actions">
          <input class="search-bar" name="searchByWord" placeholder="Rechercher..." type="text">
          <div class="app-content-actions-wrapper">
            <div class="filter-button-wrapper">
              <button type="button" class="action-button filter jsFilter" id="7"><span>Filtre</span><svg
                  xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="feather feather-filter">
                  <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3" /></svg></button>
              <div class="filter-menu" id="8">
                <label>Catégorie</label>
                <label>Promotions</label>
                <select name="promo">
                  <option value="tous">Tous les prix</option>
                  <option value="avec">Avec promotion</option>
                  <option value="sans">Sans promotion</option>
                </select>
                <div class="filter-menu-buttons">
                  <button type="reset" class="filter-button reset">
                    Annuler
                  </button>
                  <button name="filterProductBtn" type="submit" class="filter-button apply">
                    Appliquer
                  </button>
                </div>
              </div>
            </div>
      </form>
      <button type="button" class="action-button list active" title="Liste vue">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
          class="feather feather-list">
          <line x1="8" y1="6" x2="21" y2="6" />
          <line x1="8" y1="12" x2="21" y2="12" />
          <line x1="8" y1="18" x2="21" y2="18" />
          <line x1="3" y1="6" x2="3.01" y2="6" />
          <line x1="3" y1="12" x2="3.01" y2="12" />
          <line x1="3" y1="18" x2="3.01" y2="18" /></svg>
      </button>
      <button type="button" class="action-button grid" title="Grille vue">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
          class="feather feather-grid">
          <rect x="3" y="3" width="7" height="7" />
          <rect x="14" y="3" width="7" height="7" />
          <rect x="14" y="14" width="7" height="7" />
          <rect x="3" y="14" width="7" height="7" /></svg>
      </button>
    </div>
    </div>

    <!-- Les sous sous categories  -->

    <div class="products-area-wrapper gridView">

      <!-- Entete de la table sous sous categorie  -->

      <div class="products-header">
        <div class="product-cell image">
          Nom
          <button class="sort-button">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
              <path fill="currentColor"
                d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
            </svg>
          </button>
        </div>
      </div>

      <?php 

     // Selectionner tous si variable sqlSC n'existe pas

     if(!isset($sqlSC)){
      $sqlSC = "SELECT * FROM sous_categories";
      }
      $sousCategories= mysqli_query($conn,$sqlSC);
      while($sCategorieLigne = mysqli_fetch_array($sousCategories))
      {
      $id_Ctaegorie = $sCategorieLigne['ID_CATEGORIE'];
      $sqlC = "SELECT * FROM categories WHERE ID_CATEGORIE = '$id_Ctaegorie'";
      $Categories= mysqli_query($conn,$sqlC);

      $categorieLigne = mysqli_fetch_array($Categories);
      
      $nomSCat = $sCategorieLigne["NOM_SCATEGORIE"];
      $nomCat = $categorieLigne['NOM_CATEGORIE'];
      if($nomCat !== $nomSCat ){
      ?>
      <a class="ignore__Wrapper" href="gerersousCat.php?id-categorie=<?php echo  $sCategorieLigne["ID_SCATEGORIE"]; ?>">
      <div class="products-row">

        <div class="product-cell image">
          <img src="../<?php echo  $sCategorieLigne["IMAGE_SCATEGORIE"]; ?>" alt="Sous-categorie">
          <span><?php echo  $sCategorieLigne["NOM_SCATEGORIE"]; ?></span>
        </div>
      </div>
      </a>
      <?php
    }}
    ?>

    </div>

    </div>
















    <div class="app-content" id="SousSousCategories">

      <!-- Entete du section des sous sous categories -->

      <div class="app-content-header">
        <h1 class="app-content-headerText">Sous sous Catégories</h1>
        <button class="mode-switch" title="Thème">
          <svg class="moon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
            stroke-width="2" width="18" height="18" viewBox="0 0 24 24">
            <defs></defs>
            <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
          </svg>
        </button>
        <button class="app-content-headerButton">Ajouter une sous-sous Catégorie</button>
      </div>

      <!-- Rechercher avec des filtres -->

      <?php 
    require_once "cbd.php";
    ?>

      <form action="pharmacien.php" method="get">
        <div class="app-content-actions">
          <input class="search-bar" name="searchByWord" placeholder="Rechercher..." type="text">
          <div class="app-content-actions-wrapper">
            <div class="filter-button-wrapper">
              <button type="button" class="action-button filter jsFilter" id="7"><span>Filtre</span><svg
                  xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="feather feather-filter">
                  <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3" /></svg></button>
              <div class="filter-menu" id="8">
                <label>Catégorie</label>
                <label>Promotions</label>
                <select name="promo">
                  <option value="tous">Tous les prix</option>
                  <option value="avec">Avec promotion</option>
                  <option value="sans">Sans promotion</option>
                </select>
                <div class="filter-menu-buttons">
                  <button type="reset" class="filter-button reset">
                    Annuler
                  </button>
                  <button name="filterProductBtn" type="submit" class="filter-button apply">
                    Appliquer
                  </button>
                </div>
              </div>
            </div>
      </form>
      <button type="button" class="action-button list active" title="Liste vue">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
          class="feather feather-list">
          <line x1="8" y1="6" x2="21" y2="6" />
          <line x1="8" y1="12" x2="21" y2="12" />
          <line x1="8" y1="18" x2="21" y2="18" />
          <line x1="3" y1="6" x2="3.01" y2="6" />
          <line x1="3" y1="12" x2="3.01" y2="12" />
          <line x1="3" y1="18" x2="3.01" y2="18" /></svg>
      </button>
      <button type="button" class="action-button grid" title="Grille vue">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
          class="feather feather-grid">
          <rect x="3" y="3" width="7" height="7" />
          <rect x="14" y="3" width="7" height="7" />
          <rect x="14" y="14" width="7" height="7" />
          <rect x="3" y="14" width="7" height="7" /></svg>
      </button>
    </div>
    </div>

    <!-- Les sous sous categories  -->

    <div class="products-area-wrapper gridView">

      <!-- Entete de la table sous categorie  -->

      <div class="products-header">
        <div class="product-cell image">
          Nom
          <button class="sort-button">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
              <path fill="currentColor"
                d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
            </svg>
          </button>
        </div>
      </div>

      <?php 




        // Selectionner tous si variable sqlSSC n'existe pas

        if(!isset($sqlSSC)){
          $sqlSSC = "SELECT * FROM sous_sous_categories";
          }
          $sousSCategories= mysqli_query($conn,$sqlSSC);
          while($sSCategorieLigne = mysqli_fetch_array($sousSCategories))
          {
          $id_SCategorie = $sSCategorieLigne['ID_SCATEGORIE'];
          $nom_SSCategorie = $sSCategorieLigne['NOM_SSCATEGORIE'];

          $sqlSC = "SELECT * FROM sous_categories WHERE ID_SCATEGORIE  = '$id_SCategorie'";
          $SCategories= mysqli_query($conn,$sqlSC);
          $ScategorieLigne = mysqli_fetch_array($SCategories);   
          $nomSCat = $ScategorieLigne['NOM_SCATEGORIE'];
          $id_Ctaegorie = $ScategorieLigne['ID_CATEGORIE'];

          $sqlC = "SELECT * FROM categories WHERE ID_CATEGORIE = '$id_Ctaegorie'";
          $Categories= mysqli_query($conn,$sqlC);
          $categorieLigne = mysqli_fetch_array($Categories);   
          $nomCat = $categorieLigne['NOM_CATEGORIE'];
          
          if($nom_SSCategorie !== $nomSCat && $nom_SSCategorie !== $nomCat){
          ?>
        <a class="ignore__Wrapper" href="gerersousSCat.php?id-categorie=<?php echo  $sSCategorieLigne["ID_SSCATEGORIE"]; ?>">
      <div class="products-row">

        <div class="product-cell image sousSousCatImage">
          <img src="../<?php echo  $sSCategorieLigne["IMAGE_SSCATEGORIE"]; ?>" alt="Sous-sous-categorie">
          <span><?php echo  $sSCategorieLigne["NOM_SSCATEGORIE"]; ?></span>
        </div>
      </div>
          </a>
      <?php
        }}
        ?>

    </div>

    </div>





  </section>













































































  <!-- section marques -->

  <section id="brands">

    <div class="app-content">

      <!-- Entete du section Marques  -->

      <div class="app-content-header">
        <h1 class="app-content-headerText">Marques</h1>
        <button class="mode-switch" title="Thème">
          <svg class="moon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
            stroke-width="2" width="18" height="18" viewBox="0 0 24 24">
            <defs></defs>
            <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
          </svg>
        </button>
        <button class="app-content-headerButton">Ajouter une marque</button>
      </div>

      <!-- Rechercher avec des filtres -->

      <?php 
  require_once "cbd.php";
  ?>

      <form action="pharmacien.php" method="get">
        <div class="app-content-actions">
          <input class="search-bar" name="searchByWord" placeholder="Rechercher..." type="text">
          <div class="app-content-actions-wrapper">
            <div class="filter-button-wrapper">
              <button type="button" class="action-button filter jsFilter" id="7"><span>Filtre</span><svg
                  xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="feather feather-filter">
                  <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3" /></svg></button>
              <div class="filter-menu" id="8">
                <label>Catégorie</label>
                <select name="categorie">
                  <option value="tous">Tous les messages</option>
                  <?php
              $selectCategorie = "SELECT * FROM messages_ordonnance";
              $categotireTable= mysqli_query($conn,$selectCategorie);

              while($categotireLigne = mysqli_fetch_array($categotireTable))
              {
              ?>
                  <option value="<?php echo  $categotireLigne["ID_SSCATEGORIE"]; ?>">
                    <?php echo  $categotireLigne["NOM_SSCATEGORIE"]; ?></option>
                  <?php
              }
              ?>
                </select>
                <label>Promotions</label>
                <select name="promo">
                  <option value="tous">Tous les prix</option>
                  <option value="avec">Avec promotion</option>
                  <option value="sans">Sans promotion</option>
                </select>
                <div class="filter-menu-buttons">
                  <button type="reset" class="filter-button reset">
                    Annuler
                  </button>
                  <button name="filterProductBtn" type="submit" class="filter-button apply">
                    Appliquer
                  </button>
                </div>
              </div>
            </div>
      </form>
      <button type="button" class="action-button list active" title="Liste vue">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
          class="feather feather-list">
          <line x1="8" y1="6" x2="21" y2="6" />
          <line x1="8" y1="12" x2="21" y2="12" />
          <line x1="8" y1="18" x2="21" y2="18" />
          <line x1="3" y1="6" x2="3.01" y2="6" />
          <line x1="3" y1="12" x2="3.01" y2="12" />
          <line x1="3" y1="18" x2="3.01" y2="18" /></svg>
      </button>
      <button type="button" class="action-button grid" title="Grille vue">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
          class="feather feather-grid">
          <rect x="3" y="3" width="7" height="7" />
          <rect x="14" y="3" width="7" height="7" />
          <rect x="14" y="14" width="7" height="7" />
          <rect x="3" y="14" width="7" height="7" /></svg>
      </button>
    </div>
    </div>

    <!-- Les marques  -->

    <div class="products-area-wrapper gridView">

      <!-- Entete de la table marque  -->

      <div class="products-header">
        <div class="product-cell image">
          Nom
          <button class="sort-button">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
              <path fill="currentColor"
                d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
            </svg>
          </button>
        </div>
      </div>

      <?php 

        // Filter avec nom

        

        // Selectionner tous si variable sqlB  n'existe pas

        if(!isset($sqlB)){
        $sqlB = "SELECT * FROM marques";
        }
        $marquesTable= mysqli_query($conn,$sqlB);
        while($marqueLigne = mysqli_fetch_array($marquesTable))
        {

        ?>

      <div class="products-row">
      <button class="cell-more-button">
        <a class="more-link"  href="gererMarque.php?id-brand=<?php echo  $marqueLigne["ID_MARQUE"]; ?>">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-more-vertical">
            <circle cx="12" cy="12" r="1" />
            <circle cx="12" cy="5" r="1" />
            <circle cx="12" cy="19" r="1" /></svg>
        </a>
        </button>
        <div class="product-cell image">
          <img src="../<?php echo  $marqueLigne["LOGO_MARQUE"]; ?>" alt="categorie">
          <span><?php echo  $marqueLigne["NOM_MARQUE"]; ?></span>
        </div>
      </div>
      <?php
        }
        ?>

    </div>

    </div>
  </section>























  <!-- section messages -->

  <section id="messages">

    <div class="app-content" id="ordonnaceMesssages">

      <!-- Entete du section Messages  -->

      <div class="app-content-header">
        <h1 class="app-content-headerText">Messages ordonnaces</h1>
        <button class="mode-switch" title="Thème">
          <svg class="moon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
            stroke-width="2" width="18" height="18" viewBox="0 0 24 24">
            <defs></defs>
            <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
          </svg>
        </button>
        <button class="app-content-headerButton">Ajouter un message</button>
      </div>

      <!-- Rechercher avec des filtres -->

      <?php 
require_once "cbd.php";
?>

      <form action="pharmacien.php" method="get">
        <div class="app-content-actions">
          <input class="search-bar" name="searchByWord" placeholder="Rechercher..." type="text">
          <div class="app-content-actions-wrapper">
            <div class="filter-button-wrapper">
              <button type="button" class="action-button filter jsFilter" id="7"><span>Filtre</span><svg
                  xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="feather feather-filter">
                  <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3" /></svg></button>
              <div class="filter-menu" id="8">
                <label>Catégorie</label>
                <select name="categorie">
                  <option value="tous">Tous les marques</option>
                  <?php
          $selectCategorie = "SELECT * FROM sous_sous_categories";
          $categotireTable= mysqli_query($conn,$selectCategorie);

          while($categotireLigne = mysqli_fetch_array($categotireTable))
          {
          ?>
                  <option value="<?php echo  $categotireLigne["ID_SSCATEGORIE"]; ?>">
                    <?php echo  $categotireLigne["NOM_SSCATEGORIE"]; ?></option>
                  <?php
          }
          ?>
                </select>
                <label>Promotions</label>
                <select name="promo">
                  <option value="tous">Tous les prix</option>
                  <option value="avec">Avec promotion</option>
                  <option value="sans">Sans promotion</option>
                </select>
                <div class="filter-menu-buttons">
                  <button type="reset" class="filter-button reset">
                    Annuler
                  </button>
                  <button name="filterProductBtn" type="submit" class="filter-button apply">
                    Appliquer
                  </button>
                </div>
              </div>
            </div>
      </form>
    </div>
    </div>

    <!-- Les messages  -->

    <div class="products-area-wrapper tableView">

      <!-- Entete de la table des messages  -->

      <div class="products-header">
        <div class="product-cell category">Ordonnance<button class="sort-button">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
              <path fill="currentColor"
                d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
            </svg>
          </button></div>
        <div class="product-cell image">
          Nom
        </div>
        <div class="product-cell category">Prénom<button class="sort-button">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
              <path fill="currentColor"
                d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
            </svg>
          </button></div>
        <div class="product-cell category">N° téléphone<button class="sort-button">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
              <path fill="currentColor"
                d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
            </svg>
          </button></div>
        <div class="product-cell category">Message<button class="sort-button">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
              <path fill="currentColor"
                d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
            </svg>
          </button></div>
        <div class="product-cell category">Date de message<button class="sort-button">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
              <path fill="currentColor"
                d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
            </svg>
          </button></div>
      </div>

      <?php 

    // Filter avec nom

    

    // Selectionner tous si variable sqlB  n'existe pas

    if(!isset($sqlM)){
    $sqlM = "SELECT * FROM messages_ordonnance";
    }
    $messageTable= mysqli_query($conn,$sqlM);
    while($messageLigne = mysqli_fetch_array($messageTable))
    {
      $idUtilisateur = $messageLigne['ID_UTILISATEUR'];
      $selectionnerU = "SELECT * FROM utilisateurs WHERE ID_UTILISATEUR = '$idUtilisateur'";
      $utilisateur = mysqli_query($conn,$selectionnerU);
      $utilisateurInfo =  mysqli_fetch_array($utilisateur);
    ?>
        <a href="gererOrdonnace.php?id-message=<?php echo   $messageLigne["ID_MSG"]; ?>">
      <div class="products-row">
        <?php
        if($messageLigne["ORDONNANCE"] !== NULL){
        ?>
        <div class="product-cell image">
          <img src="../<?php echo   $messageLigne["ORDONNANCE"]; ?>" alt="ordonnance"></div>
        <?php 
        }else{
        ?>
        <div class="product-cell stock">Pas d'ordonnace</div>
        <?php
        }
        ?>
        <div class="product-cell stock"><?php echo  $utilisateurInfo["NOM"]; ?></div>
        <div class="product-cell stock"><?php echo  $utilisateurInfo["PRENOM"]; ?></div>
        <div class="product-cell stock"><?php echo  $utilisateurInfo["TELEPHONE"]; ?></div>
        <div class="product-cell stock"><?php echo  $messageLigne["MESSAGE"]; ?></div>
        <div class="product-cell stock"><?php echo  $messageLigne["DATE_MESSAGE"]; ?></div>
      </div>
      </a>
      <?php
    }
    ?>

    </div>

    </div>



  </section>







  <div class="monCompte-section" id="profileSection">

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
      <form class="form" method="POST" action="pharmacien.php">
        <h2 class="form_title title" id="prescription__title">Modifier Votre compte</h2>

        <div class="input-field" id="divNom">
          <i class="fas fa-user"></i>
          <input type="text" placeholder="Votre nom" name="nom" value="<?php echo $Moncompte["NOM"] ;?>">
        </div>
        <div class="input-field">
          <i class="fas fa-user"></i>
          <input type="text" placeholder="Votre prénom" name="prenom" value="<?php echo $Moncompte["PRENOM"] ;?>">
        </div>
        <div class="input-field">
          <i class="fas fa-envelope"></i>
          <input type="email" placeholder="Votre email" name="email" value="<?php echo $Moncompte["EMAIL"] ;?>">
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














  <!-- Section de confirmation de supprimer -->


  <button id="modal__button" data-modal-target="#modal">Open Modal</button>
  <div class="modal" id="modal">
    <button data-close-button class="close-button">&times;</button>
    <div class="modal-body">
      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
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
      <p>Voulez vous vraiment supprimer ce compte de façon permanente</p>
    </div>

    <div class="modal-footer">
      <form action="pharmacien.php" method="POST">
        <input type="text" name="ID_User" id="idUser" value="">
        <button type="submit" name="BtnDeleteM" class="buttonM buttonMD">Supprimer</button>
      </form>
      <button data-close-button class="buttonM buttonMC">Annulez</button>
    </div>

  </div>
  <div id="overlay"></div>




  <?php
                
                if(isset($_POST['BtnDeleteM'])){
                    if(isset($_POST['ID_User']) && trim($_POST['ID_User']) != "" ){
                    $id_user = $_POST['ID_User'];
                    $deleteRequest = "DELETE FROM `utilisateurs` WHERE `utilisateurs`.`ID_UTILISATEUR` = $id_user";
                    $deleteUser = mysqli_query($conn,$deleteRequest);
                    }
                }
            
            
            ?>




















































  </div>

</body>

</html>