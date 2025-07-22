<?php
session_start();


if (isset($_GET['sil'])) {
    $index = (int)$_GET['sil'];
    if (isset($_SESSION['yapilacaklar'][$index]))
    {
        unset($_SESSION['yapilacaklar'][$index]);
        $_SESSION['yapilacaklar'] = array_values($_SESSION['yapilacaklar']); // index sıralamasını düzelt
    }
    header("Location: BasitYapilacaklarListesi.php");
    exit;
}

// Ekleme işlemi
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['yapilacak'])) {
    $gorev = trim($_POST['yapilacak']);
    $_SESSION['yapilacaklar'][] = $gorev;
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Yapılacaklar Listesi</title>
</head>
<body>

<h2>Yapılacaklar Listesi</h2>
<form action="BasitYapilacaklarListesi.php" method="post">
    <input type="text" name="yapilacak" placeholder="Bir görev girin">
    <input type="submit" value="Ekle">
</form>

<ul>
    <?php
    if (!empty($_SESSION['yapilacaklar'])) {
        foreach ($_SESSION['yapilacaklar'] as $i => $madde) {
            echo "<li>" . htmlspecialchars($madde) . " <a href='?sil=$i'>Sil</a></li>";
        }
    } else {
        echo "<li>Liste boş.</li>";
    }
    ?>
</ul>

<br>
<a href="form.html">Geri Dön</a>

</body>
</html>
