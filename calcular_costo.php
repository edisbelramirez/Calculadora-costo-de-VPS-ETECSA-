<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados del cálculo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Resultado del cálculo</h1>
        <?php
        include 'constants.php';

        $cpu = $_POST['cpu'];
        $ram = $_POST['ram'];
        $storage = $_POST['storage'];

        $pricePerHours = price_per_hours($cpu, $ram, $storage);
        $pricePerDay = price_per_day($cpu, $ram, $storage);
        $pricePerMonth = price_per_month($cpu, $ram, $storage);
        ?>
        <p>Precio por hora: <?php echo $pricePerHours; ?> CUP</p>
        <p>Precio por día: <?php echo $pricePerDay; ?> CUP</p>
        <p>Precio por mes: <?php echo $pricePerMonth; ?> CUP</p>
    </div>
</body>
</html>
