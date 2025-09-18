<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <label>Arroz (5kg): R$ 25,00</label>
        <input type="number" name="quantidade1" placeholder="Quantidade1"></br></br>
        <label>Feijão (1kg): R$ 8,00</label>
        <input type="number" name="quantidade2" placeholder="Quantidade2"></br></br>
        <label>Leite (1L): R$ 4,50</label>
        <input type="number" name="quantidade3" placeholder="Quantidade3"></br></br>
        <label>Pão de Forma: R$ 7,00</label>
        <input type="number" name="quantidade4" placeholder="Quantidade4"></br></br>
        <label>Manteiga (200g): R$ 9,00</label>
        <input type="number" name="quantidade5" placeholder="Quantidade5"></br></br>

        <input type="submit" name="enviar" value="Salvar">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $quantidade1 = $_POST['quantidade1'];
        $quantidade2 = $_POST['quantidade2'];
        $quantidade3 = $_POST['quantidade3'];
        $quantidade4 = $_POST['quantidade4'];
        $quantidade5 = $_POST['quantidade5'];
    }
    $valor = ($quantidade1 *25.00) + ($quantidade2 *8.00) + ($quantidade3 *4.50) + ($quantidade4 *7.00) + ($quantidade5 *9.00);

    if ($valor >50) {
    $desconto = $valor * 0.10;
    echo ($valor - $desconto);

        
    }
    else {
        echo ($valor);
    }


   

    ?>
</body>

</html>