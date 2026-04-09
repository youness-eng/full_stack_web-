// function pout afficher et cacher menu filter

$(".jsFilter").on("click", function () {
  var x = this.id;
  x = parseInt(x) + 1;
  document.getElementById(x).classList.toggle("active");
});

// Pour changer le vue de liste en grid

document.querySelector(".grid").addEventListener("click", function () {
  document.querySelector(".list").classList.remove("active");
  document.querySelector(".grid").classList.add("active");
  document
    .getElementsByClassName("products-area-wrapper")[3]
    .classList.add("gridView");
  document
    .getElementsByClassName("products-area-wrapper")[3]
    .classList.remove("tableView");
});

// Pour changer le vue de grid en liste

document.querySelector(".list").addEventListener("click", function () {
  document.querySelector(".list").classList.add("active");
  document.querySelector(".grid").classList.remove("active");
  document
    .getElementsByClassName("products-area-wrapper")[3]
    .classList.remove("gridView");
  document
    .getElementsByClassName("products-area-wrapper")[3]
    .classList.add("tableView");
});

// Pour change le theme en click

document.querySelectorAll(".mode-switch").forEach((item) => {
  item.addEventListener("click", (event) => {
    document.documentElement.classList.toggle("light");
  });
});
// Pour activer le lien cliquer et desactiver le lien active

$(document).ready(function () {
  $(".sidebar-list li").click(function (e) {
    $(".sidebar-list li.active").removeClass("active");

    $(this).addClass("active");
  });
});

// Pour afficher/cacher des sections en clique

$("#homeLink").on("click", function () {
  $(
    "#users, #orders, #categories, #messages, #brands, .monCompte-section,#products"
  )
    .fadeOut()
    .next()
    .delay(500);
  $("#accueil").fadeIn();
});
$("#productsLink").on("click", function () {
  $(
    "#users, #orders, #categories, #messages, #brands, .monCompte-section,#accueil"
  )
    .fadeOut()
    .next()
    .delay(500);
  $("#products").fadeIn();
});
$("#usersLink").on("click", function () {
  $(
    "#orders,#products, #categories, #messages, #brands, .monCompte-section,#accueil"
  )
    .fadeOut()
    .next()
    .delay(500);
  $("#users").fadeIn();
});
$("#ordersLink").on("click", function () {
  $(
    "#products, #users, #categories, #messages, #brands, .monCompte-section,#accueil"
  )
    .fadeOut()
    .next()
    .delay(500);
  $("#orders").fadeIn();
});
$("#categoriesLink").on("click", function () {
  $(
    "#products, #users, #orders, #messages, #brands, .monCompte-section,#accueil"
  )
    .fadeOut()
    .next()
    .delay(500);
  $("#categories").fadeIn();
});
$("#brandLink").on("click", function () {
  $(
    "#products, #users, #orders, #categories, #messages, .monCompte-section,#accueil"
  )
    .fadeOut()
    .next()
    .delay(500);
  $("#brands").fadeIn();
});

$("#ordonnanceLink").on("click", function () {
  $(
    "#annonymeMessages, #products, #users, #orders, #categories, #brands, .monCompte-section,#accueil"
  )
    .fadeOut()
    .next()
    .delay(500);
  $("#messages ,#ordonnaceMesssages").fadeIn();
});

$("#annonymeLink").on("click", function () {
  $("#ordonnaceMesssages, #profileSection").fadeOut().next().delay(500);
  $("#messages ,#annonymeMessages").fadeIn();
});

document.querySelectorAll(".ordonnanceLink").forEach((item) => {
  item.addEventListener("click", (event) => {
    $("#ordonnanceLink").click();
    $("html,body").animate({ scrollTop: 0 }, "slow");
  });
});

$("#categorieLink").on("click", function () {
  $(
    "#SousCategories, #SousSousCategories, #products, #users, #orders, #brands, .monCompte-section,#accueil"
  )
    .fadeOut()
    .next()
    .delay(500);
  $("#categories ,#categoriesSection").fadeIn();
});

$("#sousCatL").on("click", function () {
  $("#categoriesSection, #SousSousCategories, #profileSection")
    .fadeOut()
    .next()
    .delay(500);
  $("#categories ,#SousCategories").fadeIn();
});

$("#sousSousCatL").on("click", function () {
  $("#categoriesSection, #SousCategories, #profileSection")
    .fadeOut()
    .next()
    .delay(500);
  $("#categories ,#SousSousCategories").fadeIn();
});

document.querySelectorAll(".categoriesLink").forEach((item) => {
  item.addEventListener("click", (event) => {
    $("#categorieLink").click();
    $("html,body").animate({ scrollTop: 0 }, "slow");
  });
});

// Affiche section de mon profil

$(".account-info-more").on("click", function () {
  $("#products, #users, #categories, #messages, #brands, #orders,#accueil")
    .fadeOut()
    .next()
    .delay(500);
  $("#profileSection").fadeIn();
});

// Fonction pour le sub menu afficher et cacher en clique

$(".sidebar-list-item").click(function () {
  $(".smenu").removeClass("activer");
  $(".smenu2").removeClass("activer");
});
$(".addsmenu").click(function () {
  $(".smenu").addClass("activer");
});
$(".addsmenu2").click(function () {
  $(".smenu2").addClass("activer");
});

$(".smenuL").click(function () {
  $(".smenuL").removeClass("activeLink");
  $(this).addClass("activeLink");
});

// Pour les cartes d'accueil

document.querySelectorAll(".usersLink").forEach((item) => {
  item.addEventListener("click", (event) => {
    $("#usersLink").click();
  });
});
document.querySelectorAll(".ordersLink").forEach((item) => {
  item.addEventListener("click", (event) => {
    $("#ordersLink").click();
  });
});
document.querySelectorAll(".productLink").forEach((item) => {
  item.addEventListener("click", (event) => {
    $("#productsLink").click();
  });
});

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
    document.getElementById("idUser").value = "";
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
  document.getElementById("idUser").value = "";
}

document.querySelectorAll(".deleteUserL").forEach((item) => {
  item.addEventListener("click", (event) => {
    event.preventDefault();
    var val = $(event.currentTarget)
      .closest("#deleteUserD")
      .find(".UserId")
      .val();
    document.getElementById("idUser").value = val;
    $("#modal__button").click();
  });
});
