<?php
require("kapcsolat.php");

$kifejezes = (isset($_POST['kifejezes'])) ? $_POST['kifejezes'] : "";

$sql = "SELECT * FROM nevjegyek WHERE
        nev LIKE '%{$kifejezes}%'
        OR cegnev LIKE '%{$kifejezes}%'
        OR mobil LIKE '%{$kifejezes}%'
        OR email LIKE '%{$kifejezes}%'";
$eredmeny = mysqli_query($dbconn, $sql);
$kimenet = "";

while ($sor = mysqli_fetch_assoc($eredmeny)) {
    $kimenet .= "<article>
    <h2>{$sor['nev']}</h2>
    <h3>{$sor['cegnev']}</h3>
    <p>Mobil:<a href=\"tel:{$sor['mobil']}\">{$sor['mobil']}</p>
    <p>E-mail:<a href=\"mailto:{$sor['email']}\">{$sor['email']}</p>
</article>\n";
}


?><!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="stilus.css" rel="stylesheet">
    <title>Névjegykártya</title>
</head>

<body>

<h1>Névjegykártyák</h1>
<form method="post" action="">
    <input type="search" id="kifejezes" name="kifejezes">
</form>
<?php print $kimenet; ?>


</body>
</html>
