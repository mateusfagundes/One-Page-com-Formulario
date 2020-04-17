<?php

if(isset($_POST(['email']) && |empty($_POST(['email'])){}

$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$tel = addslashes($_POST['telefone']);
$mensagem = addslashes($_POST['messagem']);

$to = "mateus@oplin.com.br";
$subjet = "Formulario de contato";
$body = "Nome: ".$nome. "\r\n"
		"Email: ".$email. "\r\n"
		"Telefone: ".$tel. "\r\n"
		"Mensagem: ".$messagem;

$header = "From: mateus@oplin.com.br"."\r\n"
			."Reply-to:".$email "\r\n"
			."x=mailer:php/".phpversion();
			
if(mail($to,$subjet,$body,$header)){
	echo("E-mail enviado com sucesso!");
}
else{
	echo("E-mail não pode ser enviado!");
}

}
?>