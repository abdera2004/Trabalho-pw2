<?php
    require_once '../../model/Conexao.php';

    class CompraDao{
        public static function insert($compra){
            $conexao = Conexao::conectar();
            $query = "INSERT INTO tbcompra (qtdJogosCompra, valorTotalCompra, dataCompra, formaPagamento, statusCompra, nomeJogo) VALUES (?,?,?,?,?,?)";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $compra->getQtd());
            $stmt->bindValue(2, $compra->getVal());
            $stmt->bindValue(3, $compra->getData());
            $stmt->bindValue(4, $compra->getPag());
            $stmt->bindValue(5, $compra->getStatus());
            $stmt->bindValue(6, $compra->getNome());
            $stmt->execute();
        }
        public static function selectAll(){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbcompra";
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        public static function selectById($id){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbcompra WHERE codCompra = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $id);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        public static function delete($id){
            $conexao = Conexao::conectar();
            $query = "DELETE FROM tbcompra WHERE codCompra = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $id);
            return  $stmt->execute();
        }
        public static function update($id, $compra){
            $conexao = Conexao::conectar();
            $query = "UPDATE tbcompra SET 
            qtdJogosCompra = ?, 
            valorTotalCompra  = ?,
            dataCompra = ?, 
            formaPagamento = ?, 
            statusCompra = ?,
            nomeJogo = ?
            WHERE codCompra = ?";
            $stmt->bindValue(1, $compra->getQtd());
            $stmt->bindValue(2, $compra->getVal());
            $stmt->bindValue(3, $compra->getData());
            $stmt->bindValue(4, $compra->getPag());
            $stmt->bindValue(5, $compra->getStatus());
            $stmt->bindValue(6, $compra->getNome());
            return $stmt->execute();
        }
    }
?>