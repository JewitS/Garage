<!doctype html>
<html lang="nl">
<head>
    <meta name="author" content="Jewit">
    <meta charset="UTF-8">
    <title>gar-update-klant2.php</title>
</head>
<body>
<h1> Garage update klant 2 </h1>
<p>
    Dit formulier word gebruikt om klantgegevens te wijzigen in de tabel klant van de database garage. </p>
<?php
$klantid = $_POST["klantidvak"];
require_once "gar-connect.php";
$klanten = $conn ->prepare("SELECT klantid, klantnaam, klantadres, klantpostcode, klantplaats FROM klant WHERE klantid = :klantid");
$klanten->execute(["klantid" => $klantid]);
echo "<form action='gar-update-klant3.php' method='post'>";
foreach ($klanten as $klant){
    echo " klantid:" . $klant["klantid"];
    echo "<input type='hidden' name='klantidvak' value='". $klant["klantid"] . "'><br /> ";

    echo "klantnaam: <input type='text' name='klantnaamvak' value='". $klant["klantnaam"]. "'> <br />";

    echo "klantadres: <input type='text' name='klantadresvak' value='". $klant["klantadres"] ."'> <br />";

    echo "klantpostcode: <input type='text' name='klantpostcodevak' value='". $klant["klantpostcode"] ."'> <br />";

    echo "klantplaats: <input type='text' name='klantplaatsvak' value='". $klant["klantplaats"] ."'> <br />";

}
echo "<input type='submit'>";
echo "</form>";
?>
</body>
</html>
