# Projeto-PHPUnit
Esse é um projeto privado usado para que fique mais fácil a busca por informações

Nesse arquivo vou explicar de forma geral o que é, para que serve e quais as aplicabilidades do PHPUnit em um projeto real.

## Sumário
- [O que é PHPUnit](#o-que-é-phpunit)
- [Aplicações do PHPUnit](#aplicações-do-phpunit)
- [Como Usar o PHPUnit](#primeiros-passos-com-phpunit)
- [Configuração PHPUnit.xml](#configurando-nosso-phpunitxml)


## O que é PHPUnit
O PHPUnit é uma estrutura (framework) de teste unitário para a linguagem de programação PHP. Ele fornece um conjunto de classes e métodos que permitem aos desenvolvedores criar e executar testes automatizados em seus projetos PHP. Testes unitários são uma prática essencial de desenvolvimento de software que envolve testar pequenas partes isoladas de código para garantir que elas funcionem conforme o esperado.


## Aplicações do PHPUnit
O PHPUnit é amplamente utilizado para:
 - **Garantia de Qualidade:** Testar componentes individuais (funções, métodos, classes) para verificar se estão entregando os resultados esperados.

 - **Refatoração:** Ao realizar mudanças em seu código, os testes unitários podem ser executados para verificar se as alterações criaram erros ou defeitos em funcionalidades já existentes.
 
 - **Documentação Dinâmica:** Os testes podem servir como documentação real e clara de como determinadas partes de códigos devem ser usados.

 - **Colaborativo:** Em projetos colabs, os testes permitem que os desenvolvedores compreendam como usar e interagir com diferentes partes dos códigos.

## Primeiros Passos com PHPUnit
 1. Com o seu projeto setado, vamos instalar o PHPUnit na raiz dele:
    * Após a inicialização do projeto, você pode adicionar o PHPUnit como uma dependência de desenvolvimento. Execute o seguinte comando no terminal: <pre>```composer require --dev phpunit/phpunit```</pre>
    Isso adicionará o PHPUnit como uma dependência de desenvolvimento em seu arquivo 

 2. Crie uma estrutura de diretórios para seus testes e código fonte. Nesse projeto, eu fiz da seguinte maneira:
 ```
    /projeto-phpunit96
     ├── docs                       # Onde estará documentado nossos testes e explicações gerais do projeto
     └── exemplos                   # Informações adicionais dos testes feitos
     ├── src                        # Código fonte do projeto
         └── tests                  # Testes do PHPUnit
             └── ProjetoTest.php    # Nosso primeiro teste
 ```

 4. Execute seu primeiro teste e verifique se tudo está funcionando com o código: <pre>```vendor\bin\phpunit tests```</pre>

## Configurando nosso PHPUnit.xml
Como já passamos por isso, fui fazer um checkup de configurações e mudanças do PHP 10.0 com relação ao que eu usava, e nosso phpunit.xml precisa estar de fato na pasta raiz. A configuração mais básica é:

```
<phpunit>
    <testsuites>
        <testsuite name="Projeto PHPUnit96">
            <directory>tests</directory>
        </testsuite>
    </testsuites>
</phpunit>
```
Eu fiz algumas alterações nas configurações desse teste, para podermos ter um resultado mais claro, e o nosso XML ficou assim:
```
<phpunit xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
         xsi:noNamespaceSchemaLocation="https://schema.phpunit.de/9.5/phpunit.xsd"
         bootstrap="vendor/autoload.php"
         colors="true"
         stopOnFailure="false">
    <testsuites>
        <testsuite name="Unit">
            <directory>tests</directory>
        </testsuite>
    </testsuites>
    <logging>
        <testdoxText outputFile="testes-executados.txt"/>
    </logging>
</phpunit>
```

Vou explicar parte por parte desse código para que a gente consiga configurar o nosso arquivo da melhor maneira para nós

```
<phpunit xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
         xsi:noNamespaceSchemaLocation="https://schema.phpunit.de/9.5/phpunit.xsd"
         bootstrap="vendor/autoload.php"
         colors="true"
         stopOnFailure="false">
```

```xmlns:xsi:``` e ```xsi:noNamespaceSchemaLocation:``` definem o namespace XML e a localização do esquema XSD do PHPUnit usado para validar o arquivo de configuração. <br />
```bootstrap:``` especifica o arquivo de inicialização que será incluído antes da execução dos testes. O arquivo de inicialização é responsável por carregar as dependências do projeto e configurar o ambiente de teste.<br />
```colors:``` Define que na saída do teste haverá cores (melhora a legibilidade).<br />
```stopOnFailure:``` determina se a execução dos testes deve parar no primeiro teste que falhar.

```
    <testsuites>
        <testsuite name="Unit">
            <directory>tests</directory>
        </testsuite>
    </testsuites>
```

```<testsuites>``` Define seu conjunto de teste. Aqui você adiciona cada ```<testesuite>``` que você tiver
```<testsuite>``` É obrigatório atribuir um ```name``` para facilitar a leitura do que é testado em cada conjunto.
```<directory>``` Aqui é definido as pastas que contém nossos testes - tests, tests/calculadora, module/chamada entre outros.

```
    <logging>
        <testdoxText outputFile="testes-executados.txt"/>
    </logging>
```

```<loggin>``` Elemento que define configurações para registros (logs) gerados durante a execução dos testes.<br />
```<testdoxText>```Define a geração de um arquivo de texto de saída no formato ```TestDox```, que é uma forma legível de mostrar os resultados dos testes em formato de documentação. O atributo ```outputFile``` especifica o nome do arquivo onde essa saída será gravada. <br />
No exemplo, os resultados dos testes serão gravados no arquivo ```testes-executados.txt``` na pasta raiz mesmo.

Essas configurações ajudam a personalizar a execução do PHPUnit, determinar onde os testes estão localizados, como a saída é formatada e muito mais. Elas são usadas para ajustar o comportamento dos testes de acordo com as necessidades do projeto e da equipe de desenvolvimento. É claro, existem diversas outras opções que a gente pode ir personalizando conforme a necessidade.

<a href="https://docs.phpunit.de/en/10.3/configuration.html#">Outras Opções do Arquivo XML</a>
