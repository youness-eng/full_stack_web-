<?php 

$conn = mysqli_connect("localhost", "root", "", "pharmaciechaabia");

if(!$conn){
    die("La connexion a échoué" . mysqli_connect_error());
}