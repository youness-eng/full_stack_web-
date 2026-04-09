// Animation pour les liens, J'ai creé ces animations a l'aide de morphSVG de GSAP.

const { to, set, registerPlugin } = gsap;

const liens = document.querySelector("#liens");
const indicateur = liens.querySelector(".indicateur");
const li = liens.querySelectorAll("li");

li.forEach((entry) => {
  let button = entry.querySelector("button");

  button.addEventListener("click", (e) => {
    let active = liens.querySelector("li.active"),
      left =
        entry.offsetLeft +
        entry.offsetWidth / 2 -
        indicateur.getBBox().width / 2 +
        "px";

    to(active, {
      "--icon-circle": "0px",
      duration: 0.25,
      onComplete() {
        active.classList.remove("active");
      },
    });

    to(indicateur.querySelector("path"), {
      keyframes: [
        {
          morphSVG:
            "M34 58C45.4078 58 48.3887 68.7534 68 72H0C19.6113 68.7534 22.5922 58 34 58Z",
          duration: 0.1,
        },
        {
          morphSVG:
            "M34 48C41.4078 48 44.3887 66.7534 68 72H0C23.6113 66.7534 26.5922 48 34 48Z",
          duration: 0.25,
          delay: 0.125,
          onStart() {
            to(entry, {
              keyframes: [
                {
                  "--icon-y": "4px",
                  "--icon-s": 0.9,
                  duration: 0.185,
                  delay: 0.025,
                },
                {
                  "--icon-circle": "28px",
                  "--icon-y": "0px",
                  "--icon-s": 1,
                  duration: 0.2,
                  clearProps: true,
                  onComplete() {
                    entry.classList.add("active");
                  },
                },
              ],
            });
            to(liens, {
              keyframes: [
                {
                  "--indicateur-circle-y": "-36px",
                  duration: 0.25,
                  delay: 0.05,
                },
                {
                  "--indicateur-circle-o": 0,
                  duration: 0.1,
                  clearProps: true,
                  onComplete() {
                    set(liens, {
                      "--indicateur-x": left,
                    });
                  },
                },
              ],
            });
          },
        },
        {
          morphSVG:
            "M34 54C45.4078 54 48.3887 66.7534 68 72H0C19.6113 66.7534 22.5922 54 34 54Z",
          duration: 0.2,
        },
      ],
    });

    to(liens, {
      keyframes: [
        {
          "--indicateur-x": left,
          duration: 0.3,
        },
      ],
    });
  });
});

// Afficher et Cacher des sections on click

$("#accueil").on("click", function () {
  $("#section-accueil").fadeIn();
  $("#qSN,#contact,#container,#searchResult,#NoResultsFound").fadeOut();
});
$("#qui-sommes-nous").on("click", function () {
  $("#qSN").fadeIn();
  $(
    "#section-accueil,#contact,#container,#searchResult,#NoResultsFound"
  ).fadeOut();
});
$("#contactez_nous").on("click", function () {
  $("#contact").fadeIn();
  $("#section-accueil,#qSN,#container,#searchResult,#NoResultsFound").fadeOut();
});
$("#mon-compte").on("click", function () {
  $("#container").fadeIn();
  $("#section-accueil,#qSN,#contact,#searchResult,#NoResultsFound").fadeOut();
});

// Les liens rapides

document.querySelectorAll(".accueilLien").forEach((item) => {
  item.addEventListener("click", (event) => {
    $("#accueil").click();
    $("html,body").animate({ scrollTop: 0 }, "slow");
  });
});
document.querySelectorAll(".qSNLien").forEach((item) => {
  item.addEventListener("click", (event) => {
    $("#qui-sommes-nous").click();
    $("html,body").animate({ scrollTop: 0 }, "slow");
  });
});
document.querySelectorAll(".contacterNousLien").forEach((item) => {
  item.addEventListener("click", (event) => {
    $("#contactez_nous").click();
    $("html,body").animate({ scrollTop: 0 }, "slow");
  });
});
document.querySelectorAll(".monCompteLien").forEach((item) => {
  item.addEventListener("click", (event) => {
    $("#mon-compte").click();
    $("html,body").animate({ scrollTop: 0 }, "slow");
  });
});

// Animation du clique sur le boutton nos promotions

