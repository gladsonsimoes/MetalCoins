<?php
include_once('../../../database/conexao.php');

$user = filter_input_array(INPUT_POST, FILTER_DEFAULT);


if (empty($user['createdUse'])) {

  //validacao de formulario
  $empty_input = false;

  $user = array_map('trim', $user);
  if (in_array("", $user)) {
    $empty_input = true;
    echo "<script type='text/javascript'>
        alert('Digite os campos corretamente e tente novamente!');
        window.location.href='../../../Cadastro.php';
      </script>";
  } else if (!filter_var($user['email'], FILTER_VALIDATE_EMAIL)) {
    $empty_input = true;
    echo "<script type='text/javascript'>
        alert('Digite um E-mail válido !');
        window.location.href='../../../Cadastro.php';
      </script>";
  }

  //se empty_input for false , inserir dados no banco de dados
  if (!$empty_input) {
    //se cadastro já tiver o email parecido ignorar o email
    $query = "SELECT * FROM usuarios WHERE email='" . $user['email'] . "'";
    $checkingUser = $conn->prepare($query);
    $checkingUser->execute($user[`email`]);
    $result = $checkingUser->rowCount();

    if ($result > 0) {
      echo ("<script type='text/javascript'>
    alert('E-mail já cadastrado! ');
    window.location.href='../../../Cadastro.php';
  </script>");
    }
    //senao se nao tiver cadastrar!
    else {

      $queryUser = " INSERT INTO usuarios (nome, email, senha) VALUES 
   ('" . $user['name'] .
        "','" . $user['email'] .
        "','" . $user['password'] . "'); ";

      $signedUser = $conn->prepare($queryUser);

      if ($signedUser->execute()) {
        echo "<script type='text/javascript'>
        alert('Cadastro Realizado com Sucesso! ');
        window.location.href='../../../index.php';
      </script>";
      }

    }
  }
}




//validacao para conta admin e cliente
// if (!empty($id_perfil)) {
//     $id_perfil = 1;
// }



// //para login
// if(empty($user['loginUse'])){

// }



?>