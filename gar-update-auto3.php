<!doctype html>
<html lang="nl">
<head>
    <meta name="author" content="Jewit">
    <meta charset="UTF-8">
    <title>gar-update-auto3.php</title>
</head>
<body>
<h1> Garage update auto 3 </h1>
<p> Autogegevens wijzigen in de tabel auto van de database garage. </p>
<?php
$klantid = $_POST['klantidvak'];
$autokenteken = $_POST['autokenteken'];
$automerk = $_POST['automerk'];
$autotype = $_POST['autotype'];
$autokmstand = $_POST['autokmstand'];

require_once"gar-connect.php";
$sql = $conn->prepare("UPDATE auto SET autokenteken = :autokenteken  , 
                                automerk = :automerk, 
                                autotype = :autotype, 
                                autokmstand = :automerk WHERE 
                                klantid = :klantid");

$sql->execute(["klantid" => $klantid, "automerk" => $automerk, "autotype" => $autotype, "autokenteken" => $autokenteken, "autokmstand" => $autokmstand]);
echo "De auto is gewijzigd";
echo "<a href=\"Garage.php\"> Terug naar het menu</a>";
?>
</body>
</html>
