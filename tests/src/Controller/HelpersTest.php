<?php

use PHPUnit\Framework\TestCase;
use Projeto\Unit96\Controller\Helpers;

class HelpersTest extends TestCase {
    public function testProcessarDados() {
        $jsonData = '{"ID": 3, "Name": "John", "Key": "abc123"}';
        $helpers = new Helpers();
        $helpers->processarDados($jsonData);

        $nomeFuncao = $helpers->getNomeFuncao();
        $usuario = $helpers->getUsuario();

        $this->assertEquals(3, $nomeFuncao['ID']);
        $this->assertEquals("John", $nomeFuncao['Name']);
        $this->assertEquals("abc123", $nomeFuncao['Key']);
        $this->assertNull($usuario);
    }
}

?>
