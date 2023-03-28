<?php
include_once('../database/conexao.php');

// $user = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];

// if (empty($user['EditUser'])) {
//   $empty_input = false;

//   $user = array_map('trim', $user);
//   if (in_array("", $user)) {
//     $empty_input = true;
//     echo "<script>
//         alert('os campos nao podem ficar vazios!');
//         window.location.href='../../../AdminUser/Edit_User.php';
//       </script>";
//   } else if (!filter_var($user['email'], FILTER_VALIDATE_EMAIL)) {
//     $empty_input = true;
//     echo "<script>
//         alert('Digite um E-mail válido !');
//         window.location.href='../../../AdminUser/Edit_User.php';
//       </script>";
//   }

//   if (!$empty_input) {

    $queryUser = "UPDATE usuarios set nome = '$nome' , email = '$email' WHERE id = '$id'; ";

    $signedUser = $conn->prepare($queryUser);
    
    $signedUser->execute();
    
    header("Location: Tabela.php");
//   }
// }

?>