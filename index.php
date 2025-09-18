<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <label>Informe o primeiro numero</label><br>
        <input type="text" name="numero1" placeholder="Digite um numero"></br></br>
        <label>Informe o segundo numero</label></br>
        <input type="text" name="numero2" placeholder="Digite um numero"></br></br>
        <label>Informe o sinal</label><br>
        <input type="text" name="sinal" placeholder="+ - * /"></br><br>
        <input type="submit" name="enviar" value="Salvar">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $sinal = $_POST['sinal'];
    }

   
        echo $numero1 + $numero2;
   

    ?>
</body>

</html>