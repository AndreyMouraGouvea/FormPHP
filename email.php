<?php
// to confirm if 'email' is empty, so it will run
if(isset($_POST['email']) &&! !empty($_POST['email'])){

$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['message']);


$to = "andreygouveia.05@gmail.com"; 
$subject = "Contato - Andrey Moura";
$body = "Nome: ".$nome. "\r\n".
        "Email: ".$email. "\r\n".
        "Mensagem: ".$mensagem;
$header = "From: andrey.gouvea@etec.sp.gov.br"."\r\n".
            "Reply-To:".$email."\e\n".
            "X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){
    echo("Email enviado com sucesso!");
}else{
    echo("Email não pode ser enviado!");
}

}

?>
<!-- YT video: https://www.youtube.com/watch?v=Af0X_pEt7AY -->