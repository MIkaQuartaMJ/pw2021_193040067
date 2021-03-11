<?php
/*
Mika Quarta Mulya Jatnika
193040067
https://github.com/MIkaQuartaMJ/pw2021_193040067
Pratikum PW 8.00, Pertemuan 1
*/
?>
<!DOCTYPE html>
<html>

<head>
    <title>193040067_MikaQMJ</title>
</head>

<body>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th></th>
            <?php for ($i = 1; $i <= 5; $i++) : ?>
                <th>Kolom <?= $i; ?></th>
            <?php endfor; ?>
        </tr>

        <?php for ($i = 1; $i <= 5; $i++) : ?>
            <tr>
                <th>Baris <?php echo $i; ?></th>
                <?php for ($h = 1; $h <= 5; $h++) : ?>
                    <td>Baris <?php echo $i ?>, Kolom <?php echo $h; ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>

</html>