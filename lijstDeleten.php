<?php

include('lijstQueries.php');

//aanroepen van een functie de een lijst verwijderd
deleteLijst($_GET['id']);

header("Location:lijst.php");