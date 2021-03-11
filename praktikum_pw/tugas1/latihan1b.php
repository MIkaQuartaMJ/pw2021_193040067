<?php
/*
Mika Quarta Mulya Jatnika
193040067
https://github.com/MIkaQuartaMJ/pw2021_193040067
Praktikum Pertemuan 1 
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <table border="1" cellspacing="0" cellpadding="10">
        <?php for ($i = 1; $i <= 5; $i++) : ?>
            <tr>
                <?php for ($j = 1; $j <= 5; $j++) : ?>
                    <th> Kolom <?php= $i, $j; ?></th>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
</body>
</table>

</html>