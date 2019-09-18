<?php
header('Content-Type:' . "text/plain");
require_once('../conexao.php');
$id =$_POST["data"][0];
$consulta = $conn->query("SELECT *FROM TORCEDOR WHERE ID =$id;");
    if($consulta->rowCount()>0){
      
        $dados = array();
         while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
           if($linha["EMAIL"] =="" or $linha["TELEFONE"]== 0 ){
                $dados[0]['id']= $linha['ID'];
                $dados[0]['nome']= $linha['NOME'];
                $dados[0]['documento']= $linha['DOCUMENTO'];
                $dados[0]['cep']= $linha['CEP'];
                $dados[0]['endereco']= $linha['ENDERECO'];
                $dados[0]['bairro']= $linha['BAIRRO'];
                $dados[0]['cidade']= $linha['CIDADE'];
                $dados[0]['uf']= $linha['UF'];
                $dados[0]['telefone']= $linha['TELEFONE'];
                $dados[0]['email']= $linha['EMAIL'];
                $dados[0]['ativo']= $linha['ATIVO'];
               
               
               
            }
           
       }
       echo json_encode($dados);
    }



?>
