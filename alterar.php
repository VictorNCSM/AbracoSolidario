<<<<<<< HEAD
<?php

include("conexao.php");
session_start();

$email = $_SESSION["email"];

$consulta = mysqli_query($conexao, "select * from usuario where email = '$email'");

$dados = mysqli_fetch_array($consulta);
?>


<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <form method="POST" action="gravar.php">
        Id:<br>
        <input type="text" name="id" readonly value=<?php echo $dados['id_usuario']; ?>><br><br>

        Nome:<br>
        <input type="text" name="nome" value=<?php echo $dados["nome"]; ?>><br><br>

        Email:<br>
        <input type="text" name="email" value=<?php echo $dados["email"]; ?>><br><br>

        Senha:<br>
        <input type="text" name="senha" value=<?php echo $dados["senha"]; ?>><br><br>

        Celular:<br>
        <input type="text" name="celular" value=<?php echo $dados["celular"]; ?>> <br><br>

        Telefone:<br>
        <input type="text" name="telefone_fixo" value=<?php echo $dados["telefone_fixo"]; ?>><br><br>

        CPF:<br>
        <input type="text" name="cpf" value=<?php echo $dados["cpf"]; ?>><br><br>

        Dia de nascimento:<br>
        <input type="text" name="dia" value=<?php echo $dados["dia"]; ?>><br><br>

        Mês de nascimento:<br>
        <select name="mes" id="mes">
            <option selected value="">Selecione</option>
            <option value="Janeiro">Janeiro</option>
            <option value="Fevereiro">Fevereiro</option>
            <option value="Março">Março</option>
            <option value="Abril">Abril</option>
            <option value="Maio">Maio</option>
            <option value="Junho">Junho</option>
            <option value="Julho">Julho</option>
            <option value="Agosto">Agosto</option>
            <option value="Setembro">Setembro</option>
            <option value="Outubro">Outubro</option>
            <option value="Novembro">Novembro</option>
            <option value="Dezembro">Dezembro</option>
        </select> 

        <br/><br/>
        
        Ano de nascimento:<br>
        <input type="text" name="ano" value=<?php echo $dados["ano"]; ?>><br><br>

        Rua:<br>
        <input type="text" name="rua" value=<?php echo $dados["rua"]; ?>><br><br>

        Bairro:<br>
        <input type="text" name="bairro" value=<?php echo $dados["bairro"]; ?>><br><br>

        Número:<br>
        <input type="text" name="numero" value=<?php echo $dados["numero"]; ?>><br><br>

        Cidade:<br>
        <input type="text" name="cidade" value=<?php echo $dados["cidade"]; ?>><br><br>

        CEP:<br>
        <input type="text" name="cep" value=<?php echo $dados["cep"]; ?>><br><br>

        <input type="submit" value="Enviar">

    </form>

</body>

=======
<?php

include("backend/conexao.php");
session_start();

$email = $_SESSION["email"];

$consulta = mysqli_query($conexao, "select * from usuario where email = '$email'");

$dados = mysqli_fetch_array($consulta);
?>


<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <form method="POST" action="gravar.php">
        Id:<br>
        <input type="text" name="id" readonly value=<?php echo $dados['id_usuario']; ?>><br><br>

        Nome:<br>
        <input type="text" name="nome" value=<?php echo $dados["nome"]; ?>><br><br>

        Email:<br>
        <input type="text" name="email" value=<?php echo $dados["email"]; ?>><br><br>

        Senha:<br>
        <input type="text" name="senha" value=<?php echo $dados["senha"]; ?>><br><br>

        Celular:<br>
        <input type="text" name="celular" value=<?php echo $dados["celular"]; ?>> <br><br>

        Telefone:<br>
        <input type="text" name="telefone_fixo" value=<?php echo $dados["telefone_fixo"]; ?>><br><br>

        CPF:<br>
        <input type="text" name="cpf" value=<?php echo $dados["cpf"]; ?>><br><br>

        Dia de nascimento:<br>
        <input type="text" name="dia" value=<?php echo $dados["dia"]; ?>><br><br>

        Mês de nascimento:<br>
        <select name="mes" id="mes">
            <option selected value="">Selecione</option>
            <option value="Janeiro">Janeiro</option>
            <option value="Fevereiro">Fevereiro</option>
            <option value="Março">Março</option>
            <option value="Abril">Abril</option>
            <option value="Maio">Maio</option>
            <option value="Junho">Junho</option>
            <option value="Julho">Julho</option>
            <option value="Agosto">Agosto</option>
            <option value="Setembro">Setembro</option>
            <option value="Outubro">Outubro</option>
            <option value="Novembro">Novembro</option>
            <option value="Dezembro">Dezembro</option>
        </select> 

        <br/><br/>
        
        Ano de nascimento:<br>
        <input type="text" name="ano" value=<?php echo $dados["ano"]; ?>><br><br>

        Rua:<br>
        <input type="text" name="rua" value=<?php echo $dados["rua"]; ?>><br><br>

        Bairro:<br>
        <input type="text" name="bairro" value=<?php echo $dados["bairro"]; ?>><br><br>

        Número:<br>
        <input type="text" name="numero" value=<?php echo $dados["numero"]; ?>><br><br>

        Cidade:<br>
        <input type="text" name="cidade" value=<?php echo $dados["cidade"]; ?>><br><br>

        CEP:<br>
        <input type="text" name="cep" value=<?php echo $dados["cep"]; ?>><br><br>

        <input type="submit" value="Enviar">

    </form>

</body>

>>>>>>> backup
</html>