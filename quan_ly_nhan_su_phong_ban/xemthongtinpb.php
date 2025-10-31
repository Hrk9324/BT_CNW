<?php
    include("connect.php");
    $sql = "SELECT * FROM phongban";
    $result = mysqli_query($link, $sql);

    echo '<br>';
    echo '<table border = "1" width = "80%">';
    echo '<caption> Xem Thong Tin Phong Ban </caption>';
    echo '
        <tr>
        <th>ID Phong Ban</th>
        <th>TTen Phong Ban</th>
        <th>Mo Ta</th>
        </tr>';

    while ($row = mysqli_fetch_array($result)) {
        echo '<tr>
            <td style = "text-align:center;"> '.$row['IDPB'].'</td>
            <td>'.$row['Tenpb'].'</td>
            <td>'.$row['Mota'].'</td>
            <th> <a href = "xemthongtinnvpb.php?IDPB='.$row["IDPB"].'" >X</a></th>
            </tr>';
    }

     
    echo '</table>';

    mysqli_free_result($result);
    mysqli_close($link);
?>