<?php
    require 'DatabaseConnection.php';
    $conn = Connect();
    $year = date("Y");
    $conn->query("SET sql_mode=''");
    $query = "SELECT * FROM view_items";
    $result = $conn->query($query);
    if ($result == false) {
      echo $conn->error;
    }
    $data = array();
    while( $rows = mysqli_fetch_assoc($result) ) {
        $data[] = $rows;
    }
    $results = array(
        "sEcho" => 1,
        "iTotalRecords" => count($data),
        "iTotalDisplayRecords" => count($data),
        "aaData" => $data
    );
    echo json_encode($results);
   
?>