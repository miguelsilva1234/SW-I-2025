<?php
    class Lampada{

        public $Fabricante;
        public $Tensao;
        public $Potencia;
        public $Cor;
        public $Status;

        public function Ligar(){
            $this->Status = True;
        }

        public function Desligar(){
            $this->Status = False;
        }

        public function MostrarDados(){
            echo "FABRICANTE: " . $this->Fabricante . "<br>";
            echo "TENSAO: " . $this->Tensao . "<br>";
            echo "POTENCIA: " . $this->Potencia . "<br>";
            echo "COR: " . $this->Cor . "<br>";
            if ($this->Status == 1) {
                echo "Status da lampada: Ligada <br>";
            }
            else{
                echo "Status da lampada: Desligada <br>";
            }
            echo "STATUS: " . $this->Status . "<br>";
        }

    }

?>