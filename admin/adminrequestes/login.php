<?php
session_start();
require_once("../../usersrequestes/base.php");

if(isset($_POST['submit']))
{
    echo$name = htmlSpecialChars($_POST['name']);
    echo$password = htmlSpecialChars(md5($_POST['password']));

    $sql = "SELECT admin_name,admin_password FROM admins WHERE 
    admin_name='$name' AND admin_password='$password' ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        $_SESSION['admin'] = "Connecté en tant que ".$name;
        echo '<script>
            window.location.href="../index.php";
        </script>';
    } else {
        echo '<script>
        alert("Mot de passe ou amail incorecte");
        window.location.href="../adminconnect.php";
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