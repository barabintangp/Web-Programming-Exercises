<?php    
    session_start();
    include "koneksi.php";
    addPemain($_SESSION["name"], $_SESSION["email"], $_SESSION["score"]);
?>

<!DOCTYPE html>
<html>
    <head>
    </head>
<body>
    <form>
        <h5>Hallo <?php echo $_SESSION["name"];?>, Sayang permainan sudah selesai. Semoga lain kali bisa lebih baik. <i class="fa fa-smile"></i></h5>
        <h5>Score Anda : <?php echo $_SESSION["score"]; ?></h5>
        <h5>HALL OF FAME</h5>
        <table>
            <tr>
                <td>No</td>
                <td>Nama</td>
                <td>Score</td>
            <tr>
            <?php
            $koneksi = mysqli_connect($host,$username,$pass,$database) or die(mysqli_error());
            $sql = "SELECT * FROM tebak ORDER BY score DESC LIMIT 10";
            $result = mysqli_query($GLOBALS['koneksi'], $sql);
            if (mysqli_num_rows($result) > 0) {
                $i = 1;
                while($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $i . "</td>";
                    echo "<td>" . $row["Nama"] . "</td>";
                    echo "<td>" . $row["Score"] . "</td>";
                    echo "</tr>";
                    $i = $i + 1;  
                }
            } else {
                
            }
            mysqli_close($GLOBALS['koneksi']);
            ?>
        </table>
        <a href="index.php">Ayo main lagi</a>
    </form>
</body>
</html>