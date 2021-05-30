<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP e MYSQL - Hotel stanze</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <?php
        require_once __DIR__ . '/partials/script/room_call.php';
    ?>
    
    <main class='container'>
        <h1>ROOMS LIST</h1>
        <table>
            <thead>
                <tr>
                    <th>Room Number</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($rooms as $room){ ?>
                <tr>
                    <td>
                        <?php echo $room['room_number'] ?>
                    </td>
                    <td>
                        <a href="./details.php?id=<?php echo $room['id']; ?>">details >></a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>

</body>
</html>