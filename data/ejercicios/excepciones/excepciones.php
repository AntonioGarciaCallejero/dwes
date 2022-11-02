<!-- funcionan exactamente igual que en  java, puedo o capturarla o lanzarla
si la la lanzo tengo que recogerla, si la capturo tengo que tratarla -->
<?php
    include_once "manejadorexcepcion.php";
// calcula el inverso del numero pasado como parametro
//el inverso de un numero es 1 dividido entre ese numero
    function inverso($num){
        if ($num == 0) {
            //en vez de lanzar algo generico de tippo exception
           throw new MiExcepcion("No se puede dividir por 0");
        }
        return 1/$num;
    }

    try{
        //el codigo que puede lanzar una excepcion
        echo "El inverso del numero 5 es:" . $inverso(5);
    }catch(Exception $e){
//aqui solo hay un tipo de excepcion creo
//las excepciones en php son clases, es decir objetos
//tienen atributos y metodos get
        echo "La razon de la excepcion es: ". $e->getMessage();
        //imprimiria el mensaje que me devuelve la excepciones
    }finally{
        echo "Esto siempre se ejecuta";
    }

    //algo dividido entre 0 da infinito y error
    try{
        //el codigo que puede lanzar una excepcion
        echo "El inverso del numero 0 es:" . $inverso(0);
    }catch(MiExcepcion $e){
//aqui solo hay un tipo de excepcion creo
//las excepciones en php son clases, es decir objetos
//tienen atributos y metodos get
        echo "La razon de la excepcion es: ". $e->errorPersonalizado();
        //imprimiria el mensaje que me devuelve la excepciones
    }finally{
        echo "Esto siempre se ejecuta por segunda vez";
    }
//si no la capturo la excepcion se propagara hacia arriba hasta que sale por pantalla
//que es lo mas arriba que puede ir
//aqui no hay clases principales main como en java
