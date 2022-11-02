<?php
// no hace falta cerrar si es php puro

    /*
        CONCEPTOS GENERALES de programacion:
            -sobresscritura de metodos
                -> mismo nombre con mismo numero de parametros, diferente comportamiento
                    ->figura con metodo calcular_area
                    -<Clase circulo con ese metodo
                    -clase cuadrado metodo clacular area
                    -hacen cosas distintas
            -Sobecarga de métodos
                -mismo nombre con diferente numero de parametros
            -Sobrecarga de constructores
                -diferentes constructores con el mismo nombre con dif parametros.

            -Polimorfismo: objeto que se comporta como otro objeto
                -casting
                -sobreescritura
                sobrecarga
                -ligadura dinamica

        PHP:
            - Si existe sobreescritura (eso es del cuerpo)
            -No existe sobrecarga (mismo nombre con diferente numero de parametros, diferente comportamiento)
            -No hay sobrecarga de constructores
            -Si hay polimorfismo (a traves de la sobreescritura)
            - ambito de las variables: public, private, protected, por defecto public 

        NOTACION:
        clases empiezan por mayuscula
            -Nombre clase: UpperCamelCase (PascalCase)
            - Nombre metodos : lowerCarmelCase
            acceder desde dentro de la clase
            java: this.attr
            php: $this->attr

    */


    class Asignatura{
        // acostumbrarse a inicializar las variables aunque sea a null
        //getters y setter para que yo pueda acceder
        private $nombre = null;
        private $numcreditos = null;

        //estaticos que son de la clase
        private static $ciclo = null; //estatico

        public function __construct($nombre, $numcreditos)
        {   

            //distruct es como unset pero con objetos en vez de variables
            $this->nombre = $nombre;
            $this->numcreditos = $numcreditos;
            
        }
        
        function getNombre(){
            return $this->nombre;
        }

        function setNombre($nombre){
            $this->nombre = $nombre;
        }


        function getNumeroCreditos(){
            return $this->numcreditos;
        }

        function setNumeroCreditos($numcredit){
            $this->numcreditos = $numcredit;
        }

        //static o dara error
        //this es del objeto
        static function getCiclo(){
            return self::$ciclo;
        }

        //para acceder a algo estatico hay que poner el static en el function y el ::

        static function setCiclo($nomciclo){
         //self es como parent pero para acceder a algo estatico dentro de la propia clase
            self::$ciclo = $nomciclo;
        }


        //sobreescribimos metodo magico toString
        function __toString(){
            return "Datos de la asignatura: <br> "
             . "<br>Nombre asignatura: " . $this->nombre
             . "<br> Numero creditos: " . $this->numcreditos;
        }


    }//fin_clase