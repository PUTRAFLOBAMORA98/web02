<html>

<head>
    <title>Test Penyimpanan php pada HTML</title>
</head>

<body>
    <p> Kapal Asing, Silahkan identifikasi diri anda!. </p><br>
    <?php
    $namad = "jean";
    $namat = "Luc";
    $namab = "Piccard";
    $nilai1 = 25;
    $nilai2 = 50;
    $hasil = $nilai1 * $nilai2;
    $a = 2;
    $b = 3;
    $hsl = pow($a, $b);


    ?>
    <br>Ini adalah kapal federasi Planet USS Enterprise<br>
    <?php
    echo " Saya $namab,$namad $namat $namab, kapten kapal.</b><br>";
    echo "$nilai1 x $nilai2 = $hasil<br>";
    echo "$a ^ $b = $hsl";
    ?>
</body>


</html>