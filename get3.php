<?php
if(isset($_GET['btnLogin'])) {
    $nama = $_GET['nama'];
    $email = $_GET['email'];

    if(empty($nama) || empty($email)) {
        header("Location: kosong3.php");
    } else {
        //proses login
        echo "Nama : ".$_GET['nama']."<br>";
        echo "Email : ".$_GET['email']."<br>";
        echo "Alamat : ".$_GET['alamat']."<br>";
        echo "Tempat,Tanggal lahir : ".$_GET['ttl']."<br>";
        echo "Semester : ".$_GET['semester']."<br>";
        echo "Program Studi : ".$_GET['prodi']."<br>";
        echo "Waktu Login : ".date("m-F-Y, g:i:s a")."";
    }
}
?>
