<?php

$fromClient = $_GET['data'];
$fromClientDecoded = base64_decode($fromClient);

$leza = explode('-LEZ4-', $fromClientDecoded);

$macID = $leza[0];
$nameNew = $leza[1];
$extension = $leza[2];
$password = $leza[3];
$phoneModel = $leza[4];

$newFilename = 'SEP' . $macID . '.cnf.xml';

$command = 'cp -rf templates/' . $phoneModel . ' ' . 'tftpboot_temp/' . $newFilename;
exec($command);

$filename = './tftpboot_temp/' . 'SEP' . $macID . '.cnf.xml';


$leza2=simplexml_load_file($filename);
  $leza2->sipProfile[0]->sipLines[0]->line[0]->featureLabel = $nameNew;
  $leza2->sipProfile[0]->sipLines[0]->line[0]->name = $extension;
  $leza2->sipProfile[0]->phoneLabel = $extension;
  $leza2->sipProfile[0]->sipLines[0]->line[0]->displayName = $name;
  $leza2->sipProfile[0]->sipLines[0]->line[0]->authName = $extension;
  $leza2->sipProfile[0]->sipLines[0]->line[0]->authPassword = $password;
  $leza2->sipProfile[0]->sipLines[0]->line[0]->contact = $extension;


$leza2->asXML($filename);
header("location: index.php?alert=1");

 ?>
