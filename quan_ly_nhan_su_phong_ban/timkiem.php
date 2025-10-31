<?php
    include ('connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tim Kiem Thong Tin</h1>

    <form action="" method="GET" >
        <label>Tu Khoa:</label><br>
        <input type="text" name="keyword" style="width:250px;" required><br><br>

        <input type="radio" name="type" value="IDNV" checked> Ma Nhan Vien<br>
        <input type="radio" name="type" value="Hoten"> Ho Ten<br>
        <input type="radio" name="type" value="IDPB"> Ma Phong Ban<br>
        <input type="radio" name="type" value="Diachi"> Dia Chi<br>


        <input type="submit" value="Tim Kiem">
    </form>
    <br>
    <a href="index.php">Quay lai trang chu</a>
    <hr>
</body>
</html>

<?php
    if (isset($_GET['keyword']) && isset($_GET['type'])) {
        $keyword = $_GET['keyword'];
        $type = $_GET['type'];

        $sql = "SELECT * FROM nhanvien WHERE $type LIKE '%$keyword%'";
        $result = mysqli_query($link, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo "<h2>Ket Qua Tim Kiem:</h2>";
            echo "<table border='1' width='70%'>";
            echo "<tr>
                    <th>ID Nhan Vien</th>
                    <th>Ho Ten</th>
                    <th>ID Phong Ban</th>
                    <th>Dia Chi</th>
                  </tr>";

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>".$row['IDNV']."</td>
                        <td>".$row['Hoten']."</td>
                        <td>".$row['IDPB']."</td>
                        <td>".$row['Diachi']."</td>
                      </tr>";
            }
            echo "</table>";
        } else {
            echo "<p>Khong tim thay ket qua nao.</p>";
        }
    }
    mysqli_close($link);
    
?>