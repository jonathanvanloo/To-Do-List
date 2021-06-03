<?php

include('lijstQueries.php');

//aanroepen van een functie de een taak bewerken
if (isset($_POST['title'])) {
    updateLijst($_GET['id'], $_POST['title']);
    header("Location:lijst.php");
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Lijst Bewerken</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<button type="button" class="btn btn-primary m-5"><a href="lijst.php"><h4 class="text-white">Terug</h4></a></button>
<div class="container mt-5 text-center">
    <form action="" method="post">
        <input type="text" name="title" class="form-control" placeholder="<?php echo $_GET['title'] ?>">
        <input type="submit" name="submit" class="btn btn-primary mt-5" value="Bewerken">
    </form>
</div>
</body>
</html>