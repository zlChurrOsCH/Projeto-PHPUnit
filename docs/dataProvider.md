## Anotação `@dataProvider`
É uma anotação usada para fornecer um conjunto de dados para serem usados em um método de teste. Ele permite que você execute o mesmo método de teste várias vezes com diferentes conjuntos de dados, facilitando a verificação do comportamento do código em várias situações.

## Definição do Método do `@dataProvider`
Crie um método em sua classe de teste que fornecerá os conjuntos de dados para seu método de teste. Este método deve retornar um array de arrays, onde cada subarray representa um conjunto de dados. Ex:
```PHP
public static function provedorDados() {
    return [
        [2, 3], //Dados 0 e 1
        [3, 4], //Dados 0 e 1
    ];
}
```

## Anote o `@dataProvider`
Adicione a anotação `@dataProvider` acima do método que você quer usar o conjunto de dados. A anotação deve apontar para o nome do método que você criou.

## Use os dados fornecidos
No método de teste, use os argumentos passados pelo `dataProvider` para executar seus testes. Cada conjunto de dados será passado automaticamente como argumentos para o método de teste.

## Exemplo de Uso
Na aplicação feita no arquivo ```AutenticacaoTest.php```, nós podemos ver ele em prática fazendo com que seja automatizado nosso teste sem a repetição dos códigos de Autenticação. Através do uso dele, nós o setamos para providenciar cada um dos testes que queríamos fazer (acessos com usuário e senha correto, incorreto e um com o usuário e senha do outro):

```PHP
/**
     * Fornece dados de teste para diferentes cenários de autenticação.
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
```

E ele sendo chamado na nossa anotação do método de autenticação:
```PHP
/** ...
     * @dataProvider dadosCenariosDeAutenticacao
     *...
     */
    public function testeCenariosDeAutenticacao($username, $password, $esperado) {
        $mensagem = $this->autenticacao->gerarMensagem($username, $password);
        $this->assertEquals($esperado, $mensagem);
    }

```
