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

    <script>
            var min    = 0;
            var second = 00;
            var zeroPlaceholder = 0;
            var counterId = setInterval(function(){
                            countUp();
                          }, 1000);

            function countUp () {
                second++;
                if(second == 59){
                    second = 00;
                    min = min + 1;
                }
                if(second == 10){
                      zeroPlaceholder = '';
                }else
                if(second == 00){
                    zeroPlaceholder = 0;
                }

                  document.getElementById("count-up").innerText = min+':'+zeroPlaceholder+second;
            }

            window.onload = function() {
                clearInterval(counterId);
                var scores = document.getElementById("score");
                var time = document.getElementById("count-up");

                alert("Waktu Tercapai : "+time.innerHTML+" Menit \nJumlah Data : "+scores.innerHTML);
            };

    </script>

</head>
<body>
    <div class="container-fluid bg-info pb-2">
        <a href="<?php echo site_url().'C_menu' ?>">
        <img class="img-fluid" width="170" src="assets/img/analisa-seo-indonesia.png" style="position: absolute; margin-top: 5px; z-index:1;">
        </a>
        <img class="img-fluid" id="logo" src="assets/img/slim.jpg" width="130" style="position: absolute; right:10px; margin-top: 10px; border-radius: 50%; border-style: solid; border-color: white">
        <div class="row">
            <div class="col p-3" align="center">
                <h1 id="count-up">0:00</h1>
            </div>
        </div>
    </div>
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Id</th>
                <th>Msisdn</th>
                <th>Called</th>
                <th>Lat</th>
                <th>Ing</th>
                <th>Area</th>
                <th>Ts</th>
                <th>Tenant</th>
            </tr>
        </thead>
        <?php $no = 1; foreach ($bridgelog['Bridge_Log'] as $bl) { ?>
        <tbody>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $bl['id']; ?></td>
                <td><?php echo $bl['msisdn']; ?></td>
                <td><?php echo $bl['called']; ?></td>
                <td><?php echo $bl['lat']; ?></td>
                <td><?php echo $bl['lng']; ?></td>
                <td><?php echo $bl['area']; ?></td>
                <td><?php echo $bl['ts']; ?></td>
                <td><?php echo $bl['tenant']; ?></td>
            </tr>
        </tbody>
        <?php $no++; } ?>
    </table>
    <h1 id="score" hidden="true"><?php echo $no; ?></h1>










    

    <!-- <script>
        $("document").ready(function(){
            var counterId;
            $("#start").click(function() {
                counterId = setInterval(function(){
                            countUp();
                          }, 1000);
            });

            $("#stop").click(function() {
                clearInterval(counterId);
            });
        });
    </script>

    <script>
            var min    = 0;
            var second = 00;
            var zeroPlaceholder = 0;

            function countUp () {
                second++;
                if(second == 59){
                    second = 00;
                    min = min + 1;
                }
                if(second == 10){
                      zeroPlaceholder = '';
                }else
                if(second == 00){
                    zeroPlaceholder = 0;
                }

                  document.getElementById("count-up").innerText = min+':'+zeroPlaceholder+second;
            }
    </script> -->


<!-- SCRIPT BOOTSTRAPE -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>