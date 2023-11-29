<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <title>Tela Adm</title>
</head>
<body>

    <?php
          require_once('Modelo/cadastro.php');//requisitando o uso do arquivo pessoa

          require_once('DAO/Conexao.php');
      
          require_once('DAO/Inserir.php');
      
          require_once('DAO/Consultar.php');
      
         // require_once('DAO/Atualizar.php');
      
          // require_once('DAO/Excluir.php');
      
          use POO\FarmaciaPHP\Modelo\cadastro; //acessar e usar todos os metodos desse aquivo
          use POO\FarmaciaPHP\DAO\Conexao;
          use POO\FarmaciaPHP\DAO\Inserir;
          use POO\FarmaciaPHP\DAO\Consultar;
       //   use POO\ProjetoBDPhp\DAO\Atualizar;
      //  use POO\ProjetoBDPhp\DAO\Excluir;
    ?>
    <form method="POST">
        <h1>Acesso de Adm</h1>
    
        <label>Usario: </label>
        <input type="text" name="tUser" id="tUser"/>
        <br><br>

        <label>Senha: </label>
        <input type="text" name="tSenha" id="tSenha"/>
        <br><br>

        <button> Cadastrar
            <?php 
                if(('tUser' == 'usuario') && ('tSenha' == 'admin')){
                    
                }else{
                    echo "Senha Incorreta realize o processo novamente";
                }
            ?>
        </button>

    <button id="Voltar"> <a href="index.php"> Voltar </a></button>

    <?php

        $pessoa = new cadastro("dfgdfhg","4634646","1198989","Avenida Senador Vergueiro","allansobral");
            
        //Banco de dados

        $conexao = new Conexao();

         $consultar = new Consultar();
         //Comentario somente para nao exacutar|$consultar->ConsultarIndividual($conexao, "farmacia", "123457")
         $consultar->ConsultarTudo($conexao, "cadastro");
    ?>
    </form>


</body>
</html>