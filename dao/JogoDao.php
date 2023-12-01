<?php

require_once 'C:\xampp\htdocs\oi\Trabalho-pw2\model\Conexao.php';

    class JogoDao{
        public static function insert($jogo){
            $conexao = Conexao::conectar();
            $query = "INSERT INTO tbjogo (nomeJogo, generoJogo, plataformaJogo, precoJogo, tamanhoJogo, imagemJogo, dataJogo) VALUES (?,?,?,?,?,?,?)";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $jogo->getnomeJogo());
            $stmt->bindValue(2, $jogo->getGenero());
            $stmt->bindValue(3, $jogo->getPlataforma());
            $stmt->bindValue(4, $jogo->getPreco());
            $stmt->bindValue(5, $jogo->getTamanho());
            $stmt->bindValue(6, $jogo->getImagem());
            $stmt->bindValue(7, $jogo->getData());
            $stmt->execute();
        }
        public static function selectAll(){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbjogo";
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        public static function selectById($cod){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbjogo WHERE codJogo = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $cod);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        public static function delete($cod){
            $conexao = Conexao::conectar();
            $query = "DELETE FROM tbjogo WHERE codJogo = ?";
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
            imagemJogo = ?,
            dataJogo = ?
            WHERE codJogo = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $jogo->getnomeJogo());
            $stmt->bindValue(2, $jogo->getGenero());
            $stmt->bindValue(3, $jogo->getPlataforma());
            $stmt->bindValue(4, $jogo->getPreco());
            $stmt->bindValue(5, $jogo->getTamanho());
            $stmt->bindValue(6, $jogo->getImagem());
            $stmt->bindValue(7, $jogo->getData());
            $stmt->bindValue(8, $cod);
            return $stmt->execute();
        }
        public static function selectAllAsc(){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbjogo ORDER BY nomeJogo ASC";
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        public static function checkCredentials($email, $senha){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbAdm WHERE codAdm = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $email);
            $stmt->bindValue(2, $senha);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

    }
?>