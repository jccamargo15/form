<?php
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