<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP DISCHI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body class="text-bg-dark">
    <header>
        <nav class="navbar bg-black">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="./img/spotify.png" width="50">
                </a>
            </div>
        </nav>
    </header>

    <div class="container">

        <?php
            $json_text = file_get_contents("./discs.json");
            
            // var_dump($json_text);
            
            $discs = json_decode($json_text,true);
            
            // var_dump($discs);
            ?>

        <div class="row g-4 my-5 bg-secondary">
            <h1 class="text-center fw-bold">I TUOI DISCHI</h1>
            <hr>
            <?php
            foreach($discs as $disc){
                ?>
            <div class="col-sm-6 col-lg-4 p-3">
                <div class="card h-100 border-0">
                    <div class="p-4 bg-dark h-100">
                        <img src="<?php echo $disc["url_cover"] ?>" class="card-img-top rounded-0">
                    </div>
                    <div class="card-body text-bg-dark text-center p-3">
                        <h4 class="card-title"><?php echo $disc["titolo"] ?></h4>
                        <h6 class="card-title"><?php echo $disc["artista"] ?></h6>
                        <p class="card-text"><?php echo $disc["anno_pubblicazione"] ?></p>
                        <p class="card-text"><?php echo $disc["genere"] ?></p>

                    </div>
                </div>
            </div>
            <?php
            }
         ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>