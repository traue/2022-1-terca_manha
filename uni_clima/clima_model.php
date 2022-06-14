<?php
    class Clima {
        private $temperatura;
        private $descricao;
        private $sensacaoTermica;
        private $tempMin;
        private $tempMax;
        private $pressao;
        private $umidade;
        private $visibilidade;
        private $velocidadeVento;
        private $direcaoVento;
        private $icone;


        public function __get($atr) {
            return $this->atr;
        }

        public function __set($atr, $value) {
            $this->$atr = $value;
        }

        //paramos aqui
    }
?>