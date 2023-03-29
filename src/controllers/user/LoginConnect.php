<?php
include_once('../../../database/conexao.php');

$login = $_POST['email'];
$senha = $_POST['password'];
$user = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (!empty($user['loginUser'])) {
  $queryUser = "SELECT * FROM usuarios WHERE (email='" . $user['email'] . "') AND (senha='" . $user['password'] . "'); ";
  $result = $conn->prepare($queryUser);
  $result->execute() or die();
  $rows = $result->rowCount();

  if ($rows > 0) {
    setcookie('login', $login);
    echo "<script>
          alert('Logado com Sucesso!');
        </script>";
    header("Location: ../../../index.php");

  } else {
    echo "<script>
          alert('Login e/ou senha incorretos');
          window.location.href='../../view/Login.php';
        </script>";
  }
}

?>