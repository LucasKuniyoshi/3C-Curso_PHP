<div class="titulo">Classe Data</div>

<?php
    //Ex
    class Data{
        public $dia;
        public $mes;
        public $ano;

        function apresentarData($dia, $mes, $ano){
            $this->dia = $dia;
            $this->mes = $mes;
            $this->ano = $ano;

            return "{$this->dia}/{$this->mes}/{$this->ano}";
        }
    }

    $a = new Data;
    echo $a->apresentarData(1,1,1970), '<br>';

    $b = new Data;
    echo $b->apresentarData(10,9,2024), '<br>';