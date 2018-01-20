<?php

declare(strict_types=1);

namespace MTC;

class CalculoImc
{
    public function resultado(float $altura, float $peso) : string
    {
        $imc = $this->calcularImc($altura, $peso);
        return $this->exibirResultado($imc);
    }

    private function calcularImc(float $altura, float $peso) : float
    {
        return $peso / ($altura * $altura);
    }

    private function exibirResultado(float $imc) : string
    {
        switch ($imc) {
            case $imc < 17:
                $mensagem = 'Muito abaixo do peso';
                break;
            case $imc >= 17 and $imc <= 18.49:
                $mensagem = 'Abaixo do peso';
                break;
            case $imc >= 18.5 and $imc <= 24.99:
                $mensagem = 'Peso normal';
                break;
            case $imc >= 25 and $imc <= 29.99:
                $mensagem = 'Acima do peso';
                break;
            case $imc >= 30 and $imc <= 34.99:
                $mensagem = 'Obesidade I';
                break;
            case $imc >= 35 and $imc <= 39.99:
                $mensagem = 'Obesidade II (severa)';
                break;
            case $imc >= 40:
                $mensagem = 'Obesidade III (mórbida)';
                break;
            default:
                $mensagem = 'Sem informações';
        }
        return $mensagem;
    }
}
