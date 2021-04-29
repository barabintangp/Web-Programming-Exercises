<?php
    session_start();

    //daftar user
    $user= array(
        array("username1", "Rosihan Ari Yuana", "123456"),
		array("username2", "Dwi Amalia Fitriani", "654321"),
		array("username3", "Faza Fauzan Khosyiyarrohman", "112233")
    );

    //jika form login sudah submit
    if(isset($_POST['submit'])){
        $username=$_POST['username'];
        $password=$_POST['password'];

        //cek username dan password dalam array
        foreach($user as $profile_user){
            if(($profile_user[0]==$username)&&($profile_user[2]==$password)){
                //jika ada yang match
                $_SESSION['namauser']=$profile_user[1];
                header("Location:page1.php");
            }
        }
        //jika tidak ada yang match
        echo "<h3>Login gagal</h3>";
        echo "<p>Silakan <a href='form.html'>login kembali</a></p>";
    }

?>
