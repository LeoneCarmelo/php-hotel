<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];
/* foreach ($hotels as $hotel) {
    foreach ($hotel as $key => $value) {
        if (is_bool($value)) {
            if ($value === true) {
                $value = "Yes";
            } else {
                $value = "No";
            }
        }
        echo $key . ": " . $value . "<br>";
    }
} */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php-Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container py-5 fw-bold">
        <div class="row row-cols-5 flex-wrap">
            <?php foreach ($hotels[0] as $key => $value): ?>
                <div class="col">
                    <h3>
                        <?= ucfirst($key) ?>
                    </h3>
                </div>
            <?php endforeach ?>
            <?php foreach ($hotels as $hotel): ?>
                <?php foreach ($hotel as $key => $value): ?>
                    <?php if (is_bool($value)): ?>
                        <?php if ($value === true): ?>
                            <?php $value = "Yes"; ?>
                        <?php else: ?>
                            <?php $value = "No" ?>
                        <?php endif ?>
                    <?php endif ?>
                    <div class="col">
                        <?= $value; ?>
                    </div>
                <?php endforeach ?>
            <?php endforeach ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>