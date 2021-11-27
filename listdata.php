<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Tugas Minggu 7</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="listdata.css">
</head>
<body>

    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="formdaftar.php">Daftar</a></li>
        <li class="active"><a href="listdata.php">Data Pendaftar</a></li>
        <li><a href="about.php">About</a></li>
        <li style="float:right"><a>KAMPUNG REJOMULYO</a></li>
    </ul>


    <header>
        <h2>Warga yang sudah mendaftar</h2>
    </header>

    <div class="container">
    <table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIK</th>
            <th>No HP/WA</th>
            <th>Lomba</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM panitia";
        $query = mysqli_query($db, $sql);

        while($panitia = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$panitia['id']."</td>";
            echo "<td>".$panitia['nama']."</td>";
            echo "<td>".$panitia['nik']."</td>";
            echo "<td>".$panitia['nomorhp']."</td>";
            echo "<td>".$panitia['lomba']."</td>";

            echo "<td>";
            echo "<a href='update.php?id=".$panitia['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$panitia['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>
    <a href="formdaftar.php"> <button type="submit">Tambah</button></a> <br>

    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran Panitia Lomba telah berhasil";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
    <?php endif; ?>

    </div>
    </div>
    </body>
</html>