$("#lienPromotions").on("click", function () {
  $("html, body").animate(
    { scrollTop: $("#produits-promos").offset().top },
    1000
  );
});

// Animation du clique sur le carte de petits prix et afficahge de promos

$(".afficerPromos").on("click", function () {
  $("#accueil").click();
  $("html, body").animate(
    { scrollTop: $("#produits-promos").offset().top },
    1000
  );
});
// Animation du clique sur le carte de petits prix et afficahge de produits

$(".afficerProduits").on("click", function () {
  $("#accueil").click();
  $("html, body").animate({ scrollTop: $("#produits").offset().top }, 1000);
});

// Animation du boutton  de recherche

function rechercherToggle(obj, evt) {
  var containerRechercher = $(obj).closest(".rechercher-wrapper");
  if (!containerRechercher.hasClass("active")) {
    containerRechercher.addClass("active");
    evt.preventDefault();
  } else if (
    containerRechercher.hasClass("active") &&
    $(obj).closest(".input-holder").length == 0
  ) {
    containerRechercher.removeClass("active");
    containerRechercher.find(".rechercher-input").val("");
  }
}

// Animation des categories

$(function () {
  $(".material-card > .mc-btn-action").click(function () {
    var card = $(this).parent(".material-card");
    var icon = $(this).children("i");
    icon.addClass("fa-spin-fast");

    if (card.hasClass("mc-active")) {
      card.removeClass("mc-active");

      window.setTimeout(function () {
        icon
          .removeClass("fa-arrow-left")
          .removeClass("fa-spin-fast")
          .addClass("fa-bars");
      }, 800);
    } else {
      card.addClass("mc-active");

      window.setTimeout(function () {
        icon
          .removeClass("fa-bars")
          .removeClass("fa-spin-fast")
          .addClass("fa-arrow-left");
      }, 800);
    }
  });
});

// Section des produits

const products = document.querySelectorAll(".product");
const container = document.querySelector("#produits");
const nav = document.querySelector(".nav");
const cover = document.querySelector(".cover");
const productWidth = 310;
const overlay = document.querySelector(".product__overlay");

function getProductOffset() {
  return (container.offsetWidth - (container.offsetWidth * 70) / 100) / 2;
}

function removeActiveClass() {
  const activeProduct = document.querySelector(".product--active");
  if (activeProduct) {
    activeProduct.scrollTop = 0;
    activeProduct.classList.remove("product--active");
    container.classList.remove("container--detail");
  }
}

products.forEach((product) => {
  product.addEventListener("click", (e) => {
    if (e.target.classList.contains("product__close")) {
      overlay.style.display = "none";
      removeActiveClass();
      return;
    }
    if (!e.currentTarget.classList.contains("product--active")) {
      overlay.style.display = "block";
      removeActiveClass();
      e.currentTarget.classList.add("product--active");
      container.classList.add("container--detail");

      const left =
        productWidth * parseInt(e.currentTarget.getAttribute("data-index")) +
        cover.offsetWidth +
        parseInt(e.currentTarget.getAttribute("data-index")) * 6 +
        nav.offsetWidth -
        getProductOffset() -
        productWidth;
      container.scrollLeft = left;
      overlay.style.display = "none";
    }
  });
});

// Section des produits promos

const productsPromos = document.querySelectorAll(".product__promos");
const produitsPromos = document.querySelector("#produits-promos");
const navPromos = document.querySelector(".nav__promos");
const coverPromos = document.querySelector(".cover__promos");
const overlayPromos = document.querySelector(".product__overlay__promos");

function getProductOffsetPromos() {
  return (
    (produitsPromos.offsetWidth - (produitsPromos.offsetWidth * 70) / 100) / 2
  );
}

function removeActiveClassPromos() {
  const activeProductPromos = document.querySelector(
    ".product__promos--active"
  );
  if (activeProductPromos) {
    activeProductPromos.scrollTop = 0;
    activeProductPromos.classList.remove("product__promos--active");
    produitsPromos.classList.remove("container__promos--detail");
  }
}

