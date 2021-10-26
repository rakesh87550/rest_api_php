<?php
    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');

    $conn = mysqli_connect("localhost", "root", "", "online_food") or die("Connection failed");
    $sql = "SELECT * FROM user";
    $result = mysqli_query($conn,$sql);
    if (mysqli_num_rows($result) > 0) {
        $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
        echo json_encode($output);
    }
?>
