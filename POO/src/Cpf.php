<?php

class Cpf
{
  private string $cpf;

  public function __construct(string $cpf)
  {
    $this->cpf = $cpf;
  }

  public function getNumeroCpf(): string
  {
    return $this->cpf;
  }
}