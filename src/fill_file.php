<?php
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