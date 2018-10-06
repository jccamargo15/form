<?php

//      Formulário
// =================================================== //

// campos

$data                   = date("d/m/Y - H:i");
$nome                   = $_POST['nome'];
$email                  = $_POST['email'];
$telefone               = $_POST['telefone'];
//$ass 					= $_POST['assunto'];
$info                   = $_POST['mensagem'];

$nome_arquivo = $_FILES['arquivo']['name'];
$temp_name = $_FILES['arquivo']['tmp_name'];


//      Email que chega até você
// =================================================== //
$para = "comercial@alumi9.com.br";
$assunto_contato = "Contato enviado pelo site: $ass";
$header          = "
<b>Nome:</b>    $nome ($empresa),<br>
<b>Email:</b>   $email<br>
<b>Assunto:</b>   $ass<br>
<br><br>
<b>Mensagem:</b><br>
$info
<br><br>

==============================================<br>
        $data <br>
==============================================<br>
";

// Função HTML :)
$headers .= "MIME-Version: 1.0\r\n";
// $headers .= "Content-type: text/html;charset=iso-8859-1\r\n";
$headers .= "Content-type: text/html;charset=utf-8\r\n";
$headers .= "From: $nome <$email>\r\n";

//      Resposta que vai ao Cliente/Visitante
// =================================================== //

// $resp_assunto   = "Formulário :: Minha Empresa";
$resp_assunto   = "Contato :: Alumi9 Comercial";
$header2                = "
Olá <b>$nome</b>,
<br><br>
Obrigado pelo seu contato.<br>
Recebemos sua solicitação e brevemente entraremos em contato.
<br><br><br>

==============================================<br>
        Atenciosamente,<br>
        Alumi9 Comercial<br>
==============================================<br>
";

// Função HTML
$headers2 .= "MIME-Version: 1.0\r\n";
// $headers2 .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers2 .= "Content-type: text/html; charset=utf-8\r\n";
$headers2 .= "From: Alumi9 Comercial <comercial@alumi9.com.br>\r\n";
//$headers2 .= "From: Alumi9 Comercial <jose@agenciaart.com>\r\n";

// Envia para você
mail($para, $assunto_contato, $header, $headers);
// Envia para quem preencheu o form
mail($email, $resp_assunto, $header2,$headers2);

// echo "<script>window.location='/form-revenda-web/'</script>";

header("Location: /?success=1");
exit;

?>