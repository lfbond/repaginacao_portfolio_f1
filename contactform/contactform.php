<?php
// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
require("../classes/phpmailer/class.phpmailer.php"); 
require("../classes/phpmailer/class.smtp.php");

//Variáveis passadas pelo formulário
$nome = $_POST['nome'];
/* $phone = $_POST['telefone']; */
/*$cidade = $_POST['cidade'];
$produto = $_POST['produto'];
$assunto = $_POST['assunto']; */
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];
//$defeitoEstofado = $_POST['defeitoEstofado'];
//$data_envio = date('d/m/Y');
//$hora_envio = date('H:i:s');


$arquivos = "

<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>

</head>

<body>

  <h1>Novo contato através do site</h1>

  <p><strong>Nome:</strong> $nome</p>
  <p><strong>E-mail:</strong> $email</p>
  <p><strong>Mensagem:</strong> $mensagem</p>

</body>

</html>
";



// Inicia a classe PHPMailer
$mail = new PHPMailer();
// Define os dados do servidor e tipo de conexão
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->Host = "smtp.hostinger.com.br"; // Endereço do servidor SMTP
$mail->SMTPAuth = true; // Usa autenticação SMTP? (opcional)
$mail->Port = 587; // Usar 587 porta SMTP
$mail->Username = 'contato@f1technology.com.br'; // Usuário do servidor SMTP
$mail->Password = 'F1technology@2020'; // Senha do servidor SMTP
// Define o remetente
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->From = "contato@f1technology.com.br"; // Seu e-mail
// Define os destinatário(s)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->AddAddress('f1technology.contato@gmail.com'); //PRA QUEM VAI ENVIAR?

//$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // Cópia Oculta
// Define os dados técnicos da Mensagem
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->CharSet = "utf-8"; // Charset da mensagem (opcional)
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
// Define a mensagem (Texto e Assunto)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->Subject  = "Novo contato através do site!"; // Assunto da mensagem
$mail->Body = $arquivos;
$mail->AltBody = "Testando 123! \r\n :)";
// Define os anexos (opcional)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
//$mail->AddAttachment("c:/temp/documento.pdf", "novo_nome.pdf");  // Insere um anexo
// Envia o e-mail
$enviado = $mail->Send();
// Limpa os destinatários e os anexos
//$mail->ClearAllRecipients();
//$mail->ClearAttachments();
// Exibe uma mensagem de resultado
if ($enviado) {
  echo "<script>window.location.href = '/?contato?EnviaEmail=true'</script>'";

} else {
  echo "Não foi possível enviar o e-mail.";
  echo "<b>Informações do erro:</b> " . $mail->ErrorInfo;
}

