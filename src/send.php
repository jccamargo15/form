<?php
/**
 * Valores para envio dos emails
 */
$debug = false; //se verdade imprime os dados, se falso envia e redireciona
$empresa = 'Nome da Empresa';
$meu_email = 'jose@propulsao.digital';
$tamanho_maximo_arquivo = '100000'; // em bytes
$assunto_contato = 'Contato enviado pelo site';
$assunto_resposta = 'Contato - ' . $empresa;
$data = date("d/m/Y - H:i");
$dominio = 'https://propulsao.digital/labs/form/attach/';
$dir = '../attach/'; // diretório onde serão movidos os arquivos

/**
 * Verifica os campos rebidos do formulário
 */
if (isset($_POST['nome']) && !empty($_POST['nome'])) {
  $nome = $_POST['nome'];
} else {
  $nome = '';
}
if (isset($_POST['email']) && !empty($_POST['email'])) {
  $email = $_POST['email'];
} else {
  $email = '';
}
if (isset($_POST['celular']) && !empty($_POST['celular'])) {
  $celular = $_POST['celular'];
} else {
  $celular = '';
}
if (isset($_POST['telefone']) && !empty($_POST['telefone'])) {
  $telefone = $_POST['telefone'];
} else {
  $telefone = '';
}
if (isset($_POST['cpf']) && !empty($_POST['cpf'])) {
  $cpf = $_POST['cpf'];
} else {
  $cpf = '';
}
if (isset($_POST['rg']) && !empty($_POST['rg'])) {
  $rg = $_POST['rg'];
} else {
  $rg = '';
}
if (isset($_POST['cep']) && !empty($_POST['cep'])) {
  $cep = $_POST['cep'];
} else {
  $cep = '';
}
if (isset($_POST['cnpj']) && !empty($_POST['cnpj'])) {
  $cnpj = $_POST['cnpj'];
} else {
  $cnpj = '';
}
if (isset($_POST['assunto']) && !empty($_POST['assunto'])) {
  $assunto = $_POST['assunto'];
} else {
  $assunto = '';
}
if (isset($_POST['mensagem']) && !empty($_POST['mensagem'])) {
  $mensagem = $_POST['mensagem'];
} else {
  $mensagem = '';
}

/**
 * Campos do arquivo enviado
 */
// $arquivo = (isset($_FILES['arquivo'])) ? $_FILES['arquivo'] : false;
if (isset($_FILES['arquivo']['name']) && !empty($_FILES['arquivo']['name'])) {
  $nome_arquivo = $_FILES['arquivo']['name'];
} else {
  $nome_arquivo = '';
}
if (isset($_FILES['arquivo']['type']) && !empty($_FILES['arquivo']['type'])) {
  $tipo_arquivo = $_FILES['arquivo']['type'];
} else {
  $tipo_arquivo = '';
}
if (isset($_FILES['arquivo']['tmp_name']) && !empty($_FILES['arquivo']['tmp_name'])) {
  $arquivo = $_FILES['arquivo']['tmp_name'];
} else {
  $arquivo = '';
}
if (isset($_FILES['arquivo']['error']) && !empty($_FILES['arquivo']['error'])) {
  $erro_arquivo = $_FILES['arquivo']['error'];
} else {
  $erro_arquivo = '';
}
if (isset($_FILES['arquivo']['size']) && !empty($_FILES['arquivo']['size'])) {
  $tamanho_arquivo = $_FILES['arquivo']['size'];
} else {
  $tamanho_arquivo = '';
}
if ($nome_arquivo!='' && $erro_arquivo=='') {
  $tem_arquivo = true;
  /**
   * move e renomeia arquivo
   */
  $nome_novo_arquivo = date("YmdHis").'_'.$nome_arquivo;
  move_uploaded_file($arquivo, $dir.$nome_novo_arquivo);
  $link_arquivo = $dominio.$nome_novo_arquivo;
} else {
  $tem_arquivo = false;
  $link_arquivo = '';
}

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

/**
 * Caso $debug seja verdade, imprime todos os dados
 * Caso falso, envia emails e
 * redireciona para página de resposta com status do envio
 */
if ($debug) {
  echo 'Nome: '.$nome.'<br>';
  echo 'E-mail: '.$email.'<br>';
  echo 'Celular: '.$celular.'<br>';
  echo 'Telefone: '.$telefone.'<br>';
  echo 'CPF: '.$cpf.'<br>';
  echo 'RG: '.$rg.'<br>';
  echo 'CEP: '.$cep.'<br>';
  echo 'CNJP: '.$cnpj.'<br>';
  echo 'Assunto: '.$assunto.'<br>';
  echo 'Mensagem:<br>';
  echo $mensagem.'<br><br>';
  if ($nome_arquivo!='' && $erro_arquivo=='') {
    echo '<h4>Tem arquivo!</h4>';
  }
  else {
    echo '<h4>Não tem arquivo!</h4>';
  } 
  echo '<br><br>';
  echo 'Nome do arquivo: '.$nome_arquivo.'<br>';
  echo 'Tipo: '.$tipo_arquivo.'<br>';
  echo 'Arquivo: '.$arquivo.'<br>';
  echo 'Código de erro:'.$erro_arquivo.'<br>';
  echo 'Tamanho: '.$tamanho_arquivo.' bytes<br><br>'; 
  // echo ($tamanho_arquivo/1024).' kylobites<br>';
  // echo (($tamanho_arquivo/1024)/1024).' megabites<br><br>';
  echo 'Email para você<br>';
  echo 'Para: '.$para.'<br>';
  echo 'Assunto: '.$assunto_contato.'<br>';
  echo 'Header: '.$header;
  echo 'Headers: '.$headers;
  echo '<br>';
  echo 'Email para cliente<br>';
  echo 'Para: '.$email.'<br>';
  echo 'Assunto: '.$resp_assunto.'<br>';
  echo 'Header2: '.$header2;
  echo 'Headers2: '.$headers2;
} else {
  if($tem_arquivo){
    //envio o email com o anexo 
    mail($para, $assunto, $header, $headers); 
  } else {
    // envia o email para vc sem anexo 
    mail($para, $assunto_contato, $header, $headers);
  }
  // email para quem preencheu o form
  mail($email, $resp_assunto, $header2,$headers2);

  // Verifica tamanho do arquivo e redireciona
  if ($erro_arquivo==2 || $erro_arquivo==3){
    header("Location: ../index.php?form_sent=2");
    exit;
  } else {
    header("Location: ../index.php?form_sent=1");
    exit;
  }
} 
