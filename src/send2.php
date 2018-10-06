<?php

$meu_email = 'jose@propulsao.digital';
$tamanho_maximo_arquivo = '100000';

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

$nome_arquivo = 
$tipo_arquivo = 
$arquivo = 
$erro_arquivo = 
$tamanho_arquivo = 
// echo 'Nome do arquivo: ' . $_FILES['arquivo']['name'];
// echo 'Tipo: ' . $_FILES['arquivo']['type'];
// echo 'Arquivo: ' . $_FILES['arquivo']['tmp_name'];
// echo 'Código de erro:' . $_FILES['arquivo']['error'];
// echo 'Tamanho: ' . $_FILES['arquivo']['size'] . ' bytes (' . $_FILES['arquivo']['size'] . ' kylobites';

// print_r($_FILES['arquivo']);

echo $nome;