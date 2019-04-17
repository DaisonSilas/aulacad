<?php
require_once "../models/Cliente.php";
require_once "Conexao.php";

class ClienteController
{
    public static function inserir(Cliente $cliente){
    $sql = "INSERT INTO Cliente (nome, cpf, endereco, email, senha, telefone) VALUES (:nome, :cpf, :endereco, :email, :senha, :telefone)";


    $db = Conexao::getInstance();
    $stmt = $db->prepare($sql);
        $stmt->bindValue(':nome', $cliente->getNome());
        $stmt->bindValue(':cpf', $cliente->getCpf());
        $stmt->bindValue(':endereco', $cliente->getEndereco());
        $stmt->bindValue(':email', $cliente->getEmail());
        $stmt->bindValue(':senha', $cliente->getSenha());
        $stmt->bindValue(':telefone', $cliente->getTelefone());

        $stmt->execute();

        return "OK";
    }
        public static function trazerTodos(){
            $sql = "SELECT * FROM Cliente ORDER BY nome";
            $db = Conexao::getInstance();
            $stmt = $db->query($sql);
            $listagem = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $arrRetorno = array();
            foreach ($listagem as $itemLista){

                $arrRetorno[] = self::popularCliente($itemLista);
            }
                return $arrRetorno;
        }
        private static  function popularCliente($itemLista){
            $cliente = new Cliente();
            $cliente->setId($itemLista ['id']);
            $cliente->setNome($itemLista ['nome']);
            $cliente->setCpf($itemLista ['cpf']);
            $cliente->setEndereco($itemLista ['endereco']);
            $cliente->setTelefone($itemLista ['telefone']);
            $cliente->setEmail($itemLista ['email']);
            $cliente->setSenha($itemLista ['senha']);
            return $cliente;
        }
        public static function excluir($id){
        $sql = "DELETE FROM Cliente WHERE id = :id";
            $db = Conexao::getInstance();
            $stmt = $db->prepare($sql);
            $stmt->bindValue(':id', $id);
            $stmt->execute();
        }

}