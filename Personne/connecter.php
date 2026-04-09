<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S'inscrire & Se connecter</title>
     <link rel="icon" type="image/png" href="../images/mini-logo.png">
    <link rel="stylesheet" href="../css/messagesStyle.css">
</head>
<body>
    
</body>
</html>
<?php
    session_start();

    $email = $_POST["email"];
    $pass = $_POST["pass"];

    include_once('cbd.php');

         $sql = mysqli_query($conn, "SELECT count(*) as total from utilisateurs where EMAIL = '".$email."'") or die(mysqli_error($conn));      
         if(!$sql){
             echo"Erreur, Veuillez saisir une autre fois";
             exit();
         }else{
         $rw = mysqli_fetch_array($sql);
         $sql = "SELECT MOT_DE_PASSE FROM utilisateurs WHERE EMAIL = '$email';";
         $resultat = mysqli_query($conn, $sql);
         $row = mysqli_fetch_array($resultat);
         $passBD = $row["MOT_DE_PASSE"];
         if(password_verify($pass,$passBD)){
            if($rw['total'] > 0){ 
            $sql = "SELECT * FROM utilisateurs WHERE EMAIL = '$email' ;";
            $resultat = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($resultat);
            $id = $row["ID_UTILISATEUR"];
            $id_profil = $row["ID_PROFIL"];
            $_SESSION['id'] = $id; 
            $profile = "SELECT NOM_PROFILE FROM profils WHERE ID_PROFIL = '$id_profil' ;";
            $resultat = mysqli_query($conn, $profile);
            $row = mysqli_fetch_array($resultat);
            $nom_profile = $row["NOM_PROFILE"];
            $_SESSION['profile'] = $nom_profile;
            if($nom_profile == "client"){
                $class = "class = \"msg-succes\"";
                header('location: clientPatient.php');
            }elseif($nom_profile == "employe") {
                $class = "class = \"msg-succes\"";
                header('location: employe.php');
            }elseif($nom_profile == "pharmacien"){
                $class = "class = \"msg-succes\"";
            $_SESSION['id'] = $id; 
                header("Refresh:2; url=pharmacien.php");
            }
         
         }else{
            $class = "class = \"msg-erreur\"";
            echo "<p ".$class.">Login ou mot de passe incorrect veuillez réessayer !</p>";
            // header("Refresh:3; url=insc-conn.php"); 
         }
        }else{
            $class = "class = \"msg-erreur\"";
            echo "<p ".$class.">login ou mot de passe incorrect veuillez réessayer !</p>";
            // header("Refresh:3; url=insc-conn.php"); 
        }
        }

?>