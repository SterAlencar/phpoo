<?php
class Usuario{
    //atributos 
    public $nome;
    public $email;
    public $ssenha;

    function __construct($nome, $email, $senha){
        $this->nome = $nome;
        $this->idade = $email;
        $this->profissao = $senha;
    }

    function get_name(){
        return $this->nome;
    }
    function set_name($nome){
        $this->nome = $nome;
    }
    function get_email(){
        return $this->email;
    }
    function set_email($email){
        $this->email = $email;
    }
    function get_senha(){
        return $this->senha;
    }
    function set_senha($senha){
        $this->senha = $senha;
    }
    function cadastrar(){
        return "<br>Olá,você foi cadastrado com sucesso ";
    }

}
?>