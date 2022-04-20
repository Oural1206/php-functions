<?php
/*
WARNING you must add a function getMysqlClient()
exemple :

function getMysqlClient(){
    return new PDO("mysql:host=localhost; dbname=exemple; charset=utf8", "login", "password");
}
*/

function getMysqlTable($table){
    $tableStatement = getMysqlClient()->prepare("SELECT * FROM ". $table);
    $tableStatement->execute();
    return $tableStatement->fetchAll();
}
?>