<!doctype html>
<html lang="nl">
<head>
    <meta name="author" content="Jewit">
    <meta charset="UTF-8">
    <title>gar-search-auto2.php</title>
</head>
<body>
<h1>Garage zoek op auto 2 </h1>
<p> Op autokenteken zoeken uit de tabel auto uit de database garage </p>
<?php
$autokenteken = $_POST["autokentekenvak"];
require_once "gar-connect.php";
$autos = $conn->prepare("SELECT klantid, autokenteken, automerk, autotype, autokmstand FROM auto where autokenteken = :autokenteken");
$autos->execute(["autokenteken" => $autokenteken]);
echo "<table>";
foreach ($autos as $auto){
    echo "<tr>";
    echo "<td>" . $auto["klantid"] . "</td>";
    echo "<td>" . $auto["autokenteken"] . "</td>";
    echo "<td>" . $auto["automerk"] . "</td>";
    echo "<td>" . $auto["autotype"] . "</td>";
    echo "<td>" . $auto["autokmstand"] . "</td>";
    echo "</tr>";
}
echo "</table> <br />";
echo "<a href=\"Garage.php\"> Terug naar het menu</a>";



