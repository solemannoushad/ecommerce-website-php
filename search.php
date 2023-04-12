<?php

    require('connection.php');
    $searchVal = $_POST['value'];

    $sql = "SELECT * FROM `mobiles` WHERE `item_name` = '%{$searchVal}%'";
    $result = mysqli_query($connection , $sql);

        $row = mysqli_fetch_assoc($result)
        $outpute = $row['item_name'];

    echo json_encode($outpute);

?>