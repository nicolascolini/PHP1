
<?php

class Pessoa{
    private $nome;
    private $peso;
    private $altura;
    private $cpf;

    public function __construct($nome,$peso,$altura,$cpf){
        $this->nome = $nome;
        $this->peso = $peso;
        $this->altura = $altura;
        $this->cpf = $cpf;
    }

public function falar(){
    echo $this-> nome."falou";
}

public function andar(){
    echo $this->nome."andou";
}

public function getNome(){
    return $this->nome;
}

public function setNome($nome){
    $this->nome = $nome;

}

public function getAltura(){
    return $this->altura;

}

public function setAltura($altura){
    if($altura==0){
        echo "Altura não pode ser zero";
    }
    else{
        $this->altura = $altura;
    }
}

public function getPeso(){
    return $this->peso;
}

public function setPeso($nome){
    $this->peso = $peso;

}

public function getCpf(){
    return $this->cpf;
}

public function setCpf($nome){
    $this->cpf = $cpf;

}

}

require_once("Professora.php");

$pessoa1 = new Pessoa("João da Silva", 3.3, 0.5, "103.445.666-50");
$pessoa1->falar();
$pessoa1->setNome("Otávio");
$pessoa1->falar();
$pessoa1->setAltura(0);
echo "<p> os dados da pessoa 1 são: </p>";
echo "<p> Nome: ".$pessoa1->getNome()."</p>";
echo "<p> Peso: ".$pessoa1->getPeso()."</p>";
echo "<p> Altura: ".$pessoa1->getAltura()."</p>";
echo "<p> CPF: ".$pessoa1->getCPF()."</p>";

echo "<hr>";
echo "<h3> Herança </h3>";
$professora1 = new Professora("Carol", 73, 1.78, "999.999.999-99");
$professora1->ensinar();
$professora1->falar();


?>