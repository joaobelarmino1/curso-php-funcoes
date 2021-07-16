<?php

require_once 'Conta.php';
require_once 'Titular.php';
require_once 'Cpf.php';

$carlos = new Titular(new Cpf('123456-00'), 'Carlos');
$primeiraConta = new Conta($carlos);
$primeiraConta->depositar(500);
$primeiraConta->sacar(200);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

var_dump($primeiraConta);