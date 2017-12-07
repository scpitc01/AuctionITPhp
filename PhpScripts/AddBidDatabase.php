<?php
ob_start();
session_start();
header('Location: ../AddBid.php');

require 'DatabaseConnection.php';
$itemNumber = $bidderID = $value = $description = $year = "";

$conn = Connect();
$itemNumber    = $conn->real_escape_string($_POST['itemNumber']);
$bidderID   = $conn->real_escape_string($_POST['bidderID']);
$value = $conn->real_escape_string($_POST['value']);
$year = $conn->real_escape_string($_POST['year']);
$description   = $conn->real_escape_string($_POST['description']);

if($itemNumber < 600)
{
    $sql = "CALL insertBid(" . $itemNumber. "," . $bidderID . "," . $value . "," . $year . ")";
    $result = $conn->query($sql);

            if (!$result) {
                $_SESSION['databaseSuccess'] = 2;
                die("Couldn't enter data: ".$conn->error);
 
            }
            else {
                
                   $_SESSION['databaseSuccess'] = 1;
            }
}
 else {
     $sql = "CALL insertMultiBid(" . $itemNumber . ",'" . $description . "'," . $bidderID . "," . $value . "," . $year . ")";
     
     $result = $conn->query($sql);
     session_start();
        if(!$result) {
            $_SESSION['databaseSuccess'] = 2;
            die("Couldn't enter data: ".$conn->error);
        }
        else {
            $_SESSION['databaseSuccess'] = 1;
        }
}
 
$conn->close();
?>
