<?php
include_once('../../../database/conexao.php');
function registerUser($user) {
  global $conn;
  $empty_input = false;

  $query = "SELECT * FROM usuarios WHERE email='" . $user['email'] . "'";
  $checkingUser = $conn->prepare($query);
  $checkingUser->execute();
  $result = $checkingUser->rowCount();

  if ($result > 0) {
    echo ("<script type='text/javascript'>
    alert('E-mail já cadastrado! ');
    window.location.href='../../views/Cadastro.php';
  </script>");
  } else {
    $options = [
      'cost' => 10
    ];
    $hashedPass = password_hash($user['password'], PASSWORD_DEFAULT, $options);
    $date = date('Y-m-d H:i:s');
    $queryUser =
      "INSERT INTO usuarios (nome, email, senha, id_perfil)
      VALUES ('{$user['name']}', '{$user['email']}', '{$hashedPass}', 2);";

    $signedUser = $conn->prepare($queryUser);
    $signed = $signedUser->execute();

    if ($signed) {
      $user_id = $conn->lastInsertId();
      $insertCoins = "INSERT INTO conta_corrente (id_usuario, saldo, transacao, data_transacao)
        VALUES ('" . $user_id . "', 100, 'Recompensa por cadastro!', '" . $date . "');";
      $inserting = $conn->prepare($insertCoins);
      $inserted = $inserting->execute();
      echo "<script type='text/javascript'>
      alert('Cadastro Realizado com Sucesso! ');
      window.location.href='../../views/login.php';
      </script>";
    }
  }
}

$user = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (!empty($user['createdUser'])) {
  registerUser($user);
}