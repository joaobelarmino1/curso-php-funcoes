<?php

class Titular
{
  private string $nomeTitular;
  private Cpf $cpf;

  public function __construct(Cpf $cpf, string $nomeTitular)
  {
    $this->validaNomeTitular($nomeTitular);
    $this->nomeTitular = $nomeTitular;
    $this->cpf = $cpf;
  }

  public function getNomeTitular(): string
  {
    return $this->nomeTitular;
  }
  public function getCpf(): string
  {
    return $this->cpf->getNumeroCpf();
  }

  private function validaNomeTitular(string $nomeTitular)
  {
      if(strlen($nomeTitular) < 5){
          echo "O nome precisa ter pelo menos 5 caracteres!";
      }
  }

}