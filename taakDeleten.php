<?php

include('taakQueries.php');

//aanroepen van een functie de een taak verwijdert
taakDeleten($_GET['id']);

header("Location:taken.php?id=" . $_GET['listId'] );