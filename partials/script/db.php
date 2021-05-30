<?php

//
$host = 'localhost';
$user = 'root';
$password = 'root';
$db = 'hotel1';

//connessione
$conn = new mysqli($host, $user, $password, $db);
//var_dump($conn);

//controllo conn
if( $conn && $conn->connect_error){
    die("Errore di connessione: '$conn->connect_error'");
}
