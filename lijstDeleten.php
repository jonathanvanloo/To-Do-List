<?php

include('lijstQueries.php');

deleteLijst($_GET['id']);

header("Location:lijst.php");