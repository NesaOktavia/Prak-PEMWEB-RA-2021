<?php

include("config.php");

if( !isset($_GET['id']) ){
    header('Location: listdata.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM panitia WHERE id=$id";
$query = mysqli_query($db, $sql);
$mahasiswa = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Tugas Minggu 7</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="update.css">
</head>

<body>

    <ul>
        <li><a href="index.php">Home</a></li>
        <li class="active"><a href="formdaftar.php">Daftar</a></li>
        <li><a href="listdata.php">Data Pendaftar</a></li>
        <li><a href="about.php">About</a></li>
        <li style="float:right"><a>KAMPUNG REJOMULYO</a></li>
    </ul>

    <header>
        <h1>EDIT FORMULIR PENDAFTARAN PANITIA LOMBA 17-AN</h1>
    </header>

    <center>
    <form action="prosesupdate.php" method="POST">  

            <input type="hidden" name="id" value="<?php echo $mahasiswa['id'] ?>" />

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $mahasiswa['nama'] ?>" />
        </p>
        <p>
            <label for="nik">NIK : </label>
            <input type="text" name="nik" placeholder="1234567" value="<?php echo $mahasiswa['nik'] ?>" />
        </p>
        <p>
            <label for="nomorhp">No HP/WA : </label>
            <input type="nomorhp" name="nomorhp" placeholder="08********"<?php echo $mahasiswa['nomorhp'] ?>" /> 
        </p>
        <p>
            <label for="lomba">Lomba : </label>
            <input type="text" name="lomba" placeholder="....." <?php echo $mahasiswa['lomba'] ?> />
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan" class="button"/>
        </p>

    </form>
    </center>

    </body>
</html>