<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S'inscrire & Se connecter</title>
     <link rel="icon" type="image/png" href="../images/miniLogo.png">
    <link rel="stylesheet" href="../css/messagesStyle.css">
</head>
<body>
    
</body>
</html>

<?php
    session_start(); 
    if(isset($_POST["inscrire"])){
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $email = $_POST["email"];
        $num = $_POST["num"];
        $pass = $_POST["pass"];
        $pass2 = $_POST["verifpass"];

        include_once('cbd.php');
    

            $id = 1;

            // Je hashe le mot de passe d'utilisateur par la fonction password_hash qui crée un nouveau hachage de mot de passe a l'aide d'un algorithme de hachage unidirectionnel puissant 

            $hasher_mot_passe = password_hash($pass,PASSWORD_DEFAULT);
            $insert = "INSERT Into utilisateurs (ID_PROFIL, NOM, PRENOM, TELEPHONE, EMAIL, MOT_DE_PASSE ) values('$id', '$nom','$prenom', '$num', '$email', '$hasher_mot_passe');";
            $inscrire = mysqli_query($conn, $insert);

            if(!$inscrire){
                $class = "class = \"msg-erreur\"";
                echo "<p ".$class.">Une erreur est survenue. Veuillez réessayer une autre fois !</p>";
                // header("Refresh:3; url=");   
            }
            else{                
                

                // Je Veux selectionner le id d'utilisateur du base se donnees et le stocker dans une variable de session

                $selectionnerId = "SELECT * FROM utilisateurs ORDER BY ID_UTILISATEUR DESC LIMIT 1;";
                $selectionnerId;
                $resultat = mysqli_query($conn, $selectionnerId);
                $ligne = mysqli_fetch_array($resultat);
                $id = $ligne["ID_UTILISATEUR"];

                $_SESSION['id'] = $id; 
                $_SESSION['profil'] = "client"; 
                $class = "class = \"msg-succes\"";
                echo "<p ".$class.">Vous êtes enregistré avec succès !</p>";
                echo $_SESSION['id'];
                header('location: clientPatient.php');
            }
    
}
    

         
?>










