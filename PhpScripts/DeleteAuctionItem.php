<?php
   session_start();
   require 'DatabaseConnection.php';

   $auctionId =$_POST['auctionId'];
   $isAssigned =$_POST['isAssigned'];
   $userId = $_SESSION['autoID'];
  
   $conn = Connect();
   $sql = "CALL delete_auction_item ('" . $auctionId . "','" . $userId . "'," . $isAssigned . ")";
   
  $result = $conn->query($sql);

   if (!$result) {
        $_SESSION['databaseSuccess'] = 2;
        die("Couldn't enter data: ".$conn->error);
    }
    $_SESSION['databaseSuccess'] = 1;

   $conn->close();
?>

