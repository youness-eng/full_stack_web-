<?php
            session_start();
            require_once "cbd.php";
            $id_utilisateur = $_SESSION['id'];
            $selectUtilisateur = "SELECT * FROM utilisateurs WHERE ID_UTILISATEUR = '$id_utilisateur'";
            $UtilisateurInfo = mysqli_query($conn,$selectUtilisateur);
            $Utilisateur = mysqli_fetch_array($UtilisateurInfo);
            $prenomPremierLettre = $Utilisateur['PRENOM'][0];
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
  <script src="../js/pharmacien.js" defer></script>
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
          <a id="usersLink">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="feather feather-users">
              <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
              <circle cx="9" cy="7" r="4"></circle>
              <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
              <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
            </svg>
            <span>Utilisateurs</span>
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
          <a id="messageLink" class="ordonnanceLink">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="feather feather-message-square">
              <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
            </svg>
            <span>Messages</span>
          </a>
          <div class="smenu">
            <a class="smenuL activeLink" id="ordonnanceLink">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-clipboard">
                <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
              </svg>
              <span>Ordonnace</span>
            </a>
            <a class="smenuL" id="annonymeLink">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-archive">
                <polyline points="21 8 21 21 3 21 3 8"></polyline>
                <rect x="1" y="3" width="22" height="5"></rect>
                <line x1="10" y1="12" x2="14" y2="12"></line>
              </svg>
              <span>Boîte de réception</span></a>
          </div>
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
        <div class="info__Card usersLink">
          <a>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
              <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
              <circle cx="9" cy="7" r="4"></circle>
              <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
              <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
            </svg>
          </a>
          <div class="totale__value">
            <div class="infosEssetiel">
              <span class="number">
                <?php 
          $selectUsers = "SELECT * FROM utilisateurs";
          $tableU= mysqli_query($conn,$selectUsers);
          $tottaleUsers=mysqli_num_rows($tableU);
          echo $tottaleUsers;
          ?>
              </span>
              <span class="type">Utilisateurs</span>
            </div>
            <div class="more__infos">
              <?php
            $selectUsersC = "SELECT * FROM utilisateurs WHERE ID_PROFIL = 1";
            $tableUC= mysqli_query($conn,$selectUsersC);
            $tottaleUsersC=mysqli_num_rows($tableUC);
            $selectUsersE = "SELECT * FROM utilisateurs WHERE ID_PROFIL = 2";
            $tableUE= mysqli_query($conn,$selectUsersE);
            $tottaleUsersE=mysqli_num_rows($tableUE);
            $selectUsersP = "SELECT * FROM utilisateurs WHERE ID_PROFIL = 3";
            $tableUP= mysqli_query($conn,$selectUsersP);
            $tottaleUsersP=mysqli_num_rows($tableUP);
           
           
            echo $tottaleUsersC . " clients, " . $tottaleUsersE . " employés et " . $tottaleUsersP . " pharmacien.";

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

        <div class="info__Card ordonnanceLink">
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
          $selectMP = "SELECT * FROM messages_pharmacien";
          $tableMO= mysqli_query($conn,$selectMO);
          $tableMP= mysqli_query($conn,$selectMP);
          $tottaleMO=mysqli_num_rows($tableMO);
          $tottaleMP=mysqli_num_rows($tableMP);
          $tottaleMessages = $tottaleMO + $tottaleMP;
          echo $tottaleMessages;
          ?>
              </span>
              <span class="type">Messages</span>
            </div>
            <div class="more__infos third__link">
              <?php
           
            echo $tottaleMO . " ordonnances et " . $tottaleMP . " anonymes.";

            ?>

            </div>
          </div>
        </div>

      </div>











      <!-- Les produits  -->

      <div class="cards__wrapper">


        <div class="products-area-wrapper tableViewH usersLink">

          <!-- Entete de la table  -->

          <div class="table__header">
            <span class="table__title">Dernières utilisateurs ajoutés</span>
            <svg width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="feather feather-users">
              <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
              <circle cx="9" cy="7" r="4"></circle>
              <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
              <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
            </svg>
          </div>
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
          </div>

          <?php

            $sqlUsers = "SELECT * FROM utilisateurs  ORDER BY ID_UTILISATEUR DESC LIMIT 5 ";
            $usersTable= mysqli_query($conn,$sqlUsers);
    
            while($utilisateur = mysqli_fetch_array($usersTable))
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










        <div class="products-area-wrapper tableViewH productLink">

          <div class="table__header third__header">
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
        <a href="consulterUtilisateur.php?id-utilisateur=<?php echo  $utilisateur["ID_UTILISATEUR"]; ?>">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
            stroke="#2869ff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-eye">
            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
            <circle cx="12" cy="12" r="3"></circle>
          </svg>
        </a>
        <a href="modifierUtilisateur.php?id-utilisateur=<?php echo  $utilisateur['ID_UTILISATEUR']; ?>">
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
          <a class="sort-button">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
              <path fill="currentColor"
                d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
            </svg>
          </a>
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

    <!-- Les produits  -->

    <div class="products-area-wrapper tableView">

      <!-- Entete de la table  -->

      <div class="products-header">
        <div class="product-cell category">Ordonnance<button class="sort-button">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
              <path fill="currentColor"
                d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
            </svg>
          </button></div>
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
        if($messageLigne["ORDONNANCE"] !== NULL && $messageLigne["ORDONNANCE"] !== "NULL"){
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

















    <!-- Section messages annonymes -->


    <div class="app-content" id="annonymeMessages">

      <!-- Entete du section Messages annonymes  -->

      <div class="app-content-header">
        <h1 class="app-content-headerText">Boîte de réception</h1>
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

    <!-- Les messages annonymes  -->

    <div class="products-area-wrapper tableView">

      <!-- Entete de la table  -->

      <div class="products-header">
        <div class="product-cell category">Email<button class="sort-button">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
              <path fill="currentColor"
                d="M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z" />
            </svg>
          </button></div>
        <div class="product-cell image">
          Objet
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

    if(!isset($sqlMA)){
    $sqlMA = "SELECT * FROM messages_pharmacien";
    }
    $messageATable= mysqli_query($conn,$sqlMA);
    while($messageALigne = mysqli_fetch_array($messageATable))
    {
    ?>

  <a href="gererMessages.php?id-messageA=<?php echo $messageALigne["ID_MESSAGE"]; ?>">
      <div class="products-row">
        <div class="product-cell stock"><?php echo  $messageALigne["EMAIL"]; ?></div>
        <div class="product-cell stock"><?php echo  $messageALigne["OBJET"]; ?></div>
        <div class="product-cell stock"><?php echo  $messageALigne["MESSAGE"]; ?></div>
        <div class="product-cell stock"><?php echo  $messageALigne["DATE_MESSAGE"]; ?></div>
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