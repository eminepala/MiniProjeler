<?php
$ad=$_POST['ad'];
$eposta=$_POST['eposta'];
$mesaj=$_POST['mesaj'];
$myFile=fopen("iletisim_log.txt","a");
fwrite($myFile,$ad);
fwrite($myFile," ");
fwrite($myFile,$eposta);
fwrite($myFile," ");
fwrite($myFile,$mesaj);
fwrite($myFile," ");
fwrite($myFile,date("Y-m-d H:i:s ")."\n");
fwrite($myFile,"\n");
fclose($myFile);

?>
