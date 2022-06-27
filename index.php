<?php
    require_once __DIR__ . '/classes/movies.php';

    $movies = [
        new Movie('Fallout Las Vegas', 'Bethesda', 'Bello', 3),
        new Movie('Una notte da  ***ioni', 'Sono simpatico', 'Ridi', 4),
        new Movie('Skyirim', 'Betesda', 'Pirma o poi uscira il 6', 3),
        new Movie('44 gatti', 'Zecchino d oro', 'Comico', 2),
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Movie</title>
</head>
<body>
    <h1>Nuove Uscite</h1>
    <?php foreach($movies as $movie) { ?>
        <div>
            <h3><?= $movie->title; ?></h3>
            <h1>Regist: <?= $movie->director; ?></h1>
            <span>Genre: <?= $movie->genre; ?></span><h>
            <div>Quote: <?= $movie->getQuote($movie->stars); ?></div>
            <hr>
        </div>
    <?php } ?>
</body>
</html>