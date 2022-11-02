<?php
    $dept = new DOMDocument();
    $dept->load("empleados.xml");

    $respuesta = $dept->schemaValidate("departamento.xsd");
    //va a devolver true o false si es valido o no

    echo ($respuesta) ? "Documento valido" : "Documento INVALIDO";
