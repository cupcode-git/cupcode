<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    # Recipient email
    $mail_to = "contato@cupcode.com.br";

    # Sender Data
    $subject = trim($_POST["subject"]);
    $name = str_replace(array("\r","\n"),array(" "," ") , strip_tags(trim($_POST["nome"])));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $phone = trim($_POST["telefone"]);
    $message = trim($_POST["mensagem"]);
 

    if ( empty($name) OR !filter_var($email, FILTER_VALIDATE_EMAIL) OR empty($phone) OR empty($subject) OR empty($message)) {
        # Set a 400 (bad request) response code and exit.
        http_response_code(400);
        echo "Por favor, preencha todos os dados e tente novamente.";
        exit;
    }


    # Mail Content
    $content = "Name: $nome\n";
    $content .= "Email: $email\n\n";
    $content .= "Phone: $telefone\n";
    $content .= "Message:\n$mensagem\n";
    
    
    # email headers.
    $headers = "De: $nome &lt;$email&gt;";

    # Send the email.
    $success = mail($mail_to, $subject, $content, $headers);
    if ($success) {
        # Set a 200 (okay) response code.
        http_response_code(200);
        echo "obrigado! sua mensagem foi enviada. ;)";
    } else {
        # Set a 500 (internal server error) response code.
        http_response_code(500);
        echo "oops! algo deu errado, não foi possivel enviar sua mensagem, tente enviar um e-mail para contato@cupcode.com.br";
    }

    } else {
        # Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "oops! tivemos um problema com o envio de sua mensagem, tente enviar um e-mail para contato@cupcode.com.br";
    }
?>