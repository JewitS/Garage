<!doctype html>
<html lang = "nl">
<head>
    <meta name="author" content="Jewit">
    <meta charset="UTF-8">
    <title>gar-read-auto.php</title>
</head>
<body>
<h1> Garage read auto </h1>
<p>Dit zijn alle gegevens uit de tabel klanten van de database garage</p>


<?php
require_once "gar-connect.php";
$autos = $conn->prepare("SELECT klantid, autokenteken , automerk , autotype , autokmstand FROM auto");
$autos->execute();
echo "<table>";
foreach ($autos as $auto){
    echo "<tr>";
    echo "<td>" . "Klant ID: " . $auto["klantid"] . "</td>";
    echo "<td>" . "Autokenteken: " . $auto["autokenteken"] . "</td>";
    echo "<td>" . "Automerk: " . $auto["automerk"] . "</td>";
    echo "<td>" . "Autotype: ". $auto["autotype"] . "</td>";
    echo "<td>" . "KM Stand: " . $auto["autokmstand"] . "</td>";
    echo "</tr>";

}
echo "</table>";
echo "<a href=\"Garage.php\"> Terug naar het menu</a>";

?>
</body>
</html>
