<?php 
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    include __DIR__ . '/../conn.php';
    include __DIR__ . '/../random.php';

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telp = $_POST['telp'];
    $password = $_POST['password'];
    $image = $_FILES['image']['name'];

    $random = getName(10);
    $imagePath = "../img/user/".$random.".jpg";
    $imgformattedname = $random.".jpg";

    move_uploaded_file($_FILES['image']['tmp_name'],$imagePath);

    $sql = "INSERT INTO `user` (`nama`, `email`, `telp`, `password`, `foto`) VALUES ('$nama', '$email', '$telp', MD5('$password'), '$imgformattedname')";
    
    mysqli_query($db, $sql);

    echo getName(10);
?>