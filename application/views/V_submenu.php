<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- BOOTSTRAPE -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <style>
    	#logo {
    		width: 300px;
    		height: 100px;
    	}
    </style>

</head>
<body>
	<div class="container mt-4" align="center">
		<br><br><br>
		<div class="row mb-4">
			<div class="col">
				<h1 align="center"><?php echo $title ?></h1>
			</div>
		</div>
		<br><br><br>
		<div class="row">
			<div class="col">
				<a class="btn btn-primary" href="<?php echo $select ?>">Select</a>
			</div>
			<div class="col">
				<a class="btn btn-primary" href="<?php echo $insert ?>">Insert</a>
			</div>
			<div class="col">
				<a class="btn btn-primary" href="<?php echo $update ?>">Update</a>
			</div>
			<div class="col">
				<a class="btn btn-primary" href="<?php echo $delete ?>">Delete</a>
			</div>
			<div class="col">
				<a class="btn btn-primary" href="<?php echo $search ?>">Search</a>
			</div>
		</div>
		<footer style="position: fixed; bottom: 0; right: 0; background-color: #ff0000; padding: 10px; border-radius: 10px 0px 0px 0px;">
                <a href="../C_menu">Dasboard</a>       
        </footer>
	</div>

<!-- SCRIPT BOOTSTRAPE -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>