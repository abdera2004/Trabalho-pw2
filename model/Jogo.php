<?php

class Jogo{

    public $cod, $nomeJogo, $genero, $plataforma, $preco, $tamanho;

    public function getCod(){
        return $this->cod;
    }

    public function setCod($cod){
        $this->cod = $cod;
    }

    public function getnomeJogo(){
        return $this->nomeJogo;
    }

    public function setnomeJogo($nomeJogo){
        $this->nomeJogo = $nomeJogo;
    }

    public function getGenero(){
        return $this->genero;
    }

    public function setGenero($genero){
        $this->genero = $genero;
    }

    public function getPlataforma(){
        return $this->plataforma;
    }

    public function setPlataforma($plataforma){
        $this->plataforma = $plataforma;
    }

    public function getPreco(){
        return $this->preco;
    }

    public function setPreco($preco){
        $this->preco = $preco;
    }

    public function getTamanho(){
        return $this->tamanho;
    }

    public function setTamanho($tamanho){
        $this->tamanho = $tamanho;
    }
}

?>