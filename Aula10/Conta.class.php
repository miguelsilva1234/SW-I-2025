<?php
    class Conta{
        public $Nome;
        public $Cpf;
        private $Saldo;

        public function Sacar($valor){
            if ($valor>$this->Saldo) {
                return "Saldo insuficiente!";
            }else {
                $this->Saldo = $this->Saldo - $valor;
                //$this->Saldo -= $valor;
                $texto = "Op Realizada com sucesso. Saldo atual é R$". $this->Saldo;
                return $texto; 
            }
        }

        
        public function Depositar($valor){
            $this->Saldo = $this->Saldo + $valor;
            //$this->Saldo += $valor;
            $texto = "Op Realizada com sucesso. Saldo atual é R$". $this->Saldo;
            return $texto;
        }

        public function ConsultarSaldo(){
            echo "NOME:" . $this->Nome . "<br>";
            echo "CPF:" . $this->Cpf . "<br>";
            echo "SALDO:" . $this->Saldo . "<br>";
        }
    }
?>