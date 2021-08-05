<?php

date_default_timezone_set('America/Sao_Paulo');

require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


if(($_POST['email'] && !empty(trim($_POST['email']))) && ($_POST['message'] && !empty(trim($_POST['message'])))){

    $nome = !empty($_POST['name']) ? $_POST['name'] : 'Não informado';
    $email = !empty($_POST['email']) ? trim($_POST['email']) : 'Não informado';
    $phone = !empty($_POST['phone']) ? $_POST['phone'] : 'Não informado';
    $message = !empty($_POST['message']) ? trim($_POST['message']) : 'Não informado';
    $data = date('d/m/Y H:i:s');

    $mail = new PHPMailer();


    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'diegoleandro.mata777@gmail.com';
    $mail->Password = 'otavio10';
    $mail->Port = 587;

    $mail->setFrom('diegoleandro.mata777@gmail.com');
    $mail->addAddress('diegoleandro.mata777@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = $message;
    $mail->Body = "Nome: {$nome}<br>
                   Email: {$email}<br>
                   Phone: {$phone}<br>
                   Message: {$message}
                   Data/Hora: {$data}";	


    if($mail->send()) {
        echo 'Email enviado com sucesso';
    } 

    else {
        echo 'Email nao enviado';

    }
}
else{

    echo 'Nao Enviado, Por Favor informe o email e a mensagem.';

} 

?>