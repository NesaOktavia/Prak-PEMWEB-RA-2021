<?php

include("config.php");

if(isset($_POST['daftar'])){

    $nama = $_POST['nama'];
    $nik = $_POST['nik'];
    $nomorhp = $_POST['nomorhp'];
    $lomba = $_POST['lomba'];

    $sql = "INSERT INTO panitia (id, nama, nik, nomorhp, lomba) VALUE (NULL, '$nama', '$nik', '$nomorhp', '$lomba')";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: listdata.php?status=sukses');
    } else {
        header('Location: listdata.php?status=gagal');
    }

} else {
    die("Akses dilarang...");
}
?>