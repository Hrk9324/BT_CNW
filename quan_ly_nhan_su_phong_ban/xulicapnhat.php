<?php

use LDAP\Result;

    session_start();
    if (!isset($_SESSION['username'])) {
        header("Location: login.php");
        exit();
    }

    include('connect.php');
    
    if(isset($_POST['submit'])) {
        $idpb = $_POST['IDPB'];
        $tenpb = $_POST['Tenpb'];
        $mota = $_POST['Mota'];

        $sql = "UPDATE phongban SET Tenpb='$tenpb', Mota='$mota' WHERE IDPB='$idpb'";
        $Result = mysqli_query($link, $sql);

        echo "Ket qua cap nhat phong ban: ";
        if($Result) {
            echo "Cap nhat thanh cong.";
        } else {
            echo "Cap nhat that bai.";
        }

    }

    echo '<br>';
    echo '<a href="home.php">Quay lai trang home</a>';

    mysqli_close($link);
    
?>