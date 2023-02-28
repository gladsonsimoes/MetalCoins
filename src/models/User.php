<?php
include('Perfil.php');

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

//novo objeto user da classe Usuario
$user = new Usuario();
$user->__set('nome','Gladson');
$user->__set('email','gladsonssimoes@hotmail.com');
$user->__set('senha','1234567');
$user->__set('tipoDeUsuario','ADM');
print_r($user);

?>
