<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form action="<?php echo $action; ?>" method="post">
            <div class="form-group">
                <label for="selectdata">Select Data</label>
                <input class="form-control" type="" name="selectdata" id="selectdata">
            </div>
            <div class="form-group">
                <button class="btn btn-primary" style="width: 100%" name="btnselect">Select</button>
            </div>
        </form>

        <?php if (isset($bridgelog) and !empty($bridgelog)) {
            foreach ($bridgelog['Bridge_Log'] as $bl) {
                echo "<b>[".$bl['id']."]</b> ".$bl['msisdn']." ".$bl['called']." ".$bl['lat']." ".$bl['lng']." ".$bl['area']." ".$bl['ts']." ".$bl['tenant']." ";
            }
        } ?>

        <?php if (isset($bridgelog) and !empty($bridgelog)) { ?>
        <footer style="position: fixed; left: 0; bottom: 0; background-color: #ff0000; padding: 10px; border-radius: 0px 10px 0px 0px; opacity: 0.7">
            <div class="container" style="color: #fff;">
                <div class="row">
                    <div class="col">
                        <b>Web Service</b>
                            <?php echo "<p>Execution Time : ".$bridgelog['time']."</p>
                                <p>Memory Usage : ".$bridgelog['memory']."</p>
                                <p>CPU Usage : ".$bridgelog['cpu']."</p>" ?>
                    </div> 
                </div>
                <div class="row">
                    <div class="col">
                        <b>Client</b>
                        <p>Execution Time : <?php echo $time; ?> Second</p>
                        <p>Memory Usage : {memory_usage}</p>
                        <p>CPU Usage : <?php echo $cpu; ?></p>
                    </div>
                    
                </div>
            </div>
        </footer>
        <?php } ?>

        <footer style="position: fixed; bottom: 0; right: 0; background-color: #ff0000; padding: 10px; border-radius: 10px 0px 0px 0px;">
            <?php if (isset($ws) and !empty($ws)): ?>
                <a href="../C_menu/lumen"><?php echo "<b style='color: #fff;'>".$ws."</b>"; ?></a>       
            <?php endif ?>
        </footer>
    </div>

</body>
</html>