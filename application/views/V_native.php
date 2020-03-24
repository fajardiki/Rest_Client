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
                <label for="selectdata">Search Data</label>
                <input class="form-control" type="" name="selectdata" id="selectdata">
            </div>
            <div class="form-group">
                <button class="btn btn-primary" style="width: 100%" name="btnselect">Select</button>
            </div>
        </form>

        <?php if (isset($bridgelog) and !empty($bridgelog)) {
            foreach ($bridgelog['Bridge_Log'] as $bl) {
                echo "~ ".$bl['id']." ~";
                echo $bl['msisdn'];
                echo $bl['called'];
                echo $bl['lat'];
                echo $bl['lng'];
                echo $bl['area'];
                echo $bl['ts'];
                echo $bl['tenant'];
            }
            echo "<br><br>";
            echo "<b>".$bridgelog['Time']."</b>";
        } ?>
    </div>
    <!-- sample script -->

</body>
</html>