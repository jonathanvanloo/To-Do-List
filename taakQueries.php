<?php

include('connection.php');

function alletaken() {
    $query = "SELECT * FROM taken";
    $conn = connect();
    $stmt = $conn->query($query);
    $stmt->execute();
    return $stmt;
}

function taakToevoegen($beschrijving, $duur, $status) {
    if (isset($_POST["submit"])) {
        $conn = connect();
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("INSERT INTO taken (beschrijving, duur, status) VALUES (:beschrijving, :duur, :status)");
        $stmt->bindParam(':beschrijving', $beschrijving);
        $stmt->bindParam(':duur', $duur);
        $stmt->bindParam(':status', $status);
        $stmt->execute();
    }
}

function taakUpdaten($id, $beschrijving, $duur, $status) {
    if (isset($_POST["submit"])) {
        $conn = connect();
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("UPDATE taken SET beschrijving=:beschrijving, duur=:duur, status=:status WHERE id=:id");
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':beschrijving', $beschrijving);
        $stmt->bindParam(':duur', $duur);
        $stmt->bindParam(':status', $status);
        $stmt->execute();
    }
}

function taakDeleten($id) {
    $conn = connect();
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("DELETE FROM taken WHERE id=:id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
}