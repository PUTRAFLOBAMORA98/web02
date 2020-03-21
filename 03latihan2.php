<html>

<head>
    <title>Contoh penggunaan if</title>
</head>

<body>
    <form>
        <p>Besar Pembelian</p>
        <input type="text" name="total_beli"><br>
        <hr>
        <input type="submit" value="Tentukan Diskon">
    </form>
    <?php
    $diskon = 0;

    if (isset($total_beli)) {
        $total_beli = intval($total_beli);
        $diskon = 0;
        if ($total_beli > 200000)
            $diskon = 0.1;
        elseif ($total_beli > 100000)
            $diskon = 0.05;
        else
            $diskon = 0.01;
    }

    $diskon = $diskon * intval($total_beli);
    echo "Diskon = %s<br>", $diskon;
    echo "Pembayaran = %s <br>", $total_beli - $diskon;

    ?>


</body>

</html>