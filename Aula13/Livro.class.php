<?php
    class Livro{
        private $Titulo;
        private $Autor;
        private $Disponivel;

        public function __construct($titulo,$autor,$disponivel){
            $this->Titulo = $titulo;
            $this->Autor = $autor;
            $this->Disponivel = $disponivel;
        }

        public function getTitulo(){
            return $this->Titulo;
        }
        public function getDisponivel(){
            return $this->Disponivel;
        }

        public function Emprestar(){
            if($this->Disponivel == true){
                $this->Disponivel = false;
            }else{
                echo "O livro nao esta disponivel para emprestimo";
            }
        }
        public function Devolver(){
            $this->Disponivel = true;
            echo "Obrigado pela devolução";
        }
        public function ExibirStatus(){
            $titulo_livro = $this->getTitulo();

            if($this->getDisponivel() == true){
                $status_livro = "Disponivel";
            }else{
                $status_livro = "Emprestado";
            }

            $status_livro = $this->getDisponivel();
            

            return "O livro".$titulo_livro." esta ". $status_livro;
            //o titulo e  status ('disponivel' ou 'emprestado')
        }
    }

    

?>