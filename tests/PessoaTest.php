<?php

namespace tests;

use app\libraries\Mulher;
use app\libraries\Pessoa;
use app\libraries\Homem;
use Exception;
use PhpParser\Node\Expr\Cast\String_;
use PhpParser\Node\Scalar\String_ as ScalarString_;
use PHPUnit\Framework\TestCase;

class PessoaTest extends TestCase{
    public function test_are_equal(){

        $nome = 1;
        $sobrenome = '1';
        
        $this->assertEquals($nome, $sobrenome, "'$nome' e '$sobrenome' são diferentes");
    }

    public function test_jsons_are_equal(){
        $json = '{"nome":              "luiz"}';

        $json_encode = json_encode(['nome' => 'luiz']);

        $json_decode = json_decode($json_encode);

        $this->assertJsonStringEqualsJsonString($json, $json_encode, 'eles sao os mesmos');
    }

    public function test_contain_string(){
        $nome = 'Luiz';

        $nomeCompleto = 'Luiz Miguel Silva de Lima';

        $this->assertStringStartsWith($nome, $nomeCompleto, "'$nome' nao faz parte de '$nomeCompleto'");
    }

    public function test_contains_only(){
        $john = new Homem('john', 20, 1.76);
        $jay = new Mulher('jeff', 20, 1.60);
        $this->assertContainsOnlyInstancesOf(Homem::class, [$john, $jay]);
    }

    public function test_count(){
        $this->assertCount(4, [1, 2, 3, 4]);
    }

    public function test_are_same(){
        $nome = '1';
        $sobrenome = 1;

        $this->assertSame($nome, $sobrenome);
    }

    // public function test_is_not_empty(){
    //     $john = null;

    //     $this->assertEmpty($john);
    // }
}


?>