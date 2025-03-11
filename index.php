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

    <div class="row g-0">

        <div class="col-9">


            <div class="container">

                <?php
                    require_once "./functions.php";
                ?>

                <div class="row g-4 my-5 bg-secondary">
                    <h1 class="fw-bold">I TUOI DISCHI</h1>



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
        </div>
        <div class="col-3">
            <div class="container-fluid">
                <form action="./server.php" method="POST" class="my-5 bg-secondary p-3">
                    <div class="my-4">
                        <label for="titolo" class="form-label">Titolo</label>
                        <input type="text" name="titolo" id="titolo" class="form-control" required>
                    </div>
                    <div class="my-4">
                        <label for="artista" class="form-label">Artista</label>
                        <input type="text" name="artista" id="artista" class="form-control" required>
                    </div>
                    <div class="my-4">
                        <label for="anno_pubblicazione" class="form-label">Anno</label>
                        <input type="text" name="anno_pubblicazione" id="anno_pubblicazione" class="form-control"
                            required>
                    </div>
                    <div class="my-4">
                        <label for="genere" class="form-label">Genere</label>
                        <input type="text" name="genere" id="genere" class="form-control" required>
                    </div>
                    <div class="py-4">
                        <button class="btn btn-success w-100">AGGIUNGI</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>