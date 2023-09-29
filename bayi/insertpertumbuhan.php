<?php 
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    include __DIR__ . '/../conn.php';
    include __DIR__ . '/../random.php';

    $tgl_cek = $_POST['tgl_cek'];
    $berat_badan = $_POST['berat_badan'];
    $panjang_badan = $_POST['panjang_badan'];
    $lingkar_kepala = $_POST['lingkar_kepala'];
    $id_bayi = $_POST['id_bayi'];
    $status = $_POST['status'];

    $sql = "INSERT INTO `pertumbuhan`(`tgl_cek`, `berat_badan`, `tinggi_badan`, `lingkar_kepala`, `id_bayi`, `status`) VALUES ('$tgl_cek','$berat_badan','$panjang_badan','$lingkar_kepala','$id_bayi','$status')";
    
    mysqli_query($db, $sql);
?>
