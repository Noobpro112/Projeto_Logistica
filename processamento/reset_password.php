<?php
if(isset($_POST['id'])){
    $id = $_POST['id'];

    include_once('../include/conexao.php');

    // Gera uma nova senha com 6 caracteres e números diferentes
    $new_password = substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, 4);

    // Atualiza a senha no banco de dados
    $sql = "UPDATE aluno SET password = '$new_password' WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        echo "Senha resetada com sucesso!";
    } else {
        echo "Erro ao resetar senha: " . $conn->error;
    }

    $conn->close();
}