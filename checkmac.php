<?php

$fromClient = $_GET['id'];
$decoded = base64_decode($fromClient);
$filename = './tftpboot_temp/' . 'SEP' . $decoded . '.cnf.xml';

if (file_exists($filename)) {
  $leza=simplexml_load_file($filename);

  $nameThis = $leza->sipProfile[0]->sipLines[0]->line[0]->featureLabel;
  $phoneThis = $leza->sipProfile[0]->phoneLabel;
  $passwordThis = $leza->sipProfile[0]->sipLines[0]->line[0]->authPassword;
  $sendThisClear = $nameThis . '-LEZ4-' . $phoneThis . '-LEZ4-' . $passwordThis;
  $sendThisEncoded = base64_encode($sendThisClear);
  echo $sendThisEncoded;

} else {
    echo "Sorry";
}

 ?>
