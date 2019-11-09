<?php
    $to = 'contato@cupcode.com.br';
    $name = $_REQUEST["name"];
    $email= $_REQUEST["email"];
    $fone= $_REQUEST["fone"];
    $message= $_REQUEST["message"];
    


    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From:" . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $text ='<table style="width:100%">
        <tr><td>Nome: '.$name.'</td></tr>
        <tr><td>E-mail: '.$email.'</td></tr>
        <tr><td>Mensagem: '.$message.'</td></tr>
        <tr><td>Numero: '.$fone.'</td></tr>
    </table>';
   
        if (@mail($to, $email, $headers, $text)) {
            echo 'Sua mensagem foi enviada com sucesso.';
        }else{
            echo 'Oh oh, deu um erro e sua mensagem não pode ser enviada. Tente novamente mais tarde.';
        }
?>

