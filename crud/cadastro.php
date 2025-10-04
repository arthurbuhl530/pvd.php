<?php
$host = "localhost";
$porta = "5432";
$database = "crudmotos";
$usuario = "postgres";
$senha = "postgres";

$dsn = "pgsql:host=$host;port=$porta;dbname=$database";
$conexao = new PDO($dsn, $usuario, $senha);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $potencia = $_POST['potencia'];
    $cor = $_POST['cor'];

    $sql = "INSERT INTO cadastro(marca, modelo, potencia, cor) VALUES (?, ?, ?, ?)";
    $stmt = $conexao->prepare($sql);
    $stmt->execute([$marca, $modelo, $potencia, $cor]);
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Motos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #413f3f;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .cadastro {
            background: white;
            padding: 30px;
            border-radius: 10px;
            width: 350px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.4);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }


        .salvar {
            bottom: 20px;
            right: 20px;
            padding: 10px 20px;
            background-color: #0c4179;
            border: none;
            color: white;
            border-radius: 6px;
            
        }

        .voltar {
            position: fixed;
            bottom: 20px;
            left: 20px;
            padding: 10px 20px;
            background-color: #0c4179;
            border: none;
            color: white;
            border-radius: 6px;
            text-decoration: none;
            
        }
    </style>
</head>


<div class="cadastro">
    <h2>Cadastro de Motos</h2>
    <form method="POST">
        <label>Marca</label>
        <input type="text" name="marca" required />
        <label>Modelo</label>
        <input type="text" name="modelo" required />
        <label>Potência</label>
        <input type="number" name="potencia" required />
        <label>Cor</label>
        <input type="text" name="cor" required />
        <div style="display: flex; justify-content: center; margin-top: 20px;">
            <button type="submit" class="salvar">Salvar</button>
        </div>
        <a href="index.html" class="voltar">Voltar</a>
    </form>
</div>
</body>

</html>