<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="exercicio01.php">
        Telefone: <input type="text" name="tel"><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
    $tel = $_GET["tel"];
    $ddd = true;
    $ini = true;
    $mid = true;
    $fim = true;

        function telValido($tel, $ddd, $ini, $mid, $fim){
        $telDDD = explode(')', $tel);
            if(strlen($telDDD[0]) != 3){
                $ddd = false;
            }
            if($tel[0] != '('){
                $ini = false;
            }
            if(strlen($telDDD[1]) != 10){
                $fim = false;
            }
            if($tel[9] != '-'){
                $mid = false;
            }
        if($ddd = false or $ini = false or $fim = false or $mid == false){
            echo "O telefone não é Válido. Digite novamente.";
        }else{
            echo "O telefone é válido!";
        }
        }

    telValido($tel, $ddd, $ini, $mid, $fim);
    ?>

<button><a href="../Sisfrete/">Voltar</a></button>

</body>
</html>