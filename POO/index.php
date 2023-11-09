<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orientação à Objetos</title>
</head>
<style>
    .principal {
        width: 100px;
        padding: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 10px auto;
    }

    h1 {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    a {
        justify-content: center;
        align-items: center;
        display: flex;
        padding: 10px;
        border: 1px solid black;
        border-radius: 10px;
        background-color: olivedrab ;
        color: white;
    }
    .imprimir{
        padding: 2px 25px;
    }

</style>

<body>
    <h1>Banco do Xiru</h1>
    <div class="principal">
        <a href="./cadastrar.php">Cadastrar</a>
        <a href="./depositar.php">Depositar</a>
        <a href="./sacar.php">Sacar</a>
        <a class="imprimir" href="./imprimir.php">Mostrar Saldo</a>
    </div>

</body>

</html>