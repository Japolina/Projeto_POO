<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprimir Saldo</title>
</head>
<body>
    <?php
    echo "<h1> Saldo do Cliente";
    $obj-> new Conta();
    $obj->imprimirSaldo();
    ?>
</body>
</html>