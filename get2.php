<?php
if(isset($_GET['btnLogin'])) {
    $nama = $_GET['nama'];
    $email = $_GET['email'];

    if(empty($nama) || empty($email)) {
        header("Location: kosong2.php");
    } else {
        //proses login
        echo "<center>Nama : ".$_GET['nama']."</center><br>";
        echo "<center>Email : ".$_GET['email']."</center><br>";
        echo "<center>Waktu Login : ".date("m-F-Y, g:i:s a")."</center>";
    }
}
?>