productsPromos.forEach((product) => {
  product.addEventListener("click", (e) => {
    if (e.target.classList.contains("product__close__promos")) {
      overlayPromos.style.display = "none";
      removeActiveClassPromos();
      return;
    }
    if (!e.currentTarget.classList.contains("product__promos--active")) {
      overlayPromos.style.display = "block";
      removeActiveClassPromos();
      e.currentTarget.classList.add("product__promos--active");
      produitsPromos.classList.add("container__promos--detail");

      const leftPromos =
        productWidth *
          parseInt(e.currentTarget.getAttribute("data-index-promos")) +
        coverPromos.offsetWidth +
        parseInt(e.currentTarget.getAttribute("data-index-promos")) * 6 +
        navPromos.offsetWidth -
        getProductOffsetPromos() -
        productWidth;
      produitsPromos.scrollLeft = leftPromos;
      overlayPromos.style.display = "none";
    }
  });
});

// Section de marques

var swiper = new Swiper(".blog-slider", {
  spaceBetween: 30,
  effect: "fade",
  loop: true,
  mousewheel: {
    invert: false,
  },
  autoHeight: true,
  pagination: {
    el: ".blog-slider__pagination",
    clickable: true,
  },
});

// Section mon compte..

const signUpButton = document.getElementById("signUp");
const signInButton = document.getElementById("signIn");
const containerSignInUp = document.getElementById("container");

signUpButton.addEventListener("click", () =>
  containerSignInUp.classList.add("right-panel-active")
);

signInButton.addEventListener("click", () =>
  containerSignInUp.classList.remove("right-panel-active")
);

// Afficahge de mot de passe

var icone = document.getElementById("icone1");
icone.addEventListener("click", afficherPass1);
function afficherPass1() {
  var icone = document.getElementById("icone1");
  if (icone.className == "fa fa-eye-slash") {
    icone.className = "fa fa-eye";
    var input = (document.querySelector("#password").type = "text");
  } else {
    icone.className = "fa fa-eye-slash";
    var input = (document.querySelector("#password").type = "password");
  }
}

var icone = document.getElementById("icone2");
icone.addEventListener("click", afficherPass2);
function afficherPass2() {
  var icone = document.getElementById("icone2");
  if (icone.className == "fa fa-eye-slash") {
    icone.className = "fa fa-eye";
    var input = (document.querySelector("#password2").type = "text");
  } else {
    icone.className = "fa fa-eye-slash";
    var input = (document.querySelector("#password2").type = "password");
  }
}

var icone = document.getElementById("icone3");
icone.addEventListener("click", afficherPass3);
function afficherPass3() {
  var icone = document.getElementById("icone3");
  if (icone.className == "fa fa-eye-slash") {
    icone.className = "fa fa-eye";
    var input = (document.querySelector("#password-conn").type = "text");
  } else {
    icone.className = "fa fa-eye-slash";
    var input = (document.querySelector("#password-conn").type = "password");
  }
}

//validation des champs du connexion

var formConnexion = document.getElementById("formConnexion");
var emailConn = document.getElementById("email-conn");
var passwordconn = document.getElementById("password-conn");
var erreurLogin = [];

formConnexion.addEventListener("submit", (e) => {
  verifierChampsConnexion();
  if (erreurLogin.length > 0) {
    e.preventDefault();
  }
});

function verifierChampsConnexion() {
  var emailValeur = emailConn.value.trim();
  var passwordValeur = passwordconn.value;

  if (emailValeur === "" || emailValeur == null) {
    champsErreursConn(0);
    afficherErreurs(
      "erreurEmailConn",
      "Vous n'avez pas renseigner votre email !!"
    );
  } else {
    champsValidesConn(0);
  }
  if (passwordValeur === "" || passwordValeur == null) {
    champsErreursConn(1);
    afficherErreurs(
      "erreurPassConn",
      "Vous n'avez pas renseigner votre mot de passe !!"
    );
  } else {
    champsValidesConn(1);
  }
}
function champsErreursConn(x) {
  var divClass = document.getElementsByClassName("input-field-conn");
  divClass[x].classList.add("erreur");
  divClass[x].classList.remove("valider");
  erreurLogin.push("erreur" + x);
  var ajouterTextErreur = (document.getElementsByClassName("erreur-text-conn")[
    x
  ].style.display = "block");
}

