<?php
include_once('../../../database/conexao.php');
session_start();
$user = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if ($user['password'] == $user['passwordConfirm']) {
    if (!empty($user['forgotPass'])) {
        $query = "SELECT * FROM usuarios WHERE (email='" . $user['email'] . "');";
        $result = $conn->prepare($query);
        $result->execute() or die();
        $row = $result->rowCount();
        $data = $result->fetch();

        if ($row == 1) {
            $options = ['cost' => 10];
            $hashedPass = password_hash($user['password'], PASSWORD_DEFAULT, $options);
            $queryPass = "UPDATE usuarios SET senha = '" . $hashedPass . "'
        WHERE (senha = '" . $data['senha'] . "');";
            $result = $conn->prepare($queryPass);
            $result->execute() or die();
            $row = $result->rowCount();
            if ($row == 1) {
                echo "<script type='text/javascript'>
            alert('Senha alterada com sucesso! ');
            window.location.href='../../views/login.php';
            </script>";
            } else {
                echo "<script type='text/javascript'>
            alert('Ocorreu um erro ao alterar sua senha.');
            window.location.href='../../views/forgotPassword.php';
            </script>";
            }
        } else {
            echo "<script type='text/javascript'>
            alert('Não existe usuário cadastrado com esse e-mail.');
            window.location.href='../../views/forgotPassword.php';
            </script>";

        }
    } else {
        echo "<script type='text/javascript'>
            alert('As senhas não correspondem. Tente novamente.');
            window.location.href='../../views/forgotPassword.php';
            </script>";
    }
}

?>