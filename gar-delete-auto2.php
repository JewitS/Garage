<!doctype html>
<html lang="nl">
<head>
    <meta name="author" content="Jewit">
    <meta charset="UTF-8">
    <title>gar-delete-klant2.php</title>
</head>
<body>
<h1> Garage auto 2 </h1>
<p> Op autokenteken gegevens zoeken uit de tabel auto van de database garage zodat ze verwijderd kunnen worden.</p>
<?php
$autokenteken = $_POST["autokenteken"];
require_once "gar-connect.php";
$autos = $conn ->prepare("SELECT klantid, autokenteken, automerk, autotype, autokmstand FROM auto WHERE autokenteken = :autokenteken");
$autos ->execute(["autokenteken" => $autokenteken]);
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
echo "<form action='gar-delete-auto3.php' method='post'>";
echo "<input type='hidden' name='autokenteken' value= $autokenteken>";
echo "<input type='hidden' name='Verwijdervak' value='0'>";
echo "<input type='checkbox' name='Verwijdervak' value='1'>";
echo "Verwijder deze auto . <br />";
echo "<input type='submit'>";
echo "</form>";
?>
</body>
</html>