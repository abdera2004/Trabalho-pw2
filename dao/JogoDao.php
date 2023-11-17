<?php

require_once '../model/Conexao.php';

    class JogoDao{
        public static function insert($jogo){
            $conexao = Conexao::conectar();
            $query = "INSERT INTO tbjogo (codJogo, nomeJogo, generoJogo, plataformaJogo, precoJogo, tamanhoJogo) VALUES (?,?,?,?,?,?)";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $jogo->getCod());
            $stmt->bindValue(2, $jogo->getnomeJogo());
            $stmt->bindValue(3, $jogo->getGenero());
            $stmt->bindValue(4, $jogo->getPlataforma());
            $stmt->bindValue(5, $jogo->getPreco());
            $stmt->bindValue(6, $jogo->getTamanho());
            $stmt->execute();
        }
    }

?>