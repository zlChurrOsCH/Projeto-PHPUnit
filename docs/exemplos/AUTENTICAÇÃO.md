## Autenticação com Diferentes Usuários e Senhas

O cenário de teste simula diferentes cenários de autenticação com vários usuários e senhas. Ele verifica se a função ```gerarMensagem``` da classe ```Autenticacao``` retorna as mensagens esperadas para cada combinação de usuário e senha, de acordo com as regras estabelecidas.

Através do uso do ```@dataProvider```, você fornece os dados de teste para o cenário de teste, permitindo que o mesmo conjunto de testes seja executado várias vezes com diferentes entradas.