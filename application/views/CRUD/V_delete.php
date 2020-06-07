<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- BOOTSTRAPE -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<form action="<?php echo base_url($action); ?>" method="post">
			<div class="form-group">
				<label for="jumlahdelete">Jumlah Delete</label>
				<input class="form-control" type="" name="jumlahdelete" id="jumlahdelete">
			</div>
			<div class="form-group">
				<button class="btn btn-primary" style="width: 100%" name="btndelete">Delete</button>
			</div>
		</form>

		<?php if (isset($delete) and !empty($delete)) { ?>
        <footer style="position: fixed; left: 0; bottom: 0; background-color: #ff0000; padding: 10px; border-radius: 0px 10px 0px 0px; opacity: 0.7">
            <div class="container" style="color: #fff;">
                <p>Jumlah request : <?php echo $delete['req']; ?></p>
                <div class="row">
                    <div class="col">
                        <b>Web Service</b>
                            <?php echo "<p>Execution Time : ".$delete['time']."</p>
                                <p>Memory Usage : ".$delete['memory']."</p>" ?>
                    </div> 
                </div>
                <div class="row">
                    <div class="col">
                        <b>Client</b>
                        <p>Execution Time : <?php echo $time; ?> Second</p>
                        <p>Memory Usage : {memory_usage}</p>
                    </div>
                    
                </div>
            </div>
        </footer>
        <?php } ?>
        
        <footer style="position: fixed; bottom: 0; right: 0; background-color: #ff0000; padding: 10px; border-radius: 10px 0px 0px 0px;">
                <a href="<?php echo base_url($link) ?>"><?php echo "<b style='color: #fff;'>".$ws."</b>"; ?></a>
        </footer>
	</div>
</body>
</html>