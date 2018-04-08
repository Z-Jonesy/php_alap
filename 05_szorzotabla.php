<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <title>Szorzótábla</title>
</head>

<body>
    <table style="border: solid 2px black">

    <?php
        <tr>
            <?php
                for (oszlop=1; $oszlop<=10; $oszlop++) {
                    print "<td>{$oszlop}</td>
                }

            ?>
        </tr>

    

    </table>
</body>

</html>
