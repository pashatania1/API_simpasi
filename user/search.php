<?php
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    include __DIR__ . '/../conn.php';
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $status = $db->query("SELECT * FROM `user` WHERE `email`= '$email' AND `password` = '$password'");
    $list = array();
    while ($rowdata = $status->fetch_assoc()){
        $list[] = $rowdata;
    }
    echo json_encode($list);
?>