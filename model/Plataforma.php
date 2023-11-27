<?php

class Plataforma{

    public $codPlataformaJogo, $descPlataformaJogo;

    public function getPlataforma(){
        return $this->codPlataformaJogo;
    }

    public function setPlataforma($codPlataformaJogo){
        $this->codPlataformaJogo = $codPlataformaJogo;
    }

    public function getDesc(){
        return $this->descPlataformaJogo;
    }

    public function setDesc($descPlataformaJogo){
        $this->descPlataformaJogo = $descPlataformaJogo;
    }
}

?>