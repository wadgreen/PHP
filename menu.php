<?php

$dsn = 'mysql:host=localhost;dbname=products';

$user = 'root';

$pass = '';

try{

   $db = new PDO($dsn, $user, $pass);

echo 'you are connected';

}

catch(PDOException $e){

    echo 'failed' . $e->getMasssage();
}


?>