<?php 

namespace app\libraries;

class Homem extends Pessoa{
    protected $tamanho;
    protected $sexo;
    
    public function __construct(string $nome, int $idade, float $tamanho) {
        $this->tamanho = $tamanho;
        $this->sexo = 'masculino';
    }

    public function info(){
        return "meu nome é: $this->nome \n\n minha idade é: $this->idade \n\n meu tamanho é: $this->tamanho";
    }
}