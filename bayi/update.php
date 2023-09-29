<?php
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    include 'conn.php';
    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $gender = $_POST['gender'];
    $berat_badan = $_POST['berat_badan'];
    $panjang_badan = $_POST['panjang_badan'];
    $lingkar_kepala = $_POST['lingkar_kepala'];

    $sql = "UPDATE `bayi` SET `nama`='$nama',`tgl_lahir`='$tgl_lahir',`gender`='$gender',`berat_badan`='$berat_badan',`panjang_badan`='$panjang_badan',`lingkar_kepala`='$lingkar_kepala' WHERE `id`=$id";
    mysqli_query($db, $sql);
?>