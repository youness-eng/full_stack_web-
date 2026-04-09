<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacie CHAABIA</title>
    <link rel="icon" type="image/png" href="images/miniLogo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/swiper.css">
    <link rel="stylesheet" href="css/accueil.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" defer></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.js" defer></script>
    <script src="js/accueil.js" defer></script>
</head>

<body>

    <!-- header -->

    <header>
        <div class="logo">
            <a href="index.php"><img id="logo" src="images/logo du site web.png" alt="Logo"></a>
        </div>
        <div class="rechercher-wrapper">
            <div class="input-holder">
                <form id="search-form">
                    <input type="text" class="rechercher-input" name="rechercher"
                        placeholder="Rechercher par nom, marque, ..." />
                    <button class="rechercher-icon accueilLien" type="submit" id="searchButton" name="rechercherSubmit"
                        onclick="rechercherToggle(this, event);"><span></span></button>
                </form>
            </div>
            <span class="close" onclick="rechercherToggle(this, event);"></span>
        </div>

        <div id="liens">
            <ul>
                <li class="active" tooltip="Accueil">
                    <button id="accueil">
                        <svg>
                            <use href="#icon-accueil" />
                        </svg>
                        <svg>
                            <use href="#icon-accueil-remplie" />
                        </svg>
                    </button>
                </li>
                <li tooltip="Qui sommes nous">
                    <button id="qui-sommes-nous">
                        <svg>
                            <use href="#icon-qui-somme-nous" />
                        </svg>
                        <svg>
                            <use href="#icon-qui-somme-nous-remplie" />
                        </svg>
                    </button>
                </li>
                <li tooltip="Contactez nous">
                    <button id="contactez_nous">
                        <svg>
                            <use href="#icon-contact" />
                        </svg>
                        <svg>
                            <use href="#icon-contact-remplie" />
                        </svg>
                    </button>
                </li>
                <li tooltip="Mon compte">
                    <button id="mon-compte">
                        <svg>
                            <use href="#icon-utilisateur" />
                        </svg>
                        <svg>
                            <use href="#icon-utilisateur-remplie" />
                        </svg>
                    </button>
                </li>
            </ul>
            <svg class="indicateur" viewBox="0 0 68 72">
                <defs>
                    <filter id="goo" x="-50%" width="200%" y="-50%" height="200%" color-interpolation-filters="sRGB">
                        <feGaussianBlur in="SourceGraphic" stdDeviation="1" result="blur" />
                        <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 21 -7"
                            result="cm" />
                    </filter>
                </defs>
                <g filter="url(#goo)">
                    <path d="M34 54C45.4078 54 48.3887 66.7534 68 72H0C19.6113 66.7534 22.5922 54 34 54Z" />
                    <circle cx="34" cy="66" r="4" />
                </g>
            </svg>
        </div>

        <svg style="display: none;" xmlns="http://www.w3.org/2000/svg" version="1.1">
            <symbol id="icon-accueil" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M11.5358 2.91088C11.8081 2.69637 12.1919 2.69637 12.4642 2.91088L19.5708 8.51003C20.4733 9.2211 21 10.3067 21 11.4556V20.75C21 21.4404 20.4404 22 19.75 22H14.75C14.0596 22 13.5 21.4404 13.5 20.75V15.75C13.5 15.6119 13.3881 15.5 13.25 15.5H10.75C10.6119 15.5 10.5 15.6119 10.5 15.75V20.75C10.5 21.4404 9.94036 22 9.25 22H4.25C3.55964 22 3 21.4404 3 20.75V11.4556C3 10.3067 3.52672 9.2211 4.42923 8.51003L11.5358 2.91088ZM12 4.45482L5.35754 9.68827C4.81603 10.1149 4.5 10.7662 4.5 11.4556V20.5H9V15.75C9 14.7835 9.7835 14 10.75 14H13.25C14.2165 14 15 14.7835 15 15.75V20.5H19.5V11.4556C19.5 10.7662 19.184 10.1149 18.6425 9.68827L12 4.45482Z" />
            </symbol>
            <symbol id="icon-accueil-remplie" fill="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M20.9992 11.8484L21 20.7181C21 21.1638 20.9536 21.3255 20.8664 21.4884C20.7793 21.6514 20.6514 21.7793 20.4884 21.8664C20.3255 21.9536 20.1638 22 19.7181 22H15.2819C14.8362 22 14.6745 21.9536 14.5116 21.8664C14.3486 21.7793 14.2207 21.6514 14.1336 21.4884C14.0464 21.3255 14 21.1638 14 20.7181V16.2819C14 15.8362 13.9536 15.6745 13.8664 15.5116C13.7793 15.3486 13.6514 15.2207 13.4884 15.1336C13.3255 15.0464 13.1638 15 12.7181 15H11.2819C10.8362 15 10.6745 15.0464 10.5116 15.1336C10.3486 15.2207 10.2207 15.3486 10.1336 15.5116C10.0464 15.6745 10 15.8362 10 16.2819V20.7181C10 21.1638 9.95359 21.3255 9.86643 21.4884C9.77928 21.6514 9.65139 21.7793 9.48842 21.8664C9.32546 21.9536 9.16382 22 8.71806 22H4.28194C3.83618 22 3.67454 21.9536 3.51158 21.8664C3.34861 21.7793 3.22072 21.6514 3.13357 21.4884C3.04641 21.3255 3 21.1638 3 20.7181V12.0465C3 11.2101 3.03626 10.9164 3.12103 10.5932C3.20581 10.2699 3.3391 9.98532 3.53316 9.71325L3.63288 9.58016C3.80691 9.36035 4.0367 9.13609 4.5722 8.68983L11.1575 3.20211C11.465 2.94583 11.5992 2.87958 11.7594 2.836C11.9195 2.79241 12.0805 2.79241 12.2406 2.836C12.4008 2.87958 12.535 2.94583 12.8425 3.20211L19.4278 8.68983C20.0704 9.22534 20.2728 9.44118 20.4668 9.71325C20.6609 9.98532 20.7942 10.2699 20.879 10.5932C20.9567 10.8895 20.9936 11.1609 20.9992 11.8484Z" />
            </symbol>
            <svg id="icon-qui-somme-nous" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
                <path
                    d="M23.8,16.2c-0.2,0-0.4-0.1-0.4-0.4v-2.6c0-0.2,0.1-0.4,0.4-0.4h2.4c0.2,0,0.4,0.1,0.4,0.4v2.6c0,0.2-0.1,0.4-0.4,0.4H23.8z M23.9,34.3c-0.2,0-0.4-0.1-0.4-0.4V20.5c0-0.2,0.1-0.4,0.4-0.4h2.3c0.2,0,0.4,0.1,0.4,0.4v13.5c0,0.2-0.1,0.4-0.4,0.4H23.9z" />
                <path fill="none" stroke="#15986a" stroke-linecap="round" stroke-miterlimit="10" stroke-width="3"
                    d="M25,2C11.7,2,1,11.5,1,23.2c0,6,2.8,11.4,7.4,15.3c-1.3,5.3-7.6,7.5-7.2,9c4,2.3,14.8-2.1,18.2-3.6c1.8,0.4,3.6,0.6,5.5,0.6c13.3,0,24-9.5,24-21.2S38.3,2,25,2z" />
            </svg>
            <svg id="icon-qui-somme-nous-remplie" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 50 50">
                <path
                    d="M25,1C11.215,1,0,10.959,0,23.2c0,5.915,2.573,11.443,7.262,15.635c-0.866,2.561-3.089,4.32-4.744,5.63c-1.516,1.199-2.611,2.066-2.284,3.293l0.107,0.401l0.36,0.208c0.907,0.521,2.121,0.785,3.609,0.785c4.946,0,12.063-2.841,15.195-4.206c1.781,0.372,3.55,0.554,5.395,0.554c13.786,0,25-9.959,25-22.2C49.9,11.003,38.73,1,25,1z M26.6,34c0,0.2-0.1,0.4-0.399,0.4h-2.3V34.3c-0.2,0-0.4-0.1-0.4-0.399V20.5c0-0.2,0.1-0.4,0.4-0.4h2.3c0.2,0,0.399,0.1,0.399,0.4V34z M26.6,15.8c0,0.2-0.1,0.4-0.399,0.4h-2.4c-0.2,0-0.4-0.1-0.4-0.4v-2.6c0-0.2,0.1-0.4,0.4-0.4h2.4c0.2,0,0.399,0.1,0.399,0.4V15.8z" />
            </svg>
            <symbol id="icon-contact" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C10.3817 22 8.81782 21.6146 7.41286 20.888L3.58704 21.9553C2.92212 22.141 2.23258 21.7525 2.04691 21.0876C1.98546 20.8676 1.98549 20.6349 2.04695 20.4151L3.11461 16.5922C2.38637 15.186 2 13.6203 2 12C2 6.47715 6.47715 2 12 2ZM12 3.5C7.30558 3.5 3.5 7.30558 3.5 12C3.5 13.4696 3.87277 14.8834 4.57303 16.1375L4.72368 16.4072L3.61096 20.3914L7.59755 19.2792L7.86709 19.4295C9.12006 20.1281 10.5322 20.5 12 20.5C16.6944 20.5 20.5 16.6944 20.5 12C20.5 7.30558 16.6944 3.5 12 3.5ZM8.75 13H13.2483C13.6625 13 13.9983 13.3358 13.9983 13.75C13.9983 14.1297 13.7161 14.4435 13.35 14.4932L13.2483 14.5H8.75C8.33579 14.5 8 14.1642 8 13.75C8 13.3703 8.28215 13.0565 8.64823 13.0068L8.75 13H13.2483H8.75ZM8.75 9.5H15.2545C15.6687 9.5 16.0045 9.83579 16.0045 10.25C16.0045 10.6297 15.7223 10.9435 15.3563 10.9932L15.2545 11H8.75C8.33579 11 8 10.6642 8 10.25C8 9.8703 8.28215 9.55651 8.64823 9.50685L8.75 9.5H15.2545H8.75Z" />
            </symbol>
            <symbol id="icon-contact-remplie" fill="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C10.3596 22 8.77516 21.6039 7.35578 20.8583L3.06538 21.9753C2.6111 22.0937 2.1469 21.8213 2.02858 21.367C1.99199 21.2266 1.99198 21.0791 2.02855 20.9386L3.1449 16.6502C2.3972 15.2294 2 13.6428 2 12C2 6.47715 6.47715 2 12 2ZM13.2517 13H8.75L8.64823 13.0068C8.28215 13.0565 8 13.3703 8 13.75C8 14.1297 8.28215 14.4435 8.64823 14.4932L8.75 14.5H13.2517L13.3535 14.4932C13.7196 14.4435 14.0017 14.1297 14.0017 13.75C14.0017 13.3703 13.7196 13.0565 13.3535 13.0068L13.2517 13ZM15.25 9.5H8.75L8.64823 9.50685C8.28215 9.55651 8 9.8703 8 10.25C8 10.6297 8.28215 10.9435 8.64823 10.9932L8.75 11H15.25L15.3518 10.9932C15.7178 10.9435 16 10.6297 16 10.25C16 9.8703 15.7178 9.55651 15.3518 9.50685L15.25 9.5Z" />
            </symbol>
            <symbol id="icon-utilisateur" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M17.7545 13.9999C18.9966 13.9999 20.0034 15.0068 20.0034 16.2488V16.8242C20.0034 17.7185 19.6838 18.5833 19.1023 19.2627C17.5329 21.0962 15.1457 22.0011 12.0004 22.0011C8.8545 22.0011 6.46849 21.0959 4.90219 19.2617C4.32242 18.5827 4.00391 17.7193 4.00391 16.8265V16.2488C4.00391 15.0068 5.01076 13.9999 6.25278 13.9999H17.7545ZM17.7545 15.4999H6.25278C5.83919 15.4999 5.50391 15.8352 5.50391 16.2488V16.8265C5.50391 17.3621 5.69502 17.8802 6.04287 18.2876C7.29618 19.7553 9.26206 20.5011 12.0004 20.5011C14.7387 20.5011 16.7063 19.7552 17.9627 18.2873C18.3117 17.8797 18.5034 17.3608 18.5034 16.8242V16.2488C18.5034 15.8352 18.1681 15.4999 17.7545 15.4999ZM12.0004 2.00462C14.7618 2.00462 17.0004 4.2432 17.0004 7.00462C17.0004 9.76605 14.7618 12.0046 12.0004 12.0046C9.23894 12.0046 7.00036 9.76605 7.00036 7.00462C7.00036 4.2432 9.23894 2.00462 12.0004 2.00462ZM12.0004 3.50462C10.0674 3.50462 8.50036 5.07163 8.50036 7.00462C8.50036 8.93762 10.0674 10.5046 12.0004 10.5046C13.9334 10.5046 15.5004 8.93762 15.5004 7.00462C15.5004 5.07163 13.9334 3.50462 12.0004 3.50462Z" />
            </symbol>
            <symbol id="icon-utilisateur-remplie" fill="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M17.7545 13.9999C18.9966 13.9999 20.0034 15.0068 20.0034 16.2488V17.1673C20.0034 17.7406 19.8242 18.2996 19.4908 18.7661C17.9449 20.9294 15.4206 22.0011 12.0004 22.0011C8.5794 22.0011 6.05643 20.9289 4.51427 18.7646C4.18231 18.2987 4.00391 17.7408 4.00391 17.1688V16.2488C4.00391 15.0068 5.01076 13.9999 6.25278 13.9999H17.7545ZM12.0004 2.00462C14.7618 2.00462 17.0004 4.2432 17.0004 7.00462C17.0004 9.76605 14.7618 12.0046 12.0004 12.0046C9.23894 12.0046 7.00036 9.76605 7.00036 7.00462C7.00036 4.2432 9.23894 2.00462 12.0004 2.00462Z" />
            </symbol>
        </svg>
    </header>


    <!-- section resultat de recehrche -->

    <?php

