<?php

    if(isset($_POST['submit']))
    {
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];

        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $dbname = 'pit';

        $conn = mysqli_connect($host,$user,$pass,$dbname);

        $sql = "INSERT INTO usuario(nome,senha) VALUES('$nome','$senha')";
        mysqli_query($conn,$sql);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        NOME: <input type="text" name="nome" id=""><br>
        SENHA: <input type="password" name="senha" id=""><br>
        <input type="submit" name="submit" value="TESTE">
    </form>
</body>
</html>