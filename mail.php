<?php
// Recebendo dados do formulário
$name = $_POST['name'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$endereco = $_POST['endereco'];
$cep = $_POST['cep'];
$plano = $_POST['plano'];
$message = $_POST['message'];


$headers = "Content-Type: text/html; charset=utf-8\r\n";
$headers .= "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

// Dados que serão enviados
$corpo = "Formulário da página de contato <br>";
$corpo .= "Nome: " . $name . " <br>";
$corpo .= "Email: " . $email . " <br>";
$corpo .= "Celular: " . $celular . " <br>";
$corpo .= "CPF: " . $cpf . " <br>";
$corpo .= "RG: " . $rg . " <br>";
$corpo .= "Endereço: " . $endereco . " <br>";
$corpo .= "CEP: " . $cep . " <br>";
$corpo .= "Plano: " . $plano . " <br>";
$corpo .= "Mensagem: " . $message . " <br>";


// Email que receberá a mensagem (Não se esqueça de substituir)
$email_to = 'suporte@luianalves.com.br';

// Enviando email
$status = mail($email_to, mb_encode_mimeheader($subject, "utf-8"), $corpo, $headers);

if ($status):
  // Enviada com sucesso
  header('location:index.php?status=sucesso');
else:
  // Se der erro
  header('location:index.php?status=erro');
endif;
?>