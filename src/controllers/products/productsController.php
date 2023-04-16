<?php
include_once('../../../database/conexao.php');
session_start();
$produto = filter_input_array(INPUT_POST, FILTER_DEFAULT);

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$estoque = $_POST['estoque'];

if (isset($produto['storeProduct'])) {
    global $conn;
    $empty_input = false;

    $query = "SELECT * FROM produto WHERE nome='" . $nome . "'";
    $checkingProduct = $conn->prepare($query);
    $checkingProduct->execute();
    $rows = $checkingProduct->rowCount();
    $imagem = "sadasdasdasd";

    if ($rows > 0) {
        echo ("<script type='text/javascript'>
        alert('Produto já cadastrado! ');
        window.location.href='../../views/CadastroProduto.php';
        </script>");
    } else {

        $query = "INSERT INTO `produto`
        (`nome`, `descricao`, `preco`, `estoque`, `imagem`)
        VALUES
        ('$nome', '$descricao', '$preco', '$estoque', '$imagem')";

        $creatingProduct = $conn->prepare($query);
        $creatingProduct->execute();
        $product = $creatingProduct->rowCount();
        if ($product) {
            echo ("<script type='text/javascript'>
             alert('Produto cadastrado com sucesso!');
             window.location.href='../../views/CadastroProduto.php';
             </script>");

        }
    }
}



function getProductById($id_product)
{
    global $conn;
    $empty_input = false;
    $query = "SELECT * FROM produto WHERE id='" . $id_product . "'";
    $checkingProduct = $conn->prepare($query);
    $checkingProduct->execute();
    $rows = $checkingProduct->rowCount();
    if ($rows > 0) {
        return $rows;
    }
}
?>