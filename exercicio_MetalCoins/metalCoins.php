<?php
class Perfil
{
    public $tipoDeUsuario;

    function __get($variavel)
    {
        return $this->$variavel;
    }

    function __set($variavel, $valor)
    {
        $this->$variavel = $valor;
    }
}

//extender perfil para saber se o usuario é adm ou user
class Usuario extends Perfil
{
    public $nome;
    public $email;
    public $senha;

    function __get($variavel)
    {
        return $this->$variavel;
    }

    function __set($variavel, $valor)
    {
        $this->$variavel = $valor;
    }

}

class Conta_Corrente
{
    public $saldo;
    public $transacao;
    public $dataTransacao;

}


class Pedido 
{
    public $quantidadeDeProduto;
    public $status;
    public $dataPedido;
    public $valorPedido;
}

class Produto
{
    public $nome;
    public $preco;
    public $estoque;
}

$user = new Usuario();
$user->__set('nome','Gladson');
$user->__set('email','gladsonssimoes@hotmail.com');
$user->__set('senha','1234567');
$user->__set('tipoDeUsuario','ADM');
print_r($user);

?>