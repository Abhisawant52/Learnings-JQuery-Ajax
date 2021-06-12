<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

	<!--JQuery-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<link rel="stylesheet" href="style.css">
	
    <title>Ajax Test!</title>
  </head>
  <body>
	<div class="container">
	<h2 class="">PHP CRUD Operations with AJAX</h2>
	<span class="errors">All Fields are Required.</span>
	
	<!-- <input type="button" id="load-button" value="load" /> -->
	<span>
	<form id="form1" action="Query/insert.php" method="post">
	<label>Name: </label> <input type="text" id="name" name="name" />&nbsp; &nbsp; 
	<label>Email: </label> <input type="email" pattern="[^ @]*@[^ @]*"  id="mail" name="mail" /> 
	<input type="submit" id="submit-button" value="submit" />	
	<span style="float:right;">
	<label>Search: </label> <input type="text" id="search" placeholder="Search By Name" autocomplete="off" /></span>
	</form>
	</span>
	<br>
	<div id="result" class="table-responsive"></div>

	</div>
	<div id="model">
		<div id="model-form">
			<h2>Edit Form</h2><br><div id="close-btn">X</div>
			<div id="respons"></div>
		</div>
	</div>

<script src="Script.js" type="text/javascript"></script>

    <!-- Optional JavaScript; choose one of the two! -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    
  </body>
</html>