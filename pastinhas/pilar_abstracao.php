<?php
    class Funcionario {

        //atributos
        public $nome="José Fausto";
        public $telefone="16993910942";
        public $numFilhos="5";

        //funções e métodos
        function resumiCardFunc () {
            return "$this->nome e ele possui $this->numFilhos filhos(a)";
        }
        function modificarNumFilhos ($numFilhos) {
            return $this->numFilhos = $numFilhos;
        }
    }

    $variavel = new Funcionario ();
    //echo $variavel->modificarNumFilhos () . "<br/>";
    $variavel->modificarNumFilhos(2) . "<br/>";

    echo $variavel->resumiCardFunc () . "<br/>";


?>