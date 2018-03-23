<?php
use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/autoload.php';
    $mail = new PHPMailer;                              // Passing `true` enables exceptions
    try {
        //Server settings
        $mail->SMTPDebug = 0;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';
//        $mail->Host = 'ssl://smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'iagoangelimc@gmail.com';                 // SMTP username
        $mail->Password = 'cavalcante260412';                           // SMTP password
//        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
//        $mail->Port = 587;                                    // TCP port to connect to
        $mail->Port = 465;                                    // TCP port to connect to
        $mail->CharSet = 'utf-8';

        //Recipients
        $mail->setFrom($_POST['email'], $_POST['nome']);
        $mail->addAddress('karla.2.costa@gmail.com', 'Karla');

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Confirmação de Presença';
        $mail->Body    = $_POST['mensagem'] . "<br> Qual evento ? <br>" . $_POST['evento'];

        if(!$mail->send()) {
            echo "Não foi possível enviar email, <a href='http://casamentokarla.iagocavalcante.com.br'>voltar</a> \n Error: ", $mail->ErrorInfo;
        } else {
            echo 'Email enviado <a href="http://casamentokarla.iagocavalcante.com.br">voltar</a>';
        }
    } catch (Exception $e) {
        echo "Não foi possível enviar email, <a href='http://casamentokarla.iagocavalcante.com.br'>voltar</a> \n Error: ", $mail->ErrorInfo;
    }


?>