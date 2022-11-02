<!-- al igual que enjava aqui tambien se pueden anidar excepciones -->
<?php
    class Miexcepcion extends Exception{
        //estoy heredando de la clae excepcion
        public function errorpersonalizado(){
            $menserror = "Informacion del error: "
            . "<br>Mensaje del error : " . $this->getMessage()
            . "<br> Fichero que genera el error : " . $this->getFile()
            . "<br> Line en la que se pridyce el rror : " . $this->getLine();
            return $menserror;
        }
    }