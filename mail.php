<?php
if(isset( $_POST['Nome']))      // Vai adicionar o elemento
$name = $_POST['Nome'];         // Vai enviar o elemento
if(isset( $_POST['E-mail']))     // Vai adicionar o elemento
$email = $_POST['E-mail'];       // Vai enviar o elemento
if(isset( $_POST['Telefone']))      // Vai adicionar o elemento
$fone = $_POST['Telefone'];         // Vai enviar o elemento
if(isset( $_POST['Mensagem']))   // Vai adicionar o elemento
$message = $_POST['Mensagem'];   // Vai enviar o elemento

$content="From: $name \n E-mail: $email \n Telefone: $fone \n Mensagem: $message"; // Vai fazer a leitura dos elementos dentro do conteúdo
$recipient = "contato@cupcode.com.br"; // Vai enviar para o remetente que se encontra dentro do $recipient
$mailheader = "From: $email \r\n"; // Vai declarar para onde vai ser feito o envio
mail($recipient, $subject, $content, $mailheader) or die("Falha ao fazer o envio dos dados, tente novamente mais tarde!"); // Vai setar erro se tiver erro
echo "<script>window.location='index.php#contact-form';alert('$name, sua mensagem foi enviada com sucesso! Estaremos retornando em breve');</script>";
?>