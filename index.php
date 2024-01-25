<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
  
    
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">

    
</head>
<body>
<div class="header">
    <div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed">
        <a class="pure-menu-heading" href="">Bienvenido a mi wé</a>

        <ul class="pure-menu-list">
            
            <li class="pure-menu-item pure-menu-selected"><a href="/" class="pure-menu-link">Home</a></li>
            <li class="pure-menu-item"><a href="/views/users" class="pure-menu-link">Usuarios</a></li>
            <li class="pure-menu-item"><a href="/contact" class="pure-menu-link">Contacto</a></li>
        </ul>
    </div>
</div>

 


<?php


$request = $_SERVER['REQUEST_URI'];
$viewDir = '/views/';

switch ($request) {
    case '':
    case '/':
        require __DIR__ . $viewDir . 'home.php';
        break;

    case '/views/users':
        require __DIR__ . $viewDir . 'users.php';
        break;

    case '/contact':
        require __DIR__ . $viewDir . 'contact.php';
        break;

    default:
        http_response_code(404);
        require __DIR__ . $viewDir . '404.php';
}
 
 ?>

</body>
</html>