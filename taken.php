<?php

include('connection.php');

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>To-Do-List</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <button type="button" class="btn btn-primary m-5"><a href="lijst.php"><h4 class="text-white">Terug</h4></a></button>
        <div class="container">
	    <table class="table table-hover table-dark">
	    <tr>
		      <th scope="col">id</th>
		      <th scope="col">name</th>
	    </tr>
   		<tr>
	      	<td scope="row">1</td>
	      	<td scope="row">Jonna</td>
    	</tr>
	</table>
    </div>
    </body>
</html>