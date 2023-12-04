<?php
    namespace POO\FarmaciaPHP\DAO;

    class Conexao{
        public function Conectar(){
            try{
                $conn = mysqli_connect('localhost', 'root','','Farmacia');
                if($conn){
                    echo "\n\nConectado com o banco de dados";
                    return $conn;
                }
            }catch(Except $erro){
                echo $erro;
            }
        }//fim do metodo
    }//fim da classex
?>