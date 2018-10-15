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