function champsValidesConn(x) {
  var divClass = document.getElementsByClassName("input-field-conn");
  divClass[x].classList.add("valider");
  divClass[x].classList.remove("erreur");
  erreurLogin.pop("erreur" + x);
  var supprimerTextErreur = (document.getElementsByClassName(
    "erreur-text-conn"
  )[x].style.display = "none");
}

// Verification des champs d'inscription

var form = document.getElementById("formInscription");
var nom = document.getElementById("nom-insc");
var prenom = document.getElementById("prenom");
var email = document.getElementById("email");
var num = document.getElementById("num");
var password = document.getElementById("password");
var password2 = document.getElementById("password2");
var erreurInscription = [];

form.addEventListener("submit", (e) => {
  verifierChampsInscription();
  if (erreurInscription.length > 0) {
    e.preventDefault();
  }
});

function verifierChampsInscription() {
  var nomValeur = nom.value.trim();
  var prenomValeur = prenom.value.trim();
  var emailValeur = email.value.trim();
  var passwordValeur = password.value;
  var password2Valeur = password2.value;
  var numValeur = num.value.trim();

  if (nomValeur === "" || nomValeur == null) {
    champsErreurs(0);
    afficherErreurs("erreurNom", "Vous n'avez pas renseigner votre nom !!");
  } else {
    champsValides(0);
  }
  if (prenomValeur === "" || prenomValeur == null) {
    champsErreurs(1);
    afficherErreurs(
      "erreurPrenom",
      "Vous n'avez pas renseigner votre prénom !!"
    );
  } else {
    champsValides(1);
  }

  if (emailValeur === "" || emailValeur == null) {
    champsErreurs(2);
    afficherErreurs("erreurEmail", "Vous n'avez pas renseigner votre email !!");
  } else if (!verifierEmail(emailValeur)) {
    champsErreurs(2);
    afficherErreurs(
      "erreurEmail",
      '"' + emailValeur + '" est une adresse email invalide !!'
    );
  } else {
    champsValides(2);
  }
  if (numValeur === "" || numValeur == null) {
    champsErreurs(3);
    afficherErreurs(
      "erreurNum",
      "Vous n'avez pas renseigner votre numéro de téléphone !!"
    );
  } else if (numValeur.match(/[^0-9]/)) {
    champsErreurs(3);
    afficherErreurs(
      "erreurNum",
      "Le numéro ne doit pas contient des lettres !!"
    );
  } else if (!numValeur.match(/^(06|05|07|212)/)) {
    champsErreurs(3);
    afficherErreurs(
      "erreurNum",
      "Le numéro de téléphone doit commencer avec: 06, 05, 07 ou 212 !!"
    );
  } else if (numValeur.length != 10) {
    champsErreurs(3);
    afficherErreurs(
      "erreurNum",
      "Le numéro de téléphone doit avoir 10 chiffres"
    );
  } else {
    champsValides(3);
  }
  if (passwordValeur === "" || passwordValeur == null) {
    champsErreurs(4);
    afficherErreurs(
      "erreurPass",
      "Vous n'avez pas renseigner votre mot de passe !!"
    );
  } else {
    champsValides(4);
  }

  if (password2Valeur === "" || password2Valeur == null) {
    champsErreurs(5);
    afficherErreurs(
      "erreurPass2",
      "Vous n'avez pas renseigner la confirmation de votre mot de passe !!"
    );
  } else if (passwordValeur !== password2Valeur) {
    champsErreurs(5);
    afficherErreurs("erreurPass2", "Les mots de passe ne correspondent pas !!");
  } else {
    champsValides(5);
  }
}

function verifierEmail(email) {
  return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(
    email
  );
}
function champsErreurs(x) {
  var divClass = document.getElementsByClassName("input-field-insc");
  divClass[x].classList.add("erreur");
  divClass[x].classList.remove("valider");
  erreurInscription.push("erreur" + x);
  erreurInscription.push("erreur" + x);
  erreurInscription.push("erreur" + x);
  var ajouterTextErreur = (document.getElementsByClassName("erreur-text")[
    x
  ].style.display = "block");
}
function champsValides(x) {
  var divClass = document.getElementsByClassName("input-field-insc");
  divClass[x].classList.add("valider");
  divClass[x].classList.remove("erreur");
  erreurInscription.pop("erreur" + x);
  erreurInscription.filter((e) => e !== "erreur" + x);
  var supprimerTextErreur = (document.getElementsByClassName("erreur-text")[
    x
  ].style.display = "none");
}
function afficherErreurs(x, erreur) {
  var erreur = (document.getElementById(x).innerHTML = erreur);
}

