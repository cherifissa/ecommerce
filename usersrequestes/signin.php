<?php
require_once("base.php");

if(isset($_POST['submit']))
{
    echo$name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    // $date = date('Y-m-d H:i:s');

    $sql = "INSERT INTO `users` (`user_name`, `email`, `password`) 
    VALUES ('$name', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo '<script>
            alert("Enregistartin fait avec succes");
            window.location.href="../login.php";
        </script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
   
}
else {
    echo 'eroorrrrr';
}


$conn->close();
?>