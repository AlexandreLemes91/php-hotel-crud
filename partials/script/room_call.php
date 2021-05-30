<?php
    require_once __DIR__ .'/db.php';

    $query = 'SELECT `id`, `room_number` FROM `stanze`';
    $result = $conn->query($query);

    if( $result && $result->num_rows > 0 ){
        $rooms = [];

        while( $row = $result->fetch_assoc() ){
            $rooms[] = $row;
        }
        //var_dump($rooms);
    }else{
        echo 'Error';
    }

    $conn->close();