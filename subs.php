<?php

// Destinatário
$para = "vendas@depolligranitos.com";

// Assunto do e-mail
$assunto = "Inscrição pelo Site";

// Campos do formulário de contato
$email = $_POST['Subscribe-email'];

// Monta o corpo da mensagem com os campos
$corpo = "<html><body>";
$corpo .= "Email: $email ";
$corpo .= "</body></html>";

// Cabeçalho do e-mail
$email_headers = implode("\n", array("From: Inscricao Site", "Reply-To: $email", "Subject: $assunto", "Return-Path: $email", "MIME-Version: 1.0", "X-Priority: 3", "Content-Type: text/html; charset=UTF-8"));

//Verifica se os campos estão preenchidos para enviar então o email
if (!empty($email)) {
    mail($para, $assunto, $corpo, $email_headers);
    $msg = "Sua inscricao foi realizada com sucesso.";
    echo "<script>alert('$msg');window.location.assign('http://depolligranitos.com/');</script>";
} else {
    $msg = "Inscricao não realizada.";
    echo "<script>alert('$msg');window.location.assign('http://depolligranitos.com/');</script>";
}

?>