## MOCKS - Simulação de Dados
## O que é?
Em PHPUnit, um "mock" é um objeto simulado que imita o comportamento de um objeto real para fins de teste. O objetivo dos mocks é isolar a unidade de código que você está testando, garantindo que você possa testar apenas a parte específica do código que deseja, sem depender de outras classes ou sistemas externos.

Mocks são especialmente úteis quando você precisa testar uma classe que depende de outras classes ou componentes, como quando uma classe A chama métodos de uma classe B. Em vez de realmente usar a classe B durante seus testes, você pode criar um mock da classe B que simula seu comportamento esperado. Isso permite que você controle e preveja as respostas da classe B para garantir testes consistentes e repetíveis.

Ao usar mocks, você pode definir expectativas sobre os métodos que devem ser chamados, os parâmetros que devem ser passados e os valores de retorno esperados. Em seguida, você pode verificar se essas expectativas foram atendidas durante a execução do código sob teste.

## Exemplo
No nosso sistema, vamos utilizar um Envio de E-mail para testar nosso mock, pois naturalmente um envio de e-mail depende de ações externas ao sistema, então é um ótimo exemplo de uso para nosso caso que é TESTAR com simulação.

```PHP
public function testSendEmail() {
        // Criar um mock para a classe EmailService
        $emailServiceMock = $this->getMockBuilder(EmailService::class)
            ->onlyMethods(['send'])
            ->getMock();

        // Definir expectativas para o método send no mock
        $emailServiceMock->expects($this->once())
            ->method('send')
            ->with(
                $this->equalTo('destinatario@example.com'),
                $this->equalTo('Assunto do e-mail'),
                $this->equalTo('Conteúdo do e-mail')
            );
}
```