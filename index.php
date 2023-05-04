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
//foreach ($hotels as $hotel) {
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
//}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php-Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container py-5">
        <div class="row row-cols-5">
            <?php foreach ($hotels[0] as $key => $value): ?>
                <?php if (str_contains($key, "_")): ?>
                    <?php str_replace("_", " ", $key); ?>
                <?php endif ?>
            <div class="col">
                <span>
                    <?= $key; ?>
                </span>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</body>

</html>