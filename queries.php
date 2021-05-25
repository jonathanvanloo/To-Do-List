<?php

include('connection.php');

function allLists() {
    $query = "SELECT * FROM lijst";
    $conn = connect();
    $stmt = $conn->query($query);
    $stmt->execute();
    return $stmt;
}

function lijstToevoegen($title) {
    if (isset($_POST["submit"])) {
        $conn = connect();
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("INSERT INTO lijst (title) VALUES (:title)");
        $stmt->bindParam(':title', $title);
        $stmt->execute();
    }
}

function updateLijst($id, $title) {
    if (isset($_POST["submit"])) {
        $conn = connect();
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("UPDATE lijst SET title=:title WHERE id=:id");
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}

function deleteLijst($id) {
        $conn = connect();
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("DELETE FROM lijst WHERE id=:id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
}