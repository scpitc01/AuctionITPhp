<?php
ob_start();
session_start();
require 'DatabaseConnection.php';    

$conn = Connect();
$userName    = $conn->real_escape_string($_POST['userName']);
$password   = $conn->real_escape_string($_POST['password']);

if($password == "")
{
    $password = !empty($password) ? "'$password'" : "NULL";
}
else
{
    $password = md5($password);
}
if($password == "NULL")
{
    $sql = "CALL checkPassword('" . $userName . "'," . $password . ")";
}
else
{
    $sql = "CALL checkPassword('" . $userName . "','" . $password . "')";
}
$result = $conn->query($sql);
foreach($result as $row)
{
    if($row["Type"] == 1)
    {
        $_SESSION['accountType'] = "admin";
        header('Location: ../index.php');    
    }   
    if($row["Type"] == 2)
    {
        $_SESSION['accountType'] = "user";
        header('Location: ../index.php'); 
    }
    if($row["Type"] == -1)
    {
       $_SESSION['databaseSuccess'] = 2;
       header('Location: ../Login.php');
    }
    if($row["Type"] == 0)
    {
        $_SESSION['userName'] = $userName;
        header('Location: ../SetPassword.php'); 
    }
}