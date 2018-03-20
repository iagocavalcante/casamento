<?php

if(!empty($_POST['nome']) || !empty($_POST['email']) || !empty($_POST['mensagem']) || !empty($_POST['evento'])) {
    ini_set('display_errors', 1);

    $from = $_POST['email'];

    $to = "karla.2.costa@gmail.com";

    $subject = "Confirmação de Presença";

    $message = $_POST['mensagem'];

    $headers = "De:". $from;

    mail($to, $subject, $message, $headers);
}

?>