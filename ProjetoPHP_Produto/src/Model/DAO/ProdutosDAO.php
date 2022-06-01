<?php

namespace Aluno\ProjetoPhp\Model\DAO;

use Aluno\ProjetoPhp\Model\Entity\Produtos;

class ProdutosDAO{

    public function inserir(Produtos $c){
        try{
            $sql = "INSERT INTO `clientes`(`descricao`, `nome`, `valor`) VALUES (:descricao, :nome, :valor)";
            $p = Conexao::conectar()->prepare($sql);
            $p->bindValue(":descricao", $c->getDescricao());
            $p->bindValue(":nome", $c->getNome());
            $p->bindValue(":valor", $c->getValor());
            return $p->execute();
        } catch(\Exception $e){
            return false;
        }
    }

    public function alterar(Produtos $c){
        try{
            $sql = "UPDATE `produtos` SET `descricao`=:descricao,`nome`=:nome,`valor`=:valor WHERE id = :id";
            $p = Conexao::conectar()->prepare($sql);
            $p->bindValue(":descricao", $c->getDescricao());
            $p->bindValue(":nome", $c->getNome());
            $p->bindValue(":valor", $c->getValor());
            $p->bindValue(":id", $c->getId());
            return $p->execute();
        } catch(\Exception $e){
            return false;
        }
    }

    public function excluir($id){
        try{
            $sql = "DELETE FROM `produtos` WHERE id = :id";
            $p = Conexao::conectar()->prepare($sql);
            $p->bindValue(":id", $id);
            return $p->execute();
        } catch(\Exception $e){
            return false;
        }
    }

    public function consultar(){
        try{
            $sql = "SELECT * FROM produtos";
            return Conexao::conectar()->query($sql);
        } catch(\Exception $e){
            return false;
        }
    }

    public function consultarPorId($id){
        try{
            $sql = "SELECT * FROM produtos WHERE id = :id";
            $p = Conexao::conectar()->prepare($sql);
            $p->bindValue(":id", $id);
            $p->execute();
            return $p->fetch();
        } catch(\Exception $e){
            return false;
        }
    }

}