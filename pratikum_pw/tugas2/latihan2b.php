<?php
/*
Mika Quarta Mulya Jatnika
193040067
https://github.com/MIkaQuartaMJ/pw2021_193040067
Pratikum PW 8.00, Pertemuan 1
*/
?>
<?php

$jawabanIsset = "Isset adalah = fungsi untuk memeriksa apakah sebuah variabel sudah diset dan bukan NULL<br><br>";
$jawabanEmpty = "Empty adalah = fungsi untuk memeriksa apakan sebuah variabel kosong atau tidak";
function soal($style)
{
    return "<div class='$style'>$GLOBALS[jawabanIsset] $GLOBALS[jawabanEmpty]</div>";
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>203040071</title>
    <style>
        .kata {
            border: 2px solid black;
            font-family: Arial;
            width: 750px;
            padding: 14px;
        }
    </style>
</head>

<body>
    <?php echo soal("kata"); ?>
</body>

</html>