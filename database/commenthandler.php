<?php
try{
require_once 'DBConnection.php';
$db = new DBConnection();
$q = "call getComments()";
$stmt = $db->prepare($q);
$stmt->setFetchMode(PDO::FETCH_OBJ);
$stmt->execute();
$comments = $stmt->fetchAll();
}catch(PDOException $e){
    echo $e->getMessage();
}