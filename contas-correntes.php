<?php

$conta1 = [
  'titular' => 'João',
  'saldo' => 960
];

$conta2 = [
  'titular' => 'Karen',
  'saldo' => 1500
];

$conta3 = [
  'titular' => 'Bia',
  'saldo' => 1400
];

$contas = [$conta1, $conta2, $conta3];

for($i = 0; $i < count($contas); $i++){
  echo "Dono da conta: " . $contas[$i]['titular'] ." \nSalário: ". $contas[$i]['saldo'] . "\n\n";
}
