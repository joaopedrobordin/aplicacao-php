<?php
session_start();
include("conexao.php")

$nome = mysql_real_escape_string($conexao, trim($_POST["nome"]));          //  trim() TIRA OS ESPAÇOS DO FINAL E DO COMEÇO
$usuario = mysql_real_escape_string($conexao, trim($_POST['usuario']));   
$senha = mysql_real_escape_string($conexao, trim(md5($_POST['senha']))); //md5() CRIPTOGRAFA A SENHA 

$sql = "select count(*) as total from usuario where usuario ='$usuario'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
    $_SESSION['usuario_existe'] = true;
    header('location: cadastro.php');
    exit
}

sql = "********"

if($conexao->query($sql) === TRUE) {
    $_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('location: cadastro.php');
exit;
?>