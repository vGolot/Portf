 <?php

 $nome = addslashes($_POST('nome'));
 $email = addslashes($_POST('email'));
 $celular = addslashes($_PO('celular'));
 $mensagem = addslashes($_POST['mensagem']);


$para = "soaresdossantosmatheus04@gmail.com";
$assunto = "Contato - Matheus Soares";

$corpo = "Nome: ".$nome."\n". "E-mail: ".$email. "\n"."Telefone: ".$celular."\n"."Mensagem: ".$mensagem;

$cabeca = "From: matheusss1604@gmail.com"."\n". "Reply-to: ".$email."\n". "X-Mailer:PHP/".phpversion();

if(mail($para,$assunto,$corpo,$cabeca)){    
    echo("E-mail enviado com sucesso!");
}else{
    echo("Houve um erro ao enviar o email!");
}
?>