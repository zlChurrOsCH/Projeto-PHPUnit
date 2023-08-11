## Método `setUp(): void{}`
Esse método é extremamente poderoso para os nossos testes, ele permite que você configure o ambiente necessário antes da execução de cada teste dentro da classe de teste. Ele é executado automaticamente pelo PHPUnit antes de cada teste.

## Por que usar o `setUp`
- **Reutilização de Código:** O método setUp ajuda a evitar a duplicação de código. Se vários testes precisam de uma configuração semelhante, você pode definir essa configuração uma vez no método setUp, em vez de repeti-la em cada teste.
- **Manutenção Simplificada:** Se você precisa alterar ou atualizar a configuração comum para todos os testes, pode fazer isso em um único lugar no método setUp, em vez de alterar cada teste individualmente.
- **Leitura e Clareza:** Configurar o ambiente no método setUp melhora a legibilidade dos testes individuais. Isso significa que o foco de cada teste pode ser mantido naquilo que está sendo testado, sem se preocupar com a configuração inicial.

## Exemplo de Uso
Na aplicação feita arquivo ```AutenticacaoTest.php```, nós podemos ver ele em prática assim que a gente tira o comentário ```echo: 'Usuário Verificado!\n';```, isso nos proporciona a seguinte saída no CMD:
![image](https://github.com/zlChurrOsCH/Projeto-TWD/assets/40037040/e97b6f2f-214a-4f1e-8d54-b9f4a6f318aa)

Então para cada teste que ele executa, nós podemos ver que ele reexecuta toda a função e gera um teste a partir de um ambiente novo.

Este outro pode ser usado para conhecer a aplicabilidade do método:
```PHP
protected function setUp(): void {
    // Configurações iniciais antes de cada teste
    $this->autenticacao = new Autenticacao();
    echo "Configuração concluída.\n";
}
```
