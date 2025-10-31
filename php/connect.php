<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>connect</title>

</head>
<body>
    <?php
    $servername = "localhost:3307";
    $username = "ndhan";
    $password = "123";
    $dbname = "dulieu";

    $link = mysqli_connect($servername, $username, $password, $dbname);
    if (!$link) {
        die("Connection failed: " . mysqli_connect_error());
    }
    else {
        echo "<br>Connected successfully using mysqli_connect";
    }

    mysqli_select_db($link, $dbname);
    $sql = "SELECT * FROM nhanvien";
    $result = mysqli_query($link, $sql);

    echo '<table border = "1" width = "100%">';
    echo '<caption>table</caption>';
    echo '<tr> <th>maso</th> <th>hoten</th> <th>ngaysinh</th> <th>nghenghiep</th> </tr>';

    while ($row = mysqli_fetch_array($result)) {
        echo 
        '<tr>
        <td style = "text-align:center;">' . $row['maso'] . '</td>
        <td>' . $row['hoten'] . '</td>
        <td>' . $row['ngaysinh'] . '</td>
        <td>' . $row['nghenghiep'] . '</td>';
        echo '</tr>';
    }
    echo '</table>';

    mysqli_free_result($result);
    mysqli_close($link);
    ?>

</body>
</html>