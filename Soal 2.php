<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mengurutkan</title>
</head>
<body>
<?php

$String = array(" larine", " aduh", " qifuat", " toda", " anevi", " samid", " kifuat");

function sortKecilkeBesar (&$String){
        sort($String);
}

function sortBesarkeKecil (&$String){
    rsort($String);
}

?>

<?php echo "Berikut data acak yang belum diurutkan : " ;?><br><br>

<?php
$i = 0;
foreach($String as $data){
    if($i < count($String)-1){
        echo $data. ", ";
    }else{
        echo $data. ". ";
    }
    $i++;
}

?>
<br><br><br><br>

<?php echo "Berikut data yang telah diurutkan dari kecil ke basar : " ;?><br><br>
<?php sortKecilkeBesar($String); ?>

<?php
$i = 0;
foreach($String as $data){
    if($i < count($String)-1){
        echo $data. ", ";
    }else{
        echo $data. ". ";
    }
    $i++;
}

?>

<br><br><br><br>

<?php echo "Berikut data yang telah diurutkan dari besar ke kecil : " ;?><br><br>
<?php sortBesarkeKecil($String); ?>

<?php
$i = 0;
foreach($String as $data){
    if($i < count($String)-1){
        echo $data. ", ";
    }else{
        echo $data. ". ";
    }
    $i++;
}

?>

</body>
</html>