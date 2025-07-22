
<html>
<head>
    <meta charset="UTF-8">
    <meta lang="tr">
    <title>Basit Hesap Makinesi</title>
</head>
<body>

<form action="" method="post">
    <label for="sayi1">SAYI</label>
    <input type="number" id="sayi1" name="sayi1" value="sayi1">
    <br><br>
    <label for="sayi2">SAYI</label>
    <input type="number" id="sayi2" name="sayi2" value="sayi2">
    <br><br>
    <input type="radio" name="islem" id="artı" value="+" >
    <label for="artı">+</label>
    <input type="radio" name="islem" id="eksi" value="-">
    <label for="eksi">-</label>
    <input type="radio" name="islem" id="carpi" value="*">
    <label for="carpi">*</label>
    <input type="radio" name="islem" id="bolum" value="/">
    <label for="bolum">/</label>
    <br><br>
    <input type="submit" value="Gönder">
    <?php
    $islem=$_POST['islem'];
    $sayi1=$_POST['sayi1'];
    $sayi2=$_POST['sayi2'];
    function hesapMakinesi($sayi1,$sayi2,$islem)
    {
        if($islem=='+')
        {
            return $sayi1+$sayi2;
        }
        elseif ($islem=='-')
        {
            return $sayi1-$sayi2;
        }
        elseif ($islem=='/')
        {
            return $sayi1/$sayi2;
        }
        else
        {
            return $sayi2*$sayi1;
        }
    }
    echo hesapMakinesi($sayi1,$sayi2,$islem);

    ?>


</form>

</body>
</html>