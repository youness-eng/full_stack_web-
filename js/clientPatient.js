document.addEventListener("DOMContentLoaded", function () {
  var modeSwitch = document.querySelector(".mode-switch");

  modeSwitch.addEventListener("click", function () {
    document.documentElement.classList.toggle("dark");
    modeSwitch.classList.toggle("active");
  });

  var cartBtn = document.querySelector("#cart-btn");

  cartBtn.addEventListener("click", function () {
    if (cartBtn.classList.contains("visible")) {
      cartBtn.classList.remove("visible");
      cartBtn.classList.add("hidden");
      document.querySelector(".cart-section").classList.remove("show");
    } else {
      cartBtn.classList.add("visible");
      cartBtn.classList.remove("hidden");
      document.querySelector(".cart-section").classList.add("show");
    }
  });
});

// Pour activer le lien cliquer et desactiver le lien active de sidebar menu

$(document).ready(function () {
  $(".app-sidebar a").click(function (e) {
    $(".app-sidebar a.activeL").removeClass("activeL");

    $(this).addClass("activeL");
  });
});

// Pour activer le lien cliquer et desactiver le lien active des messages

$(document).ready(function () {
  $(".products-section-header p span").click(function (e) {
    $(".products-section-header p span.linkClicked").removeClass("linkClicked");

    $(this).addClass("linkClicked");
  });
});

// Ajout le 3d animation au carte en clique

const cards = document.querySelectorAll(".card");

function transition() {
  if (this.classList.contains("active")) {
    this.classList.remove("active");
  } else {
    this.classList.add("active");
  }
}

cards.forEach((card) => card.addEventListener("click", transition));

// Ajouter l'animation de "ajouter au panier" en clique

document.querySelectorAll(".add-to-cart").forEach((button) => {
  button.addEventListener("click", (e) => {
    e.stopPropagation();
    button.classList.toggle("added");
  });
});

// Pour afficher/cacher des sections en clique

$("#home").on("click", function () {
  $(
    ".orders-section, .messages-section, .prescription-section, .monCompte-section"
  )
    .fadeOut()
    .next()
    .delay(300);
  $(".products-section, .cart-section").fadeIn();
});
$("#orders").on("click", function () {
  $(
    ".products-section, .cart-section, .messages-section, .prescription-section, .monCompte-section"
  )
    .fadeOut()
    .next()
    .delay(300);
  $(".orders-section").fadeIn();
});
$("#messages").on("click", function () {
  $(
    ".products-section, .cart-section, .orders-section, .prescription-section, .monCompte-section"
  )
    .fadeOut()
    .next()
    .delay(300);
  $(".messages-section").fadeIn();
});
$("#prescription").on("click", function () {
  $(
    ".products-section, .cart-section, .orders-section, .messages-section, .monCompte-section"
  )
    .fadeOut()
    .next()
    .delay(300);
  $(".prescription-section").fadeIn();
});
$(".profile-btn").on("click", function () {
  $(
    ".products-section, .cart-section, .orders-section, .messages-section, .prescription-section"
  )
    .fadeOut()
    .next()
    .delay(300);
  $(".monCompte-section").fadeIn();
});

$("#sent").on("click", function () {
  $("#receivedMessages").fadeOut().next().delay(300);
  $("#SentMessages").fadeIn();
});
$("#received").on("click", function () {
  $("#SentMessages").fadeOut().next().delay(300);
  $("#receivedMessages").fadeIn();
});

document.querySelectorAll(".prescriptionLink").forEach((item) => {
  item.addEventListener("click", (event) => {
    $("#prescription").click();
    $("html,body").animate({ scrollTop: 0 }, "slow");
  });
});

document.querySelectorAll(".ordersLink").forEach((item) => {
  item.addEventListener("click", (event) => {
    $("#orders").click();
    $("html,body").animate({ scrollTop: 0 }, "slow");
  });
});

document.querySelectorAll(".cartLink, .homeLink").forEach((item) => {
  item.addEventListener("click", (event) => {
    $("#home").click();
    $("html,body").animate({ scrollTop: 0 }, "slow");
  });
});

// Supprimer produit du carte en clique

$(".delete").on("click", function () {
  $(this).parent("div").remove();
});

//fonction pour copier la nom du fichier sur la machine de l'utilisateur

function copierLocation() {
  var inputImage = document.getElementById("input-image");
  var imageLocation = document.getElementById("image-location");
  if (inputImage.value) {
    imageLocation.innerHTML = inputImage.value.match(
      /[\/\\]([\w\d\s\.\-\(\)]+)$/
    )[1];
  } else {
    imageLocation.innerHTML = "Sélectionnez image";
  }
}

// Afficher et cacher section de verification de supprimer

const openModalButtons = document.querySelectorAll("[data-modal-target]");
const closeModalButtons = document.querySelectorAll("[data-close-button]");
const overlay = document.getElementById("overlay");

openModalButtons.forEach((button) => {
  button.addEventListener("click", () => {
    const modal = document.querySelector(button.dataset.modalTarget);
    openModal(modal);
  });
});

overlay.addEventListener("click", () => {
  const modals = document.querySelectorAll(".modal.activeM");
  modals.forEach((modal) => {
    closeModal(modal);
  });
});

closeModalButtons.forEach((button) => {
  button.addEventListener("click", () => {
    const modal = button.closest(".modal");
    closeModal(modal);
    document.getElementById("idMessage").value = "";
    document.getElementById("idCommande").value = "";
  });
});

function openModal(modal) {
  if (modal == null) return;
  modal.classList.add("activeM");
  overlay.classList.add("activeM");
}

function closeModal(modal) {
  if (modal == null) return;
  modal.classList.remove("activeM");
  overlay.classList.remove("activeM");
  document.getElementById("idMessage").value = "";
  document.getElementById("idCommande").value = "";
}

document.querySelectorAll(".deleteMessageL").forEach((item) => {
  item.addEventListener("click", (event) => {
    event.preventDefault();
    var val = $(event.currentTarget)
      .closest("#deleteMessageD")
      .find(".hIMessageId")
      .val();
    document.getElementById("idMessage").value = val;
    $("#modal__button").click();
  });
});

document.querySelectorAll(".deleteOrderL").forEach((item) => {
  item.addEventListener("click", (event) => {
    event.preventDefault();
    var val = $(event.currentTarget)
      .closest("#deleteOrderD")
      .find(".OrderClass")
      .val();
    document.getElementById("idCommande").value = val;
    $("#modal__button").click();
  });
});
