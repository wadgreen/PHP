<?php

$dsn = 'mysql:host=localhost;dbname=maine';

$user = 'osman';

$pass = '999777333';

try{

   $db = new PDO($dsn, $user, $pass);

echo 'you are connected';

}

catch(PDOException $e){

    echo 'failed' . $e->getMasssage();
}

