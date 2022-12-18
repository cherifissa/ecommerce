<?php
require_once("../../usersrequestes/base.php");

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $prix = $_POST['prix'];
    $image = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "../../images/" . $image;
    $code_cat = $_POST['code_cat'];

    $sql = "INSERT INTO produits ( `name_pro`, `prix`, `image`, `code_cat`) 
    VALUES ('$name', $prix, '$image', '$code_cat' )";

    if($conn->query($sql) === TRUE) {
        move_uploaded_file($tempname, $folder);
        echo '<script>
            alert("Enregistartin fait avec succes");
            window.location.href="../addproduct.php";
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