<?php

// Ejercicio: Crea una función que reciba un arreglo de enteros y devuelva solo los números pares en un nuevo arreglo.
// Complejidad: MEDIA (2 puntos)

// 🧠 Pista: Existe una función que se llama array_filter, yo la chusmearía...

function filtrarPares($numeros) {
    $newArray=[];
    foreach ($numeros as $numero){
        if($numero %2==0){
            $newArray[]=$numero;
        }
    }
    return $newArray;

}