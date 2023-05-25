<?php
// meu_processamento.php

$name = $_GET['name'];
$surname = $_GET['surname'];
$email = $_GET['email'];
$message = $_GET['message'];

$to = 'seu_email@example.com'; // Substitua pelo seu endereço de email
$subject = 'Novo formulário submetido';
$body = "Nome: $name\nSobrenome: $surname\nEmail: $email\nMensagem: $message";
$headers = 'From: ' . $email;

if (mail($to, $subject, $body, $headers)) {
  echo 'Obrigado por enviar o formulário. Entraremos em contato em breve!';
} else {
  echo 'Desculpe, ocorreu um erro ao enviar o formulário.';
}
?>
