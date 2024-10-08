<?php
  include_once('../include/conexao.php');
// Estabelece a conexão


// Verifica se houve um erro na conexão
if ($conexao->connect_error) {
    die("Conexão falhou: " . $conexao->connect_error);
}

if (isset($_POST['sku'])) {
    $sku = $_POST['sku'];

    // Consulta SQL para buscar os dados do produto pelo SKU
    $sql = "SELECT * FROM produto WHERE id = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("i", $sku);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
        $produto = $resultado->fetch_assoc();
        echo json_encode($produto);
    } else {
        echo json_encode(["nome_produto" => "", "preco" => "","unidade" => "","ncm" => "","cst" => "","cfop" => ""]);
    }

    $stmt->close();
}

// Fecha a conexão
$conexao->close();

