<!doctype html>
<html lang="nl">
<head>
    <meta name="author" content="Jewit">
    <meta charset="UTF-8">
    <title>gar-delete-klant3.php</title>
</head>
<body>
<h1> Garage delete klant 3</h1>
<p> Op klantid gegevens zoeken uit de tabel klant van de database garage zodat ze verwijderd kunnen worden. </p>
<?php
$klantid = $_POST["klantidvak"];
$verwijderen = $_POST["Verwijdervak"];
if ($verwijderen){
    require_once "gar-connect.php";
    $sql = $conn->prepare("DELETE from klant where klantid = :klantid");
    $sql->execute(["klantid" => $klantid]);
    echo "De gegevens zijn verwijderd.  <br />";

} else{
    echo "De gegevens zijn niet verwijderd. <br />";
}
echo "<a href=\"Garage.php\"> Terug naar het menu</a>";
?>
</body>
</html>
