<?php
include_once('../../../database/conexao.php');

session_start();
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

  if ($row == 1 && password_verify($senha, $hash)) {
    $token = uniqid() . '_' . $data['id'] . '_' . $data['id_perfil'];
    $_SESSION["token"] = $token;
    $_SESSION["id"] = $data['id'];
    $_SESSION["id_perfil"] = $data["id_perfil"];

    if ($_SESSION["id_perfil"] == 1) {
      setcookie('login', $login);
      echo "<script>
      alert('Logado com Sucesso!');
    </script>";
      header("Location: ../../views/admin.php");
    } else {

      setcookie('login', $login);
      echo "<script>
          alert('Logado com Sucesso!');
        </script>";
      header("Location: ../../views/principal.php");
    }
  } else {
    echo "<script>
   alert('Login e/ou senha incorretos');
   window.location.href='../../views/Login.php';
   </script>";
  }
}

?>