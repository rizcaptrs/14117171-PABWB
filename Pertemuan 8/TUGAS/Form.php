<!DOCTYPE html>
<HTML>
<head>
    <title>Form Data</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>

<body>
<div class="container">
    <h1>TAMBAH DATA</h1>
    <form action="prosestambah.php" method="post">
        <tr><br>
            <label for="NRP">NRP: </label>
            <input type="text" name="NRP" size="35"
            maxlength="50"> <br>
        </tr><br>

        <tr>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" size="35"
            maxlength="50"> <br>
        </tr>

        <tr><br>
            <label for="foto">Foto: </label>
            <input type="file" name="gambar" size="50">
        </tr><br>

        <tr><br>
            <label for="jurusan">Jurusan:</label>
            <select name="jurusan">
                <option value="Telekomunikasi">Telekomunikasi</option>
                <option value="Informatika">Informatika</option>
                <option value="Elektro">Elektro</option>
                <option value="Mesin">Mesin</option>
            </select>
        </tr><br>

        <tr><br>
            <input type="submit" value="Tambah">
        </tr><br>
    </form>

    <tr><br>
        <h4>==========================</h4>
    </tr><br>

    <h1>SEARCH DATA</h1>
    <form action="hasilsearch.php" method="post">    
        <tr><br>
            <label for="Nama">Nama: </label>
            <input type ="text" type ="text" name="Cari Data">
            <input type ="submit" value="cari data" > 
        </tr><br>
    </form>

    <tr><br>
        <h4>==========================</h4>
    </tr><br>

    <h1>HAPUS DATA</h1>
    <form action="hasilhapus.php" method="post">
        <tr><br>
            <label for="Nama">NRP: </label>
            <input type ="text" type ="text" name="Hapus Data">
            <input type ="submit" value="Hapus Data" >  
        </tr><br>
    </form>

</body>
</html>