if( isset($_GET['rechercherSubmit']) && trim($_GET['rechercher']) != ''){
include "Personne/cbd.php";

$rechercher = mysqli_real_escape_string($conn, htmlspecialchars($_GET['rechercher']));

$rechercherNom = "SELECT * FROM produits WHERE NOM LIKE '%$rechercher%'";
$resultat_rechercher_nom = mysqli_query($conn,$rechercherNom);

$rechercherMarque = "SELECT * FROM marques WHERE NOM_MARQUE LIKE '%$rechercher%'";
$resultat_rechercher_marque = mysqli_query($conn,$rechercherMarque);

if(mysqli_num_rows($resultat_rechercher_nom) > 0 || mysqli_num_rows($resultat_rechercher_marque) > 0){
    if(mysqli_num_rows($resultat_rechercher_nom) > 0){
?>

    <section class="resultat__recherche" id="searchResult">

        <section class="resultatProduit">
            <h2 class="searchTitle" id="searchTitleP">Les produits :</h2>
            <div class="wrapper">

                <div class="content">
                    <div class="bg-shape">
                    </div>


                    <div class="product-img">

                        <?php
                    while($rechercherNomLigne = mysqli_fetch_array($resultat_rechercher_nom))
                        {
                        if(!isset($e)){
                        $e = 1;
                        }
                ?>

                        <div class="product-img__item" id="img<?php echo $e; ?>">
                            <img src="<?php echo $rechercherNomLigne['IMAGE']; ?>" alt="Image produit"
                                class="product-img__img">
                        </div>

                        <?php
                    $e++;
                }
                
                ?>

                    </div>



                    <div class="product-slider">
                        <button class="prev disabled">
                            <span class="icon">
                                <svg class="icon icon-arrow-right">
                                    <use xlink:href="#icon-arrow-left"></use>
                                </svg>
                            </span>
                        </button>
                        <button class="next">
                            <span class="icon">
                                <svg class="icon icon-arrow-right">
                                    <use xlink:href="#icon-arrow-right"></use>
                                </svg>
                            </span>
                        </button>

                        <div class="product-slider__wrp swiper-wrapper">

                            <?php
                    mysqli_data_seek($resultat_rechercher_nom, 0);

                    while($rechercherNomLigne2 = mysqli_fetch_array($resultat_rechercher_nom))
                    {
                    if(!isset($f)){
                    $f = 1;
                    }
                    $id_marque_recherche = $rechercherNomLigne2['ID_MARQUE'];
                    $SelectionnerMarque = "SELECT * FROM marques WHERE ID_MARQUE = '$id_marque_recherche' ;";
                    $runQuery = mysqli_query($conn, $SelectionnerMarque);
                    $row = mysqli_fetch_array($runQuery);

                    $id_SSCtaegorie = $rechercherNomLigne2['ID_SSCATEGORIE'];
                    $selectionnerScategorie= "SELECT * FROM sous_sous_categories WHERE ID_SSCATEGORIE =
                    '$id_SSCtaegorie';";
                    $sCategorieInfo = mysqli_query($conn,$selectionnerScategorie);
                    $sCategorie = mysqli_fetch_array($sCategorieInfo);

                    $id_SCtaegorie = $sCategorie['ID_SCATEGORIE'];
                    $selectionnerCategorie= "SELECT * FROM sous_categories WHERE ID_SCATEGORIE = '$id_SCtaegorie';";
                    $categorieInfo = mysqli_query($conn,$selectionnerCategorie);
                    $categorie = mysqli_fetch_array($categorieInfo);

                    $id_categorie = $categorie['ID_CATEGORIE'];
                    $selectionnerCategorie= "SELECT * FROM categories WHERE ID_CATEGORIE = '$id_categorie';";
                    $categorieTable = mysqli_query($conn,$selectionnerCategorie);
                    $categorieLigne = mysqli_fetch_array($categorieTable);

                    $nomSSCategorie = $sCategorie['NOM_SSCATEGORIE'];
                    $nomSCategorie = $categorie['NOM_SCATEGORIE'];
                    $nomCategorie = $categorieLigne['NOM_CATEGORIE'];

                    ?>

                            <div class="product-slider__item swiper-slide" data-target="<?php echo "img".$f; ?>">
                                <div class="product-slider__card">
                                    <img src="images/bg.svg" alt="Image" class="product-slider__cover">
                                    <div class="product-slider__content">
                                        <h1 class="product-slider__title">
                                            <?php echo $rechercherNomLigne2['NOM']; ?>
                                        </h1>
                                        <span class="product-slider__price"><?php echo $rechercherNomLigne2['PRIX']; ?>
                                            DH</span>
                                        <div class="product-ctr">

                                            <div class="product-inf">

                                                <span>Déscription:</span><span
                                                    class="inf"><?php echo $rechercherNomLigne2["DESCRIPTION"]; ?></span>
                                            </div>

                                        </div>

                                        <div class="product-slider__bottom">
                                            <button class="product-slider__cart monCompteLien">
                                                Commander
                                            </button>

                                            <a href="personne/detailsProduits.php?id-produit=<?php echo $rechercherNomLigne2['ID_PRODUIT']; ?>"
                                                class="product-slider__fav js-fav"> Voir les détails </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php
                    $f++;
                }}

                ?>
                        </div>
                    </div>
                </div>

                <svg class="hidden" hidden>
                    <symbol id="icon-arrow-left" viewBox="0 0 32 32">
                        <path
                            d="M0.704 17.696l9.856 9.856c0.896 0.896 2.432 0.896 3.328 0s0.896-2.432 0-3.328l-5.792-5.856h21.568c1.312 0 2.368-1.056 2.368-2.368s-1.056-2.368-2.368-2.368h-21.568l5.824-5.824c0.896-0.896 0.896-2.432 0-3.328-0.48-0.48-1.088-0.704-1.696-0.704s-1.216 0.224-1.696 0.704l-9.824 9.824c-0.448 0.448-0.704 1.056-0.704 1.696s0.224 1.248 0.704 1.696z">
                        </path>
                    </symbol>
                    <symbol id="icon-arrow-right" viewBox="0 0 32 32">
                        <path
                            d="M31.296 14.336l-9.888-9.888c-0.896-0.896-2.432-0.896-3.328 0s-0.896 2.432 0 3.328l5.824 5.856h-21.536c-1.312 0-2.368 1.056-2.368 2.368s1.056 2.368 2.368 2.368h21.568l-5.856 5.824c-0.896 0.896-0.896 2.432 0 3.328 0.48 0.48 1.088 0.704 1.696 0.704s1.216-0.224 1.696-0.704l9.824-9.824c0.448-0.448 0.704-1.056 0.704-1.696s-0.224-1.248-0.704-1.664z">
                        </path>
                    </symbol>
                </svg>
            </div>

        </section>
        <?php

    if(mysqli_num_rows($resultat_rechercher_marque) > 0){

    ?>



        <section class="marqueRechercher">

            <h2 class="searchTitle" id="searchTitleM">Les marques :</h2>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?php
            while($rechercherMarqueLigne = mysqli_fetch_array($resultat_rechercher_marque))
            {
                     
        ?>
                    <div class="slider-item swiper-slide">
                        <div class="slider-image-wrapper">
                            <img class="slider-image" src="<?php echo $rechercherMarqueLigne['LOGO_MARQUE']; ?>"
                                alt="Image Marque">
                        </div>
                        <div class="slider-item-content">
                            <h1><a class="lienMarque"
                                    href="personne/produitsMarques.php?id-marque=<?php echo $rechercherMarqueLigne['ID_MARQUE']; ?>"><?php echo $rechercherMarqueLigne['NOM_MARQUE']; ?></a>
                            </h1>
                            <p>Cliquez sur le titre pour découvrir les produits et les promotions de la marque
                                <?php echo $rechercherMarqueLigne['NOM_MARQUE']; ?>.
                            </p>
                        </div>
                    </div>
                    <?php
            }
                     
        ?>
                </div>
                <div class="slider-buttons">
                    <button class="swiper-button-prev">Précédente</button>
                    <button class="swiper-button-next">Suivante</button>
                </div>

                <div class="swiper-pagination"></div>
            </div>

        </section>

        <?php

            }
        }else{


    ?>

        <section class="NoResultsFound" id="NoResultsFound">
            <img src="images/notfound.png" alt="Aucun resultat">
            <h1 class="title">Aucun résultat trouvé.</h1>
            <p>S'il vous plaît vérifier votre mot-clé s' il contient des erreurs et réessayer une autre fois</p>
        </section>

        <?php

    }}

    ?>
    </section>





    <!-- Section accueil -->


    <section id="section-accueil">


        <!-- Section categories -->


        <section class="container mb">
            <div class="row active-with-click">
                <?php

