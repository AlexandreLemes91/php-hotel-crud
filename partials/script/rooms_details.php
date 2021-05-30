<?php

require_once __DIR__ .'/db.php';

$id = empty($_GET['id']) ? false : $_GET['id'];

if( $id ){
    $stmt = $conn->prepare( "SELECT  `room_number`, `floor`, `beds` FROM `stanze` WHERE `id`= ?" );
    $stmt->bind_param('s', $id);

    $stmt->execute();

    $result = $stmt->get_result();

    if($result && $result->num_rows>0){
        $details = $result->fetch_assoc();
    }else{
        echo 'Error';
    }
}

$conn->close();