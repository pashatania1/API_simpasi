<?php
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    include __DIR__ . '/../conn.php';
    include __DIR__ . '/../random.php';
    
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telp = $_POST['telp'];
    $sql = "UPDATE `user` SET `nama`='$nama',`email`='$email',`telp`='$telp' WHERE `id` = $id";
    mysqli_query($db, $sql);
?>