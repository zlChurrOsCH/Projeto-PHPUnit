# Projeto-TWD
Esse é um projeto privado usado para que fique mais fácil a busca por informações

Nesse arquivo vou explicar de forma geral o que é, para que serve e quais as aplicabilidades do PHPUnit em um projeto como o da TWD.

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
    * Após a inicialização do projeto, você pode adicionar o PHPUnit como uma dependência de desenvolvimento. Execute o seguinte comando no terminal: 'composer require --dev phpunit/phpunit'
    Isso adicionará o PHPUnit como uma dependência de desenvolvimento em seu arquivo 

 2. Crie uma estrutura de diretórios para seus testes e código fonte. Nesse projeto, eu fiz da seguinte maneira:
 /projeto-twd
    ├── docs                    # Onde estará documentado nossos testes e explicações gerais do projeto
        └── exemplos            # Informações adicionais dos testes feitos
    ├── src                     # Código fonte do projeto
    └── tests                   # Testes do PHPUnit
        └── ProjetoTest.php     # Nosso primeiro teste

 3. Execute seu primeiro teste e verifique se tudo está funcionando.

## Configurando nosso PHPUnit.xml
Como já passamos por isso, fui fazer um checkup de configurações e mudanças do PHP 10.0 com relação ao que eu usava, e nosso phpunit.xml precisa estar de fato na pasta raiz. A configuração mais básica é:

'''xml
<phpunit>
    <testsuites>
        <testsuite name="Projeto TWD">
            <directory>tests</directory>
        </testsuite>
    </testsuites>
</phpunit>
'''

Eu fiz algumas alterações nas configurações desse teste, para podermos ter um resultado mais claro, e o nosso XML ficou assim:

'''xml
<phpunit xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="https://schema.phpunit.de/9.5/phpunit.xsd" bootstrap="vendor/autoload.php" colors="true" stopOnFailure="false">
    <testsuites>
        <testsuite name="Unit">
            <directory>tests</directory>
        </testsuite>
    </testsuites>
    <logging>
        <testdoxText outputFile="testes-executados.txt"/>
    </logging>
</phpunit>
'''
'xmlns:xsi' e 'xsi:noNamespaceSchemaLocation' definem o namespace XML e a localização do esquema XSD do PHPUnit usado para validar o arquivo de configuração.
