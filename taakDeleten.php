<?php

include('taakQueries.php');

taakDeleten($_GET['id']);

header("Location:taken.php");