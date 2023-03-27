<?php

/* Editar Usuário */
$user = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (empty($user['EditUser'])) {
  $empty_input = false;

  $user = array_map('trim', $user);
  if (in_array("", $user)) {
    $empty_input = true;
    echo "<script>
        alert('os campos nao podem ficar vazios!');
        window.location.href='../../../User-Admin/Edit_User.php';
      </script>";
  } else if (!filter_var($user['email'], FILTER_VALIDATE_EMAIL)) {
    $empty_input = true;
    echo "<script>
        alert('Digite um E-mail válido !');
        window.location.href='../../../User-Admin/Edit_User.php';
      </script>";
  }

  if (!$empty_input) {

    // nome = '$nome' , sobrenome = '$sobrenome' , cpf = '$cpf' , rg = '$rg' , cep = '$cep' , endereco = '$endereco' WHERE id = $id;"
    $queryUser = "UPDATE usuarios set (nome = '$nome' , email = '$email') WHERE id = '$id' ";

    $signedUser = $conn->prepare($queryUser);
    
    $signedUser->execute();

    echo "<script type='text/javascript'>
          alert('Usuário Editado! ');
          window.location.href='../../../index.php';
        </script>";
  }
}

?>