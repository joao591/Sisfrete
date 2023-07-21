<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="exercicio02.php">
        Frase: <input type="text" name="frase"><br><br>
        <input type="submit" value="Enviar">
    </form>
    <pre>
    <?php
        $frase = $_GET["frase"];
        $especiais = '!@#$%¨&*()=+[]{}^:;>.<,"';

        function removeCaracter($frase, $especiais){
            $arr = str_split($frase);
            foreach($arr as $valor){
                if(strpos($especiais, $valor) !== false){
                    $key = array_search($valor, $arr, true);
                    if ($key !== false) {
                    unset($arr[$key]);
                    }
                }else{
                    echo $valor, "";
                }
            }
            //print_r($arr);
        }

    removeCaracter($frase, $especiais);
    ?>
    </pre>

    <button><a href="../Sisfrete/">Voltar</a></button>
    
</body>
</html>