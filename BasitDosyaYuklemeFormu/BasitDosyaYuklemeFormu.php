<?php

if (!is_dir('uploads')) {
    mkdir('uploads', 0777, true);
}

$hedef_klasor = "uploads/";
$hedef_dosya = $hedef_klasor . basename($_FILES["dosya"]["name"]);

echo "<pre>";

if (move_uploaded_file($_FILES["dosya"]["tmp_name"], $hedef_dosya))
{
    echo "Dosya başarıyla yüklendi: " . htmlspecialchars($_FILES["dosya"]["name"]);
}
else
{
    echo "Dosya yüklenirken hata oluştu!";
}

echo "\n\nHata ayıklama bilgisi:\n";
print_r($_FILES);
echo "</pre>";
?>
