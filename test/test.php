<?php
use PHPUnit\Framework\TestCase;

require_once('Agua.php');
Class AguaTest extends TestCase
{
    private $miAgua = null;
    public function setUp(): void
    {
        $this->miAgua = new Agua();
    }
    public function testSolido():void
    {
        foreach (range(-273,0) as $temperatura){
            $estado = $this->miAgua->getEstado($temperatura);
            $this->assertSame('Solido',$estado,"Temperatura $temperatura no es solida");
        }
    }
}
