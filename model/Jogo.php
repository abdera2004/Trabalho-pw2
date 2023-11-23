<?php

class Jogo{

    public $cod, $nomeJogo, $genero, $plataforma, $preco, $tamanho, $imagem;

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
    
    public function setImagem($imagem){
        $this->imagem = $imagem;
    }

    public function salvarImagem($novo_nome){
        if(empty($_FILES['foto']['size']) != 1){
            if($novo_nome == ""){
                $novo_nome = md5(time()). ".jpg";
            }
            $diretorio = "../../img/jogo/";

            $nomeCompleto = $diretorio.$novo_nome;

            move_uploaded_file($_FILES['foto']['tmp_name'], $nomeCompleto);
            return $novo_nome;
        }else{
            return $novo_nome;
        }
    }
}

?>