<?php
require '../../usersrequestes/base.php';
require '../../PHPMailer/PHPMailerAutoload.php';
$idclient = $_GET['id'];
$idcommande = $_GET['commande'];

$sql1 ="SELECT email FROM users WHERE user_name='$idclient' LIMIT 1";
$result1 = $conn->query($sql1);
    if ($result1->num_rows == 1) {
        while($row1 = $result1->fetch_assoc()) {      
            $clientemail = $row1["email"];
            
        }
        
    }
$sql ="SELECT * FROM commandes WHERE code_com='$idcommande' LIMIT 1";
$result = $conn->query($sql);
    if ($result->num_rows == 1) {
        while($row = $result->fetch_assoc()) {      
            $date = $row["date_com"];
            $quantite = $row["quantité"];
            $prix = $row["prix"];
        }
    }    

    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->SMTPSecure = 'ssl';
    $mail->SMTPAuth = true;
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 465;
    $mail->Username = 'jalabiyashop@gmail.com';
    $mail->Password = 'peggfcnqrpzfhjsf';
    $mail->setFrom('jalabiyashop@gmail.com');
    $mail->addAddress($clientemail);
    $mail->Subject = 'Notification sur votre commande depuis Jalabiya';
    $mail->Body = "Cher(e) client(e) Votre commandes N°$idcommande est en cours de validation, veuillez payer la somme de $prix pour le(s) $quantite article(s) commandé(s) le $date ";
    // send the message, check for errors
    if (!$mail->send()) {
        echo '<script>
            alert("Email envoyé avec succes !");
            window.location.href="../commandes.php";
        </script>';
    } else {
        echo '<script>
        alert("Erreur d\'envoi de l\'email !");
        window.location.href="../commandes.php";
    </script>';
    }

?>