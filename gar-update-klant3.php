<!doctype html>
<html lang="nl">
<head>
    <meta name="author" content="Jewit">
    <meta charset="UTF-8">
    <title>gar-update-klant3.php</title>
</head>
<body>
<h1> Garage update klant 3 </h1>
<p> Klantgegevens wijzigen in de tabel klant van de database garage. </p>
<?php
$klantid = $_POST['klantidvak'];
$klantnaam = $_POST['klantnaamvak'];
$klantadres = $_POST['klantadresvak'];
$klantpostcode = $_POST['klantpostcodevak'];
$klantplaats = $_POST['klantplaatsvak'];

require_once"gar-connect.php";
$sql = $conn->prepare("UPDATE klant SET klantnaam = :klantnaam  , 
                                klantadres = :klantadres, 
                                klantpostcode = :klantpostcode, 
                                klantplaats = :klantplaats WHERE 
                                klantid = :klantid");

$sql->execute(["klantid" => $klantid, "klantnaam" => $klantnaam, "klantadres" => $klantadres, "klantpostcode" => $klantpostcode, "klantplaats" => $klantplaats ]);
echo "De klant is gewijzigd";
echo "<a href=\"Garage.php\"> Terug naar het menu</a>";
?>
</body>
</html>
