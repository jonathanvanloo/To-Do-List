<?php

include('taakQueries.php');

if (isset($_POST['beschrijving'])) {
    taakUpdaten($_GET['id'], $_POST['beschrijving'], $_POST['duur'], $_POST['status']);
    header("Location:taken.php");
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>taak bewerken</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<button type="button" class="btn btn-primary m-5"><a href="taken.php"><h4 class="text-white">Terug</h4></a></button>
<div class="container mt-5 text-center">
    <form action="" method="post">
        <input type="text" name="beschrijving" class="form-control" placeholder="<?php echo $_GET['beschrijving'] ?>">
        <input type="text" name="duur" class="form-control mt-2" placeholder="<?php echo $_GET['duur'] ?>">
        <input type="text" name="status" class="form-control mt-2" placeholder="<?php echo $_GET['status'] ?>">
        <input type="submit" name="submit" class="btn btn-primary mt-5" value="bewerken">
    </form>
</div>
</body>
</html>