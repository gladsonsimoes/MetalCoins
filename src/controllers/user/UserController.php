<?php
include_once('../../../database/conexao.php');

function registerUser($user)
{
  global $conn;
  $empty_input = false;

  $query = "SELECT * FROM usuarios WHERE email='" . $user['email'] . "'";
  $checkingUser = $conn->prepare($query);
  $checkingUser->execute();
  $result = $checkingUser->rowCount();

  if ($result > 0) {
    echo ("<script>
    alert('E-mail já cadastrado! ');
    window.location.href='../../views/cadastro.php';
  </script>");
  } else if (!filter_var($user['email'], FILTER_VALIDATE_EMAIL)){
    echo ("<script>
    alert('EMAIL INVÁLIDO!');
    window.location.href='../../views/cadastro.php';
  </script>");
  }
  else {
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

    $signedtrue = $signed == true;

    if ($signedtrue) {
      $user_id = $conn->lastInsertId();
      $insertCoins = "INSERT INTO conta_corrente (id_usuario, saldo, transacao, data_transacao)
        VALUES ('" . $user_id . "', 100, 'Recompensa por cadastro!', '" . $date . "');";
      $inserting = $conn->prepare($insertCoins);
      $inserted = $inserting->execute();
      echo "<script>
      alert('Cadastro Realizado com SUCESSO , Faça seu Login para entrar! ');
      window.location.href='../../views/login.php';
      </script>";
    } else {
      echo "<script>
      alert('ERRO  em enviar o cadastro com a conexao do banco , USUÁRIO NÂO CADASTRADO!!  ');
      window.location.href='../../views/cadastro.php';
      </script>";
    }
  }
}

function getUserById($user_id)
{
  global $conn;
  $empty_input = false;

  $query = "SELECT * FROM usuarios WHERE id='" . $user_id . "'";
  $checkingUser = $conn->prepare($query);
  $checkingUser->execute();
  $userData = $checkingUser->rowCount();

  if ($userData > 0) {
    return $userData;
  }
}

function updateUser($user)
{
  global $conn;
  $empty_input = false;
  $queryUser = "UPDATE usuarios 
  SET nome = '" . $user['name'] . "'
  WHERE id ='" . $user['id'] . "' ";
  $updatedUser = $conn->prepare($queryUser);

  $updatedUser->execute() or die();

  if ($updatedUser) {
    echo "<script type='text/javascript'>
        alert('Usuário alterado com sucesso! ');
        window.location.href='../../views/tabela.php';
      </script>";
  }
}



$user = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (isset($user['EditUser'])) {
  updateUser($user);
}
if (isset($user['createdUser'])) {
  registerUser($user);
}