<?php

class App
{
  public function __construct()
  {
    // echo "Consturyendo la app <hr>";
  
    $this->array = null;
    
  }

  public function run()
  {
    //nada mas empezar no existe por lo que vamos a ir al else
    if (isset($_GET['method'])) {
      $method = $_GET['method'];
      //si existe la clave method en $_GET entonces la variable se va a igualar a su valor
    } else {
      //sino la variable va a ser igual a index
      $method = 'index';
    }
    //la variable metodo sera igual a lo que sea y despues se llamara a la funcion
    //llevandonos a la pagina que sea
    //con excepcion y todo
    try {
      //Esto es para llamar a la funcion de mas abajo en plan string() estando string
      //almacenado dentro de la variable method
      $this->$method();
      //throwable engloba a error y exception      
    } catch (\Throwable $th) {
      //si el metodo existe (en esta clase, nombre del metodo)
      if (method_exists($this, $method)) {
        header("HTTP/1.0 500 Internal Server Error");
        return http_response_code(500);
        echo "Error en el servidor";
      } else {
        header("HTTP/1.0 404 Not Found");
        echo "No encontrado";      
      }  
    } finally {
      echo "<pre>";
      //imprimira la excepcion (si la hay)
      print_r($th);
    }
  }

  //entender esa mierda
  //esto es para llamar a las views
  public function index()
  {
    // echo "Estamos en el index<br>";
    include('views/index.php');
  }
  
  public function fibonacci()
  {
    $penultimo= 0;
    $ultimo= 1;
    //no declarar variables nulas
    $suma= 0;
    
    for ($i = 0; $penultimo < 1000000; $i++) { 
        $this->array[]= $penultimo;
        //se almacena en el array y luego desaparece despues de hacer la suma

        //hacemos la suma
        $suma = $penultimo + $ultimo;
       
        
        //el penultimo es igual al ultimo y se pierde el valor de penultimo
        $penultimo = $ultimo;
        
        //el ultimo es igual a la suma
        $ultimo = $suma;

        //y vuelta a empezar   
    } 



    include('views/vistaArray.php');
  }  

  public function potencias2()
  {
    //ini_set('memory_limit', '3G');
    //he estado haciendo el gamba con esto hasta darme cuenta de que no era ese el problema
    $penultimo= 0;
    $ultimo= 1;
    //no declarar variables nulas
    $suma= 0;
     
    for ($resultado = 2; $resultado < pow(2,24); $resultado = $resultado* 2) { 
        $this->array[]= $resultado;
        //se almacena en el array y luego desaparece despues de hacer la suma

    } 



    include('views/vistaArray.php');
  }  

  public function factoriales()
  {
    //un for dentro de un for
    //con un for dentro de un dowhile tal vez
    //un do while 
    //vamos a empezar con algo que calcule factoriales
    // $mayorque = true;

    // while ($a <= 10) {
    //   for ($i=1; $i < ; $i++) { 
      
    //   }
    // }
    // $numero = 1;
    
    for ($i=1, $auxiliar = 1; $auxiliar < 1000000 ; $i++) { 
      $auxiliar = $i*$auxiliar;
      $this->array[]= $auxiliar;
      
    }



    include('views/vistaArray.php');
  }  

  public function primos()
  {
    //numeros primos entre 1 y 10000
    //un for con un if dentro
    $contadorDivisores = 0;

    for ($contador1=2; $contador1 < 10000 ; $contador1++) { 
      //necesitamos contar los divisores
      
      for ($contador2=1; $contador2 <= $contador1; $contador2++) { 
        
        if ($contador1%$contador2==0) {
          $contadorDivisores++;
        }
      }

      if ($contadorDivisores==2) {
        $this->array[]= $contador1;
      }

      $contadorDivisores = 0;
    }



    include('views/vistaArray.php');
  }  
}
