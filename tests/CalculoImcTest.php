<?php

namespace Test;

class CalculoImcTest extends \PHPUnit\Framework\TestCase
{
    public function testMuitoAbaixoDoPeso()
    {
        $altura = 1.90;
        $peso = 50;
        $esperado = 'Muito abaixo do peso';

        $calculoImc = new \MTC\CalculoImc();
        $resultado = $calculoImc->resultado($altura, $peso);

        $this->assertEquals($esperado, $resultado);
    }

    public function testAbaixoDoPeso()
    {
        $altura = 1.75;
        $peso = 55;
        $esperado = 'Abaixo do peso';

        $calculoImc = new \MTC\CalculoImc();
        $resultado = $calculoImc->resultado($altura, $peso);

        $this->assertEquals($esperado, $resultado);
    }

    public function testPesoNormal()
    {
        $altura = 1.80;
        $peso = 70;
        $esperado = 'Peso normal';

        $calculoImc = new \MTC\CalculoImc();
        $resultado = $calculoImc->resultado($altura, $peso);

        $this->assertEquals($esperado, $resultado);
    }

    public function testAcimaDoPeso()
    {
        $altura = 1.80;
        $peso = 85;
        $esperado = 'Acima do peso';

        $calculoImc = new \MTC\CalculoImc();
        $resultado = $calculoImc->resultado($altura, $peso);

        $this->assertEquals($esperado, $resultado);
    }

    public function testObesidadeI()
    {
        $altura = 1.85;
        $peso = 105;
        $esperado = 'Obesidade I';

        $calculoImc = new \MTC\CalculoImc();
        $resultado = $calculoImc->resultado($altura, $peso);

        $this->assertEquals($esperado, $resultado);
    }

    public function testObesidadeIISevera()
    {
        $altura = 1.90;
        $peso = 130;
        $esperado = 'Obesidade II (severa)';

        $calculoImc = new \MTC\CalculoImc();
        $resultado = $calculoImc->resultado($altura, $peso);

        $this->assertEquals($esperado, $resultado);
    }

    public function testObesidadeIIIMorbida()
    {
        $altura = 1.60;
        $peso = 125;
        $esperado = 'Obesidade III (mórbida)';

        $calculoImc = new \MTC\CalculoImc();
        $resultado = $calculoImc->resultado($altura, $peso);

        $this->assertEquals($esperado, $resultado);
    }
}
