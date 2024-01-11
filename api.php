<?php

// Documentación: https://pokeapi.co/docs/v2#pokemon-section
//https://theofficeapi.dev/api/characters
  
// Nombre del pokemon
$id_personaje = $_POST["id_"];

$url = "https://theofficeapi.dev/api/character/" . $id_personaje;

// Inicializa cURL
$ch = curl_init();

// Configurar las opciones cURL
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// Ejecutr la solicitud y almacenar la respuesta
$response = curl_exec($ch);

// Cerramos la conexion
curl_close($ch);

//echo $response;

$data_personaje = json_decode($response, true);


echo "Nombre: " . $data_personaje["name"] . "<br><br>";
if($data_personaje['gender'] == ""){
    echo "Genero: No disponible <br><br>";
}else{
    echo "Genero: " . $data_personaje["gender"] . "<br><br>";
}

if($data_personaje['marital'] == ""){
    echo "Casado/a: No disponible <br><br>";
}else{
    echo "Casado/a: Con " . $data_personaje["marital"] . "<br><br>";
}


echo "Primera aparicion: En el capitulo " . $data_personaje["firstAppearance"] . "<br><br>";

echo "Ultima aparicion: En el capitulo " . $data_personaje["lastAppearance"] . "<br><br>";

echo "Actor/Actriz: " . $data_personaje["actor"] . "<br><br>";