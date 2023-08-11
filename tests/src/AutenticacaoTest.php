<?php

use PHPUnit\Framework\TestCase;
use Projeto\Twd\Autenticacao;

class AutenticacaoTest extends TestCase {
    private $autenticacao;

    protected function setUp(): void {
        $this->autenticacao = new Autenticacao();
    }

    /**
     * @dataProvider dadosCenariosDeAutenticacao
     */
    public function testeCenariosDeAutenticacao($username, $password, $esperado) {
        $mensagem = $this->autenticacao->gerarMensagem($username, $password);
        $this->assertEquals($esperado, $mensagem);
    }

    public function dadosCenariosDeAutenticacao() {
        return [
            ['admin', 'senhaAdmin', 'Usuário autenticado como admin'],
            ['getuser', 'senhaGet', 'Usuário autenticado como getuser'],
            ['deleteuser', 'senhaDelete', 'Usuário autenticado como deleteuser'],
            ['postuser', 'senhaPost', 'Usuário autenticado como postuser'],
            ['putuser', 'senhaPut', 'Usuário autenticado como putuser'],
            ['leiturauser', 'senhaLeitura', 'Usuário autenticado como leiturauser'],
            ['admin', 'senhaGet', 'Falha na autenticação'],
            ['getuser', 'senhaAdmin', 'Falha na autenticação'],
            ['deleteuser', 'senhaPost', 'Falha na autenticação'],
            ['postuser', 'senhaDelete', 'Falha na autenticação'],
            ['putuser', 'senhaLeitura', 'Falha na autenticação'],
            ['leiturauser', 'senhaPut', 'Falha na autenticação'],
        ];
    }
}

?>