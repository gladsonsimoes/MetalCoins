<?php
include_once('../../../database/conexao.php');

$user = filter_input_array(INPUT_POST, FILTER_DEFAULT);


if (empty($user['createdUse'])) {

    //em caso do required não funcionar com os campos vazios!
    $empty_input = false;

    $user = array_map('trim', $user);
    if (in_array("", $user)) {
        $empty_input = true;
        echo "<p style='color: red;'> Digite os campos corretamente </p>";
    }

    //validacao para conta admin e cliente
    if (empty($id_perfil)) {
        $id_perfil = 1;
    }

    //se caso o empty_input der false , inserir dados no banco de dados
    if (!$empty_input) {

        $queryUser = "INSERT INTO usuarios (id_perfil, nome, email, senha) VALUES 
          ('" .
            "','" . $user['name'] .
            "','" . $user['email'] .
            "','" . $user['password'] . "');";

        $signedUser = $conn->prepare($queryUser);

        $signedUser->execute();
    }
}

//direcionamento após o cadastro
header("location: ../../../index.html");
?>