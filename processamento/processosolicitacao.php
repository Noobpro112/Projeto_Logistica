<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $hostname = "127.0.0.1";
    $user = "root.Att";
    $password = "root";
    $database = "logistica";

    $conexao = new mysqli($hostname, $user, $password, $database);



}
if ($conexao->connect_error) {
    die("Falha na conexão: " . $mysqli->connect_error);
}


$id_pedido = $_POST['npedido'];
$produto = $_POST['produto'];
$quantidade = $_POST['quantidade'] ;
$produto2 = $_POST['produto2']  ? $_POST['produto2'] : 0 ;
$quantidade2 = $_POST['quantidade2']  ? $_POST['quantidade2'] : 0 ;
$produto3 = $_POST['produto3']  ? $_POST['produto3'] : 0 ;
$quantidade3 = $_POST['quantidade3']  ? $_POST['quantidade3'] : 0 ;
$produto4 = $_POST['produto4'] ? $_POST['produto4'] : 0 ;
$quantidade4 = $_POST['quantidade4']  ? $_POST['quantidade4'] : 0 ;
$sql = "SELECT * FROM `estoque` WHERE nome_produto = '$produto'";

$resultado = $conexao->query($sql);

if ($resultado->num_rows > 0) {
            $sql_pedido = "INSERT INTO `pedidos` (id_pedido, produto, quantidade, produto2, quantidade2, produto3, quantidade3, produto4, quantidade4) VALUES ('".$id_pedido."', '".$produto."', '".$quantidade."','".$produto2."', '".$quantidade2."','".$produto3."', '".$quantidade3."','".$produto4."', '".$quantidade4."')";
            if ($conexao->query($sql_pedido) === TRUE) {
                echo "Pedido criado com sucesso para o produto: $produto ";
                header ('location:../solicitacao.php');
            } else {
                echo "Erro ao criar o pedido: " . $conexao->error;
            }
        } 
$conexao->close();
