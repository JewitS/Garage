<?php
$servername = "localhost";
$dbname= "garage";
$username = "root";
$password = "";

try
{
    $conn = new PDO ("mysql:host=$servername;dbname=$dbname", "root" , "root");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "connectie gelukt";
} catch (PDOException $e){
    echo "connectie mislukt: " . $e->getMessage();
}
?>