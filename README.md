# Gerador e validador de CPF

Esse é um simples gerador e validador de CPFs para te ajudar em suas aplicações PHP.

### Requisitos

- PHP 7.4 ou superior
- Composer (Opcional, mas recomendado)

## Instalação

Instalação com composer: `composer require misterioso013/cpf`

```php
<?php
// Instalação sem composer
// require 'src/CPF.php';

// Instalação com composer
require __DIR__. '/vendor/autoload.php';

use Misterioso013\Tools\CPF;

// Gerar um CPF válido aleatório e formatado
echo CPF::cpfRandom()."\n";
// 123.456.789-10

// Gerar um CPF válido aleatório e sem máscara
echo CPF::cpfRandom(false)."\n";
// 12345678910

// Gerar um CPF válido aleatório como se fosse emitido na Bahia
echo CPF::cpfRandom(true, 'BA')."\n";
// 123.345.785-10

// Verificar se o CPF é válido, retorna true ou false
var_dump(CPF::validateCPF('12345678910'));
// bool(false)

// Verificar em qual(is) UF(s) o CPF pode ter sido emitido
print_r(CPF::whichUF(12345678910, false));
// Array
// (
//      [0] => PR
//      [1] => SC
// )

// Exemplo de uso
$cpf = CPF::cpfRandom();
echo CPF::validateCPF($cpf) ? "O CPF: $cpf é válido e só pode ter sido emitido na(s) UF(s): ".CPF::whichUF($cpf) : "$cpf não é um CPF válido!";
// O CPF: xxx.xxx.xxx-xx é válido e só pode ter sido emitido na(s) UF(s): XX, XX ou XX
```

Esse projeto é bem simples e leve, pode ser usado em qualquer aplicação PHP independente do seu tamanho.

Pretendo desenvolver mais projetos como esse em breve, se você tiver alguma ideia de algo legal que possa ser feito, sinta-se livre para fazer um fork e enviar Pull Requests.