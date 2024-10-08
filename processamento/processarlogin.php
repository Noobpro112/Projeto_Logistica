<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include_once('../include/conexao.php');

    if ($conexao->connect_errno) {
        echo "Failed to connect to MySQL: " . $conexao->connect_error;
        exit();
    } else {
        if ($_POST['action'] == 'professor') {
            if (isset($_POST['Usuario']) && isset($_POST['Senha'])) {
                $username = $conexao->real_escape_string($_POST['Usuario']);
                $password = $conexao->real_escape_string($_POST['Senha']);

                $sql = "SELECT `id`, `username` FROM `professor`
                        WHERE `username` = '" . $username . "'
                        AND `password` = '" . $password . "';";
                $resultado = $conexao->query($sql);

                if ($resultado->num_rows != 0) {
                    $row = $resultado->fetch_array();
                    $_SESSION['id'] = $row[0];
                    $_SESSION['username'] = $row[1];
                    $_SESSION['tipo_login'] = 'professor';

                    header('Location: ../projetos.php', true, 301);
                    exit();
                } else {

                    $conexao->close();
                    header('Location: ../index.php', true, 301);
                    exit();
                }
            }
        } elseif ($_POST['action'] == 'aluno') {
            if (isset($_POST['Usuario']) && isset($_POST['Senha'])) {
                $username = $conexao->real_escape_string($_POST['Usuario']);
                $password = $conexao->real_escape_string($_POST['Senha']);
                $turma = $conexao->real_escape_string($_POST['turma']);

                $sql = "SELECT `id`, `username`, `turma_id` FROM `aluno` WHERE `username` = '" . $username . "' AND `password` = '" . $password . "' AND `turma_id` = '" . $turma . "'";

                $resultado = $conexao->query($sql);

                if ($resultado->num_rows != 0) {
                    $row = $resultado->fetch_array();
                    $_SESSION['id'] = $row[0];
                    $_SESSION['id_aluno'] = $row[0];
                    $_SESSION['username'] = $row[1];
                    $_SESSION['tipo_login'] = 'aluno';
                    $_SESSION['turma'] = $row[2];


                    header('Location: ../telaInicio.php', true, 301);
                    exit();
                } else {

                    $conexao->close();
                    header('Location: ../index.php', true, 301);
                    exit();
                }
            }
        }
    }

}