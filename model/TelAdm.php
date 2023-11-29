<?php

class TelAdm{

    public $codTelAdm, $numTelAdm;

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
}

?>