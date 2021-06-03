<?php

include('connection.php');

// een functie die alle taken ophaalt uit de database
function alleTaken($listId) {
    $conn = connect();
    $stmt = $conn->prepare("SELECT * FROM taken WHERE list_id=:listId");
    $stmt->bindParam(':listId', $listId);
    $stmt->execute();
    return $stmt;
}

// een functie die een gesorteerde lijst uit de database haalt
function sortTaken($filter, $clicked = 2) {
    $conn = connect();
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if ($filter == "duur") {
        $stmt = $conn->prepare("SELECT * FROM taken ORDER BY (CASE WHEN $clicked = 1 THEN duur END) DESC,
                                (CASE WHEN $clicked <> 1 THEN duur END) ASC");
    } else if ($filter == "status") {
        $stmt = $conn->prepare("SELECT * FROM taken ORDER BY (CASE WHEN $clicked = 1 THEN status END) DESC,
                                (CASE WHEN $clicked <> 1 THEN status END) ASC");
    }
    $stmt->execute();
    return $stmt;
}

// een functie die een taak toevoegt aan de database
function taakToevoegen($beschrijving, $duur, $status, $listId) {
    if (isset($_POST["submit"])) {
        $conn = connect();
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("INSERT INTO taken (beschrijving, duur, status, list_id) VALUES (:beschrijving, :duur, :status, :listId)");
        $stmt->bindParam(':beschrijving', $beschrijving);
        $stmt->bindParam(':duur', $duur);
        $stmt->bindParam(':status', $status);
        $stmt->bindParam(':listId', $listId);
        $stmt->execute();
    }
}

// een functie die een taak bewerkt in de database
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

// een functie die een taak verwijdert uit de database
function taakDeleten($id) {
    $conn = connect();
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("DELETE FROM taken WHERE id=:id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
}