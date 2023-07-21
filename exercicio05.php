<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="exercicio05.php">
        Número: <input type="text" name="valor"><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
        $valor = $_GET["valor"];
        $total = 0;

        function multiplicar($valor, $total){
            for($i = $valor-1; $i > 0; $i--){
                $valor = $valor * $i;
                //$valor = $i;
            }
            echo $valor;
        }

    multiplicar($valor, $total);
    ?>
    
    <button><a href="../Sisfrete/">Voltar</a></button>

</body>
</html>