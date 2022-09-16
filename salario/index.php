<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário</title>
</head>
<body>
    <header>
        <h1>Salário</h1>
    </header>
    <main>
        
        <form action="salvar_dados.php" method="post" id="fSalario">
            Nome:
            <input type="text" name="iNome" id="iNome">
            <br>
            <br>
            Salário:
            <input type="text" name="iSalario" id="iSalario">
            <br>
            <br>
            Endereço:
            <textarea name="iEndereco" id="iEndereco" cols="21" rows="1"></textarea>
            <br>
            <br>
            <input type="submit" value="Enviar" id="iEnviar" name="iEnviar">
        </form>
    </main>
    
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script language="JavaScript" src="funcoes.js"></script>
</html>