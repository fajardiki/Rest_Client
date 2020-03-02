<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>
    <!-- place this before any script you want to calculate time -->
    <?php $time_start = microtime(true);  ?>
    
    <!-- sample script -->
    <?php foreach ($bridgelog['Bridge_Log'] as $bl) {
        echo "~ ".$bl['id']." ~";
        echo $bl['msisdn'];
        echo $bl['called'];
        echo $bl['lat'];
        echo $bl['lng'];
        echo $bl['area'];
        echo $bl['ts'];
        echo $bl['tenant'];

    } ?>

    <br>

    <?php $time_end = microtime(true); ?>

    <!-- dividing with 60 will give the execution time in minutes otherwise seconds -->
    <?php $execution_time = round(($time_end - $time_start), 3);  ?>
    <br>
    <!-- execution time of the script -->
    <?php echo '<b>Total Execution Time: '.$execution_time.' Second</b>'; ?>

    <!-- if you get weird results, use number_format((float) $execution_time, 10)  -->
   <!--  <?php echo "<b>".$bridgelog['Time']."</b>" ?> -->

</body>
</html>