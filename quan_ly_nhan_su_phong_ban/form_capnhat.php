<?php
    session_start();
    if (!isset($_SESSION['username'])) {
        header("Location: login.php");
        exit();
    }

    include('connect.php');

    $idpb = $_GET['IDPB'];
    $sql = "SELECT * FROM phongban WHERE IDPB='$idpb'";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_array($result);
    if (!$row) {
        echo "Phong ban khong ton tai.";
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <form action="xulicapnhat.php" method="POST">

        <input type="hidden" name="IDPB" value="<?php echo $row['IDPB']; ?>">
        <label for="Tenpb">Ten Phong Ban:</label><br>

        <input type="text" name="Tenpb" value="<?php echo $row['Tenpb']; ?>" required><br><br>
        <label for="Mota">Mo Ta:</label><br>

        <textarea name="Mota" required><?php echo $row['Mota']; ?></textarea><br><br>
        <input type="submit" name="submit" value="Cap Nhat">
    </form>
</body>
</html>