<?php

    require_once '../../model/Conexao.php';

    class PagamentoDao{
        public static function insert($pagamento){
            $conexao = Conexao::conectar();
            $query = "INSERT INTO tbformapagamento (descFormaPagamento) VALUES (?)";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $pagamento->getDesc());
            $stmt->execute();
        }
        public static function selectAll(){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbformapagamento";
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        public static function selectById($codPagamento){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbformapagamento WHERE codPagamento = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $codPagamento);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        public static function delete($codPagamento){
            $conexao = Conexao::conectar();
            $query = "DELETE FROM tbformapagamento WHERE codPagamento = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $codPagamento);
            return  $stmt->execute();
        }
        public static function update($codPagamento, $pagamento){
            $conexao = Conexao::conectar();
            $query = "UPDATE tbformapagamento SET 
            descFormaPagamento = ?
            WHERE codPagamento = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $pagamento->getDesc());
            $stmt->bindValue(2, $codPagamento);
            return $stmt->execute();
        }
        public static function checkCredentials($email, $senha){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbuser WHERE codAdm = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $email);
            $stmt->bindValue(2, $senha);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

    }

?>