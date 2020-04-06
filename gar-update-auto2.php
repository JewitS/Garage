<!doctype html>
<html lang="nl">
<head>
    <meta name="author" content="Jewit">
    <meta charset="UTF-8">
    <title>gar-update-auto2.php</title>
</head>
<body>
<h1> Garage update auto 2 </h1>
<p>
    Dit formulier word gebruikt om autogegevens te wijzigen in de tabel auto van de database garage. </p>
<?php
$autokenteken = $_POST["autokentekenvak"];
require_once "gar-connect.php";
$autos = $conn ->prepare("SELECT klantid, autokenteken, automerk, autotype, autokmstand FROM auto WHERE autokenteken = :autokenteken");
$autos->execute(["autokenteken" => $autokenteken]);
echo "<form action='gar-update-auto3.php' method='post'>";
foreach ($autos as $auto){
    echo " klantid:" . $klant["klantid"];
    echo "<input type='text' name='klantidvak' value='". $auto["klantid"] . "'><br /> ";

    echo "klantnaam: <input type='text' name='autokenteken' value='". $auto["autokenteken"]. "'> <br />";

    echo "klantadres: <input type='text' name='automerk' value='". $auto["automerk"] ."'> <br />";

    echo "klantpostcode: <input type='text' name='autotype' value='". $auto["autotype"] ."'> <br />";

    echo "klantplaats: <input type='text' name='autokmstand' value='". $auto["autokmstand"] ."'> <br />";

}
echo "<input type='submit'>";
echo "</form>";
?>
</body>
</html>
