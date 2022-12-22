<?php
require '../../usersrequestes/base.php';
require '../../PHPMailer/PHPMailerAutoload.php';
if (isset($_GET['id'])) {

    $clientemail = $_GET['id'];  
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
    $mail->Subject = "Notification bien reçue";
    $mail->Body = "Cher(e) client(e) Votre message a étè bien reçu, merci de vouloir patienter pendant qu'on traite votre demandes ou votre contrubution ";
    
    // send the message, check for errors
    if ($mail->send()) {
        echo '<script>
            alert("Email envoyé avec succes !");
            window.location.href="../message.php";
        </script>';
    } else {
        echo '<script>
        alert("Erreur d\'envoi de l\'email !");
        window.location.href="../message.php";
    </script>';
    }
}    

?>