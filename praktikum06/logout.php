<?php
    session_start();

    //hapus semua session
    session_destroy();
    //back to login
    header("Location:form.html");
?>