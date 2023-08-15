<?php
// O nossos sistema recebe via API o ID do usuário quando faz login. Após receber o ID, executa uma verificação de "Se menor que 5, ele tem determinadas funções conforme o número do ID" - userDelete = 5 | userPost = 4 | userRead = 3 | userPut = 2 | userGet = 1 "Retorna um echo com 'Você está logado como: NOME_DA_FUNÇÃO.'"
// "Se for maior que 5, devolve com a msg 'Usuário Logado com Sucesso!'"


// No sistema tem um arquivo chamado "Helpers.php" que recebe o ID que foi enviado via API e faz a checagem se <= ou > que 5. Esse resultado gera um true/false, onde "true" direciona para o GroupUserController.php realizar o trabalho de atribuir a esse ID LOGADO a função determinada.
// No caso de um retorno "false", o sistema joga para outro lugar fazer outras verificações, mas por hora vamos fazer que ele vá para "GroupUserController.php" e seja atribuído a um usuário sem função.
// Esse arquivo "Helpers.php" ainda não está criado no nosso projeto.

// No meu sistema tem um arquivo chamado "GroupUserController.php" que faz o trabalho de separar as funções de cada ID <= 5 , sendo > 5 = usuário sem privilégios.
// Mas ainda não criei esse arquivo "GroupUserController.php" aqui no testes, então vamos precisar desenvolver um.

// Eu quero verificar algumas coisas como:
// - O Helpers está recebendo corretamente a API?
// - O que ocorre caso o Helpers não receba corretamente a API?
// - A verificação de cálculo <= 5 ou > 5 está funcionando como deveria?
// - GroupUserController está recebendo a resposta como deveria?

?>