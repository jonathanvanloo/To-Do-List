<?php

include('taakQueries.php');

if (isset($_POST['beschrijving'])) {
    taakToevoegen($_POST['beschrijving'], $_POST['duur'], $_POST['status'], $_GET['listId']);
    header("Location:taken.php?id=" . $_GET['listId'] );
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>taak Toevoegen</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <button type="button" class="btn btn-primary m-5"><a href="taken.php"><h4 class="text-white">Terug</h4></a></button>
    <div class="container mt-5 text-center">
        <form action="" method="post">
            <input type="text" name="beschrijving" class="form-control" placeholder="beschrijving">
            <input type="text" name="duur" class="form-control mt-2" placeholder="Duur">
            <input type="text" name="status" class="form-control mt-2" placeholder="Status">
            <input type="submit" name="submit" class="btn btn-primary mt-5" value="Toevoegen">
        </form>
    </div>
</body>
</html>