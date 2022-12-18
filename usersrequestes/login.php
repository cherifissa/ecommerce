<?php
session_start();
require_once("base.php");

if(isset($_POST['submit']))
{
    $name = htmlSpecialChars($_POST['name']);
    $password = htmlSpecialChars(md5($_POST['password']));

    $sql = "SELECT user_name,password FROM users WHERE 
    user_name='$name' AND password='$password' ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        $_SESSION['code'] = $name;
        $_SESSION['name'] = "Connecté en tant que ".$name;
        echo '<script>
            window.location.href="../index.php";
        </script>';
    } else {
        echo '<script>
        alert("Mot de passe ou nom d\'utilisateur incorecte");
        window.location.href="../login.php";
    </script>';
    }
   
}
else {
    echo '<script>
        alert("Erreur");
    </script>';
}


$conn->close();
?>