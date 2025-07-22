<?php
$sayfa = isset($_GET['sayfa']) ? $_GET['sayfa'] : 'anasayfa';

switch ($sayfa) {
    case 'hakkimizda':
        include 'sayfalar/hakkimizda.php';
        break;
    case 'iletisim':
        include 'sayfalar/iletisim.php';
        break;
    case 'anasayfa':
    default:
        include 'sayfalar/anasayfa.php';
        break;
}
?>
