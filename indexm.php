<?php
$host = "localhost";
$porta = "5432";
$database = "visitantes";
$usuario = "postgres";
$senha = "postgres";

$dsn = "pgsql:host=$host;port=$porta;dbname=$database";
$conexao = new PDO($dsn, $usuario, $senha);

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $data = $_POST['data'];
    $nome= $_POST['nome'];
    $salario = $_POST['salario'];


     $sql = "INSERT INTO produtos(data, nome, salario) VALUES (?, ?, ?)";
     $stmt = $conexao->prepare($sql);
     $stmt->execute([$data, $nome, $salario]); 
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
        <label>Data de nascimento</label>
        <input type="number" name="data" />
        <label>Seu nome</label>
        <input type="text" name="nome" />
        <label>Seu salario</label>
        <input type="number" name="salario" />
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
