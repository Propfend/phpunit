<?php 

namespace app\libraries;

class Mulher extends Pessoa{
    protected $tamanho;
    protected $sexo;
    
    public function __construct(string $nome, int $idade, float $tamanho) {
        $this->tamanho = $tamanho;
        $this->sexo = 'feminino';
    }

    public function info(){
        return "meu nome é: $this->nome \n\n minha idade é: $this->idade \n\n meu tamanho é: $this->tamanho";
    }
}

?>