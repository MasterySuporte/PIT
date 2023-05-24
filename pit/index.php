<?php

    if(isset($_POST['submit']))
    {
        // print_r('Nome: ' . $_POST['nome']);
        // print_r('<br>');
        // print_r('Email: ' . $_POST['email']);
        // print_r('<br>');
        // print_r('Telefone: ' . $_POST['telefone']);
        // print_r('<br>');
        // print_r('Sexo: ' . $_POST['genero']);
        // print_r('<br>');
        // print_r('Data de nascimento: ' . $_POST['data_nascimento']);
        // print_r('<br>');
        // print_r('Cidade: ' . $_POST['cidade']);
        // print_r('<br>');
        // print_r('Estado: ' . $_POST['estado']);
        // print_r('<br>');
        // print_r('Endereço: ' . $_POST['endereco']);

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $data_nasc = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $bairro = $_POST['endereco'];
        $cpf = $_POST['cpf'];
        $host = 'localhost';
        $user = 'root';
        $pass = 'pedro';
        $dbname = 'pit';

        $conn = mysqli_connect($host,$user,$pass,$dbname);

        $sql = "INSERT INTO usuario(nome,senha,email,telefone,sexo,cpf) VALUES('$nome','$senha','$email','$telefone','$sexo','$data_nasc', '$cpf')";
        mysqli_query($conn,$sql);

        $sql = "INSERT INTO endereco(cidade,estado,bairro) VALUES ('$cidade','$estado','$bairro')";
        mysqli_query($conn,$sql);
        header('Location: index.php');
    }

        

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    
</head>
<body>

    <div class="box">
        <form action="#" method="POST">
            <fieldset>
                <legend><b>Fórmulário de Usuários</b></legend>
                <br>
                <div class="inputBox">
                <label for="nome" class="labelInput">Nome completo</label>
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                   
                </div>
                <br>
                <div class="inputBox">
                <label for="senha" class="labelInput">Senha</label>
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    
                </div>
                <br><br>
                <div class="inputBox">
                <label for="email" class="labelInput">Email</label>
                    <input type="text" name="email" id="email" class="inputUser" required>
                    
                </div>
                <br><br>
                <div class="inputBox">
                <label for="cpf" class="labelInput">CPF</label>
                    <input type="number" name="cpf" id="cpf" class="inputUser" required>
                    
                </div>
                <br><br>
                <div class="inputBox">
                <label for="telefone" class="labelInput">Telefone</label>
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    
                </div>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br><br>
                <div class="inputBox">
                <label for="cidade" class="labelInput">Cidade</label>
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    
                </div>
                <br><br>
                <div class="inputBox">
                <label for="estado" class="labelInput">Estado</label>
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    
                </div>
                <br><br>
                <div class="inputBox">
                <label for="endereco" class="labelInput">Endereço</label>   
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>