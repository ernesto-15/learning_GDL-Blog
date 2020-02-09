
<?php

function conexion($db, $user, $pass) {
    try {
        $conexion = new PDO("mysql:host=localhost;dbname=$db", $user, $pass);
        return $conexion;
    } catch (PDOException $e) {
        return ;
    }
}

?>
