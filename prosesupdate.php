<?php

include("config.php");

if(isset($_POST['simpan'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nik = $_POST['nik'];
    $nomorhp = $_POST['nomorhp'];
    $lomba = $_POST['lomba'];

    $sql = "UPDATE panitia SET nama='$nama', nik='$nik', nomorhp='$nomorhp', lomba='$lomba' WHERE id='$id'";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: listdata.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>