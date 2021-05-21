<?php

include('connection.php');

function allLists() {
    $query = "SELECT * FROM lijst";
    $conn = connect();
    $stmt = $conn->query($query);
    return $stmt;
}

function addList() {
    $msg = 'gggggggggggggggggg';
    if (!empty($_POST)) {
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $stmt = $pdo->prepare('INSERT INTO lijst VALUES ($name)');
        $msg = 'Created Successfully!';
    }
}

?>