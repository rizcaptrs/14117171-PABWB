<html>
    <head>
        <title>SEARCH DATA</title>
</head>

<body>
<h1>SEARCH Data</h1>
<?php
    $Nama=$_POST['Nama'];
    $Cari_Data=$_POST['cari data'];
    $conn=mysqli_connect("localhost","root","");
    mysqli_select_db($conn,"Data");
    $hasil=mysqli_query($conn,"select * from mahasiswa where
    $Nama like '%$Cari_Data%'");
    $jumlah=mysqli_num_rows($hasil);
    echo "<br>";
    echo "Ditemukan: $jumlah";
    echo "<br>";
    while($baris=mysqli_fetch_array($hasil))
    {
    echo "NRP : ";
    echo $baris [0];
    echo "<br>";
    echo "Nama : ";
    echo $baris[1];
    echo "<br>";
    echo "Foto :";
    echo $baris[2];
    echo "Jurusan :";
    echo $baris[3];
    }
?>
</body>
</html>