<?php

    require_once '../../model/Conexao.php';

    class JogoDao{
        public static function insert($jogo){
            $conexao = Conexao::conectar();
            $query = "INSERT INTO tbjogo (codJogo, nomeJogo, generoJogo, plataformaJogo, precoJogo, tamanhoJogo, imagemJogo) VALUES (?,?,?,?,?,?,?)";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $jogo->getCod());
            $stmt->bindValue(2, $jogo->getnomeJogo());
            $stmt->bindValue(3, $jogo->getGenero());
            $stmt->bindValue(4, $jogo->getPlataforma());
            $stmt->bindValue(5, $jogo->getPreco());
            $stmt->bindValue(6, $jogo->getTamanho());
            $stmt->bindValue(7, $jogo->getImagem());
            $stmt->execute();
        }
        public static function selectAll(){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbUser";
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        public static function selectById($cod){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbuser WHERE codJogo = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $cod);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        public static function delete($cod){
            $conexao = Conexao::conectar();
            $query = "DELETE FROM tbuser WHERE codJogo = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $cod);
            return  $stmt->execute();
        }
        public static function update($cod, $jogo){
            $conexao = Conexao::conectar();
            $query = "UPDATE tbjogo SET 
            nomeJogo = ?, 
            generoJogo  = ?,
            plataformaJogo = ?, 
            precoJogo = ?, 
            tamanhoJogo = ?,
            imagemJogo = ?
            WHERE codJogo = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $jogo->getNome());
            $stmt->bindValue(2, $jogo->getGenero());
            $stmt->bindValue(3, $jogo->getPlataforma());
            $stmt->bindValue(4, $jogo->getPreco());
            $stmt->bindValue(5, $jogo->getTamanho());
            $stmt->bindValue(6, $jogo->getImagem());
            $stmt->bindValue(7, $cod);
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