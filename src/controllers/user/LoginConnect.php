<?php
include_once('../../../database/conexao.php');

$login = $_POST['email'];
$senha = $_POST['password'];
$user = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (!empty($user['loginUser'])) {
  $queryUser = "SELECT * FROM usuarios WHERE (email='" . $user['email'] . "');";
  $result = $conn->prepare($queryUser);
  $result->execute() or die();
  $row = $result->rowCount();
  $data = $result->fetch();
  $hash = $data['senha'];
  if ($row == 1 && password_verify($user['password'], $hash)) {
    echo ($decypher);
    setcookie('login', $login);
    echo "<script>
          alert('Logado com Sucesso!');
        </script>";
    header("Location: ../../views/conta.php");
  } else {
    echo "<script>
   alert('Login e/ou senha incorretos');
   window.location.href='../../views/Login.php';
   </script>";
  }
}

?>