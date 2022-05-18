<?php

namespace Aluno\ProjetoPhp\Model\DAO;

use Aluno\ProjetoPhp\Model\Entity\Produtos;

class ProdutosDAO{

    public function inserir(Produtos $d){
        try{
            $sql = "INSERT INTO `produtos`(`nome`, `descricao`, `valor`) VALUES (:nome, :descricao, :valor)";

        } catch(\Exception $e){
            return false;
        }
    }

    public function alterar(Produtos $d){
        try{
            $sql = "UPDATE `clientes` SET `nome`= :nome,`descricao`= :descricao,`valor`= :valor WHERE id = :id";

        } catch(\Exception $e){
            return false;
        }
    }

    public function excluir($id){
        try{
            $sql = "DELETE FROM `produtos` WHERE id = :id";
        } catch(\Exception $e){
        return false;
        }
    }

    public function consultar(){
        try{
            $sql = "SELECT * FROM produtos";
        } catch(\Exception $e){
            return false;
        }
    }

    public function consultarPorId($id){
        try{
            $sql = "SELECT * FROM produtos WHERE id = id";
        } catch(\Exception $e){
            return false;
        }
    }

}

?>