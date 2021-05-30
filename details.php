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
        require_once __DIR__ . '/partials/script/rooms_details.php';
    ?>

    <main class='container'>
        <?php if( !empty($details) ){ ?>
            <h1>Dettaglio Stanza N° <?php echo $details['room_number'];  ?></h1>
            <ul>
                <li>Piano: <?php echo $details['floor']; ?></li>
                <li>Posti Letto: <?php echo $details['beds']; ?></li>
            </ul>
        <?php }else{ ?>
        <h2>Errore</h2>
        <?php } ?>

            <a href="./">Indietro >></a>
    </main>

</body>
</html>