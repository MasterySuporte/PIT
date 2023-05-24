<?php
"localhost", "root", "", "devweb2"
$conexao = new mysqli("localhost", "root", "", "pit");
if(isset($_POST['submit']))
{
print_r($_POST['nome']);
//print_r($_POST['email']);
//print_r($_POST['telefone']);
    $nome = $_POST['nome'];
    $snome = $_POST['snome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];
    $rua = $_POST['rua'];
    $bairro = $_POST['bairro'];
    $complemento = $_POST['complemento'];
    $result = mysqli_query($conexao, "INSERT INTO usuarios (nome, sobrenome, email, senha, cpf, telefone) VALUES ('$nome', '$snome', '$email', '$senha', '$cpf', '$telefone')");
    $result = mysqli_query($conexao, "INSERT INTO endereco (cidade, estado, rua, bairro, complemento) VALUES ('$nome', '$snome', '$email', '$senha', '$cpf', '$telefone')");
    header('Location: login.php');
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>

</head>
<body>
    <div class="container">
        <form action="index.php" method="POST" id="cadastro"> 
        <fieldset>
            <label> Nome:</label>
            <input type="text" id="nome" name="nome"> <br>
            <label> Sobrenome:</label>
            <input type="text" id="snome" name="snome">  <br>
            <label> Email:</label>
            <input type="email" id="email" name="email"> <br>
            <label> Senha:</label>
            <input type="password"> <br>
            <label> Gênero </label> <br>
            <form>
                <input type="radio" id="html" name="fav_language" value="HTML">
                <label for="html">Homem</label><br>
                <input type="radio" id="css" name="fav_language" value="CSS">
                <label for="css">Mulher</label><br>
                <input type="radio" id="javascript" name="fav_language" value="JavaScript">
                <label for="javascript">Outro</label>
              </form>
            <label> CPF:</label>
            <input type="number"> <br>
            <label> Telefone:</label>
            <input type="tel" id="telefone" name="telefone"> <br>
            <label> Endereço:</label> <br>
            <label> Estado:</label>
            <input list="estados">
            <datalist id="estados">
                    <option value="Acre"> 
                    <option value="Alagoas">
                    <option value="Amapá"> 
                    <option value="Amazonas"> 
                    <option value="Bahia"> 
                    <option value="Ceará"> 
                    <option value="Distrito Federal">
                    <option value="Espírito Santo"> 
                    <option value="Goiás"> 
                    <option value="Maranhão"> 
                    <option value="Mato Grosso"> 
                    <option value="Mato Grosso do Sul">
                    <option value="Minas Gerais"> 
                    <option value="Pará"> 
                    <option value="Paraíba"> 
                    <option value="Paraná"> 
                    <option value="Pernambuco">
                    <option value="Piauí"> 
                    <option value="Rio de Janeiro"> 
                    <option value="Rio Grande do Norte">
                    <option value="Rio Grande do Sul">
                    <option value="Rondônia"> 
                    <option value="Roraima"> 
                    <option value="Santa Catarina"> 
                    <option value="São Paulo"> 
                    <option value="Sergipe"> 
                    <option value="Tocantins">    
            </datalist> <br>
            <label> Cidade:</label>
            <input type="text"> <br>
            <label> Bairro:</label>
            <input type="text"> <br>
            <label> Rua:</label>
            <input type="text"> <br>
            <label> Número/Complemento:</label>
            <input type="number"> <br>
            <label> Quais serviços pode disponibilizar?:</label> <br>
            <form>
                <input type="checkbox" id="c1" name="c1" value="c1">
                <label for="c1"> Manutenção de Eletro-domésticos </label><br>
                <input type="checkbox" id="c2" name="c2" value="c2">
                <label for="c2"> Manuntenção de Veículos </label><br>
                <input type="checkbox" id="c1" name="c1" value="c1">
                <label for="c3"> Administração Financeira</label><br>
                <input type="checkbox" id="c1" name="c1" value="c1">
                <label for="c4"> Cuidados com bichos de estimação </label><br>
                <input type="checkbox" id="c1" name="c1" value="c1">
                <label for="c5"> Outros </label><br>
              </form>
            <label> Descrição Profissional:</label>
            <input type="textbox"> <br>
            <input type="submit" name="submit" id="submit">
</fieldset>
        </form>
    </div>
</body>
</html>