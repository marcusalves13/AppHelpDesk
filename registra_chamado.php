<?php
session_start();
$id_usuario = $_SESSION['id'];
echo $id_usuario;
$titulo = str_replace('#', '-', $_POST['titulo']);
$categoria = str_replace('#', '-', $_POST['categoria']);
$descricao = str_replace('#', '-', $_POST['descricao']);
$texto = $_SESSION['id'] .'#'. $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

$arquivo = fopen('chamados.txt', 'a');
fwrite($arquivo, $texto);
fclose($arquivo);

header('Location:abrir_chamado.php');
?>

