<?php
class Perfil
{
    public $tipoDeUsuario; //atributo para definir o tipo de Usuário

    function __get($variavel)
    {
        return $this->$variavel;
    }

    function __set($variavel, $valor)
    {
        $this->$variavel = $valor;
    }
}