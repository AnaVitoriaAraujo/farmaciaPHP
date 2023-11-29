<?php

    namespace POO\FarmaciaPHP\DAO;

    require_once('Conexao.php');

    use POO\FarmaciaPHP\DAO\Conexao;

    class Consultar{

        public function ConsultarIndividual(Conexao $conexao, string $nomeTabela, int $RG){
            try{

                $conn = $conexao->Conectar();
                $sql = "select * from $nomeTabela where RG = '$RG'";
                $result = mysqli_query($conn,$sql);

                while($dados = mysqli_fetch_Array($result)){
                    if($dados["RG"] == $RG){
                        echo"<br><br>Nome:".$dados["nome"].
                        "<br>RG:".$dados["RG"].
                        "<br>Telefone".$dados["telefone"].
                        "<br>listPlano".$dados["listPlano"].
                        "<br>listFarm:".$dados["listFarm"];
                    }
                }
                mysqli_close($conn);
            }catch(Except $erro){
                echo $erro;
            }
        }//fim do metodo

        public function ConsultarTudo(Conexao $conexao, string $nomeTabela){
            try{

                $conn = $conexao->Conectar();
                $sql = "select * from $nomeTabela";
                $result = mysqli_query($conn, $sql);

                while($dados = mysqli_fetch_Array($result)){
                    echo "<br><br>nome:".$dados["nome"].
                    "<br>RG:".$dados["RG"].
                    "<br>Telefone".$dados["telefone"].
                    "<br>lisPlano".$dados["listPlano"].
                    "<br>listFarm:".$dados["listFarm"];
                }//fim do enquanto

            }catch(Except $erro){
                    echo $erro;
            }
        }//fim do método

    }//fim da classe 
   
?>