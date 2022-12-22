<?php
    session_start();
    require_once("base.php");
    
    $code_user = $_SESSION['code'];
     
    if ( $code_user != '' ) {

        $code = $_GET['id'];
        $nombre = $_POST['nombre'];
    
        $sql1 = "SELECT * FROM produits WHERE code_pro='$code' ";
        $result = $conn->query($sql1);
        
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $nompro = $row["name_pro"];  
                $prix = $row["prix"];
                
            }
        }
        $prixtotal = $prix * $nombre;
        $rands = rand(100000, 99999999);
        
        
        $sql = "INSERT INTO commandes (code_com, quantité, prix, code_user, code_pro) VALUES ($rands, $nombre, $prixtotal, '$code_user' , $code)";
        if ($conn->query($sql)) {
            echo '<script>
                alert("Commande fait avec succes");
                window.location.href="../index.php";
            </script>';
        }   
    }else{
        echo '<script>
                alert("Connectez-vous avant d\'essayer");
                window.location.href="../login.php";
            </script>';
    }

?>