<?php

include('connection.php');

function allLists() {
    $query = "SELECT * FROM lijst";
    $conn = connect();
    $stmt = $conn->query($query);
    return $stmt;
}

?>