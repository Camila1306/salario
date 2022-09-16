<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salario</title>
</head>
<body>
    <header>
        <h1>Salário Mínimo</h1>
    </header>
    <main>
        <?php

        if(isset($_POST['iEnviar'])){
        
            $nome = $_POST['iNome'];
            $salario = $_POST['iSalario'];
            $endereco = $_POST['iEndereco'];

            function fValida($nome, $salario, $endereco) {
                $msg = "";
                $valido = true;


                if (isset($nome) && empty($nome)) {
                    $msg = "Informe o Nome";
                    $valido = false;
                } elseif (isset($salario) && empty($salario)) {
                    $msg = "Informe o Salário";
                    $valido = false;
                } elseif (isset($endereco) && empty($endereco)) {
                    $msg = "Informe o Endereço";
                    $valido = false;
                }
                echo "<h3>".$msg."</h3>";
                return $valido;
            }
            if(fValida($nome, $salario, $endereco)){
                $calculo = $salario/1212;
                echo "Nome: ".$nome. "<br>";
                echo "Salário: ".$salario. "<br>";
                echo "Endereço: ".$endereco. "<br>";
                echo "Recebe ".$calculo ."Salário Mínimo";
            }
        }
        ?>
        <input type="button" value="Voltar" onclick="JavaScript:history.back();">

    </main>
</body>
</html>
