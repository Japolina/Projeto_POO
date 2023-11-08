<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
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

    .add {
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: olivedrab ;
        color: white;
    }

    .limpar {
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: olivedrab ;
        color: white;
    }
</style>

<body>
    <h1>Cadastro de Novo Cliente</h1>
    <div class="container">

        <form action="#" method="post">
            <input type="text" name="nome" placeholder="Informe o nome">
            <input type="text" name="numConta" placeholder="Informe o nº da conta">
            <input type="number" name="saldo" placeholder="Deposito mínimo R$50,00">
            <input type="submit" value="Salvar" name="add" class="add">
            <input type="reset" value="Limpar" class="limpar">
        </form>
    </div>
    <?php
    include("./Conta.php");
    if (isset($_POST['add'])) {
        if (!empty($_POST['nome']) && !empty($_POST['numConta']) && !empty($_POST['saldo'])) {
            $nome = $_POST['nome'];
            $numConta = $_POST['numConta'];
            $saldo = $_POST['saldo'];

            $obj = new Conta();
            $obj->setNome($nome);
            $obj->setNumConta($numConta);
            $obj->setSaldo($saldo);
            $obj->imprimirDados();

            echo "<br>Salvo com sucesso!";
            header("refresh:10,index.php");
        } else {
            echo "Preencha os campos vázios!<br>";
        }
    }
    ?>
</body>

</html>