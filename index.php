<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laithan PHP 1</title>
</head>
<body>
    <?php

    // Variable Declaration

    $nama_pembeli = 'Ayu Wandira';
    $nama_barang = 'teh pucuk';
    $harga_barang = 5000;
    $jml_beli = 4;
    $total_beli = $harga_barang*$jml_beli;
    $divider = str_repeat('=', 25);

    echo 'Nama Pembeli :'. $nama_pembeli . '<br>', 'Nama Barang : '. $nama_barang .'<br>','Harga Barang : '. $harga_barang .'<br>', 'Jumlah Beli : '. $jml_beli . '<br>';
    echo $divider, '<br>';
    echo 'Total : ', $total_beli;
    ?>
</body>
</html>