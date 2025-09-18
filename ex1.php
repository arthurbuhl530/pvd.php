<!DOCTYPE html>
<html lang="pt-BR">




<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>




<body>
    <form method="POST">
        <label>Informe o ano preço</label><br>
        <input type="text" name="preco" placeholder="Digite o valor"></br></br>
        <label>Informe o valor de desconto</label></br>
        <input type="text" name="desconto" placeholder="Digite o valo"></br></br>
        <input type="submit" name="enviar" value="Salvar">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $preco = $_POST['preco'];
        $desconto = $_POST['desconto'];
    }
    $resultado1 = $desconto / 100 * $preco;
    $resultado2 = $preco - $resultado1;

    echo "O novo preço com desconto é R$ $resultado2.";


    ?>
</body>

</html>