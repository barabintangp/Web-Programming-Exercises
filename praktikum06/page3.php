<?php
    session_start();
    include("cek.php");

    //menampilkan nama lengkap user
    echo "<p>Selamat datang ".$_SESSION['namauser']."</p>";
    
    echo "<h2>Menu Utama</h2>";
    echo "<p><a href='page1.php'>Page 1</a> | <a href='page2.php'>Page 2</a> | <a href='page3.php'>Page 3</a> | <a href='logout.php'>Logout</a></p>";
?>