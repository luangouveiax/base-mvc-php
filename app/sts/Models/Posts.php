<?php 
/*
* Exemplo de uma Model
*/

namespace Sts\Models;

use PDO;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

class Posts
{
    private $dados;

    public function getDados()
    {
        $conexao = new \Sts\Models\helper\conexaoBD();
        $pdo = $conexao->getConn();
        
        $sql = $pdo->prepare("SELECT * FROM posts");
        $sql->execute();

        if($sql->rowCount() > 0){
            $this->dados = $sql->fetch( PDO::FETCH_ASSOC );
            return $this->dados;
        }else{
            return false;
        }
    }
}