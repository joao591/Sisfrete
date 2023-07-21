<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="exercicio03.php">
        Pontuação: <input type="text" name="pont"><br>
        <input type="submit" value="Enviar">
    </form>
    <pre>
    <?php
        $pont = $_GET["pont"];
        $ana = 0;
        $bruna = 0;
        $caio = 0;

        function calculaPontuacao($pont, $ana, $bruna, $caio){
            $arr = str_split($pont);
            foreach($arr as $valor){
                if($valor == "A"){
                    $ana += 1;
                }elseif($valor == "B"){
                    $bruna += 1;
                }elseif($valor == "C"){
                    $caio += 1;
                }
            }
            $matriz = array("Ana" => $ana, "Bruna" => $bruna, "Caio" => $caio);
            print_r($matriz);
        }
    
    calculaPontuacao($pont, $ana, $bruna, $caio)
    ?>
    </pre>

    <button><a href="../Sisfrete/">Voltar</a></button>

</body>
</html>