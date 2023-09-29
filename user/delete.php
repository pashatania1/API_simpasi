<?php
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    include __DIR__ . '/../conn.php';

    $id = $_POST['id'];
    $sql = "DELETE FROM `user` WHERE `id` = $id";
    mysqli_query($db, $sql);
?>