<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Ip Address</th>
                <th>Timestamp</th>
                <th>Data</th>
            </tr>
        </thead>
        <?php foreach ($telkomseldata['Auth_Session'] as $td) { ?>
        <tbody>
            <tr>
                <td><?php echo $td['id']; ?></td>
                <td><?php echo $td['ip_address']; ?></td>
                <td><?php echo $td['timestamp']; ?></td>
                <td><?php echo $td['data']; ?></td>
            </tr>
        </tbody>
        <?php } ?>
    </table>
</body>
</html>