
<?php
$host = "localhost";
$porta = "5432";
$database = "exemplo-2709";
$usuario = "postgres";
$senha = "postgres";

$dsn = "pgsql:host=$host;port=$porta;dbname=$database";
$conexao = new PDO($dsn, $usuario, $senha);

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $timea = $_POST['timea'];
    $timeb = $_POST['timeb'];

     $sql = "INSERT INTO placar(time, timeb) VALUES (?, ?)";
     $stmt = $conexao->prepare($sql);
     $stmt->execute([$timea, $timeb]);
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
        <label>Gols do time A</label>
        <input type="number" name="timea" />
        <label>Gols do time B</label>
        <input type="number" name="timeb" />
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
