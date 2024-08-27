<?php

class Professora extends Pessoa{
    public function ensinar(){
        echo "<p>".$this->getNome()."está ensinando.</p>";
    }

}

?>