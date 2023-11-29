<?php

class Compra{

    public $id, $qtd, $val, $data, $pag, $status;

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getQtd(){
        return $this->qtd;
    }

    public function setQtd($qtd){
        $this->qtd = $qtd;
    }

    public function getVal(){
        return $this->val;
    }

    public function setVal($val){
        $this->val = $val;
    }

    public function getData(){
        return $this->data;
    }

    public function setData($data){
        $this->data = $data;
    }

    public function getPag(){
        return $this->pag;
    }

    public function setPag($pag){
        $this->pag = $pag;
    }

    public function getStatus(){
        return $this->status;
    }

    public function setStatus($status){
        $this->status = $status;
    }
}

?>