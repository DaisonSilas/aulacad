<?php
require_once 'Conexao.php';
require_once  '../models/Editora.php';

class LivroController
{
    public static function salvar(Livro $livro){
        if ($livro->getId()>0){
            return self::alterar($livro);
        }else{
            return self::inserir($livro);
        }

    }
    private static function inserir(Livro $livro){
       $sql =  "INSERT INTO titulo, descricao, autor, idgenero, ideditora, valor, ano) VALUES(:titulo, :descricao, :autor, :idgenero, :ideditora, :valor, :ano)";
        $db = Conexao::getInstance();
        $stmt = $db->prepare($sql);
        $stmt->bindValue(':titulo', $livro->getTitulo());
        $stmt->bindValue(':descricao', $livro->getDescricao());
        $stmt->bindValue(':autor', $livro->getAutor());
        $stmt->bindValue(':idgenero', $livro->getGenereo()->getId());
        $stmt->bindValue(':ideditora', $livro->getEditora()->getId());
        $stmt->bindValue(':valor', $livro->getValor());
        $stmt->bindValue(':ano', $livro->getAno());

        $stmt->execute();
        return "OK";

    }

    private static function alterar(Livro $livro){
        $sql =  "UPDATE livro SET titulo=:titulo, descricao=:descricao, autor=:autor, idgenero=:idgenero, ideditora=:ideditora, valor=:valor, ano=:ano) WHERE id=:id";
        $db = Conexao::getInstance();
        $stmt = $db->prepare($sql);
        $stmt->bindValue(':titulo', $livro->getTitulo());
        $stmt->bindValue(':descricao', $livro->getDescricao());
        $stmt->bindValue(':autor', $livro->getAutor());
        $stmt->bindValue(':idgenero', $livro->getGenereo()->getId());
        $stmt->bindValue(':ideditora', $livro->getEditora()->getId());
        $stmt->bindValue(':valor', $livro->getValor());
        $stmt->bindValue(':ano', $livro->getAno());
        $stmt->bindValue(':id', $livro->getId());


        $stmt->execute();
        return "OK";

    }

    public static function excluir($id){
        $sql = "DELETE FROM livro WHERE id = :id";
        $db = Conexao::getInstance();
        $stmt = $db->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
    }

    public static function trazerTodos(){
        $sql = "SELECT l.*, g.nome AS genero, e.nome AS editora FROM livro l INNER JOIN genero g ON g.id = l.idgenero INNER JOIN editora e ON e.id = l.ideditora";
        $db = Conexao::getInstance();
        $stmt = $db->query($sql);
        $listagem = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $arrRetorno = array();
        foreach ($listagem as $itemLista){

            $arrRetorno[] = self::popularLivro($itemLista);
        }
        return $arrRetorno;
    }

    public static function visualizalivro($id)
    {
        $sql = "SELECT l.*, g.nome AS genero, e.nome AS editora FROM livro l INNER JOIN genero g ON g.id = l.idgenero INNER JOIN editora e ON e.id = l.ideditora WHERE l.id =:id";
        $db = Conexao::getInstance();
        $stmt = $db->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        $listagem = $stmt->fetchAll(PDO::FETCH_ASSOC); //array associativo

        $retorno = new genero();
        foreach ($listagem as $itemLista) {
            $retorno = self::popularLivro($itemLista);
        }
        return $retorno;
    }

    private static function popularLivro($itemlista){
        $livro = new Livro();
        $livro->setId($itemlista['id']);
        $livro->setTitulo($itemlista['titulo']);
        $livro->setDescricao($itemlista['descricao']);
        $livro->setAutor($itemlista['autor']);
        $livro->setValor($itemlista['valor']);
        $livro->setAno($itemlista['ano']);
        $livro->getGenero()->setId($itemlista['idgenero']);
        $livro->getGenero()->setDescricao($itemlista['genero']);
        $livro->getEditora()->setId($itemlista['ideditora']);
        $livro->getEditora()->setDescricao($itemlista['editora']);
        return $livro;
    }
}