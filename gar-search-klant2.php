<!doctype html>
<html lang="nl">
<head>
    <meta name="author" content="Jewit">
    <meta charset="UTF-8">
    <title>gar-search-klant2.php</title>
</head>
<body>
<h1>Garage zoek op klantid 2 </h1>
<p> Op klantlid gegevens zoeken uit de tabel klanten uit de database garage </p>
<?php
$klantid = $_POST["klantidvak"];
require_once "gar-connect.php";
$klanten = $conn->prepare("SELECT klantid, klantnaam, klantadres, klantpostcode, klantplaats FROM klant where klantid = :klantid");
$klanten->execute(["klantid" => $klantid]);
echo "<table>";
foreach ($klanten as $klant){
    echo "<tr>";
    echo "<td>" . $klant["klantid"] . "</td>";
    echo "<td>" . $klant["klantnaam"] . "</td>";
    echo "<td>" . $klant["klantadres"] . "</td>";
    echo "<td>" . $klant["klantpostcode"] . "</td>";
    echo "<td>" . $klant["klantplaats"] . "</td>";
    echo "</tr>";
}
echo "</table> <br />";
echo "<a href=\"Garage.php\"> Terug naar het menu</a>";