// La validation des champs de contact de l'admin

var formContact = document.getElementById("formContact");
var emailConntact = document.getElementById("email-contact");
var objet = document.getElementById("objet");
var message = document.getElementById("messageAdmin");
var erreur = [];

formContact.addEventListener("submit", (e) => {
  verifierChampsContact();
  if (erreur.length > 0) {
    e.preventDefault();
  } else {
    /* La fonction responsible de l'animation du boutton d'envoie du message */

    document.querySelectorAll(".button").forEach((button) => {
      let getVar = (variable) =>
        getComputedStyle(button).getPropertyValue(variable);

      button.addEventListener("click", (e) => {
        if (!button.classList.contains("active")) {
          button.classList.add("active");

          gsap.to(button, {
            keyframes: [
              {
                "--left-wing-first-x": 50,
                "--left-wing-first-y": 100,
                "--right-wing-second-x": 50,
                "--right-wing-second-y": 100,
                duration: 0.2,
                onComplete() {
                  gsap.set(button, {
                    "--left-wing-first-y": 0,
                    "--left-wing-second-x": 40,
                    "--left-wing-second-y": 100,
                    "--left-wing-third-x": 0,
                    "--left-wing-third-y": 100,
                    "--left-body-third-x": 40,
                    "--right-wing-first-x": 50,
                    "--right-wing-first-y": 0,
                    "--right-wing-second-x": 60,
                    "--right-wing-second-y": 100,
                    "--right-wing-third-x": 100,
                    "--right-wing-third-y": 100,
                    "--right-body-third-x": 60,
                  });
                },
              },
              {
                "--left-wing-third-x": 20,
                "--left-wing-third-y": 90,
                "--left-wing-second-y": 90,
                "--left-body-third-y": 90,
                "--right-wing-third-x": 80,
                "--right-wing-third-y": 90,
                "--right-body-third-y": 90,
                "--right-wing-second-y": 90,
                duration: 0.2,
              },
              {
                "--rotate": 50,
                "--left-wing-third-y": 95,
                "--left-wing-third-x": 27,
                "--right-body-third-x": 45,
                "--right-wing-second-x": 45,
                "--right-wing-third-x": 60,
                "--right-wing-third-y": 83,
                duration: 0.25,
              },
              {
                "--rotate": 55,
                "--plane-x": -8,
                "--plane-y": 24,
                duration: 0.2,
              },
              {
                "--rotate": 40,
                "--plane-x": 45,
                "--plane-y": -180,
                "--plane-opacity": 0,
                duration: 0.3,
                onComplete() {
                  setTimeout(() => {
                    button.removeAttribute("style");
                    gsap.fromTo(
                      button,
                      {
                        opacity: 0,
                        y: -8,
                      },
                      {
                        opacity: 1,
                        y: 0,
                        clearProps: true,
                        duration: 0.3,
                        onComplete() {
                          button.classList.remove("active");
                        },
                      }
                    );
                  }, 2000);
                },
              },
            ],
          });

          gsap.to(button, {
            keyframes: [
              {
                "--text-opacity": 0,
                "--border-radius": 0,
                "--left-wing-background": getVar("--primary-darkest"),
                "--right-wing-background": getVar("--primary-darkest"),
                duration: 0.1,
              },
              {
                "--left-wing-background": getVar("--primary"),
                "--right-wing-background": getVar("--primary"),
                duration: 0.1,
              },
              {
                "--left-body-background": getVar("--primary-dark"),
                "--right-body-background": getVar("--primary-darkest"),
                duration: 0.4,
              },
              {
                "--success-opacity": 1,
                "--success-scale": 1,
                duration: 0.25,
                delay: 0.25,
              },
            ],
          });
        }
      });
    });

    /* Cette partie est responsable d'envoyer les donnees au php et stockes les donnes du formulaire dans la base de donnes sans refresher la page en utilisant AJAX + JQUERY */

    $(document).ready(function () {
      $("#contact-button").click(function () {
        var data =
          $("#formContact").serialize() + "&contact-button=contact-button";
        $.ajax({
          url: "Personne/contactPharmacien.php",
          type: "post",
          data: data,
        });
      });
    });

    e.preventDefault();
    setTimeout(function () {
      location.reload();
    }, 4000);
  }
});

