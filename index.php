<?php

// Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
// - L'e-commerce vende prodotti per animali.
// - I prodotti sono categorizzati, le categorie sono Cani o Gatti.
// - Tra i prodotti, troviamo cibo, giochi, cucce, etc.
// Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia ecc).

include __DIR__ . '/data/index.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous' />
    <title>animals e-commerce</title>
</head>

<body>
    <header class="bg-dark text-white text-center mb-5 p-5">
        <h1>Prodotti</h1>
    </header>
    <main>
        <div class="container">
            <div class="row row-cols-3">
                <?php foreach ($products as $product) : ?>
                    <div class="col mb-5">
                        <div class="card text-center h-100">
                            <h3 class="mt-3"><?= $product->type ?></h3>
                            <img src="<?= $product->poster ?>" class="card-img-top" alt="<?= $product->name ?>">
                            <div class="card-body">
                                <h4 class="card-title p-3"><?= $product->name ?></h4>
                                <h5><?= $product->brand ?></h5>
                                <h6><?= $product->category->label ?></h6>
                                <h4><?= $product->price ?></h4>
                                <?php if ($product instanceof Game) : ?>
                                    <div class="border fw-bold">
                                        <div>Colore: <?= $product->game_color ?></div>
                                        <div>Materiale: <?= $product->material ?></div>
                                    </div>
                                <?php elseif ($product instanceof Bed) : ?>
                                    <div class="border fw-bold">
                                        <div><?= $product->color ?></div>
                                        <div><?= $product->dimensions ?></div>
                                        <div><?= $product->materials ?></div>
                                    </div>
                                <?php elseif ($product instanceof Food) : ?>
                                    <div class="border fw-bold">
                                        <div><?= $product->food_type ?></div>
                                        <div><?= $product->date ?></div>
                                    </div>
                                <?php endif; ?>
                                <p class="card-text my-3 fw-bold fst-italic"><?= $product->description ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>
</body>

</html>