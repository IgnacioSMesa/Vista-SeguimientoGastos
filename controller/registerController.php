<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Recoger los datos del formulario
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = trim($_POST['password'] ?? '');

    // Validación simple
    if (!$name || !$email || !$password) {
        echo "Todos los campos son obligatorios.";
        exit;
    }

   
    $data = [
        'name' => $name,
        'email' => $email,
        'password' => $password
    ];
    
    var_dump($data);


    // --- PARA MÁS ADELANTE ---
    /*
    $url = 'http://localhost:8000/api/register'; // Cambia esto cuando tu API esté lista

    $options = [
        'http' => [
            'header'  => "Content-type: application/json\r\n",
            'method'  => 'POST',
            'content' => json_encode($data),
        ]
    ];
    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);

    if ($result === FALSE) {
        echo "Error al conectar con la API.";
    } else {
        echo "Respuesta de la API: " . $result;
    }
    */
} else {
    echo "Acceso no válido.";
}
