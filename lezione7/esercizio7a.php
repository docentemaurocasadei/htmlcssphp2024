<!-- 
    1. creare una pagina php con template bootstrap
    2. inserire all'interno della pagina 3 pulsanti con 3 link 
    3. i link saranno:
    - ballerina
    - tennis
    - stivale
    4. leggere dalla $_GET il nome del prodotto e visualizzarlo in una card
    5. se selezionato il prodotto ballerina fare apparire nella card
        una scritta "offerta" in rosso
-->
<?php 
    $prodotto = $_GET["prodotto"];
    $offerta = "";
    if ($prodotto == "ballerina"){
        $offerta = "<div class='text-danger'>OFFERTA</div>";
    }
    function crea_pulsante($nome){
        ?>
        <a  href="http://localhost/modulo-9/lezione7/esercizio7a.php?prodotto=<?= $nome ?>" class="btn btn-primary">
                <?= $nome ?>
        </a>
        <?php
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Esecizio 7a</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Esecizio 7a</h1>
    <?php 
        crea_pulsante("ballerina");
        crea_pulsante("tennis");
        crea_pulsante("stivale");
        crea_pulsante("camperos");
        crea_pulsante("ciabatta");

    ?>

    <div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title"><?= $prodotto ?></h5>
        <?= $offerta ?>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>