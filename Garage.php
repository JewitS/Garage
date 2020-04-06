<!doctype html>
<html lang="nl"></html>
<style>
    ul{
        list-style-type: none;
        margin: -1em;
        padding: 0;
        overflow: hidden;
        background-color: black;
        height: 4em;
        border-bottom: 3px white solid;

    }
    li{
        display: inline;
        float: left;
        font-size: 2em;
        font-family: Monospaced;
    }

    li a{
        display: block;
        color: white;
        text-align: center;
        padding: 18px 16px;
        text-decoration: none;
    }

    li a:hover {
        background-color: black;
    }
    .h1{
        font-family: Monospaced;
    }
</style>

<head>
    <meta name="author" content="Jewit">
    <meta charset="UTF-8">
    <title>gar-menu.php</title>
</head>
<body></body>
<h1> Garage menu</h1>
<h2>Klant</h2>
<ul class="klant">
    <li><a href="gar-create-klant1.php"> Create   </a></li>
    <li><a href="gar-read-klant.php"> Read   </a></li>
    <li><a href="gar-search-klant1.php"> Zoeken op klantid   </a></li>
    <li><a href="gar-update-klant1.php"> Update   </a></li>
    <li><a href="gar-delete-klant1.php"> Delete   </a></li>
</ul>
<h2> Auto </h2>
<ul class="auto">
    <li><a href="gar-create-auto1.php"> Create   </a></li>
    <li><a href="gar-read-auto.php"> Read   </a></li>
    <li><a href="gar-search-auto1.php"> Zoeken op kenteken   </a></li>
    <li><a href="gar-update-auto1.php"> Update   </a></li>
    <li><a href="gar-delete-auto1.php"> Delete   </a></li>
</ul>
</head>

<!--Mijn github account: https://github.com/JewitS/Garage-->