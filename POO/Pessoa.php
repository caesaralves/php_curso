<?php
/**
 * Created by PhpStorm.
 * User: caesaralves
 * Date: 31-07-2017
 * Time: 19:18
 */

class Pessoa
{

   public $nome;
   public $idade;

}

$pessoa1 = new Pessoa();
$pessoa2 = new  Pessoa();

$pessoa1->nome = "Cesar";
$pessoa1->idade = 25;

$pessoa2->nome = "Maria";
$pessoa2->idade = 10;

echo "Pessoa1 = {$pessoa1->nome} {$pessoa1->idade}";
echo "Pessoa2 = {$pessoa2->nome} {$pessoa2->idade}";