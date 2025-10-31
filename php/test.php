<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    $endl = "<br>\n";
    $a = array('a' =>'1', 'b' => '2', 'c' => '3');
    foreach ($a as $value) {
        echo $value . $endl;
    }
    $cnt = 1;
    foreach ($a as $key => $value) {
        if ($cnt < sizeof($a)) {
            echo $key . ' => ' . $value . ", ";
        }
        else {
            echo $key . ' => ' . $value;
        }
        $cnt++;
    }
    ?>
</body>
</html>