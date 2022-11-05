<?php

class App
{
  public function __construct($name = "Aplicación PHP")
  {
    // echo "Consturyendo la app <hr>";
  
    $this->name = $name;
    $this->module = "Desarrollo Web en Entorno Servidor";
    $this->teacher = "Rafael Cabeza";
    $this->student = "Fulano De Tal";
  }

  public function run()
  {
    var_dump($_GET);
    //esto no lo entiendo bien
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
  
  public function login()
  {
    // echo "Estamos en login <br>";
    include('views/form.php');
  }  
}
