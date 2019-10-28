<html>
<head>
    <title>koneksi database MYSQL</title>
</head>
<body>
    <h1>Demo Koneksi Databse MYSQL</h1>
    
<?php
$conn=mysqli_connect ('localhost', 'root', '');
if ($conn){
    echo "OK";

} else {
    echo "server not connected";
}
?>
</body>
</html>