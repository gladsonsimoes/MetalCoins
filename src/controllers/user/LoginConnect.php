<?php
include_once('../../../database/conexao.php');

$login = $_POST['login'];
$senha = $_POST['password'];
$user = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (!empty($user['loginUser'])) {

    $queryUser = ("SELECT * FROM usuarios WHERE email='$login' , senha='$senha' ") or die("erro ao selecionar");
    $result = $conn->prepare($queryUser);
    $result->execute();

    if ($result <= 0) {
        echo "<script>
          alert('Login e/ou senha incorretos');
          window.location.href='../../../login.php';
        </script>";
        die();
    } else {
        setcookie("login", $login);
        echo "<script>
          alert('Logado com Sucesso!');
        </script>";
        header("Location: ../../../index.php");
    }


    // if (!$empty_input) {
    $queryUser = " SELECT * FROM usuarios WHERE ('email=" . $user['login'] . "',senha'" . $user['password'] . "'); ";

    //     $result = $conn->prepare($queryUser);
    //     $result->execute();

    //     echo "<script>
    //       alert('Login Realizado com Sucesso! ');
    //       window.location.href='../../../index.php';
    //     </script>";
    // }
}

?>