<?php
/*
Mika Quarta Mulya Jatnika
193040067
https://github.com/MIkaQuartaMJ/pw2021_193040067
Praktikum Pertemuan 1 
*/
?>
<!DOCTYPE html>
<html>

<head>

    <title>193040067_MikaQMJ</title>
    <style>
        p {
            width: 120px;
            height: 120px;
            border-radius: 100%;
            border: 5px solid black;
            background-color: salmon;
            display: inline-block;
            margin: 0 20px 12px 0;
            text-align: center;
            line-height: 120px;
            font-size: 60px;
        }
    </style>
</head>

<body>
    <?php for ($i = 1; $i <= 3; $i++) : ?>
        <?php for ($h = 1; $h <= $i; $h++) : ?>
            <p><?= $i; ?></p>
        <?php endfor; ?>
        <br>
    <?php endfor; ?>
</body>

</html>