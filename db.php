<?php
$connection = new PDO("mysql:host=localhost;dbname=lab8","root","");
function getUser($email){
    global $connection;
    $query = $connection->prepare("SELECT * FROM logins WHERE email = :email LIMIT 1");
    $query->execute(array("email"=>$email));
    $result = $query->fetch();

    return $result;
}
?>