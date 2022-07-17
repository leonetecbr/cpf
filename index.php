<?php

// Instalação simples
// require 'src/CPF.php';

// Instalação com composer
require __DIR__. '/vendor/autoload.php';

use Misterioso013\Tools\CPF;

// Gerar um CPF válido aleatório e formatado (123.456.789-10)
echo CPF::cpfRandom()."\n";

// Gerar um CPF válido aleatório e sem máscara (12345678910)
echo CPF::cpfRandom(false)."\n";

// Verificar se o CPF é válido
var_dump(CPF::validateCPF('12345678910'));
// Saída: bool(false)

// Verificar em qual(is) UF(s) o CPF pode ter sido emitido
print_r(CPF::whichUF(12345678910, false));
/* Saída:
Array
(
    [0] => PR
    [1] => SC
)
*/

// Exemplo de uso
$cpf = CPF::cpfRandom();
echo CPF::validateCPF($cpf) ? "O CPF: $cpf é válido e só pode ter sido emitido na(s) UF(s): ".CPF::whichUF($cpf) : "$cpf não é um CPF válido!";