<?php
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