<!doctype html>
<html lang="nl">
<head>
    <meta name="author" content="Jewit">
    <meta charset="UTF-8">
    <title>gar-delete-auto3.php</title>
</head>
<body>
<h1> Garage delete auto 3</h1>
<p> Op autokenteken gegevens zoeken uit de tabel auto van de database garage zodat ze verwijderd kunnen worden. </p>
<?php
$autokenteken = $_POST["autokenteken"];
$verwijderen = $_POST["Verwijdervak"];
if ($verwijderen){
    require_once "gar-connect.php";
    $sql = $conn->prepare("DELETE from auto where autokenteken = :autokenteken");
    $sql->execute(["autokenteken" => $autokenteken]);
    echo "De autogegevens zijn verwijderd.  <br />";

} else{
    echo "De gegevens zijn niet verwijderd. <br />";
}
echo "<a href=\"Garage.php\"> Terug naar het menu</a>";
?>
</body>
</html>