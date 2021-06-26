<?php

function sacar(float $valorSaque, array $conta): array 
{
  if($valorSaque > $conta['saldo']){
    echo $conta['titular'] . ", você não pode sacar este valor(R$$valorSaque)!\n";
  }else{
    $conta['saldo'] -= $valorSaque;
  }
  return $conta;
}

function exibeConta(array $conta)
{
  ['titular' => $titular, 'saldo' => $saldo] = $conta;
  echo "<li> Dono da conta: $titular </li>
  <li> Salário: $saldo </li>
  ";
}

?>