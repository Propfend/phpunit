<?php 

namespace app\libraries;

use Exception;

class Pessoa{
    protected $nome;
    protected $idade;
    
    public function __construct($nome, $idade) {
        $this->nome = $nome;
        
        if($idade > 120){
            $this->idade = 120;
            throw new Exception('Coloque Uma Idade Válida');
        }
        $this->idade = $idade;
    }

    public function falar(){
        return 'Olá!!';
    }

    public function comer(){
        return 'Comendo!';
    }

    public function info(){
        return "o meu nome é: $this->nome \n\n e a minha idade é: $this->idade";
    }
}