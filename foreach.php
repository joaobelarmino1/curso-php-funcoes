<?php

$contas = [
  38298843894 => [
    'titular' => 'João',
    'saldo' => 960
  ], 
  38298843893 => [
    'titular' => 'Karen',
    'saldo' => 1500
  ], 
  38288943894 => [
    'titular' => 'Bia',
    'saldo' => 1400
  ]
];

//adicionando item ao array
$contas[38114556879] = [ // Sempre que for uma chave com significado, como um cpf, é importante que ela seja mencionada, caso contrário, o php sozinho tentará incrementar como chave númerica.
  'titular' => 'Monique',
  'saldo' => 1420
];

foreach($contas as $cpf => $conta){
  echo "CPF: ". $cpf ."\nDono da conta: " . $conta['titular'] ." \nSalário: ". $conta['saldo'] . "\n\n";
}
