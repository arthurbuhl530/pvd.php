<?php
$host = "localhost";
$porta = "5432";
$database = "visitantes";
$usuario = "postgres";
$senha = "postgres";

$dsn = "pgsql:host=$host;port=$porta;dbname=$database";
$conexao = new PDO($dsn, $usuario, $senha);

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $codigo = $_POST['codigo'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];


     $sql = "INSERT INTO produtos(codigo, descricao, preco) VALUES (?, ?, ?)";
     $stmt = $conexao->prepare($sql);
     $stmt->execute([$codigo, $descricao, $preco]); 
}

?>
<!DOCTYPE html>
 <html lang="pt-BR">
<head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label>Barras</label>
        <input type="text" name="codigo" />
        <label>Descrição</label>
        <input type="text" name="descricao" />
        <label>Preço</label>
        <input type="number" name="preco" />
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
