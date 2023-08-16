<?php

use PHPUnit\Framework\TestCase;
use Projeto\Unit96\Controller\GroupUserController;

class GroupUserControllerTest extends TestCase {
    public function testAtribuirFuncao() {
        $groupUserController = new GroupUserController();

        $nomeFuncao = [
            "ID" => 2,
            "Name" => "Alice",
            "Key" => "xyz789"
        ];

        $funcaoAtribuida = $groupUserController->atribuirFuncao($nomeFuncao);
        $this->assertEquals("Delete", $funcaoAtribuida);

        $nomeFuncaoInvalida = [
            "ID" => 7,
            "Name" => "Bob",
            "Key" => "123abc"
        ];

        $funcaoAtribuidaInvalida = $groupUserController->atribuirFuncao($nomeFuncaoInvalida);
        $this->assertNull($funcaoAtribuidaInvalida);
    }
}

?>
