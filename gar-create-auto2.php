<!doctype html>
<html lang = "nl">
<head>
    <meta name="author" content="Jewit">
    <meta charset="UTF-8">
    <title>gar-create-auto2.php</title>
</head>
<body>
<h1> Garage create auto 2</h1>
<p>Een auto toevoegen aan de tabel auto in database garage. </p>
<a href="Garage.php"> Terug naar het menu</a>
<?php
$klantid = $_POST["klantid"];
$autokenteken = $_POST["autokenteken"];
$automerk = $_POST["automerk"];
$autotype = $_POST["autotype"];
$autokmstand = $_POST['autokmstand'];

require_once "gar-connect.php";
$sql = $conn->prepare("INSERT INTO auto VALUES  (:autokenteken, :automerk, :autotype, :autokmstand, :klantid)");
$sql->execute([
    "klantid" => $klantid,
    "autokenteken" => $autokenteken,
    "automerk" => $automerk,
    "autotype" => $autotype,
    "autokmstand" => $autokmstand
]);

echo "De auto is toegevoegd <br />";

?>
</body>
</html>