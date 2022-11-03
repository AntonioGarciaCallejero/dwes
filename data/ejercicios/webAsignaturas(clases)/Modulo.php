<?php


        /*
        -interfaces, clases abstractas, php no es oritentado a objetos
        -objetos
        -polimorfismo: sobreescrtitura de metodos
        - no* se pueden sobrecargar metodos en php
        -no* se pueden sobrecargar constructores
        -bueno no con asteriscos, hay que hacerlo de forma manual de forma raruna
        -no como java que lo hace automaticamente
        - para definir un constructor __construct
        -existe la herencia unica, no hay herencia multiple, no puedo heredar de varias clases a la vez
        -herencia unica -> extends
        -si quiero multiple tengo que usar interfaces
        -invocar "algo de padre: parent:: es como super en java
        $this-> para acceder a la propiedades de la clase
        $this->metodo
        $this->atributo
            static contador; variable estatica
            ->acceso a elemento estatico detor de la clase: self::
            -> algo estatico es algo que perteece a la clase, no al objeto (y por tanto sera comun a todos los objetos, entiendo)
            ->public sera distinto en cada objeto de esa clase imagino


        */
    class Modulo extends Asignatura{
        private $codigo = null;

        function __construct($nombre, $numerocreditos, $codigo)
        {
            //para llamar algo de la clase padre
            //aqui hay que llamar explicitamente al constructo de la superclase
            //probar esto
            parent::__construct($nombre, $numerocreditos, $codigo);
            $this->codigo = $codigo;
        }


        // function __construct($nombre, $numerocreditos, $codigo)
        // {
        //     //para llamar algo de la clase padre
        //     //aqui hay que llamar explicitamente al constructo de la superclase
        //     //probar esto, parece que tambien se puede hacer asi
        //     parent::__construct($nombre, $numerocreditos);
        //     $this->codigo = $codigo;
        // }

        //lo suyo es que los atributos sean privados y se accedan araves de 
        function getCodigo(){
            return $this->codigo;
        }


        function setCodigo($nuevocod){
            $this->codigo = $nuevocod;
        }

        //el codigo de esto
        function __toString(){
            return "Datos del Modulo: <br> "
             . "<br>Nombre modulo: " . $this->getNombre()
             . "<br> Numero creditos: " . $this->getNumerocreditos()
             ."<br> Codigo del modulo:" . $this->codigo ;
             
        }
    }