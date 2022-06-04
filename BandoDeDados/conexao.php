<?php 

    function conecta(){
        $db_hostname="localhost";
        $db_usuario="root";
        $db_senha="";
        $db_bancodedados="bancoDeDados";

        $conexao=mysql_connect($db_hostname, $db_usuario, $db_senha);

        if(!$conexao){
            echo "Não foi possível conectar-se ao banco de dados";
        }else{
            $seleciona_banco=mysql_connect_db($db_banco);

            if(!$seleciona_banco){
                echo "Não foi possivel selecionar o banco de dados";
            }
        }

    }


?>

