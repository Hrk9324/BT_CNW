<?php

    session_start();
    if (!isset($_SESSION['username'])) {
        header("Location: login.php");
        exit();
    }

    include("connect.php");
    $sql = "SELECT * FROM nhanvien";
    $result = mysqli_query($link, $sql);

    echo '<br>';
    echo '<table border = "1" width = "50%">';
    echo '<caption> Them Nhan Vien </caption>';
    echo '<br>';
    echo '
        <tr>
        <th>ID Nhan Vien</th>
        <th>Ho Ten</th>
        <th>ID Phong Ban</th>
        <th>Dia Chi</th>
        </tr>';

    while ($row = mysqli_fetch_array($result)) {
        echo '<tr>
            <td style = "text-align:center;"> '.$row['IDPB'].'</td>
            <td>'.$row['Tenpb'].'</td>
            <td>'.$row['Mota'].'</td>
            <th> <a href = "form_capnhat.php?IDPB='.$row["IDPB"].'" >X</a></th>
            </tr>';
    }

     
    echo '</table>';

    echo '<br>';
    echo '<a href="home.php">Quay lai trang home</a>';

    mysqli_free_result($result);
    mysqli_close($link);
?>