function verifierChampsContact() {
  var emailValeur = emailConntact.value;
  var objetValeur = objet.value;
  var messageValeur = message.value;

  if (emailValeur === "" || emailValeur == null) {
    champsErreursContact(0);
    afficherErreursContact(
      "erreurEmailContact",
      "Vous n'avez pas renseigner votre email !!"
    );
  } else if (!verifierEmail(emailValeur)) {
    champsErreursContact(0);
    afficherErreursContact(
      "erreurEmailContact",
      '"' + emailValeur + '" est une adresse email invalide !!'
    );
  } else {
    champsValidesContact(0);
  }

  if (objetValeur === "" || objetValeur == null) {
    champsErreursContact(1);
    afficherErreursContact(
      "erreurObjet",
      "Vous n'avez pas renseigner l'objet de votre message !!"
    );
  } else if (/[^a-zA-Z]/.test(objetValeur)) {
    champsErreursContact(1);
    afficherErreursContact(
      "erreurObjet",
      "L'objet' doit contient des lettres seulement !!"
    );
  } else {
    champsValidesContact(1);
  }

  if (messageValeur == "" || messageValeur == null) {
    champsErreursContact(2);
    afficherErreursContact(
      "erreurMessage",
      "Vous n'avez pas renseigner votre message !!"
    );
  } else {
    champsValidesContact(2);
  }
}

function champsErreursContact(x) {
  var divClass = document.getElementsByClassName("input-field-contact");
  divClass[x].classList.add("erreur");
  divClass[x].classList.remove("valider");
  erreur.push("erreur" + x);
  var ajouterTextErreur = (document.getElementsByClassName(
    "erreur-text-contact"
  )[x].style.display = "block");
}
function champsValidesContact(x) {
  var divClass = document.getElementsByClassName("input-field-contact");
  divClass[x].classList.add("valider");
  divClass[x].classList.remove("erreur");
  erreur.pop("erreur" + x);
  erreur.filter((e) => e !== "erreur" + x);
  var supprimerTextErreur = (document.getElementsByClassName(
    "erreur-text-contact"
  )[x].style.display = "none");
}
function afficherErreursContact(x, erreur) {
  var erreur = (document.getElementById(x).innerHTML = erreur);
}

// Animer les sections

const tl = gsap.timeline({ defaults: { duration: 0.6, ease: "power2.inOut" } });
tl.from("#logo", { opacity: 0, x: "-40px" })
  .from(".rechercher-wrapper", { opacity: 0, x: "40px" })
  .from(".col-md-4", { opacity: 0, y: "-50px", stagger: 0.2 });

// Partie resultat de recherche

var swiper = new Swiper(".product-slider", {
  spaceBetween: 30,
  effect: "fade",
  // initialSlide: 2,
  loop: false,
  navigation: {
    nextEl: ".next",
    prevEl: ".prev",
  },
  mousewheel: {
    invert: false,
  },
  on: {
    init: function () {
      var index = this.activeIndex;

      var target = $(".product-slider__item").eq(index).data("target");

      console.log(target);

      $(".product-img__item").removeClass("active");
      $(".product-img__item#" + target).addClass("active");
    },
  },
});

swiper.on("slideChange", function () {
  var index = this.activeIndex;

  var target = $(".product-slider__item").eq(index).data("target");

  console.log(target);

  $(".product-img__item").removeClass("active");
  $(".product-img__item#" + target).addClass("active");

  if (swiper.isEnd) {
    $(".prev").removeClass("disabled");
    $(".next").addClass("disabled");
  } else {
    $(".next").removeClass("disabled");
  }

  if (swiper.isBeginning) {
    $(".prev").addClass("disabled");
  } else {
    $(".prev").removeClass("disabled");
  }
});

// Animation des marques de recherche

var swiper = new Swiper(".swiper-container", {
  slidesPerView: 1,
  spaceBetween: 20,
  effect: "fade",
  loop: true,
  speed: 300,
  mousewheel: {
    invert: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    dynamicBullets: true,
  },
  // Navigation fleche
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
