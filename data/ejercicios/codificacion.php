<?php
    //serializa, unserialize, json_encode, json_decode


    $capitales = [
        "españa" => "madrid",
        "francia" => "paris"
    ];

    $infotrans = ""; //informacion transformada
    $infonotrans = ""; //informacion de vuelta a la original

    //el array puede no ser asociativo o con otro tipo de valores
    $infotrans = serialize($capitales);
    echo "<br>Informacion serilizada : ";
    var_dump($infotrans);


    $infonotrans = unserialize($infotrans);
    echo "<br>Informacion DEserilizada : ";
    var_dump($infonotrans);

    //se lo podria madnar como una string a una cookie en el campo valor de la cookie

    
    $infotrans = json_encode($capitales);
    echo "<br>Informacion EN JSON : ";
    var_dump($infotrans);

    $infonotrans = json_decode($infotrans);
    echo "<br>Informacion original desde JSON : ";
    var_dump($infonotrans);


