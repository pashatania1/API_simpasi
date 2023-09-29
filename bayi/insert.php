<?php 
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    include __DIR__ . '/../conn.php';
    include __DIR__ . '/../random.php';

    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $gender = $_POST['gender'];
    $berat_badan = $_POST['berat_badan'];
    $panjang_badan = $_POST['panjang_badan'];
    $lingkar_kepala = $_POST['lingkar_kepala'];
    $id_user = $_POST['id_user'];
    $image = $_FILES['image']['name'];

    $random = getName(10);
    $imagePath = "../img/bayi/".$random.".jpg";
    $imgformattedname = $random.".jpg";

    move_uploaded_file($_FILES['image']['tmp_name'],$imagePath);

    $sql = "INSERT INTO `bayi`(`nama`, `tgl_lahir`, `gender`, `berat_badan`, `panjang_badan`, `lingkar_kepala`, `id_user`, `foto`) VALUES ('$nama','$tgl_lahir','$gender','$berat_badan','$panjang_badan','$lingkar_kepala','$id_user','$imgformattedname')";
    
    mysqli_query($db, $sql);
?>
