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
          require_once('DAO/Conexao.php');
          require_once('DAO/Inserir.php');
          require_once('DAO/Consultar.php');
      
          use POO\FarmaciaPHP\DAO\Conexao;
          use POO\FarmaciaPHP\DAO\Inserir;
          use POO\FarmaciaPHP\DAO\Consultar;
    ?>
    
    <form method="POST">
        <h1>Acesso de Adm</h1>
    
        <label>Usuario: </label>
        <input type="text" name="tUser" id="tUser"/>
        <br><br>

        <label>Senha: </label>
        <input type="text" name="tSenha" id="tSenha"/>
        <br><br>

        <button> Entrar
            <?php if(('tUser' == 'admin') && ('tSenha' == 'admin'))
                { 
                    echo 'Acesso Permitido';
                }
                else
                {
                    echo 'Acesso Negado';
                }//fim do enquanto
            ?>
        </button>

    <button id="Voltar"> <a href="index.php"> Voltar </a></button>
    </form>
</body>
</html>