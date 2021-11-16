<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kalkulator Sederhana</title>
</head>
<body>

<?php


function tambah($a, $b){
        $hasil = $a + $b;
        echo "PENJUMLAHAN <br>";
        echo "Operator : + <br>";
        echo "Hasil : ".$hasil;
    // }
    
}

function kurang($a, $b){
        $hasil = $a - $b;
        echo "PENGURANGAN <br>";
        echo "Operator : - <br>";
        echo "Hasil : ".$hasil;
}

function kali($a, $b){
        $hasil = $a * $b;
        echo "PERKALIAN <br>";
        echo "Operator : * <br>";
        echo "Hasil : ".$hasil;
}

function bagi($a, $b){
        $hasil = $a / $b;
        echo "PEEMBAGIAN <br>";
        echo "Operator : / <br>";
        echo "Hasil : ".$hasil;
}
    
function modulus($a, $b){
        $hasil = $a % $b;
        echo "MODULUS <br>";
        echo "Operator : % <br>";
        echo "Hasil : ".$hasil."<br>";
}

$a = 10; 
$b = 5;
?>

<?php echo "Bilangan 1 = $a"; ?> <br>
<?php echo "Bilangan 2 = $b"; ?> <br><br>

<?php echo "Berikut adalah hasil dari setiap operasi "; ?> <br><br>
<?php tambah($a,$b); ?> <br><br>
<?php kurang($a,$b); ?> <br><br>
<?php kali($a,$b); ?> <br><br>
<?php bagi($a,$b); ?> <br><br>
<?php modulus($a,$b); ?> <br><br>

</body>

</html>