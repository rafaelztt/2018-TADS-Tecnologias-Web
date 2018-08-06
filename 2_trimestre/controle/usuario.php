<?php

echo "Recebendo dados....<br>";

// Recebe os dados do formulário e armazena
// em variáveis

// A função trim($var) remove os espaços do
// início e do final da string/variável
$nome = trim( $_REQUEST['nome'] );

$usuario = trim( $_REQUEST['usuario'] );
$senha = trim( $_REQUEST['senha'] );

echo "Bem vindo $nome, você será cadastrado!<br>";

// Fazer validação
if(trim($senha) == ""){
  echo "Senha não informada!";
}
?>
