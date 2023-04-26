<?php
session_start();
include('conexao.php');

if (empty($_POST['User']) && empty($_POST['Pass'])) {
    header('Location: index.php');
    exit();
}

$usuario= mysqli_real_escape_string($conexao, $_POST['User']);
$senha= mysqli_real_escape_string($conexao, $_POST['Pass']);

$query = "SELECT cod, nomeUser FROM usuario WHERE nomeUser = '{$usuario}' AND nomeSenha = '{$senha}'";

$result= mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if ($row == 1) {
    $_SESSION['usuario']=$usuario;
    header('Location: menu.php');
    exit();

} else {
    header('Location: index.php');
    exit();
}
