<?php

include('queries.php');

deleteLijst($_GET['id']);

header("Location:lijst.php");