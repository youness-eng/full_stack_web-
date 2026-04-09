<?php
  
if(isset( $_POST["contact-button"])){
    $objet = $_POST["objet"];
    $email = $_POST["email-contact"];
    $message = $_POST["messageAdmin"];
    include_once('cbd.php');
         $sql = "INSERT INTO `messages_pharmacien`(`OBJET`, `MESSAGE`, `EMAIL`) VALUES ('$objet','$message','$email');";     
         $envoyerMessage = mysqli_query($conn, $sql);
         if(!$envoyerMessage){
          echo '<script>alert("Une erreur s\'est produite. Veuillez réessayer ")</script>';
          header("Refresh:4");
         }
         else{
         header("Refresh:3");
         }
}
  ?>