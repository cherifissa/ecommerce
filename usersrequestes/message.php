<?php
require_once("base.php");

if(isset($_POST['submit']))
{
    $nom = $_POST['nom'];
    $sujet = $_POST['sujet'];
    $message = $_POST['message'];
    $email = $_POST['email'];

    $sql = "INSERT INTO `messages` (`sujet`, `message`, `nom`, `email`) 
    VALUES ('$sujet','$message', '$nom', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo '<script>
            alert("message envoyé avec succes");
            window.location.href="../index.php";
        </script>';
    } else {
        echo '<script>
            alert("message no envoyé");
            window.location.href="";
        </script>';
    }
   
}
else {
    echo 'Ressayer ';
}


$conn->close();
?>