<!DOCTYPE html>
<html>
<head>
    <style>
    body {
    background-image: url(https://images.unsplash.com/photo-1533805994737-558461dcb28e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80);
} 
    
</style>
    <title>Tugas Minggu 7</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="formdaftar.css">
</head>
<body>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li class="active"><a href="formdaftar.php">Daftar</a></li>
        <li><a href="listdata.php">Pendaftar</a></li>
        <li><a href="about.php">About</a></li>
        <li style="float:right"><a>KAMPUNG REJOMULYO</a></li>
    </ul>
    <fieldset>
    <header>
        <h1>FORMULIR PENDAFTARAN PANITIA LOMBA 17-AN</h1>
    </header>
  
    <center>
    <form action="prosesdaftar.php" method="POST">
        <p>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" placeholder="Nama Lengkap" />
        </p>
        <p>
            <label for="nik">NIK : </label>
            <input type="text" name="nik" placeholder="1234567" />
        </p>
        <p>
            <label for="nomorhp">Nomor HP/WA: </label>
            <input type="text" name="nomorhp" placeholder="08xxxxxxxx" />
        </p>
        <p>
            <label for="lomba">Lomba : </label>
            <input type="text" name="lomba" placeholder="....." />
        </p>
        <br>
        <p style="margin-top: 10px">
            <input type="submit" value="Daftar" name="daftar" class="button"/>
        </p>  
    </form>
    </center>
    </fieldset>
    
    </body>
</html>