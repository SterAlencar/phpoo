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
    function get_email(){
        return $this->email;
    }
    function get_senha(){
        return $this->senha;
    }

}
?>                                                                                                                                                                                                                                                                                                                    