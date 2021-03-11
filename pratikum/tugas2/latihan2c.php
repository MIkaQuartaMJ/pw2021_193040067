<?php
/*
Mika Quarta Mulya Jatnika
193040067
https://github.com/MIkaQuartaMJ/pw2021_193040067
Pratikum PW 8.00, Pertemuan 1
*/
?>
<?php
function tumpukanBola($tumpukan)
{
    for ($i = 1; $i <= $tumpukan; $i++) {
        for ($h = 1; $h <= $i; $h++) {
            echo "<div class='bola'>$i</div>";
        }
        echo "<br>";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>193040067_MikaQMJ</title>
    <style>
        .bola {
            display: inline-block;
            width: 60px;
            height: 60px;
            border-radius: 100%;
            border: 5px solid black;
            background-color: salmon;
            margin: 3px;
            text-align: center;
            line-height: 60px;
            font-size: 30px;
        }
    </style>
</head>

<body>
    <?php tumpukanBola(8); ?>
</body>

</html>