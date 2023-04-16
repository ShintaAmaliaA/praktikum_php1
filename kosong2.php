<?php
    echo "<center> Mohon Maaf Data yang Anda Masukkan Tidak lengkap";
    echo "<center> Dalam waktu 3 detik Anda akan diarahkan kembali ke Halaman Login  ";

    // Redirect ke halaman login setelah 3 detik
    header("refresh:3;url=tugas2.php");
?>