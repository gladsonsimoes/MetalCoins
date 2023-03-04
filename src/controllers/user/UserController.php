<?php
include_once('../../../database/conexao.php');

$user = filter_input_array(INPUT_POST, FILTER_DEFAULT);


if (empty($user['createdUse'])) {

    //validacao de formulario
    $empty_input = false;

    $user = array_map('trim', $user);
    if (in_array("", $user)) {
        $empty_input = true;
        echo "<p style='color: red;'> Digite os campos corretamente </p>";
    } else if (!filter_var($user['email'], FILTER_VALIDATE_EMAIL)) {
        $empty_input = true;
        echo "<p style='color: red;'> Digite um E-mail válido </p>";
    }

    //se empty_input for false , inserir dados no banco de dados
    if (!$empty_input) {
        $queryUser = " INSERT INTO usuarios (nome, email, senha) VALUES 
              ('" . $user['name'] .
            "','" . $user['email'] .
            "','" . $user['password'] . "'); ";

        $signedUser = $conn->prepare($queryUser);

        $signedUser->execute();

        echo "Usuário " . $user['name'] . " " . $user['email'] . " cadastrado com sucesso!";

        header("location: ../../../index.html");
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