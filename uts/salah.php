<?php    
    session_start();
?>

<?php
echo "Hallo " .$_SESSION['name']. " Sayang jawaban Anda salah… tetap semangat ya !!!";
echo "Lives: " .$_SESSION['lives']. " | Score: " .$_SESSION["score"];
echo "<a href='tebakan.php'>Soal berikutnya</a>";
?>