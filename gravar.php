<?php
include("conexao.php");

$id = $_POST["id"];
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$celular = $_POST["celular"];
$telefone = $_POST["telefone_fixo"];
$cpf = $_POST["cpf"];
$dia = $_POST["dia"];
$mes = $_POST["mes"];
$ano = $_POST["ano"];
$rua = $_POST["rua"];
$bairro = $_POST["bairro"];
$numero = $_POST["numero"];
$cidade = $_POST["cidade"];

mysqli_query($conexao,"UPDATE usuario SET nome='$nome', email='$email', senha='$senha', celular='$celular', telefone_fixo='$telefone', cpf='$cpf', dia='$dia', mes='$mes',ano='$ano', rua='$rua', bairro='$bairro', numero='$numero', cidade='$cidade' WHERE id_usuario='$id'");

$consulta = mysqli_query($conexao,"select * from usuario where id = '$id'");
$dados = mysqli_fetch_array($consulta);

session_start();

$_SESSION[""]


?>