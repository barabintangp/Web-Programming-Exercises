<?php
    // mengecek keberadaan cookie 'namauser'
    if(!isset($_COOKIE['namauser'])){
        echo "<p>Hai sayang.</p>";
        echo "<p><a href='index.html'>Login</a> dulu ya..</p>";
        //break
        exit();
    }
?>