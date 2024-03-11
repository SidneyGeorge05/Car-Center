<?php
    class itemVenda{
        private Int $idItemVenda;
        private Int $qtdeItemVenda;
        private float $subTotalItemVenda;

        public function getIdItemVenda(){
            return $this->idItemVenda;
        }
        public function getqtdeItemVenda(){
            return $this->qtdeItemVenda;
        }
        public function getsubTotalItemVenda(){
            return $this->subTotalItemVenda;
        }
        public function setIdItemVenda($idItemVenda){
            $this->idItemVenda = $idItemVenda;
        }
        public function setQtdeItemVenda($qtdeItemVenda){
            $this->qtdeItemVenda = $qtdeItemVenda;
        }
        public function setSubTotalItemVenda($subTotalItemVenda){
            $this->subTotalItemVenda = $subTotalItemVenda;
        }
    }