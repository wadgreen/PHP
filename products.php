<?php

$dsn = 'mysql:host=localhost;dbname=login';

$username = '';

$pass = 'root';

try {

    $db = new PDO($dsn, $user, $pass);

    echo 'you are connected';

} catch (PDOException $e) {

    echo 'failed' . $e->getMasssage();
}


?>