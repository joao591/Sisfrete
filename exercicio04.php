<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="exercicio04.php">
        Frase <input type="text" name="grupo"><br>
        <input type="submit" value="Enviar">
    </form>
    <pre>
    <?php
        $grupo = $_GET["grupo"];

        function dividirGrupos($grupo){
            $arr = str_split($grupo);

            foreach($arr as $valor){
                $quant = substr_count($grupo, $valor);
                $stri = "";
                if($quant !== 0){
                    while(strlen($stri) < $quant){
                        $stri = $stri . "$valor";
                    }
                    "<br>";
                    echo $stri,"<br>";
                }
                $grupo = str_replace($valor, "", $grupo);
                //echo $grupo,"<br>";
            }
        }


    dividirGrupos($grupo);
    ?>
    </pre>

    <button><a href="../Sisfrete/">Voltar</a></button>

</body>
</html>