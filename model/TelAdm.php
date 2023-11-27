<?php

class TelAdm{

    public $codTelAdm, $numTelAdm, $idAdm;

    public function getCod(){
        return $this->codTelAdm;
    }

    public function setCod($codTelAdm){
        $this->codTelAdm = $codTelAdm;
    }

    public function getNum(){
        return $this->numTelAdm;
    }

    public function setNum($numTelAdm){
        $this->numTelAdm = $numTelAdm;
    }

    public function getidAdm(){
        return $this->idAdm;
    }

    public function setidAdm($idAdm){
        $this->idAdm = $idAdm;
    }
}

?>