<?php
/**
 * Dados e-mail que chega para você
 */
$para = $meu_email;
$assunto_contato = "Contato enviado pelo site: $assunto";
$header = "
<b>Nome:</b>    $nome ($empresa),<br>
<b>Email:</b>   $email<br>
<b>Assunto:</b> $assunto<br>
<br><br>
<b>Mensagem:</b><br>
$mensagem
<br>
<b>Link para download do anexo:</b> $link_arquivo<br>
<br><br>
Data: $data";
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html;charset=utf-8\r\n";
$headers .= "From: $nome <$email>\r\n";

/**
 * Dados e-mail de resposta que vai para o cliente/visitante
 */
$resp_assunto = $assunto_resposta;
$header2 = "
Olá <b>$nome</b>,
<br><br>
Obrigado pelo seu contato.<br>
Recebemos sua mensagem e brevemente entraremos em contato.
<br><br><br>
Atenciosamente,<br>
$empresa<br>";

$headers2 = "MIME-Version: 1.0\r\n";
$headers2 .= "Content-type: text/html; charset=utf-8\r\n";
$headers2 .= "From: $empresa <$meu_email>\r\n";