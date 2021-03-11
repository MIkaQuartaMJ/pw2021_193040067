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
    <style>
        td {
            border: 3px solid black;
            margin: 3px;
            display: inline-block;
        }

        .lightblue {
            background-color: lightblue;
        }

        .salmon {
            background-color: salmon;
        }
    </style>
</head>

<body>
    <table border="0" cellspacing="0" cellpadding="30">
        <?php for ($x = 1; $x <= 6; $x++) : ?>
            <tr>
                <?php for ($y = 1; $y <= 6; $y++) : ?>
                    <?php if (($x + $y) % 2 == 0) { ?>
                        <td class="lightblue"></td>
                    <?php } else if (($x + $y) % 2 != 0) { ?>
                        <td class="salmon"></td>
                    <?php } ?>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>

</html>