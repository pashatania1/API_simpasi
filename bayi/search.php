<?php
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    include __DIR__ . '/../conn.php';
    include __DIR__ . '/../random.php';
    
    $id = $_POST['id'];
    // $search = $_POST['search'];
    // if($search == ''){
    // $status = $db->query("SELECT * FROM tb_users");
    // }
    // else{
    // $status = $db->query("SELECT * FROM tb_users WHERE nama LIKE '%$search%'");
    // }
    $status = $db->query("SELECT * FROM `bayi` WHERE `id_user` = $id ORDER BY `nama`");
    $list = array();
    while ($rowdata = $status->fetch_assoc()){
        $list[] = $rowdata;
    }
    echo json_encode($list);
?>