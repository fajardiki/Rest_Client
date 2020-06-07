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
        <form action="<?php echo base_url($action); ?>" method="post">
            <div class="form-group">
                <label for="selectdata">Select Data</label>
                <input class="form-control" type="" name="selectdata" id="selectdata">
            </div>
            <div class="form-group">
                <button class="btn btn-primary" style="width: 100%" name="btnselect">Select</button>
            </div>
        </form>
        <?php if (isset($bridgelog) and !empty($bridgelog)) { ?>

        <table class="table table-bordered table-hover">
          <thead>
            <tr><th>Id</th><th>msisdn</th><th>called</th><th>lat</th><th>lng</th><th>area</th><th>ts</th><th>tennant</th></tr>
          </thead></table>
          <table class="table table-bordered table-hover">
          <tbody>
            <?php echo json_encode($bridgelog['Bridge_Log'],JSON_UNESCAPED_UNICODE); ?>
            <!-- <?php foreach ($bridgelog['Bridge_Log'] as $bl => &$val) { 
              echo '<tr><td>'.$val['id'].'</td><td>'.$val['msisdn'].'</td>
                <td>'.$val['called'].'</td><td>'.$val['lat'].'</td><td>'.$val['lng'].'</td><td>'.$val['area'].'</td><td>'.$val['ts'].'</td><td>'.$val['tenant'].'</td></tr>';
            } ?> -->
          </tbody></table>

            <footer style="position: fixed; left: 0; bottom: 0; background-color: #ff0000; padding: 10px; border-radius: 0px 10px 0px 0px; opacity: 0.7">
                <div class="container" style="color: #fff;">
                    <p>Jumlah request : <?php echo $bridgelog['req']; ?></p>
                    <div class="row">
                        <div class="col">
                            <b>Web Service</b>
                                <?php echo "<p>Execution Time : ".$bridgelog['time']."</p>
                                <p>Memory Usage : ".$bridgelog['memory']."</p>" ?>
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
            <a href="<?php echo base_url($link); ?>"><?php echo "<b style='color: #fff;'>".$ws."</b>"; ?></a>       
        </footer>
    </div>

</body>
</html>