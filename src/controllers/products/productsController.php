<?php
include_once('../../database/conexao.php');

function indexProducts()
{
    global $conn;
    $empty_input = false;

    $query = "SELECT * FROM produto";
    $products = $conn->prepare($query);
    $products->execute();
    $row = $products->rowCount();
    $data = $products->fetch();

    return $products;
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

function store($product)
{
    global $conn;
    $empty_input = false;

    $query = "SELECT * FROM produto WHERE nome='" . $product['nome'] . "'";
    $checkingProduct = $conn->prepare($query);
    $checkingProduct->execute();
    $rows = $checkingProduct->rowCount();

    if ($rows > 0) {
        echo ("<script type='text/javascript'>
        alert('Produto já cadastrado! ');
        </script>");
    } 
    else {

        $query = "INSERT INTO `produto`
        (`nome`, `descricao`, `preco`, `estoque`)
        VALUES
        ('{$product['nome']}',
        '{$product['descricao']}',
        '{$product['preco']}',
        '{$product['estoque']}');";

        $creatingProduct = $conn->prepare($query);
        $creatingProduct->execute();
        $product = $creatingProduct->rowCount();
        if ($product > 0) {
            echo ("<script type='text/javascript'>
            alert('Produto cadastrado com sucesso!');
            </script>");
        }
    }
}

?>