include "Personne/cbd.php";

    $selectionner = "SELECT * from categories;";
    $resultat = mysqli_query($conn,$selectionner);        
    while($data = mysqli_fetch_array($resultat))
{   
    if(!isset($i)){
    $i = 1;
}
    switch ($i) {
    case 1:
        $color = "Cyan";
        break;
    case 2:
        $color = "Teal";
        break;
    case 3:
        $color = "Green";
        break;
    case 4:
        $color = "Purple";
        break;
    case 5:
        $color = "Deep-Purple";
        break;
    }

?>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="material-card <?php echo $color; ?>">
                        <h2>
                            <span><?php echo $data['NOM_CATEGORIE']; ?></span>
                            <strong>
                                <i class="fa fa-fw fa-star"></i>
                                <?php echo $data['INTERET']; ?>
                            </strong>
                        </h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" src="<?php echo $data['IMAGE_CATEGORIE']; ?>">
                            </div>
                            <div class="mc-description">
                                <?php echo $data['DEFINITION']; ?>
                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>
                        <?php
                $nomCategorie = $data['NOM_CATEGORIE'];
                $idCategorie = $data['ID_CATEGORIE'];
                $SelectionneSousCat = "SELECT * FROM sous_categories WHERE ID_CATEGORIE = '$idCategorie' ;";
                $runQuery = mysqli_query($conn, $SelectionneSousCat);
                $row = mysqli_fetch_array($runQuery);
                $nomSousCat = $row["NOM_SCATEGORIE"];
                if($nomSousCat == $nomCategorie){
                ?>
                        <div class="mc-footer">
                            <h4>
                                Voir plus
                            </h4>


                            <a href="Personne/categorie.php?id-categorie=<?php echo $idCategorie; ?>"
                                class="fa fa-fw fa-search"></a>
                        </div>

                        <?php
                }else{
                ?>
                        <div class="mc-footer">
                            <h4>
                                Sous catégories
                            </h4>

                            <?php
                        $selectionnerSousCat = "SELECT * from sous_categories WHERE ID_CATEGORIE = '$idCategorie' ;";
                        $resultat2 = mysqli_query($conn,$selectionnerSousCat);        
                        while($row = mysqli_fetch_array($resultat2)){
                        ?>
                            <a href="Personne/categorie.php?id-categorie=<?php echo $idCategorie; ?>"><img
                                    class="sous_cat" src="<?php echo $row['IMAGE_SCATEGORIE']; ?>"
                                    alt="Sous categories"></a>
                            <?php
                        }
                        ?>
                        </div>


                        <?php

                }
            ?>

                    </article>
                </div>

                <?php
    $i++;
}
?>
            </div>
            </div>
        </section>


        <!-- Partie services -->


        <section class="card-area">

            <!-- Card: Conseils -->
            <section class="card-section">
                <div class="card">
                    <div class="flip-card">
                        <div class="flip-card__container">
                            <div class="card-front">
                                <div class="card-front__tp card-front__tp--conseils">
                                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        viewBox="0 0 511.999 511.999"
                                        style="enable-background:new 0 0 511.999 511.999; " xml:space="preserve"
                                        class="card-front__icon">
                                        <g>
                                            <g>
                                                <path d="M438.09,273.32h-39.596c4.036,11.05,6.241,22.975,6.241,35.404v149.65c0,5.182-0.902,10.156-2.543,14.782h65.461
			c24.453,0,44.346-19.894,44.346-44.346v-81.581C512,306.476,478.844,273.32,438.09,273.32z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M107.265,308.725c0-12.43,2.205-24.354,6.241-35.404H73.91c-40.754,0-73.91,33.156-73.91,73.91v81.581
			c0,24.452,19.893,44.346,44.346,44.346h65.462c-1.641-4.628-2.543-9.601-2.543-14.783V308.725z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M301.261,234.815h-90.522c-40.754,0-73.91,33.156-73.91,73.91v149.65c0,8.163,6.618,14.782,14.782,14.782h208.778
			c8.164,0,14.782-6.618,14.782-14.782v-149.65C375.171,267.971,342.015,234.815,301.261,234.815z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M256,38.84c-49.012,0-88.886,39.874-88.886,88.887c0,33.245,18.349,62.28,45.447,77.524
			c12.853,7.23,27.671,11.362,43.439,11.362c15.768,0,30.586-4.132,43.439-11.362c27.099-15.244,45.447-44.28,45.447-77.524
			C344.886,78.715,305.012,38.84,256,38.84z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M99.918,121.689c-36.655,0-66.475,29.82-66.475,66.475c0,36.655,29.82,66.475,66.475,66.475
			c9.298,0,18.152-1.926,26.195-5.388c13.906-5.987,25.372-16.585,32.467-29.86c4.98-9.317,7.813-19.946,7.813-31.227
			C166.393,151.51,136.573,121.689,99.918,121.689z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M412.082,121.689c-36.655,0-66.475,29.82-66.475,66.475c0,11.282,2.833,21.911,7.813,31.227
			c7.095,13.276,18.561,23.874,32.467,29.86c8.043,3.462,16.897,5.388,26.195,5.388c36.655,0,66.475-29.82,66.475-66.475
			C478.557,151.509,448.737,121.689,412.082,121.689z" />
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


                                    <h2 class="card-front__heading">
                                        NOS
                                    </h2>
                                    <p class="card-front__text-price">
                                        Conseils
                                    </p>
                                </div>

                                <div class="card-front__bt">
                                    <p class="card-front__text-view card-front__text-view--conseils">
                                        Regarde moi
                                    </p>
                                </div>
                            </div>
                            <div class="card-back">
                                <video class="video__container" autoplay muted loop>
                                    <source class="video__media" src="videos/equipe.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>

                    <div class="inside-page">
                        <div class="inside-page__container">
                            <h3 class="inside-page__heading inside-page__heading--conseils">
                                Pour les conseils
                            </h3>
                            <p class="inside-page__text">
                                Notre équipe rest à votre
                                disposition pour répondre à toutes vos questions..
                            </p>
                            <a id="conseils-link"
                                class="inside-page__btn inside-page__btn--conseils contacterNousLien">Contactez Nous</a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Card: Promos -->
            <section class="card-section">
                <div class="card">
                    <div class="flip-card">
                        <div class="flip-card__container">
                            <div class="card-front">
                                <div class="card-front__tp card-front__tp--promos">
                                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        viewBox="0 0 424.038 424.038" style="enable-background:new 0 0 424.038 424.038;"
                                        xml:space="preserve" class="card-front__icon">
                                        <g>
                                            <g>
                                                <path d="M352.4,34.019c-32.4,0-58,26-58,58.4c0,32.4,26,58,58,58s58.4-26,58.4-58.4C410.8,59.619,384.8,34.019,352.4,34.019z
			 M352.4,137.619c-25.2,0-45.6-20.4-45.6-45.6s20.8-45.2,45.6-45.2c25.2,0,45.6,20.4,45.6,45.6
			C398,117.619,377.6,137.619,352.4,137.619z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M370.8,101.219c-0.4-1.2-0.4-2-1.2-3.2c-0.4-0.8-0.8-2-1.6-2.8c-0.8-0.8-1.2-1.6-2-2.4s-1.6-1.6-2.8-2
			c-0.8-0.8-2-1.2-2.8-1.6c-1.2-0.4-2-1.2-3.2-1.6c-1.2-0.4-2.4-0.8-3.2-1.2c-0.4,0-1.2-0.4-1.6-0.8c-0.4-0.4-1.2-0.4-1.6-0.8
			c-0.4-0.4-1.2-0.4-1.6-0.8c-0.4-0.4-0.8-0.8-1.2-1.2c-0.4-0.4-0.8-0.8-0.8-1.6c-0.4-0.4-0.4-1.2-0.4-1.6c0-0.8,0-1.2,0-2
			c0-0.4,0.4-1.2,0.4-1.6c0.4-0.4,0.4-1.2,0.8-1.6c0.4-0.4,0.8-0.8,1.2-1.2c0.4-0.4,1.2-0.8,2-0.8c0.8-0.4,1.2-0.4,2-0.4
			c0.4,0,0.8,0,1.2,0s0.8,0,1.2,0c0.8,0,1.2,0,2,0.4c0.8,0,1.6,0.4,2,0.4c0.4,0,1.2,0.4,1.6,0.4c0.8,0,1.2,0.4,1.6,0.4l2,0.8
			l0.4-2.4l0.8-6.4v-1.6l-1.6-0.4c-0.4,0-1.2-0.4-1.6-0.4c-0.4,0-0.8-0.4-1.6-0.4c-0.4,0-1.2-0.4-2-0.4s-1.2-0.4-2-0.4h-0.4v-5.6v-2
			h-2h-5.6h-2v2v6h-0.4c-1.2,0.4-2.4,0.8-3.6,1.6c-1.2,0.4-2,1.2-2.8,2s-1.6,1.6-2.4,2.8c-0.8,0.8-1.2,2-1.6,3.2
			c-0.4,1.2-0.8,2.4-1.2,3.6c-0.4,1.2-0.4,2.8-0.4,4s0,2,0.4,3.2c0.4,1.2,0.4,2,1.2,3.2c0.4,0.8,1.2,2,1.6,2.8
			c0.8,0.8,1.2,1.6,2,2.4c0.8,0.8,1.6,1.6,2.8,2c0.8,0.8,2,1.2,2.8,1.6c1.2,0.4,2.4,1.2,3.2,1.6c1.2,0.4,2.4,0.8,3.2,1.2
			c0.4,0,1.2,0.4,1.6,0.8c0.4,0.4,1.2,0.4,1.6,0.8c0.4,0.4,0.8,0.8,1.2,0.8c0.4,0.4,0.8,0.8,1.2,1.2c0.4,0.4,0.4,0.8,0.8,1.6
			c0,0.4,0.4,1.2,0.4,2s0,1.2,0,2c0,0.4-0.4,1.2-0.8,1.6c-0.4,0.4-0.8,0.8-1.2,1.2c-0.4,0.4-0.8,0.8-1.6,1.2
			c-0.4,0.4-1.2,0.4-1.6,0.8c-0.4,0-1.2,0.4-2,0.4c-0.4,0-0.8,0-1.6,0c-0.4,0-1.2,0-1.6,0c-0.8,0-1.6,0-2,0c-0.8,0-1.6-0.4-2-0.4
			c-0.8,0-1.6-0.4-2.4-0.8c-0.8-0.4-1.6-0.4-2.4-0.8c-0.4,0-0.8-0.4-1.2-0.4c-0.4,0-0.8-0.4-1.2-0.4l-2.4-1.2l-0.4,2.8l-0.8,7.2v1.2
			l1.2,0.4c1.6-0.4,2.4,0,3.6,0.4c0.8,0.4,2,0.8,2.8,0.8c0.8,0.4,2,0.4,3.2,0.8c1.2,0.4,2,0.4,3.2,0.4h0.8v6v2h2h5.6h2v-2v-6.4h0.4
			c1.2-0.4,2.4-0.8,3.6-1.6c1.2-0.4,2-1.2,3.2-2c0.8-0.8,1.6-1.6,2.4-2.8c0.8-0.8,1.2-2,2-3.2c0.4-1.2,0.8-2.4,1.2-3.6
			c0.4-1.2,0.4-2.4,0.4-4C371.2,103.219,371.2,102.419,370.8,101.219z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M324.4,158.019c-2-2.8-6.4-3.2-9.2-1.2l-64.8,51.6l-83.6-34.8c-2-0.8-4.4-0.4-6,0.8l-89.6,64c-2.8,2-3.6,6-1.6,8.8
			c1.2,2,3.2,2.8,5.2,2.8c1.2,0,2.4-0.4,3.6-1.2l86.8-62l84,34.8c2,0.8,4.8,0.4,6.4-0.8l67.6-53.6
			C326,165.219,326.4,160.819,324.4,158.019z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M418,377.219h-29.6v-185.2c0-3.6-2.8-6.4-6.4-6.4h-58.8c-3.6,0-6.4,2.8-6.4,6.4v185.2h-21.6v-121.2c0-3.6-2.8-6.4-6.4-6.4
			h-59.2c-3.6,0-6.4,2.8-6.4,6.4v121.2h-21.6v-130.8c0-3.6-2.8-6.4-6.4-6.4h-58.8c-3.6,0-6.4,2.8-6.4,6.4v130.8h-21.6v-93.2
			c0-3.6-2.8-6.4-6.4-6.4H42.8c-3.6,0-6.4,2.8-6.4,6.4v93.2h-30c-3.6,0-6.4,2.8-6.4,6.4c0,3.6,2.8,6.4,6.4,6.4h36h58.8h35.2h58.8
			h34.4h58.8h34.4h58.8h36c3.6,0,6.4-2.8,6.4-6.4C424.4,380.019,421.6,377.219,418,377.219z M95.2,377.219h-46v-86.8h46V377.219z
			 M188.8,377.219h-46v-124.4h46V377.219z M282,377.219h-46v-114.8h46V377.219z M375.6,377.219h-46v-178.8h46V377.219z" />
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

                                    <h2 class="card-front__heading">
                                        PROFITER
                                    </h2>
                                    <p class="card-front__text__info">
                                        de nos promos
                                    </p>
                                </div>

                                <div class="card-front__bt">
                                    <p class="card-front__text-view card-front__text-view--promos">
                                        Regarde moi
                                    </p>
                                </div>
                            </div>

                            <div class="card-back">
                                <video class="video__container" autoplay muted loop>
                                    <source class="video__media" src="videos/promo.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>

                    <div class="inside-page">
                        <div class="inside-page__container">
                            <h3 class="inside-page__heading inside-page__heading--promos">
                                Pour les promotions
                            </h3>
                            <p class="inside-page__text">
                                Pour économiser votre argent, Consultez nos meilleures offres.
                            </p>
                            <a id="lienPromotions" class="inside-page__btn inside-page__btn--promos">Nos
                                promotions</a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Card: Ordonnance -->
            <section class="card-section">
                <div class="card">
                    <div class="flip-card">
                        <div class="flip-card__container">
                            <div class="card-front">
                                <div class="card-front__tp card-front__tp--ordonnance">

                                    <svg viewBox="-15 0 511 511.998" xmlns="http://www.w3.org/2000/svg"
                                        class="card-front__icon">
                                        <path fill="#ffffff"
                                            d="m466.140625 349.445312c.1875-.226562.378906-.445312.5625-.671874.527344-.65625 1.039063-1.324219 1.542969-1.996094.085937-.113282.175781-.226563.261718-.34375 8.585938-11.613282 13.246094-25.621094 13.246094-40.28125v-264.890625c0-22.753907-18.507812-41.261719-41.257812-41.261719h-241.339844c-22.75 0-41.261719 18.507812-41.261719 41.261719v94.054687c-11.382812-.667968-22.941406 1.28125-33.484375 5.761719-14.867187 6.320313-27 17.070313-35.09375 31.09375l-39.460937 68.335937-39.460938 68.34375c-3.824219 6.625-6.503906 13.601563-8.101562 20.703126-.535157 2.363281-.945313 4.746093-1.238281 7.128906-.148438 1.191406-.265626 2.386718-.355469 3.582031-.175781 2.386719-.234375 4.773437-.179688 7.15625.027344 1.304687.101563 2.601563.199219 3.902344.527344 6.949219 2.023438 13.792969 4.441406 20.3125.710938 1.914062 1.511719 3.792969 2.378906 5.644531.160157.339844.304688.6875.46875 1.027344 6.238282 12.824218 16.230469 23.988281 29.480469 31.640625.378907.21875.757813.421875 1.140625.632812.332032.183594.664063.375 1 .554688.265625.140625.535156.273437.800782.414062.464843.238281.925781.480469 1.394531.710938.167969.082031.335937.15625.503906.238281.574219.277344 1.152344.554688 1.734375.816406.042969.019532.085938.035156.128906.054688 9.496094 4.265625 19.816406 6.496094 30.234375 6.496094 10.796875 0 21.386719-2.367188 31.054688-6.816407.074219-.035156.148437-.066406.226562-.101562.070313-.03125.140625-.058594.210938-.09375 2.242187 25.25 13.109375 48.722656 31.175781 66.925781 20.375 20.527344 47.515625 31.964844 76.429688 32.207031h.085937.003906.132813c.230468.003907.457031.007813.683594.007813 49.886718 0 92.046874-33.699219 104.917968-79.527344h38.007813c9.726562 0 19.296875-2.152344 28.046875-6.121094.246094-.09375.492187-.183594.730468-.292968 1.292969-.605469 2.550782-1.261719 3.796876-1.941407.007812-.003906.011718-.007812.019531-.011719.964843-.527343 1.914062-1.078124 2.847656-1.648437.054687-.03125.105469-.066406.160156-.097656.882813-.542969 1.753907-1.109375 2.613281-1.691407.089844-.0625.179688-.125.269532-.183593.808594-.558594 1.605468-1.128907 2.390625-1.71875.128906-.097657.257812-.195313.386719-.292969.730468-.558594 1.445312-1.132812 2.152343-1.722656.167969-.136719.335938-.269532.5-.410156.667969-.5625 1.316407-1.148438 1.964844-1.738282.179687-.167968.367187-.328125.546875-.496094.769531-.722656 1.527344-1.460937 2.265625-2.222656.027344-.03125.058594-.058594.085937-.089844l56.542969-58.449218c.464844-.480469.902344-.976563 1.351563-1.46875.234375-.257813.476562-.507813.710937-.765625.476563-.542969.9375-1.101563 1.402344-1.660157zm-359.503906-167.277343c9.738281-16.871094 27.988281-26.996094 46.976562-26.996094 3.992188 0 8.023438.449219 12.011719 1.378906 5.175781 1.207031 10.148438 3.175781 14.777344 5.847657 16.664062 9.625 27.011718 27.574218 27.011718 46.84375 0 9.417968-2.5 18.734374-7.238281 26.9375l-34.457031 59.679687-93.542969-54.007813zm-2.410157 208.773437c-.445312.289063-.890624.582032-1.34375.859375-.191406.121094-.390624.230469-.585937.347657-.386719.234374-.777344.464843-1.171875.691406-.238281.132812-.480469.261718-.71875.394531-.351562.191406-.703125.382813-1.058594.566406-.28125.144531-.566406.285157-.851562.425781-.308594.15625-.621094.304688-.933594.453126-.332031.15625-.664062.308593-1 .457031-.261719.117187-.519531.230469-.78125.34375-.390625.167969-.78125.328125-1.175781.484375-.191407.078125-.386719.152344-.578125.230468-.464844.175782-.929688.351563-1.398438.519532-.097656.035156-.195312.066406-.292968.101562-11.507813 4.007813-24.183594 4.0625-35.835938-.042968-.015625-.003907-.035156-.011719-.050781-.015626-.554688-.195312-1.105469-.402343-1.652344-.617187-.109375-.042969-.21875-.085937-.324219-.128906-.460937-.183594-.917968-.375-1.375-.570313-.15625-.070312-.3125-.136718-.46875-.207031-.417968-.179687-.828125-.375-1.238281-.566406-.175781-.082031-.351563-.164063-.523437-.25-.410157-.199219-.820313-.40625-1.222657-.617188-.164062-.082031-.328125-.164062-.492187-.25-.558594-.296875-1.113282-.605469-1.664063-.921875-25.789062-14.894531-34.65625-47.992187-19.773437-73.78125l34.460937-59.679687 91.96875 53.101562c-.332031.222657-.65625.453125-.988281.679688-.386719.261719-.777344.527343-1.160156.792969-.152344.105468-.300782.207031-.449219.316406-.277344.195312-.550781.398437-.824219.59375-.015625.011718-.027344.023437-.042968.03125-.382813.277344-.765626.550781-1.140626.832031-.175781.128906-.351562.261719-.527343.394531-.300781.226563-.597657.457032-.898438.6875-.324219.25-.652343.496094-.976562.75-.203125.160156-.402344.320313-.601563.480469-.316406.25-.625.5-.933594.753906-.269531.222657-.542968.4375-.8125.660157-.226562.1875-.449218.382812-.671874.570312-.320313.273438-.640626.546875-.960938.820312-.214844.1875-.4375.375-.652344.5625-.25.21875-.496094.449219-.742187.671876-.328125.292968-.65625.585937-.980469.882812-.167969.152344-.335938.304688-.503906.457031-.273438.253907-.539063.515625-.808594.773438-.335938.316406-.667969.632812-.996094.949219-.429687.421874-.855468.84375-1.277344 1.269531-.316406.320312-.632812.636719-.949218.957031-.058594.0625-.121094.125-.183594.1875-.367188.382812-.726562.773438-1.089844 1.160156-.285156.304688-.578125.605469-.859375.910156-.027343.03125-.058593.066407-.085937.097657-.386719.421875-.761719.851562-1.140625 1.277343-.25.28125-.503907.558594-.75.839844-.058594.070313-.117188.136719-.175781.207032-.339844.394531-.671876.796874-1.007813 1.195312-.265625.316406-.53125.628906-.792969.945312-.21875.269532-.433594.539063-.652344.808594-.144531.179688-.28125.359375-.425781.535156-.261719.335938-.53125.667969-.792969 1.003907-.085937.113281-.179687.226562-.265624.339843-.269532.351563-.53125.707032-.792969 1.0625-.242188.320313-.484375.640626-.722657.964844-.117187.164063-.238281.324219-.355468.484375-.25.347657-.496094.703125-.742188 1.050781-.207031.292969-.417968.585938-.621094.882813-.144531.207031-.289062.414063-.429687.621094-.234375.347656-.464844.695312-.695313 1.042969-.175781.265624-.351562.53125-.523437.792968-.167969.257813-.335937.511719-.5.769532-.21875.339843-.433594.683593-.648437 1.027343-.148438.238281-.292969.472657-.4375.707031-.1875.304688-.371094.609376-.554688.914063-.203125.335937-.40625.675781-.605469 1.015625-.117187.203125-.234375.410156-.355469.617188-.203124.351562-.402343.703124-.601562 1.054687-.1875.335937-.375.667969-.558594 1.003906-.050781.089844-.097656.183594-.148437.277344-.054688.097656-.109375.199219-.160157.300781-.207031.382813-.414062.765625-.617187 1.148438-.285156.542968-.5625 1.089844-.839844 1.636718-.191406.375-.375.75-.558593 1.125-.277344.566407-.550782 1.132813-.816407 1.703126-.171875.363281-.335937.726562-.503906 1.089843-.019531.042969-.039063.085938-.058594.128907-.074219.167968-.152343.332031-.230469.5-.167968.382812-.335937.761718-.5 1.144531-.140624.324219-.277343.648437-.414062.972656-.097656.230469-.195312.460937-.289062.691406-.171876.410157-.339844.824219-.507813 1.238281-.109375.273438-.210937.546876-.320313.820313-.097656.257813-.199218.511719-.296874.769531-.171876.449219-.339844.894532-.507813 1.34375-.078125.222656-.15625.445313-.238281.667969-.097656.28125-.199219.566406-.296875.847656-.167969.480469-.339844.964844-.503907 1.449219-.054687.171875-.109374.347656-.164062.519531-.097656.296875-.195312.601563-.289062.902344-.214844.667969-.425782 1.335937-.625 2.011719-.082032.28125-.164063.566406-.246094.851562-.199219.699219-.398438 1.394532-.585938 2.097656-.058594.222657-.113281.449219-.171875.675782-.363281 1.390625-.699219 2.792968-1.003906 4.203125-.046875.21875-.101563.433593-.148437.652343-.140626.675782-.269532 1.359376-.398438 2.039063-.070312.351563-.140625.699219-.203125 1.050781-.011719.050782-.019531.101563-.03125.15625-.101563.574219-.195313 1.152344-.289063 1.730469-.058593.363281-.121093.722656-.175781 1.085937-.015625.097657-.03125.203126-.042969.300782-.082031.539062-.152343 1.082031-.226562 1.621094-.015625.132812-.035156.265624-.054688.398437-.027343.222656-.0625.441406-.089843.660156-.5625.410157-1.132813.808594-1.707031 1.195313-.128907.089844-.261719.171875-.390626.257812zm21.25 12.097656c0-2.496093.105469-4.996093.324219-7.484374.074219-.902344.160157-1.796876.265625-2.691407.191406-1.691406.433594-3.371093.722656-5.035156.015626-.097656.027344-.195313.046876-.292969.113281-.644531.238281-1.285156.367187-1.925781.046875-.238281.089844-.476563.136719-.710937.117187-.566407.25-1.128907.378906-1.691407.070312-.308593.132812-.617187.207031-.921875.117188-.5.25-.988281.375-1.484375.097657-.367187.183594-.738281.285157-1.105469.121093-.453124.257812-.902343.390624-1.355468.113282-.402344.226563-.808594.347657-1.207032.128906-.421874.265625-.835937.402343-1.25.136719-.429687.265626-.863281.410157-1.289062.136719-.394531.28125-.789062.421875-1.183594.152344-.4375.304687-.882812.464844-1.320312.144531-.382813.296874-.757813.441406-1.140625.175781-.445313.34375-.890625.519531-1.335938.148437-.363281.308594-.722656.460937-1.082031.191407-.453125.375-.910156.574219-1.355469.152344-.347656.316407-.691406.472657-1.035156.210937-.460937.417968-.921875.632812-1.375.160156-.328125.324219-.652344.484375-.980469.230469-.464844.457031-.933594.691406-1.394531.164063-.320313.339844-.632813.507813-.949219.246094-.464844.488281-.925781.738281-1.386718.171875-.308594.351563-.613282.527344-.917969.261719-.460938.519531-.921875.789062-1.378907.179688-.304687.367188-.601562.550781-.902343.273438-.453125.546876-.90625.828126-1.355469.191406-.296875.386718-.589844.582031-.886719.285156-.441406.570312-.886719.867187-1.328125.199219-.292968.402344-.578125.605469-.867187.300781-.4375.597656-.871094.90625-1.304688.207031-.285156.421875-.566406.632813-.851562.3125-.425781.625-.855469.945312-1.273438.21875-.285156.441406-.558593.664062-.839843.324219-.414063.644532-.832032.976563-1.242188.234375-.28125.472656-.558594.707031-.839844.332032-.398437.660156-.796875 1-1.191406.242188-.28125.492188-.554688.738282-.832031.339843-.386719.679687-.769531 1.027343-1.148438.25-.277343.511719-.542969.765625-.816406.355469-.375.703125-.75 1.0625-1.117187.261719-.269532.53125-.53125.796875-.796876.359375-.363281.71875-.726562 1.089844-1.082031.273437-.265625.554687-.523437.832031-.785156.371094-.347656.734375-.699219 1.109375-1.039063.289063-.261718.582031-.515624.871094-.773437.378906-.332031.75-.667969 1.132813-.996094.300781-.261719.609374-.511719.917968-.765625.378906-.316406.753906-.636718 1.140625-.949218.3125-.25.636719-.496094.953125-.746094.386719-.300782.769532-.609375 1.164063-.90625.324219-.246094.65625-.484375.984375-.726563.394531-.289062.785156-.582031 1.183594-.867187.335937-.238282.679687-.46875 1.019531-.703125.402343-.277344.800781-.558594 1.207031-.832031.347656-.230469.703125-.457032 1.058594-.683594.402344-.261719.804687-.527344 1.214844-.78125.363281-.226563.734374-.445313 1.101562-.667969.402344-.242187.800781-.492187 1.210938-.726563.046874-.027343.097656-.054687.144531-.082031 1.140625-.664062 2.300781-1.289062 3.472656-1.898437.300781-.15625.605469-.3125.90625-.464844 1.183594-.597656 2.375-1.179688 3.582031-1.726562.011719-.003907.023438-.011719.035156-.015626 8.15625-3.675781 16.851563-6.105468 25.753907-7.191406v176.582032c-43.914063-5.386719-78.128907-43.0625-78.128907-88.296876zm98.128907 88.492188v-176.972656c.023437 0 .046875.003906.070312.007812 1.320313.136719 2.632813.304688 3.933594.496094.074219.011719.148437.023438.222656.03125 1.261719.191406 2.511719.414062 3.757813.660156.144531.027344.289062.054688.4375.082032 1.199218.242187 2.382812.511718 3.5625.800781.183594.042969.367187.085937.550781.132812 1.152344.289063 2.296875.605469 3.433594.941407.195312.058593.394531.117187.59375.175781 1.121093.339843 2.238281.703125 3.339843 1.085937.195313.066406.390626.136719.585938.207032 1.105469.390624 2.203125.800781 3.289062 1.238281.175782.070312.347657.140625.523438.210937 1.105469.449219 2.199219.917969 3.28125 1.410156.132812.0625.261719.125.394531.1875 1.121094.515626 2.230469 1.050782 3.324219 1.613282.058594.03125.121094.0625.183594.097656 1.074218.550781 2.132812 1.128906 3.179687 1.726562.105469.058594.210938.113282.3125.175782 1.035157.589844 2.050781 1.207031 3.058594 1.839844.152344.097656.308594.191406.460937.289062.96875.617188 1.925782 1.257812 2.871094 1.914062.175782.121094.351563.242188.527344.363282.925781.652344 1.835938 1.324218 2.738281 2.007812.175781.136719.355469.273438.535157.410156.890624.691407 1.769531 1.398438 2.632812 2.117188.167969.144531.339844.289062.507812.429688.867188.738281 1.71875 1.488281 2.558594 2.253906.144532.132812.289063.269531.433594.40625.851562.789062 1.695312 1.597656 2.515625 2.421875.105469.105469.210937.21875.316406.324219.847657.859374 1.683594 1.734374 2.5 2.628906.046875.054687.09375.105468.140625.160156.800782.882812 1.582032 1.785156 2.347656 2.703125.082032.097656.164063.195313.246094.292969.753906.910156 1.484375 1.835937 2.203125 2.777344.109375.144531.222657.285156.332031.429687.691407.921875 1.363282 1.855469 2.023438 2.800781.117188.175782.238281.34375.355469.515625.644531.941407 1.269531 1.894531 1.875 2.859375.117187.183594.230469.367188.347656.554688.597656.96875 1.183594 1.949218 1.746094 2.945312.105469.183594.207031.367188.308593.550782.566407 1.011718 1.113282 2.035156 1.636719 3.070312.082031.160156.160157.320312.242188.480469.535156 1.070312 1.050781 2.148437 1.542969 3.242187.054687.117188.105468.234375.15625.351563.507812 1.144531 1 2.304687 1.464843 3.476562.011719.027344.019531.054688.03125.082031.460938 1.167969.894531 2.351563 1.304688 3.542969.035156.105469.074219.207031.109375.3125.394531 1.160157.761718 2.332031 1.113281 3.511719.046875.15625.09375.3125.140625.472656.332031 1.152344.640625 2.316406.925781 3.488282.046875.1875.09375.371093.136719.5625.277344 1.160156.53125 2.328124.761719 3.507812.039062.199219.078125.394531.113281.59375.222656 1.183594.421875 2.371094.597656 3.570312.027344.1875.054688.378907.082032.570313.167968 1.21875.316406 2.441406.4375 3.671875.015624.164062.027343.328125.042968.492188.117188 1.269531.210938 2.542968.273438 3.828124.003906.105469.007812.210938.011718.316407.0625 1.34375.097657 2.699219.097657 4.0625 0 1.453125-.035157 2.90625-.109375 4.355469-.011719.304687-.046875.605468-.0625.90625-.066406 1.140624-.140625 2.28125-.253906 3.417968-.046876.472656-.113282.941406-.167969 1.414063-.105469.941406-.210938 1.886719-.347657 2.824219-.097656.667968-.222656 1.324218-.335937 1.988281-.121094.722656-.234375 1.445312-.375 2.164062-7.410156 37.980469-39.058594 67.394531-78.128906 71.417969zm99.375-79.0625c.007812-.082031.007812-.164062.015625-.25.117187-1.394531.207031-2.800781.273437-4.210938.007813-.214843.015625-.429687.023438-.644531.054687-1.433593.09375-2.875.09375-4.320312 0-10.179688-1.40625-20.035157-4.03125-29.386719h18.023437c5.523438 0 10-4.476562 10-10 0-5.519531-4.476562-10-10-10h-25.84375c-18.039062-35.324219-54.792968-59.570312-97.105468-59.570312-.214844 0-.429688.003906-.644532.007812l-.195312.003906h-.070313c-1.144531.007813-2.289062.039063-3.433593.085938-.246094.007812-.492188.027344-.734376.039062-.863281.039063-1.722656.085938-2.582031.144532-.492187.035156-.980469.082031-1.472656.121093-.605469.050781-1.210937.101563-1.8125.164063-.605469.058594-1.210937.132812-1.816406.203125-.480469.058593-.964844.113281-1.449219.175781-.671875.089844-1.339844.1875-2.011719.289062-.410156.0625-.820312.121094-1.230469.191407-.710937.113281-1.425781.238281-2.136718.367187-.363282.066406-.722656.132813-1.085938.203125-.738281.144531-1.476562.292969-2.214844.453125-.332031.070313-.664062.144532-.996093.21875-.75.167969-1.503907.34375-2.25.527344-.117188.027344-.230469.050781-.34375.082031l29.542969-51.183593c6.492187-11.238282 9.921874-24.011719 9.921874-36.9375 0-26.390626-14.179687-50.972657-37.007812-64.160157-.910156-.523437-1.835938-1.023437-2.761719-1.511719-.292969-.152343-.589843-.296874-.882812-.445312-.65625-.332031-1.3125-.652344-1.976563-.964844-.332031-.15625-.660156-.308594-.996094-.460937-.679687-.304688-1.363281-.601563-2.054687-.886719-.285156-.117188-.570313-.242188-.859375-.359375-.96875-.386719-1.941406-.757813-2.925781-1.105469-.015625-.003906-.035157-.011718-.054688-.019531v-98.066406c0-11.726563 9.539063-21.261719 21.261719-21.261719h241.339844c11.722656 0 21.257812 9.535156 21.257812 21.261719v264.886719c0 4.597656-.652344 9.105468-1.902344 13.410156h-51.851562c-19.910156 0-36.109375 16.199218-36.109375 36.113281v54.511719c-4.671875 1.492187-9.574219 2.285156-14.535156 2.285156zm68.910156-14.71875v-42.078125c0-8.886719 7.226563-16.113281 16.109375-16.113281h40.171875l-51.707031 53.460937zm0 0" />
                                        <path fill="#ffffff"
                                            d="m240.0625 109.417969h158.847656c5.523438 0 10-4.476563 10-10 0-5.523438-4.476562-10-10-10h-158.847656c-5.523438 0-10 4.476562-10 10 0 5.523437 4.476562 10 10 10zm0 0" />
                                        <path fill="#ffffff"
                                            d="m401.332031 177.496094h-.023437c-5.523438 0-9.988282 4.480468-9.988282 10 0 5.523437 4.488282 10 10.011719 10 5.523438 0 10-4.476563 10-10 0-5.519532-4.476562-10-10-10zm0 0" />
                                        <path fill="#ffffff"
                                            d="m368.828125 187.496094c0-5.519532-4.476563-10-10-10h-118.765625c-5.523438 0-10 4.480468-10 10 0 5.523437 4.476562 10 10 10h118.765625c5.523437 0 10-4.476563 10-10zm0 0" />
                                        <path fill="#ffffff"
                                            d="m408.910156 275.578125c0-5.523437-4.476562-10-10-10h-110.191406c-5.519531 0-10 4.476563-10 10 0 5.519531 4.480469 10 10 10h110.191406c5.523438 0 10-4.476563 10-10zm0 0" />
                                    </svg>

                                    <h2 class="card-front__heading">
                                        ENVOYEZ
                                    </h2>
                                    <p class="card-front__text-price">
                                        Ordonnance
                                    </p>
                                </div>

                                <div class="card-front__bt">
                                    <p class="card-front__text-view card-front__text-view--ordonnance">
                                        Regarde moi
                                    </p>
                                </div>
                            </div>
                            <div class="card-back">
                                <video class="video__container" autoplay muted loop>
                                    <source class="video__media" src="videos/payement.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>

                    <div class="inside-page">
                        <div class="inside-page__container">
                            <h3 class="inside-page__heading inside-page__heading--ordonnance">
                                Pour l'ordonnance
                            </h3>
                            <p class="inside-page__text">
                                Veuillez se connecter pour envoyer votre ordonnance.
                            </p>
                            <a class="inside-page__btn inside-page__btn--ordonnance monCompteLien">Se connecter</a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Card: Livraison -->
            <section class="card-section">
                <div class="card">
                    <div class="flip-card">
                        <div class="flip-card__container">
                            <div class="card-front">
                                <div class="card-front__tp card-front__tp--livraison">
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                                        style="enable-background:new 0 0 512 512;" xml:space="preserve"
                                        class="card-front__icon">
                                        <g>
                                            <g>
                                                <path d="M476.158,231.363l-13.259-53.035c3.625-0.77,6.345-3.986,6.345-7.839v-8.551c0-18.566-15.105-33.67-33.67-33.67h-60.392
			V110.63c0-9.136-7.432-16.568-16.568-16.568H50.772c-9.136,0-16.568,7.432-16.568,16.568V256c0,4.427,3.589,8.017,8.017,8.017
			c4.427,0,8.017-3.589,8.017-8.017V110.63c0-0.295,0.239-0.534,0.534-0.534h307.841c0.295,0,0.534,0.239,0.534,0.534v145.372
			c0,4.427,3.589,8.017,8.017,8.017c4.427,0,8.017-3.589,8.017-8.017v-9.088h94.569c0.008,0,0.014,0.002,0.021,0.002
			c0.008,0,0.015-0.001,0.022-0.001c11.637,0.008,21.518,7.646,24.912,18.171h-24.928c-4.427,0-8.017,3.589-8.017,8.017v17.102
			c0,13.851,11.268,25.119,25.119,25.119h9.086v35.273h-20.962c-6.886-19.883-25.787-34.205-47.982-34.205
			s-41.097,14.322-47.982,34.205h-3.86v-60.393c0-4.427-3.589-8.017-8.017-8.017c-4.427,0-8.017,3.589-8.017,8.017v60.391H192.817
			c-6.886-19.883-25.787-34.205-47.982-34.205s-41.097,14.322-47.982,34.205H50.772c-0.295,0-0.534-0.239-0.534-0.534v-17.637
			h34.739c4.427,0,8.017-3.589,8.017-8.017s-3.589-8.017-8.017-8.017H8.017c-4.427,0-8.017,3.589-8.017,8.017
			s3.589,8.017,8.017,8.017h26.188v17.637c0,9.136,7.432,16.568,16.568,16.568h43.304c-0.002,0.178-0.014,0.355-0.014,0.534
			c0,27.996,22.777,50.772,50.772,50.772s50.772-22.776,50.772-50.772c0-0.18-0.012-0.356-0.014-0.534h180.67
			c-0.002,0.178-0.014,0.355-0.014,0.534c0,27.996,22.777,50.772,50.772,50.772c27.995,0,50.772-22.776,50.772-50.772
			c0-0.18-0.012-0.356-0.014-0.534h26.203c4.427,0,8.017-3.589,8.017-8.017v-85.511C512,251.989,496.423,234.448,476.158,231.363z
			 M375.182,144.301h60.392c9.725,0,17.637,7.912,17.637,17.637v0.534h-78.029V144.301z M375.182,230.881v-52.376h71.235
			l13.094,52.376H375.182z M144.835,401.904c-19.155,0-34.739-15.583-34.739-34.739s15.584-34.739,34.739-34.739
			c19.155,0,34.739,15.583,34.739,34.739S163.99,401.904,144.835,401.904z M427.023,401.904c-19.155,0-34.739-15.583-34.739-34.739
			s15.584-34.739,34.739-34.739c19.155,0,34.739,15.583,34.739,34.739S446.178,401.904,427.023,401.904z M495.967,299.29h-9.086
			c-5.01,0-9.086-4.076-9.086-9.086v-9.086h18.171V299.29z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M144.835,350.597c-9.136,0-16.568,7.432-16.568,16.568c0,9.136,7.432,16.568,16.568,16.568
			c9.136,0,16.568-7.432,16.568-16.568C161.403,358.029,153.971,350.597,144.835,350.597z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M427.023,350.597c-9.136,0-16.568,7.432-16.568,16.568c0,9.136,7.432,16.568,16.568,16.568
			c9.136,0,16.568-7.432,16.568-16.568C443.591,358.029,436.159,350.597,427.023,350.597z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M332.96,316.393H213.244c-4.427,0-8.017,3.589-8.017,8.017s3.589,8.017,8.017,8.017H332.96
			c4.427,0,8.017-3.589,8.017-8.017S337.388,316.393,332.96,316.393z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M127.733,282.188H25.119c-4.427,0-8.017,3.589-8.017,8.017s3.589,8.017,8.017,8.017h102.614
			c4.427,0,8.017-3.589,8.017-8.017S132.16,282.188,127.733,282.188z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M278.771,173.37c-3.13-3.13-8.207-3.13-11.337,0.001l-71.292,71.291l-37.087-37.087c-3.131-3.131-8.207-3.131-11.337,0
			c-3.131,3.131-3.131,8.206,0,11.337l42.756,42.756c1.565,1.566,3.617,2.348,5.668,2.348s4.104-0.782,5.668-2.348l76.96-76.96
			C281.901,181.576,281.901,176.501,278.771,173.37z" />
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

                                    <h2 class="card-front__heading">
                                        0DH
                                    </h2>
                                    <p class="card-front__text-price">
                                        Livraison
                                    </p>
                                </div>

                                <div class="card-front__bt">
                                    <p class="card-front__text-view card-front__text-view--livraison">
                                        Regarde moi
                                    </p>
                                </div>
                            </div>
                            <div class="card-back">
                                <video class="video__container" autoplay muted loop>
                                    <source class="video__media" src="videos/delivraison.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>

                    <div class="inside-page">
                        <div class="inside-page__container">
                            <h3 class="inside-page__heading inside-page__heading--livraison">
                                Pour le transport
                            </h3>
                            <p class="inside-page__text">
                                Les produits sont expédiés en 48h. </p>
                            <a class="inside-page__btn inside-page__btn--livraison monCompteLien">Se connecter</a>
                        </div>
                    </div>
                </div>
            </section>
        </section>

        <!-- section : Produits -->

        <section class="produits" id="produits-section">


            <div id="produits">
                <div class="nav">
                    <div class="logo">
                        <img class="image" src="images/miniLogo.png" alt="Logo">
                    </div>
                    <div class="nav__text">Les nouveautés</div>
                    <div class="icone">
                        <img src="images/icone2.svg" alt="Icone">
                    </div>
                </div>
                <div class="cover"><span>Nouveaux<br />Produits</span></div>

                <?php

                // Selectionner les derniers 6 produits qui ne sont pas en promotion

                $nouveauProduit = "SELECT * FROM produits WHERE PRIX_PROMO IS NULL ORDER BY ID_PRODUIT DESC LIMIT 6;";
                $produits = mysqli_query($conn,$nouveauProduit);
                       
                while($produit = mysqli_fetch_array($produits))
                  {
                      if(!isset($j)){
                        $j = 1;
                      } 
                      // Selectionner la marque du produit

                    $id_marque = $produit['ID_MARQUE'];
                    $selectionnerMarque = "SELECT * FROM marques WHERE ID_MARQUE = '$id_marque';";
                    $marqueInfo = mysqli_query($conn,$selectionnerMarque); 
                    $marque = mysqli_fetch_array($marqueInfo);

                     // Selectionner la categorie/sous-categorie et sous-sous-categorie

                     $id_SSCtaegorie = $produit['ID_SSCATEGORIE'];
                     $selectionnerScategorie= "SELECT * FROM sous_sous_categories WHERE ID_SSCATEGORIE = '$id_SSCtaegorie';";
                     $sCategorieInfo = mysqli_query($conn,$selectionnerScategorie); 
                     $sCategorie = mysqli_fetch_array($sCategorieInfo);

                     $id_SCtaegorie = $sCategorie['ID_SCATEGORIE'];
                     $selectionnerCategorie= "SELECT * FROM sous_categories WHERE ID_SCATEGORIE = '$id_SCtaegorie';";
                     $categorieInfo = mysqli_query($conn,$selectionnerCategorie); 
                     $categorie = mysqli_fetch_array($categorieInfo);

                     $id_categorie = $categorie['ID_CATEGORIE'];
                     $selectionnerCategorie= "SELECT * FROM categories WHERE ID_CATEGORIE = '$id_categorie';";
                     $categorieTable = mysqli_query($conn,$selectionnerCategorie); 
                     $categorieLigne = mysqli_fetch_array($categorieTable);

                     $nomSSCategorie = $sCategorie['NOM_SSCATEGORIE'];
                     $nomSCategorie = $categorie['NOM_SCATEGORIE'];
                     $nomCategorie = $categorieLigne['NOM_CATEGORIE'];

                     $indications = $produit['INDICATIONS'];
                     $effetsSecondaires = $produit['EFFETS_SECONDAIRES'];
                     $contreIndications = $produit['CONTRE_INDICATIONS'];

                ?>


                <div class="product" data-index="<?php echo $j; ?>">
                    <div class="product__close">Fermer</div>
                    <img class="product__img" src="<?php echo $produit['IMAGE']; ?>" />
                    <div class="product__brand"><?php echo $marque['NOM_MARQUE']; ?></div>
                    <div class="product__title"><?php echo $produit['NOM']; ?></div>
                    <div class="product__price"><?php echo $produit['PRIX']; ?> DH</div>
                    <div class="product__buttons" style="--delay: 0.2s">
                        <div class="product__options">
                            <div class="availble">En stock</div>
                        </div>
                        <button class="product__option product__add monCompteLien">PASSER COMMANDE</button>
                    </div>
                    <div class="product__subtitle"><?php echo $produit['DESCRIPTION']; ?></div>
                    <div class="product__subtitle product__subtitle--expanded" style="--delay: 0.3s">
                        <span>Description</span><?php echo $produit['DESCRIPTION']; ?></div>
                    <?php 
                        
                        if($indications !== NULL){
                        
                    ?>
                    <div class="product__subtitle product__subtitle--expanded" style="--delay: 0.4s">
                        <span>Indications</span><?php echo $produit['INDICATIONS']; ?></div>
                    <?php 
                    }

                    if( $effetsSecondaires !== NULL){

                    ?>

                    <div class="product__subtitle product__subtitle--expanded" style="--delay: 0.5s"><span>Effets
                            secondaires</span><?php echo $produit['EFFETS_SECONDAIRES']; ?>
                    </div>
                    <?php 
                    }
                    ?>
                    <div class="product__subtitle product__subtitle--expanded" style="--delay: 0.6s">
                        <span>Marque </span></div><img class="product__detail-img"
                        src="<?php echo $marque['LOGO_MARQUE']; ?>" />
                    <div class="product__table">
                        <div class="product__table-title">SPÉCIFICATIONS TECHNIQUES</div>
                        <div class="product__table-row">
                            <div class="product__table-cell">CODE BARRES</div>
                            <div class="product__table-cell"><?php echo $produit['CODE_BARRES']; ?>.</div>
                        </div>
                        <?php 

                            if( $contreIndications !== NULL){

                        ?>
                        <div class="product__table-row">
                            <div class="product__table-cell">CONTRE INDICATIONS</div>
                            <div class="product__table-cell"><?php echo $produit['CONTRE_INDICATIONS']; ?>.</div>
                        </div>
                        <?php 

                        }

                        ?>
                        <div class="product__table-row">
                            <div class="product__table-cell">INFORMATION SUPPLÉMENTAIRE</div>
                            <div class="product__table-cell"><?php echo $produit['INFORMATIONS_SUPPLEMENTAIRES']; ?>.
                            </div>
                        </div>
                        <div class="product__table-row">
                            <div class="product__table-cell">MARQUE</div>
                            <div class="product__table-cell"><?php echo $marque['NOM_MARQUE']; ?>.</div>
                        </div>
                        <?php 
                        
                        if($nomSSCategorie != $nomSCategorie && $nomSSCategorie != $nomCategorie){
                        
                        ?>
                        <div class="product__table-row">
                            <div class="product__table-cell">SOUS-SOUS-CATÉGORIE</div>
                            <div class="product__table-cell"><?php echo $sCategorie['NOM_SSCATEGORIE']; ?>.</div>
                        </div>
                        <?php 
                        }

                        if( $nomSCategorie != $nomCategorie){

                        ?>
                        <div class="product__table-row">
                            <div class="product__table-cell">SOUS-CATÉGORIE</div>
                            <div class="product__table-cell"><?php echo $categorie['NOM_SCATEGORIE']; ?>.</div>
                        </div>
                        <?php 
                        }
                        ?>
                        <div class="product__table-row">
                            <div class="product__table-cell">CATÉGORIE</div>
                            <div class="product__table-cell"><?php echo $categorieLigne['NOM_CATEGORIE']; ?>.</div>
                        </div>
                        <div class="product__option monCompteLien">COMMANDER</div>
                    </div>
                    <div class="product__detail">VOIR LES DÉTAILS</div>
                </div>


                <?php
                     $j++;
                  }
                ?>

                <div class="product__overlay"></div>
            </div>

        </section>

        <!-- section : Produits Promos -->

        <section class="produits__promos">


            <div id="produits-promos">
                <div class="nav__promos">
                    <div class="logo__promos">
                        <img class="image__promos" src="images/MiniLogo2.png" alt="Logo">
                    </div>
                    <div class="nav__text__promos">Nos Promotions</div>
                    <div class="icone__promos">
                        <img src="images/discount.svg" alt="Icone">
                    </div>
                </div>
                <div class="cover__promos"><span>Nos<br />Promos</span></div>

                <?php

                // Selectionner les derniers 6 produits qui sont  en promotion

                $nouveauProduitPromos = "SELECT * FROM produits WHERE PRIX_PROMO IS NOT NULL ORDER BY ID_PRODUIT DESC LIMIT 6;";
                $produitsPromos = mysqli_query($conn,$nouveauProduitPromos);
                       
                while($produitPromo = mysqli_fetch_array($produitsPromos))
                  {
                      if(!isset($num)){
                        $num = 1;
                      } 
                      // Selectionner la marque du produit

                    $id_marque_promos = $produitPromo['ID_MARQUE'];
                    $selectionnerMarquePromos = "SELECT * FROM marques WHERE ID_MARQUE = '$id_marque_promos';";
                    $marqueInfoPromos = mysqli_query($conn,$selectionnerMarquePromos); 
                    $marquePromos = mysqli_fetch_array($marqueInfoPromos);

                     // Selectionner la categorie/sous-categorie et sous-sous-categorie

                     $id_SSCtaegorie_Promo = $produitPromo['ID_SSCATEGORIE'];
                     $selectionnerScategorie_Promo= "SELECT * FROM sous_sous_categories WHERE ID_SSCATEGORIE = '$id_SSCtaegorie_Promo';";
                     $sCategorieInfo_Promo = mysqli_query($conn,$selectionnerScategorie_Promo); 
                     $sCategorie_Promo = mysqli_fetch_array($sCategorieInfo_Promo);

                     $id_SCtaegorie_Promo = $sCategorie_Promo['ID_SCATEGORIE'];
                     $selectionnerCategorie_Promo = "SELECT * FROM sous_categories WHERE ID_SCATEGORIE = '$id_SCtaegorie_Promo';";
                     $categorieInfo_Promo = mysqli_query($conn,$selectionnerCategorie_Promo); 
                     $categorie_Promo = mysqli_fetch_array($categorieInfo_Promo);

                     $id_categorie_Promo = $categorie_Promo['ID_CATEGORIE'];
                     $selectionnerCategorie_Promo = "SELECT * FROM categories WHERE ID_CATEGORIE = '$id_categorie_Promo';";
                     $categorieTable_Promo = mysqli_query($conn,$selectionnerCategorie_Promo); 
                     $categorieLigne_Promo = mysqli_fetch_array($categorieTable_Promo);

                     $nomSSCategorie_Promo = $sCategorie_Promo['NOM_SSCATEGORIE'];
                     $nomSCategorie_Promo = $categorie_Promo['NOM_SCATEGORIE'];
                     $nomCategorie_Promo = $categorieLigne_Promo['NOM_CATEGORIE'];

                     $indicationsPromos = $produitPromo['INDICATIONS'];
                     $effetsSecondairesPromos = $produitPromo['EFFETS_SECONDAIRES'];
                     $contreIndicationsPromos = $produitPromo['CONTRE_INDICATIONS'];
                ?>


                <div class="product__promos" data-index-promos="<?php echo $num; ?>">
                    <div class="product__close__promos">Fermer</div>
                    <img class="product__img__promos" src="<?php echo $produitPromo ['IMAGE']; ?>" />
                    <div class="product__brand__promos"><?php echo $marquePromos['NOM_MARQUE']; ?></div>
                    <div class="product__title__promos"><?php echo $produitPromo['NOM']; ?></div>
                    <div class="product__price__promos"><span id="newPrice"><?php echo $produitPromo['PRIX_PROMO']; ?>
                            DH</span><span id="oldPrice"><?php echo $produitPromo['PRIX']; ?>
                            DH</span></div>
                    <div class="product__buttons__promos" style="--delay: 0.2s">
                        <div class="product__options__promos">
                            <div class="availble__promos">En stock</div>
                        </div>
                        <button class="product__option__promos product__add__promos monCompteLien">PASSER
                            COMMANDE</button>
                    </div>
                    <div class="product__subtitle__promos"><?php echo $produitPromo['DESCRIPTION']; ?></div>
                    <div class="product__subtitle__promos product__subtitle--expanded__promos" style="--delay: 0.3s">
                        <span>Description</span><?php echo $produitPromo['DESCRIPTION']; ?></div>

                    <?php 
                        
                        if($indicationsPromos !== NULL){
                        
                    ?>

                    <div class="product__subtitle__promos product__subtitle--expanded__promos" style="--delay: 0.4s">
                        <span>Indications</span><?php echo $produitPromo['INDICATIONS']; ?></div>
                    <?php 
                    }

                    if( $effetsSecondairesPromos !== NULL){
                    ?>
                    <div class="product__subtitle__promos product__subtitle--expanded__promos" style="--delay: 0.5s">
                        <span>Effets secondaires</span><?php echo $produitPromo['EFFETS_SECONDAIRES']; ?></div>
                    <?php 
                    }

                    ?>
                    <div class="product__subtitle__promos product__subtitle--expanded__promos" style="--delay: 0.6s">
                        <span>Marque </span></div><img class="product__detail-img__promos"
                        src="<?php echo $marquePromos['LOGO_MARQUE']; ?>" />
                    <div class="product__table__promos">
                        <div class="product__table-title__promos">SPÉCIFICATIONS TECHNIQUES</div>
                        <div class="product__table-row__promos">
                            <div class="product__table-cell__promos">CODE BARRES</div>
                            <div class="product__table-cell__promos"><?php echo $produitPromo['CODE_BARRES']; ?>.</div>
                        </div>
                        <?php 

                        if( $contreIndicationsPromos !== NULL){

                    ?>
                        <div class="product__table-row__promos">
                            <div class="product__table-cell__promos">CONTRE INDICATIONS</div>
                            <div class="product__table-cell__promos"><?php echo $produitPromo['CONTRE_INDICATIONS']; ?>.
                            </div>
                        </div>
                        <?php 

                    }

                    ?>
                        <div class="product__table-row__promos">
                            <div class="product__table-cell__promos">INFORMATION SUPPLÉMENTAIRE</div>
                            <div class="product__table-cell__promos">
                                <?php echo $produitPromo['INFORMATIONS_SUPPLEMENTAIRES']; ?>.</div>
                        </div>
                        <div class="product__table-row__promos">
                            <div class="product__table-cell__promos">MARQUE</div>
                            <div class="product__table-cell__promos"><?php echo $marquePromos['NOM_MARQUE']; ?>.</div>
                        </div>
                        <?php 
                        
                        if($nomSSCategorie_Promo != $nomSCategorie_Promo && $nomSSCategorie_Promo != $nomCategorie_Promo){
                        
                        ?>
                        <div class="product__table-row__promos">
                            <div class="product__table-cell__promos">SOUS-SOUS-CATÉGORIE</div>
                            <div class="product__table-cell__promos">
                                <?php echo $sCategorie_Promo['NOM_SSCATEGORIE']; ?>.</div>
                        </div>
                        <?php 
                        }

                        if( $nomSCategorie_Promo != $nomCategorie_Promo){

                        ?>
                        <div class="product__table-row__promos">
                            <div class="product__table-cell__promos">SOUS-CATÉGORIE</div>
                            <div class="product__table-cell__promos"><?php echo $categorie_Promo['NOM_SCATEGORIE']; ?>.
                            </div>
                        </div>
                        <?php 
                        }
                        ?>
                        <div class="product__table-row__promos">
                            <div class="product__table-cell__promos">CATÉGORIE</div>
                            <div class="product__table-cell__promos">
                                <?php echo $categorieLigne_Promo['NOM_CATEGORIE']; ?>.</div>
                        </div>
                        <div class="product__option__promos monCompteLien">COMMANDER</div>
                    </div>
                    <div class="product__detail__promos">VOIR LES DÉTAILS</div>
                </div>


                <?php
                     $num++;
                  }
                ?>

                <div class="product__overlay__promos"></div>
            </div>

        </section>


        <!-- Section: Marques -->

        <section class="marques">
            <div class="blog-slider">
                <div class="blog-slider__wrp swiper-wrapper">

                    <?php
                $nouvelleMarque = "SELECT * FROM marques ORDER BY ID_MARQUE DESC LIMIT 6;";
                $table = mysqli_query($conn,$nouvelleMarque);        
                while($ligne = mysqli_fetch_array($table))
                  {   
                ?>

                    <div class="blog-slider__item swiper-slide">
                        <div class="blog-slider__img">
                            <img src="<?php echo $ligne['LOGO_MARQUE']; ?>">
                        </div>
                        <div class="blog-slider__content">
                            <div class="blog-slider__title"><?php echo $ligne['NOM_MARQUE']; ?></div>
                            <div class="blog-slider__text">Retrouvez toute la gamme <?php echo $ligne['NOM_MARQUE']; ?>
                                sur pharmaciechaabia.com aux
                                meilleurs prix. </div>
                            <a href="personne/produitsMarques.php?id-marque=<?php echo $ligne['ID_MARQUE']; ?>"
                                class="blog-slider__button">VOIR PLUS</a>
                        </div>
                    </div>
                    <?php
                  }
                ?>

                </div>
                <div class="blog-slider__pagination"></div>
            </div>

        </section>


    </section>



    <!-- Section de qui sommes Nous -->


    <section id="qSN">

        <main class="qui__sommes__nous">
            <div class="container__about__us">
                <div class="inner">
                    <div class="inner__headings">
                        <h2 class="inner__head">La pharmacie dans une <span class="inner__clr">nouvelle dimension</span>
                        </h2>
                    </div>
                    <div class="inner__content" id="inner__flex">
                        <p class="inner__text">Il y a près de 25 ans, en tant que pharmacie stationnaire traditionnelle,
                            nous avons décidé d’innover. Nous voulions servir nos clients également en dehors des heures
                            d’ouverture, offrir plus de services et un choix encore plus large. Mais par-dessus tout,
                            nous voulions mettre un terme aux prix élevés des médicaments.</p>
                        <img id="chaabiaPhamacyBuilding" src="images/pharmacieChaabia.svg" alt="Pharmacie CHAABIA">
                    </div>
                </div>
                <div class="inner__headings" id="services__sous__section">
                    <h2 class="inner__head">Vos <span class="inner__clr" id="inner__heading__purple">avantages</span> en
                        un coup d’oeil</h2>
                </div>
                <div class="cards-grid">
                    <div class="card__service afficerProduits">
                        <img class="card__icon" src="images/Grandchoix.svg" alt="Choix">
                        <div class="card__body">
                            <h4 class="card__head">Grand choix</h4>
                            <p class="card__content">Médicaments sans ordonnance,
                                diététique, produits naturels et Bio, Hygiène et Santé.
                            </p>
                        </div>
                    </div>
                    <div class="card__service afficerPromos">
                        <img class="card__icon" src="images/petitprix.svg" alt="Prix">
                        <div class="card__body">
                            <h4 class="card__head">Petits prix</h4>
                            <p class="card__content">Un grand choix de produits au meilleur prix et découvrez dès à
                                présent les offres et promotions en cours.</p>
                        </div>
                    </div>
                    <div class="card__service contacterNousLien">
                        <img class="card__icon" src="images/consultation.svg" alt="Consultation">
                        <div class="card__body">
                            <h4 class="card__head">Consultation pharmaceutique</h4>
                            <p class="card__content">Vous pouvez consulter le pharmacien des questions ou
                                recommendations en ligne ou par téléphone.</p>
                        </div>
                    </div>
                </div>
                <div class="inner__headings" id="services__sous__section">
                    <h2 class="inner__head">Notre <span class="inner__clr" id="inner__heading__blue">équipe</span>
                    </h2>
                </div>
                <div class="personnes__du__pharmacie">
                    <figure class="snip1515">
                        <div class="profile-image imgP"><img src="images/pharmacien.jpg" alt="Pharmacien" />
                        </div>
                        <figcaption>
                            <h3>Ahmed El ABDELLHOUI</h3>
                            <h4>Pharmacien</h4>
                            <p>Dr. Ahmed est diplômé de l’université de Liège/Belgique et il s'occupe de tout en
                                pharmacie </p>
                        </figcaption>
                    </figure>
                    <figure class="snip1515">
                        <div class="profile-image imgB"><img src="images/gerante.webp" alt="Gerante" />
                        </div>
                        <figcaption>
                            <h3>Sanae BENJILALI</h3>
                            <h4>Gérante</h4>
                            <p>Sanae est responsable da la pharmacie quand le pharmacien n'est dans la pharmacie.</p>
                        </figcaption>
                    </figure>
                    <figure class="snip1515">
                        <div class="profile-image imgG"><img src="images/assistante.jpeg" alt="Assistante" />
                        </div>
                        <figcaption>
                            <h3>Nada KADI</h3>
                            <h4>Assistante</h4>
                            <p>Nada est une stagiaire et elle est responsable des appels, recommandations et de la
                                vente.
                            </p>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </main>

    </section>

    <!-- Section de mon compte -->


    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="Personne/inscrire.php" method="POST" id="formInscription">
                <h1>Inscription</h1>
                <div class="input-field input-field-insc" id="divNom">
                    <i class="fa fa-user"></i>
                    <input type="text" name="nom" id="nom-insc" placeholder="Nom" autocomplete="off" />
                    <i class="fa fa-check"></i>
                    <i class="fa fa-exclamation-circle"></i>
                </div>
                <p id="erreurNom" class="erreur-text"></p>
                <div class="input-field input-field-insc">
                    <i class="fa fa-user"></i>
                    <input type="text" name="prenom" id="prenom" placeholder="Prénom" autocomplete="off" />
                    <i class="fa fa-exclamation-circle"></i>
                    <i class="fa fa-check"></i>
                </div>
                <p id="erreurPrenom" class="erreur-text"></p>
                <div class="input-field input-field-insc">
                    <i class="fa fa-envelope"></i>
                    <input type="text" name="email" id="email" placeholder="Email" autocomplete="off" />
                    <i class="fa fa-exclamation-circle"></i>
                    <i class="fa fa-check"></i>
                </div>
                <p id="erreurEmail" class="erreur-text"></p>
                <div class="input-field input-field-insc">
                    <i class="fa fa-phone"></i>
                    <input type="text" name="num" id="num" placeholder="Numéro de téléphone" autocomplete="off" />
                    <i class="fa fa-exclamation-circle"></i>
                    <i class="fa fa-check"></i>
                </div>
                <p id="erreurNum" class="erreur-text"></p>
                <div class="input-field input-field-insc" id="divPass">
                    <i class="fa fa-lock"></i>
                    <input type="password" name="pass" id="password" placeholder="Mot de passe" autocomplete="off" />
                    <i class="fa fa-eye-slash" id="icone1"></i>
                </div>
                <p id="erreurPass" class="erreur-text"></p>
                <div class="input-field input-field-insc" id="confirme-pass">
                    <i class="fa fa-lock"></i>
                    <input type="password" name="verifpass" id="password2" placeholder="Confirmer votre mot de passe"
                        autocomplete="off" />
                    <i class="fa fa-eye-slash" id="icone2"></i>
                </div>
                <p id="erreurPass2" class="erreur-text"></p>

                <button name="inscrire">S'inscrire</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="Personne/connecter.php" method="POST" id="formConnexion">
                <h1>Connexion</h1>
                <div class="input-field input-field-conn">
                    <i class="fa fa-envelope"></i>
                    <input type="text" name="email" id="email-conn" placeholder="Email" autocomplete="off" />
                    <i class="fa fa-exclamation-circle"></i>
                    <i class="fa fa-check"></i>
                </div>
                <p id="erreurEmailConn" class="erreur-text-conn"></p>
                <div class="input-field input-field-conn">
                    <i class="fa fa-lock"></i>
                    <input type="password" name="pass" id="password-conn" placeholder="Mot de passe"
                        autocomplete="off" />
                    <i class="fa fa-eye-slash" id="icone3"></i>
                </div>
                <p id="erreurPassConn" class="erreur-text-conn"></p>
                <button name="connecter">Se connecter</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Un de nous?</h1>
                    <p>Si vous avez déjà un compte,<br> connectez-vous ici. </p>
                    <button class="ghost" id="signIn">Se connecter</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Nouveau ici ?</h1>
                    <p>Si vous n'avez pas de compte, cliquez-ici pour passer votre commande ! </p>
                    <button class="ghost" id="signUp">S'inscrire</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Section Contactez-Nous -->



    <div id="contact" class="container right-panel-active">
        <div class="form-container contact-container">
            <form id="formContact">
                <h1 class="bold">Contactez-Nous</h1>
                <div class="input-field input-field-contact">
                    <i class="fa fa-envelope"></i>
                    <input type="text" name="email-contact" id="email-contact" placeholder="Email" autocomplete="off" />
                    <i class="fa fa-check"></i>
                    <i class="fa fa-exclamation-circle"></i>
                </div>
                <p id="erreurEmailContact" class="erreur-text-contact"></p>
                <div class="input-field input-field-contact">
                    <i class="fa fa-header"></i>
                    <input type="text" name="objet" id="objet" placeholder="Objet" autocomplete="off" />
                    <i class="fa fa-check"></i>
                    <i class="fa fa-exclamation-circle"></i>
                </div>
                <p id="erreurObjet" class="erreur-text-contact"></p>
                <div class="input-field input-field-contact" id="message">
                    <i class="fa fa-comment-o"></i>
                    <textarea class="message-contact" name="messageAdmin" id="messageAdmin" placeholder="Message"
                        autocomplete="off"></textarea>
                    <i class="fa fa-check"></i>
                    <i class="fa fa-exclamation-circle"></i>
                </div>
                <p id="erreurMessage" class="erreur-text-contact"></p>
                <button class="button" id="contact-button" name="contact-button">
                    <span class="default">Envoyer</span>
                    <span class="success">Envoyé</span>
                    <div class="left"></div>
                    <div class="right"></div>
                </button>

            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay" id="overlay">
                <div id="format-div" class="overlay-panel overlay-left">
                    <div class="contact-header">
                        <h1>Informations de contact</h1>
                        <p>Complétez et envoyez le formulaire au pharmacien qui vous répondra dès que possible.</p>
                    </div>
                    <div class="contact-body">
                        <div class="contact-info">
                            <i class="fa fa-phone fa-fw"></i>
                            <span class="info">+05 36 35 05 12</span>
                        </div>
                        <div class="contact-info">
                            <i class="fa fa-envelope fa-fw"></i>
                            <span class="info">elamed180@gmail.com</span>
                        </div>
                        <div class="contact-info">
                            <i class="fa fa-map-marker fa-fw"></i>
                            <span class="info">Bd. Mohamed V 69</span>
                        </div>
                    </div>
                    <div class="social-media-links">
                        <ul>
                            <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->

    <footer class="new_footer_area bg_color">
        <div class="new_footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="f_widget company_widget  fadeInLeft">
                            <h3 class="f-title f_600 t_color f_size_18">Temps de travail</h3>
                            <p>Pharmacie CHAABIA ouverte de <span class="purple">09h:30min</span> à <span
                                    class="purple">13h:30min</span> et de <span class="purple">16h </span>à <span
                                    class="purple">20h</span> du lundi au vendredi.</p>
                            <p>Pour le samedi la pharmacie ouverte de <span class="purple">09h:30min</span> à <span
                                    class="purple">14h</span>.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="f_widget about-widget pl_70  fadeInLeft">
                            <h3 class="f-title f_600 t_color f_size_18">Catégories</h3>
                            <ul class="list-unstyled f_list">
                                <li><a href="Personne/categorie.php?id-categorie=1">Produit pharmaceutique</a></li>
                                <li><a href="Personne/categorie.php?id-categorie=2">La parapharmacie</a></li>
                                <li><a href="Personne/categorie.php?id-categorie=3">La phytothérapie</a></li>
                                <li><a href="Personne/categorie.php?id-categorie=4">Produit diététique</a></li>
                                <li><a href="Personne/categorie.php?id-categorie=5">Préparation pharmaceutique</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="f_widget about-widget pl_70  fadeInLeft">
                            <h3 class="f-title f_600 t_color f_size_18">Liens rapides</h3>
                            <ul class="list-unstyled f_list">
                                <li><a class="accueilLien">Accueil</a></li>
                                <li><a class="qSNLien">Qui sommes-nous?</a></li>
                                <li><a class="contacterNousLien">Contactez-Nous</a></li>
                                <li><a class="monCompteLien">Mon-compte</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h3 class="f-title f_600 t_color f_size_18">Suivez nous</h3>
                        <div class="f_social_icon">
                            <a href="#" class="fa fa-facebook"></a>
                            <a href="#" class="fa fa-twitter"></a>
                            <a href="#" class="fa fa-instagram"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_bg">
                <div class="footer_bg_one"></div>
                <div class="footer_bg_two"></div>
                <div class="footer_bg_three"></div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-7">
                        <p class="mb-0 f_400">Copyright © 2021 Tous droits réservés par pharmaciechaabia. </p>
                    </div>
                    <div class="col-lg-6 col-sm-5 text-right">
                        <p>Pharmacie <i class="icon_pharmacie">CHAABIA</i></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>





</body>

</html>