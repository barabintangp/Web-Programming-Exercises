<?php    
    session_start();
?>
<?php

echo "Hallo " .$_SESSION['name']. ", Selamat jawaban anda benar!!!";
echo "Lives: " .$_SESSION['lives']. " | Score: " .$_SESSION["score"];
echo "<a href='tebakan.php'>Soal berikutnya</a>";

?>
