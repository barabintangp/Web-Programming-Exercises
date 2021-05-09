<?php
	session_start();
	if (isset($_SESSION["email"])) {
	} else {
		$_SESSION["name"] = $_POST["nama"];
		$_SESSION["email"] = $_POST["email"];
	}
	if ($_SESSION["lives"] == 0) {
		header('Location: selesai.php');
	}

	$a = rand(0,20);
	$b = rand(0,20);
	$hasil = $a + $b;
	$_SESSION["hasil"] = $hasil;
?>

<form action="proses.php" method="POST">
                <h5>Hallo <?php echo $_SESSION["name"];?>, tetap semangat ya...you can do the best!!!</h5>
                <h5>Lives: <?php echo $_SESSION["lives"];?> | Score: <?php echo $_SESSION["score"];?></i></h5>
                <label>Berapakah <?php echo $a; ?> + <?php echo $b; ?> =</label>
                <input name="hasil" placeholder="Masukkan Jawaban" type="number">
                <button type="submit" value="jawab">Jawab</button>
</form>