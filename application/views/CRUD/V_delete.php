<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- BOOTSTRAPE -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<form action="<?php echo $action; ?>" method="post">
			<div class="form-group">
				<label for="jumlahdelete">Jumlah Delete</label>
				<input class="form-control" type="" name="jumlahdelete" id="jumlahdelete">
			</div>
			<div class="form-group">
				<button class="btn btn-primary" style="width: 100%" name="btndelete">Delete</button>
			</div>
		</form>
	</div>
</body>
</html>