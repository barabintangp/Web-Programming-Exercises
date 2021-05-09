<?php
session_start();
$_SESSION["score"] = 0;
$_SESSION["lives"] = 5;

if (isset($_SESSION["email"])) {
    ?>
    <h5>Hallo <?php echo $_SESSION["name"];?>, selamat datang kembali di permainan ini!</h5>
    <a href="tebakan.php">Main lagi</a>
    <h5>Bukan Anda? <a href="mengulang.php"> Klik disini</h5></a>
<?php
} else {
?>
    <form action="tebakan.php" method="POST">
        <label>Nama</label>
        <input type="text" name="nama" id="name" placeholder="Masukkan Nama">
        <label>Email</label>
        <input type="text" name="email" id="email" placeholder="Masukkan Email">
        <button type="submit" name="mulai">Mulai Main</button>
    </form>
<?php
}
?>