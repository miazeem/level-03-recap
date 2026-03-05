<?php

include 'database.php';

$getid=$_GET['id'];
echo $getid;

if (isset($_GET['id'])) {
    $getid = $_GET['id'];

    $sql = "DELETE FROM students WHERE id = $getid";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: show.php");
    } else {
        echo "Error deleting data: " . mysqli_error($conn);
    }
}

?>