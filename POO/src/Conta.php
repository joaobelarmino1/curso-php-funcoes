<?php

class Conta
{
    private Titular $titular;
    private float $saldo;
    private static $numeroContas;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;
        self::$numeroContas++;
    }

    public function __destruct()
    {
        self::$numeroContas--;
    }

    public function sacar(float $valorASacar): void
    {
        if($valorASacar > $this->saldo){
            echo "Valor indisponivel para saque!";
            return;
        }
        
        $this->saldo -= $valorASacar;
    }

    public function depositar(float $valorADepositar): void
    {
        if($valorADepositar < 0){
            echo "Você só pode depositar um valor positivo, bobão!";
            return;
        }
        
        $this->saldo += $valorADepositar;
    }

    public function transferir(float $valorATransferir, Conta $contaDestino): void
    {
        if($valorATransferir > $this->saldo){
            echo "Saldo indisponivel! :(";
            return;
        }

        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }

    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperaNomeTitular(): string
    {
        return $this->titular->getNomeTitular();
    }

    public function recuperaCpfTitular(): string
    {
        return $this->titular->getCpf();
    }

    public static function recuperaNumeroContas(): int
    {
        return self::$numeroContas;
    }
}