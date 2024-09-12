<!-- definire un array di articoli
- $titoli
- $autori
- $immagini

inserire 5 titoli, 5 autori e 5 immagini (a scelta)

inserire 5 pulsanti per richiamare gli articoli, la urldecode
localhost:8080/modulo9/lezione6/esercizio6.php?articolo=1

inserire una card per ogni articolo che mostra l'articolo indicato -->

<?php
// Definire gli array associativi
$titoli = [
    1 => "L'arte della programmazione",
    2 => "Il mondo della tecnologia",
    3 => "Come imparare PHP",
    4 => "Le basi del design web",
    5 => "Introduzione a JavaScript"
];

$autori = [
    1 => "Mario Rossi",
    2 => "Luca Verdi",
    3 => "Anna Bianchi",
    4 => "Giulia Neri",
    5 => "Francesco Gialli"
];

$immagini = [
    1 => "articolo1.jpg",
    2 => "articolo2.jpg",
    3 => "articolo3.jpg",
    4 => "articolo4.jpg",
    5 => "articolo5.jpg"
];

// Recuperare l'articolo dalla query string
$articolo = isset($_GET['articolo']) ? (int) $_GET['articolo'] : 1;
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1 style="text-align: center">Lista Prodotti</h1>
    <section  style="margin-bottom:.5em; text-align: center">
        <?php stampa_pulsante(1, $titoli[1]); ?>
        <?php stampa_pulsante(2, $titoli[2]); ?>
        <?php stampa_pulsante(3, $titoli[3]); ?>
        <?php stampa_pulsante(4, $titoli[4]); ?>
        <?php stampa_pulsante(5, $titoli[5]); ?>
    </section>
    <section class="container">
        <div class="row" style="justify-content: center">
            <div class="card" style="width: 18rem;" >
                <img src="immagini/<?= $immagini[$articolo]?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $titoli[$articolo]?></h5>
                    <p class="card-text"><?= $autori[$articolo]?></p>
                </div>
            </div>
        </div>
    </section>
    <h1>Tutti gli articoli</h1>
    <?php stampa_card("",$titoli[1],$autori[1]); ?>
    <?php stampa_card("",$titoli[3],$autori[3]); ?>
    <?php stampa_card("",$titoli[5],$autori[5]); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

<?php 
    function stampa_pulsante($articolo, $titolo){
        ?>
            <a href="esercizio6.php?articolo=<?= $articolo?>" 
                class="btn btn-info"><?= $titolo?>
            </a>
        <?php
    }
    function stampa_card($immagine, $titolo, $autore){
        ?>
        <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?=$titolo?></h5>
            <h6 class="card-subtitle mb-2 text-body-secondary"><?=$autore?></h6>
            <a href="#" class="card-link">Another link</a>
        </div>
        </div>
       <?php 
    }
?>