<?php
require 'PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPSecure = 'ssl';
$mail->SMTPAuth = true;
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->Username = 'jalabiyashop@gmail.com';
$mail->Password = 'peggfcnqrpzfhjsf';
$mail->setFrom('cherifissa35@gmail.com');
$mail->addAddress('jalabiyashop@gmail.com');
$mail->Subject = 'Hello from PHPMailer!';
$mail->Body = 'This is a test.';
//send the message, check for errors
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