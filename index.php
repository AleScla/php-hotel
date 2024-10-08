<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
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
        ?>
        <table class="table">
            <thead>
                <tr>
                    <?php foreach ($hotels as $hotel) { ?>
                        <th scope="col"><?php echo $hotel['name']?></th>
                    <?php 
                        }
                    ?>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php foreach ($hotels as $hotel) { ?>
                        <td scope="col">
                            <?php echo $hotel['description']?>
                        </td>
                    <?php 
                        }
                    ?>
                </tr>
                <tr>
                <?php foreach ($hotels as $hotel) { ?>
                    <td scope="col">
                        <?php 
                        if ($hotel['parking'] == true) echo 'Parcheggio hotel disponibile';
                        else echo 'Parcheggio hotel <strong>non</strong> disponibile'
                        ?>
                    </td>
                <?php 
                    }
                ?>
                </tr>
                <tr>
                    <?php foreach ($hotels as $hotel) { ?>
                        <td scope="col">
                            Voto: <?php echo $hotel['vote']?>
                        </td>
                    <?php 
                        }
                    ?>
                </tr>
                <tr>
                    <?php foreach ($hotels as $hotel) { ?>
                        <td scope="col">
                            Distanza dal centro:  <?php echo $hotel['distance_to_center']?> km
                        </td>
                    <?php 
                        }
                    ?>
                </tr>
            </tbody>
            
        
        </table>
    </body>
</html>