<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lezione 5 PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Lezione 5 PHP</h1>
    <?php
        //il php apre con <?php e chiude con ? >
        /* questo è un commento */
        # questo è un commento
        $nome = "Stefania"; //string
        $eta = 35; //integer
        $numero_fortunato = 3;
        $spesa_media = 98.25; //float
        $ha_la_patente = true; //boolean
        //print $nome;
        // print $nome;
        //variabili:
        //snake case $spesa_media_al_supermercato
        //camel case $spesaMediaAlSupermercato
        //pascal case $SpesaMediaAlSupermercato
        $spesa_media_carburante = 205.10;
        $spesa_media_mensile = $spesa_media + $spesa_media_carburante;
        // $spesa_media_mensile = $spesa_media_mensile + 205.22;
        $spesa_media_mensile += 205.22;
        //print $spesa_media_mensile;
        echo "<div>
            La Spesa media mensile di $nome è $spesa_media_mensile 
        </div>";
        print 'la spesa di $nome'; // non funziona l'iniezione di variabile
        print "la spesa di $nome"; // funziona l'iniezione di variabile
        echo "la spesa di ", $nome; // funziona l'iniezione di variabile

        // localhost:8080/modulo-9/lezione5/lezione5.php?prodotto=5
        //http://localhost/modulo-9/lezione5/lezione5.php?prodotto=5
        $prodotto = $_GET["prodotto"];
        echo "<div>
        Il prodotto selezionato è il $prodotto 
        </div>";
    ?>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>