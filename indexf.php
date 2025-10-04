
<?php
$host = "localhost";
$porta = "5432";
$database = "visitantes";
$usuario = "postgres";
$senha = "postgres";

$dsn = "pgsql:host=$host;port=$porta;dbname=$database";
$conexao = new PDO($dsn, $usuario, $senha);

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];

     $sql = "INSERT INTO formulario(nome, cpf) VALUES (?, ?)";
     $stmt = $conexao->prepare($sql);
     $stmt->execute([$nome, $cpf]);
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
        <label>Seu nome</label>
        <input type="text" name="nome" />
        <label>Seu CPF</label>
        <input type="number" name="cpf" />
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
