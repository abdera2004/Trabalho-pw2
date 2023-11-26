<?php

class Pagamento{

    public $codPagamento, $descFormaPagamento;

    public function getPagamento(){
        return $this->codPagamento;
    }

    public function setPagamento($codPagamento){
        $this->codPagamento = $codPagamento;
    }

    public function getDesc(){
        return $this->descFormaPagamento;
    }

    public function setDesc($descFormaPagamento){
        $this->descFormaPagamento = $descFormaPagamento;
    }
}

?>