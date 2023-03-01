<?php
include_once('../../../database/conexao.php');

$user = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (!empty($user['createdUser'])) {
    var_dump($user);
}
if (empty($id_perfil)) {
    $id_perfil = 1;
}

$queryUser = "INSERT INTO usuarios (id_perfil, nome, email, senha) 
        VALUES ($id_perfil,
            '" . $user['name'] . "',
             '" . $user['email'] . "',
              '" .$user['password']. "')";
var_dump($queryUser);
$signedUser = $conn->prepare($queryUser);
$signedUser->execute();

header("location: ../../../index.php");
