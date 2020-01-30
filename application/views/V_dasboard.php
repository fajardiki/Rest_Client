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

</head>
<body>
    <div class="jumbotron" style="position: fixed; top: 0; width: 100%; padding: 0; font-size: 100px; text-align: center;">
        <span id="count-up">0:00</span>
    </div>

    <!-- SCRIPT TIME -->
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
    </script>


    <!-- Auth Session -->
    <table class="table table-bordered" style="margin-top: 150px;">
        <thead>
            <tr>
                <th>No</th>
                <th>Id</th>
                <th>Ip Address</th>
                <th>Timestamp</th>
                <th>Data</th>
            </tr>
        </thead>
        <?php $no = 1; foreach ($authsession['Auth_Session'] as $as) { ?>
        <tbody>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $as['id']; ?></td>
                <td><?php echo $as['ip_address']; ?></td>
                <td><?php echo $as['timestamp']; ?></td>
                <td><?php echo $as['data']; ?></td>
            </tr>
        </tbody>
        <?php $no++; } ?>
    </table>
    <br> -->
    <!-- Auth Tenant -->
<!--     <table class="table table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Whitelist</th>
                <th>Key_Public</th>
                <th>Key_Private</th>
            </tr>
        </thead>
        <?php foreach ($authtenant['Auth_Tenant'] as $at) { ?>
        <tbody>
            <tr>
                <td><?php echo $at['id']; ?></td>
                <td><?php echo $at['name']; ?></td>
                <td><?php echo $at['whitelist']; ?></td>
                <td><?php echo $at['key_public']; ?></td>
                <td><?php echo $at['key_private']; ?></td>
            </tr>
        </tbody>
        <?php } ?>
    </table>
    <br> -->
    <!-- Bridge Log -->
    <!-- <table class="table table-bordered">
        <thead>
            <tr>
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
        <?php foreach ($bridgelog['Bridge_Log'] as $bl) { ?>
        <tbody>
            <tr>
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
        <?php } ?>
    </table> -->
    <!-- bridge log 2 -->
    <br>
    <!-- <table class="table table-bordered">
        <thead>
            <tr>
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
        <?php foreach ($bridgelog2['Bridge_Log2'] as $bl) { ?>
        <tbody>
            <tr>
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
        <?php } ?>
    </table>
    <br> -->
    <!-- Bridge Session -->
<!--     <table class="table table-bordered">
        <thead>
            <tr>
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
        <?php foreach ($bridgesession['Bridge_Session'] as $bs) { ?>
        <tbody>
            <tr>
                <td><?php echo $bs['id']; ?></td>
                <td><?php echo $bs['msisdn']; ?></td>
                <td><?php echo $bs['called']; ?></td>
                <td><?php echo $bs['lat']; ?></td>
                <td><?php echo $bs['lng']; ?></td>
                <td><?php echo $bs['area']; ?></td>
                <td><?php echo $bs['ts']; ?></td>
                <td><?php echo $bs['tenant']; ?></td>
            </tr>
        </tbody>
        <?php } ?>
    </table>
    <br> -->
    <!-- Gps Contact -->
<!--     <table class="table table-bordered">
        <thead>
            <tr>
                <th>gpscar_id</th>
                <th>gpscar_nopol</th>
                <th>gpscar_vendor</th>
                <th>gpscar_group_area</th>
                <th>gpscar_group</th>
                <th>gpscar_rs</th>
                <th>gpscar_typekendaraan</th>
                <th>gpscar_tahun</th>
                <th>gpscar_lat</th>
                <th>gpscar_lng</th>
                <th>gpscar_kecepatan</th>
                <th>gpscar_jarak</th>
                <th>gpscar_waktu</th>
                <th>gpscar_lokasikode</th>
                <th>gpscar_lokasinama</th>
                <th>gpscar_areakode</th>
                <th>gpscar_areanama</th>
                <th>gpscar_direction</th>
                <th>gpscar_status</th>
                <th>gpscar_posisi</th>
                <th>gpscar_mesin</th>
                <th>gpscar_aktif</th>
                <th>gpscar_lup</th>
            </tr>
        </thead>
        <?php foreach ($gpscontact['Gps_Contact'] as $bs) { ?>
        <tbody>
            <tr>
                <td><?php echo $bs['gpscar_id']; ?></td>
                <td><?php echo $bs['gpscar_nopol']; ?></td>
                <td><?php echo $bs['gpscar_vendor']; ?></td>
                <td><?php echo $bs['gpscar_group_area']; ?></td>
                <td><?php echo $bs['gpscar_group']; ?></td>
                <td><?php echo $bs['gpscar_rs']; ?></td>
                <td><?php echo $bs['gpscar_typekendaraan']; ?></td>
                <td><?php echo $bs['gpscar_tahun']; ?></td>
                <td><?php echo $bs['gpscar_lat']; ?></td>
                <td><?php echo $bs['gpscar_lng']; ?></td>
                <td><?php echo $bs['gpscar_kecepatan']; ?></td>
                <td><?php echo $bs['gpscar_jarak']; ?></td>
                <td><?php echo $bs['gpscar_waktu']; ?></td>
                <td><?php echo $bs['gpscar_lokasikode']; ?></td>
                <td><?php echo $bs['gpscar_lokasinama']; ?></td>
                <td><?php echo $bs['gpscar_areakode']; ?></td>
                <td><?php echo $bs['gpscar_areanama']; ?></td>
                <td><?php echo $bs['gpscar_direction']; ?></td>
                <td><?php echo $bs['gpscar_status']; ?></td>
                <td><?php echo $bs['gpscar_posisi']; ?></td>
                <td><?php echo $bs['gpscar_mesin']; ?></td>
                <td><?php echo $bs['gpscar_aktif']; ?></td>
                <td><?php echo $bs['gpscar_lup']; ?></td>
            </tr>
        </tbody>
        <?php } ?>
    </table> -->


<!-- SCRIPT BOOTSTRAPE -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>