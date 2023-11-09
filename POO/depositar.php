<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deposito</title>
</head>

<style>
    .container {
        width: 100px;
        padding: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        margin: 10px auto;
    }

    h1 {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    form {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    form input {
        width: 200px;
        display: flex;
        padding: 10px;
        margin-top: 20px;
        border: 1px solid black;
        border-radius: 10px;
    }

    .depositar {
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: olivedrab;
        color: white;
    }

    .limpar {
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: olivedrab;
        color: white;
    }
</style>


<body>
    <h1>Depositar 💰</h1>
    <div class="container">

        <form action="#" method="post">
            <input type="number" name="saldo" placeholder="Deposito mínimo R$1,00">
            <input type="submit" value="Depositar" name="depositar" class="depositar">
            <input type="reset" value="Limpar" class="limpar">
        </form>
    </div>
    <?php
    include "Conta.php";
    session_start();

    if (isset($_SESSION['minha_conta'])) {
            $obj = $_SESSION['minha_conta'];

            echo $obj->getNome(); // Remova os parenteses aqui
        }
        if (isset($_POST['add'])){ //Verifica o clique do botao
            if(isset($_POST['valor'])){
                $valor = $_POST['valor'];
                $obj->debitar($valor);

                header("refresh:10,index.php");
               // $obj->imprimirDados();
            }
        }
    ?>    
</body>

</html>