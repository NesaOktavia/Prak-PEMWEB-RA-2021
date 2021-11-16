<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bilangan Prima</title>
</head>
<body>
<?php

if(isset($_POST['operator'])){
$n = $_POST['n'];
}

    function bilPrima($n){
        for($i=1; $i<=$n; $i++){
            $hitung = 0;
            for($j=1; $j<=$i; $j++){
                if($i % $j == 0){
                    $hitung++;
                }
            }
            if($hitung == 2){
                echo $i.', ';
            }
        }
    }


$n = 50;
?>
<?php 
echo "Bilangan prima dari 1 - 50 : "; 
?><br><br>

<?php bilPrima($n);?>

</body>
</html>