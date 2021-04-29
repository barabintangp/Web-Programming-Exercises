<?php
    session_start();
        if(!isset($_POST['num'])){
            $_POST['random']=rand(0,100);
        }else if($_POST['num']<$_POST['random']){
            echo "Waaah… masih salah ya, bilangan tebakan Anda terlalu rendah.";
        }else if($_POST['num']>$_POST['random']){
            echo "Waaah… masih salah ya, bilangan tebakan Anda terlalu tinggi.";
        }else if($_POST['num']==$_POST['random']){
            echo "Selamat ya… Anda benar, saya telah memilih bilangan ".$_POST['num'];
            echo "<br>";
            echo "<a href='rand.php'>Ulangi lagi</a>";
        }
    session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tebak angka</title>
</head>
<body>
    <p>Hallo, nama saya Mr. PHP. Saya telah memilih secara random sebuah bilangan bulat. Silakan Anda menebak ya!</p>
    <form method="POST" action="">
        <input type="text" name="num">
        <input type="hidden" name="random" value="<?php echo $_POST['random'];?>">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>