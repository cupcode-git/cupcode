
<?php   

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];
 
// Inclui o arquivo class.phpmailer.php localizado na mesma pasta do arquivo php 
include "PHPMailer-master/PHPMailerAutoload.php"; 
 
// Inicia a classe PHPMailer 
$mail = new PHPMailer(); 
 
// Método de envio 
$mail->IsSMTP(); 
 
// Enviar por SMTP 
$mail->Host = "email-ssl.com.br"; 
 
// Você pode alterar este parametro para o endereço de SMTP do seu provedor 
$mail->Port = 465; 
 
 
// Usar autenticação SMTP (obrigatório) 
$mail->SMTPAuth = true; 
 
// Usuário do servidor SMTP (endereço de email) 
// obs: Use a mesma senha da sua conta de email 
$mail->Username = 'contato@cupcode.com.br'; 
$mail->Password = '(C)upcode;2019*'; 
 
// Configurações de compatibilidade para autenticação em TLS 
$mail->SMTPOptions = array( 'ssl' => array( 'verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true ) ); 
 
// Você pode habilitar esta opção caso tenha problemas. Assim pode identificar mensagens de erro. 
// $mail->SMTPDebug = 2; 
 
// Define o remetente 
// Seu e-mail 
$mail->From = "contato@cupcode.com.br"; 
 
// Seu nome 
$mail->FromName = "Cupcode"; 
 
// Define o(s) destinatário(s) 
$mail->AddAddress($email, $nome); 
 
// Opcional: mais de um destinatário
// $mail->AddAddress('fernando@email.com'); 
 
// Opcionais: CC e BCC
// $mail->AddCC('joana@provedor.com', 'Joana'); 
// $mail->AddBCC('roberto@gmail.com', 'Roberto'); 
 
// Definir se o e-mail é em formato HTML ou texto plano 
// Formato HTML . Use "false" para enviar em formato texto simples ou "true" para HTML.
$mail->IsHTML(true); 
 
// Charset (opcional) 
$mail->CharSet = 'UTF-8'; 
 
// Assunto da mensagem 
$mail->Subject = "Novo cntato na cupcode"; 
 
// Corpo do email 
$mail->Body = 'Nome:'.$nome.'<br>Email:'.$email.'<br>Telefone:'.$telefone.'<br>Mensagem:'.$mensagem; 
 
// Opcional: Anexos 
// $mail->AddAttachment("/home/usuario/public_html/documento.pdf", "documento.pdf"); 
 
// Envia o e-mail 
$enviado = $mail->Send(); 
 
// Exibe uma mensagem de resultado 
if ($enviado) 
{ 
    echo "Seu email foi enviado com sucesso!"; 
} else { 
    echo "Houve um erro enviando o email: ".$mail->ErrorInfo;
    echo "Envie um e-mail para contato@cupcode.com.br que entraremos em contato contigo.";
    echo "<br>Sua mensagem: ".mensagem;
} 
 
 
?>