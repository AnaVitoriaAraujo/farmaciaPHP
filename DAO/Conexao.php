<?php
    namespace POO\FarmaciaPHP\DAO;

    class Conexao{
        public function Conectar(){
            try{
                $conn = mysqli_connect('localhost', 'root','','Farmacia');
                if($conn){
                    echo "Conectado com sucesso";
                    return $conn;
                }
            }catch(Except $erro){
                echo $erro;
            }

        }//fim do metodo
    }//fim da classex
?>