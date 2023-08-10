<?php
//require ("pessoa.php");
require ("retangulo.php");

class Fruta{
    //atributos
    private $nome;
    public $cor;

    //métodos
    function __construct($nome, $cor){
        $this->nome = $nome;
        $this->cor = $cor;
    }
    function set_name($nome){
        $this->nome = $nome;
    }
    function get_name(){
    return $this->nome;
    }

    function set_cor($cor){
        $this->cor = $cor;
    }
    function get_cor(){
    return $this->cor;
    }
}
//criando o objeto
$maca = new Fruta("maca_ifsp", "vermelha");
$banana = new Fruta("banana_ifsp", "amarela");

/*$maca->set_name("maca_ifsp");
$banana->set_name("banana_ifsp");
*/

//echo $maca->nome;
/*echo $maca->get_name();
echo "<br>".$maca->get_cor();
echo "<br>".$banana->get_name();
echo "<br>".$banana->get_cor();
*/

/*$aluno1 = new Pessoa ("Stefany", 17, "estudante");
$aluno2 = new Pessoa ("Luiz", 12, "preguiçoso");

echo $aluno1->apresentar();
echo $aluno2->apresentar();
*/

$retangulo = new Retangulo(2, 4);
echo "<br> Área do retangulo = " .$retangulo->calcular_area();
echo "<br> Perímetro = " .$retangulo->calcular_perimetro();

?>