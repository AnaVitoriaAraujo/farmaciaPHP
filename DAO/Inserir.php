<?php
    namespace POO\FarmaciaPHP\DAO;

    require_once('Conexao.php');//acessando minha classe de conexao
    use POO\FarmaciaPHP\DAO\Conexao;

    class Inserir{

        public function Insert(
        Conexao $conexao,
         string $nomeTabela,
         string $nome,
         int $RG,
         string $telefone,
         string $listPlano,
         string $listFarm)
         {

            try{
                    $conn = $conexao->Conectar();
                    $sql ="insert into $nomeTabela( nome,RG, telefone, listPlano, listFarm)values('$nome','$RG','$telefone','$listPlano','$listFarm')";
                    $result = mysqli_query($conn, $sql);
                    
                    if($result){
                        return "<br><br>Inserido com sucesso";

                    }else{
                        return "<br><br> Não Inserido";
                    }

                    mysqli_close($conn);// fechando a conexao com o bd
            }catch(Exept $erro){
                echo $erro;
            }
         }//fim do insert
    }//fim da classe
?>