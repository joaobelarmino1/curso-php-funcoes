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

?>