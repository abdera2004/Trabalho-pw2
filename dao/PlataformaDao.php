<?php

    require_once '../../model/Conexao.php';

    class PlataformaDao{
        public static function insert($plataforma){
            $conexao = Conexao::conectar();
            $query = "INSERT INTO tbplataformajogo (descPlataformaJogo) VALUES (?)";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $plataforma->getDesc());
            $stmt->execute();
        }
        public static function selectAll(){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbplataformajogo";
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        public static function selectById($codPlataformaJogo){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbplataformajogo WHERE codPlataformaJogo = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $codPlataformaJogo);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        public static function delete($codPlataformaJogo){
            $conexao = Conexao::conectar();
            $query = "DELETE FROM tbplataformajogo WHERE codPlataformaJogo = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $codPlataformaJogo);
            return  $stmt->execute();
        }
        public static function update($codPlataformaJogo, $plataforma){
            $conexao = Conexao::conectar();
            $query = "UPDATE tbplataformajogo SET 
            descPlataformaJogo = ?
            WHERE codPlataformaJogo = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $plataforma->getDesc());
            $stmt->bindValue(2, $codPlataformaJogo);
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