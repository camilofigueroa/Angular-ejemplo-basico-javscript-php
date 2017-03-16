<?php

    /**
     * Autor: Camilo Figueroa ( Crivera ).
     * Este php me permite usar el poder del php con un ejemplo de la tecnología AngularJS.
     * Por el momento no se usa base de datos. Esto se hace con el fin solo de establecer la comunicación entre los dos lenguajes.
     */

    if( isset( $_GET[ 'cadena' ] ) ) //Recibimos la cadena enviada desde un texto html con tenolocía AngularJs.
    {     
        
        $salida = ""; //Se establece la variable que retornará los datos.
        $otro_apellido = $_GET[ 'cadena' ];
        
        /*Esta cabecera es necesaria para establecer que lo retornado es un formato de datos Json.*/
        header("Access-Control-Allow-Origin: *");
        header("Content-Type: application/json; charset=UTF-8");
        
        $salida = '{ "records": [ { "Alias": "El gordo.", "Nombres": "Alberto", "Apellidos": "Buendia  '.$otro_apellido.'  " } ] }';
        
        echo( $salida );
    
    }
?> 