<?php
include_once('../../../database/conexao.php');

$user = filter_input_array(INPUT_POST, FILTER_DEFAULT);


if (!empty($user['createdUser'])) {
  $empty_input = false;
  //se empty_input for false , inserir dados no banco de dados
  if (!$empty_input) {
    //se cadastro já tiver o email parecido ignorar o email
    $query = "SELECT * FROM usuarios WHERE email='" . $user['email'] . "'";
    $checkingUser = $conn->prepare($query);
    $checkingUser->execute();
    $result = $checkingUser->rowCount();

    if ($result > 0) {
      echo ("<script type='text/javascript'>
    alert('E-mail já cadastrado! ');
    window.location.href='../../views/Cadastro.php';
  </script>");
    }
    //senao tiver, cadastrar!
    else {
      $options = [
        'cost'  => 10
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
      window.location.href='../../views/conta.php';
      </script>";
      }
    }
  }
}