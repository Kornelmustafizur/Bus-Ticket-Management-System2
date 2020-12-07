<?php
    require_once "conn.php";

    $from= $_POST["from"];
    $to= $_POST["to"];
    $journey= $_POST["journey"];
    $return= $_POST["return"];


    $sql = "INSERT INTO reserve ( from, to, journey, return)
VALUES ('$from', '$to', '$journey', '$return')";
if (mysqli_query($conn, $sql)) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
 ?>
