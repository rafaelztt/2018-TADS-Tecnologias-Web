<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aula 21</title>

    <style media="screen">

      .conteudo{
        margin: 0 auto;
        width: 900px;
      }

    </style>

  </head>
  <body>

    <div class="menu">

    </div>

    <div class="conteudo">

      <h2>Cadastro de usuário</h2>

      <!-- define o arquivo de destino dos dados do formulário -->
      <form action="controle/usuario.php" method="post">

        <label for="">Nome</label><br>
        <input type="text" name="nome" value="">
        <br>

        <label for="">Usuário</label><br>
        <input type="text" name="usuario" value=""><br>

        <label for="">Senha</label><br>
        <input type="password" name="senha" value=""><br>

        <br>
        <input type="submit" name="" value="Cadastrar">


      </form>

    </div>

    <div class="rodape">

    </div>

  </body>
</html>
