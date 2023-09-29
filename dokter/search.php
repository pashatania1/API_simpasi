<?php
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    include __DIR__ . '/../conn.php';
    include __DIR__ . '/../random.php';
    
    $status = $db->query("SELECT * FROM `dsa` ORDER BY `nama`");
    $list = array();
    while ($rowdata = $status->fetch_assoc()){
        $list[] = $rowdata;
    }
    echo json_encode($list);
?>