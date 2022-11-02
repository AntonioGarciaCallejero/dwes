<?php

    //vamos a ver 6 funciones
    //w sobreescribe mirar la documentacion
    //para añair contenido comorl
    //lo pongo asi porque esta al mismo nivel , sino tendria que poner la ruta completa
    //abre 
    $nombrefich = "modulodwes.txt";
    //leo el fichero hasta que llego al final EOF
    $fp = fopen($nombrefich , "r");//true si no hay problemas


    if(!$fp){
        echo"<br>No he podido leer el fichero";
    }else{
        //leer el fichero
            //leer caaracter a caracter: funcion fgetc
            //fp es un apuntador que apunta a la apertura del fichero
            //el nombre del fichero solo se pone en el fopen lego el resto de funciones con el apuntador
            //mientras no llegues al final del fichero..
            // while(!feof($fp)){
            //     //le tengo que pasar el apuntador a ese fichero
            //     //lee caracter a caracter
            //     $caracter = fgetc($fp);
            //     if ($caracter == "\n") {
            //         echo "<br>";
            //         //el caracter \n de php en html no significa nada asi que hacemos esto
            //     }
            //     echo $caracter;
            // }

            //2 leyendo linea a linea
            // while (!feof($fp)) {
            //     $linea = fgets($fp);
            //     //a cada linea que coge le tengo que meter un salto de linea y en html
            //     echo $linea . "<br>";
            // }

            //3a forma de leer un fichero
            //con fread() para al final del fichero o cuando alcanza la longitud especificada
            //en este caso obtengo el tamaño del fichero a travrs  de la funcion filesize
            $contenido = fread($fp, filesize($nombrefich));
            var_dump($contenido);
            //podemos usar printr en ve de var dump, var dump te saca la longitud
            //normalmente se utliza el de linea a linea

    }
    //siendo caracter a caracter el salto de linea no me 
    echo "<br> Cerrando el fichero";
    //acostumbrarse a cerrar kos ficheros y las conexiones a bases de datos
    fclose($fp);


    //a: añadir sin borrar
    //aqui ha habido movidas con permisos de ficheros
    $fp2 = fopen($nombrefich , "a");//true si no hay problemas
    if(!$fp2){
        echo "<br> no he podido abrir el fichero para Escribir";
    }
    else{
        //true si no hay problemas
        //PHP_EOL es una constante que es un salton de linea \n
        $textoainsertar = "Esta es otra linea." . PHP_EOL;
        fwrite($fp2, $textoainsertar );
        
    }
    //el servidor apache no se ejecuta con el usuario laumno
    fclose($fp2);
    
