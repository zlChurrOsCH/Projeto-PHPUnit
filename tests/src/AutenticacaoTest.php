<?php

use PHPUnit\Framework\TestCase;
use Projeto\Twd\Autenticacao;

class AutenticacaoTest extends TestCase {
    private $autenticacao;

    // Configuração inicial antes de cada teste
    protected function setUp(): void {
        $this->autenticacao = new Autenticacao();
    }

    /**
     * Testa diferentes cenários de autenticação.
     *
     * @dataProvider dadosCenariosDeAutenticacao
     *
     * @param string $username Usuário para autenticação.
     * @param string $password Senha para autenticação.
     * @param string $esperado Mensagem de autenticação esperada.
     */
    public function testeCenariosDeAutenticacao($username, $password, $esperado) {
        //echo "Usuário verificado!\n";
        $mensagem = $this->autenticacao->gerarMensagem($username, $password);
        
        // Verifica se a mensagem é igual ao esperado
        $this->assertEquals($esperado, $mensagem);
    }

    /**
     * Fornece dados de teste para diferentes cenários de autenticação.
     *
     * @return array Conjunto de dados de teste.
     */
    public static function dadosCenariosDeAutenticacao() {
        return [
            // [Usuário, Senha, Mensagem Esperada]
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
