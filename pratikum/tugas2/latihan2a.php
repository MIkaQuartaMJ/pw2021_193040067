<?php
/*
Mika Quarta Mulya Jatnika
193040067
https://github.com/MIkaQuartaMJ/pw2021_193040067
Pratikum PW 8.00, Pertemuan 1
*/
?>
<?php
function gantiStyle($tulisan, $style1, $style2)
{
    return "<div class='$style1 $style2'>$tulisan</div>";
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>193040067_MikaQMJ</title>
    <style>
        .katasatu {
            font-size: 28px;
            font-family: Arial;
            color: #8c782d;
            font-style: italic;
            font-weight: bolder;
            padding: 7px;
        }

        .katadua {
            border: 1px solid black;
            width: 600px;
            border-radius: 5px;
            box-shadow: 1px 1px 12px gray;
        }
    </style>
</head>

<body>
    <p><?php echo gantiStyle("Selamat datang di praktikum PW", "katasatu", "katadua"); ?></p>
</body>

</html>