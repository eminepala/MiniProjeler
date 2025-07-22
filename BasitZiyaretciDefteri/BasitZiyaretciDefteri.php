<?php
$ad = $_POST['ad'];
$mesaj = $_POST['mesaj'];
$suan = date("Y-m-d H:i:s"); // SADECE BİR KEZ SAAT ALINIYOR

$myFile = fopen("iletisim.txt", "a+");
fwrite($myFile, $ad . " ");
fwrite($myFile, $mesaj . " ");
fwrite($myFile, $suan . "\n\n"); // HER YERDE AYNI SAAT KULLANILIR
fclose($myFile);

echo "<pre>";
print_r(file("iletisim.txt"));
echo "</pre>";
?>
