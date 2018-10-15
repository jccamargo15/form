<?php
require_once 'config.php';

require_once 'fill_fields.php';

require_once 'fill_file.php';

require_once 'write_mail.php';

/**
 * Caso $debug seja verdade, imprime todos os dados
 * Caso falso, envia emails e
 * redireciona para página de resposta com status do envio
 */
if ($debug) {
  require_once 'debug.php';
} else {
  // envia o email para vc sem anexo 
  mail($para, $assunto_contato, $header, $headers);
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
