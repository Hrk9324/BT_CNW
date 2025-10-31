<?php
    include('connect.php');
    $sql = "SELECT * FROM nhanvien where IDPB ='".$_REQUEST['IDPB']."'";
    $result = mysqli_query($link, $sql);


    echo '<br>';
    echo '<table border = "1" width = "80%">';
    echo '<caption> Xem Thong Tin Nhan Vien Phong Ban </caption>';
    echo '
        <tr>
        <th>ID Nhan Vien</th>
        <th>Ho Ten</th>
        <th>ID Phong Ban</th>
        <th>Dia Chi</th>
        </tr>';

    while ($row = mysqli_fetch_array($result)) {
        echo '<tr>
            <td style = "text-align:center;"> '.$row['IDNV'].'</td>
            <td>'.$row['Hoten'].'</td>
            <td>'.$row['IDPB'].'</td>
            <td>'.$row['Diachi'].'</td>
            </tr>';
    }

    echo '</table>';

    mysqli_free_result($result);
    mysqli_close($link);

?>