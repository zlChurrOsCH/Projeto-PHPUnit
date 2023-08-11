<?php

use PHPUnit\Framework\TestCase;

//ESTE SERIA UM EXEMPLO DE TESTE PARA NOSSO INDEX - COMO ALTERNATIVA, NÓS SIMULAMOS A AUTENTICAÇÃO
class IndexTest extends TestCase {
    public function testAutenticacaoNoPhpIndex() {
        $_POST['username'] = 'admin';
        $_POST['password'] = 'senhaAdmin';

        ob_start();
        include 'index.php';
        $output = ob_get_clean();

        $this->assertStringContainsString('Usuário autenticado como ADMIN', $output);
    }
}
?>