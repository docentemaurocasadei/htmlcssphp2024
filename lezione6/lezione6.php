<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lezione 6 - PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Lezione 6 - PHP</h1>
    <?php 
        //tipi di dato
        $numero = 10; //integer
        $nome = "Marco"; //string
        $prezzo = 15.25; //float
        $maggiorenne = true;  //boolean
        $saldo = null; //null (vuoto)
        $lista_nomi = ["Irene", "Vincenzo", "Laila", "Oscar"]; //array 
        $lista_preferiti = [7, 10, 1, 26];
        $lista_nomi_preferiti = [
            "Irene" => 7,
            "Vincenzo" => 10,
            "Laila" => 1,
            "Oscar" => 26,
        ]; //array associativo
        // $numero = $_GET["numero"];
        // print "hai inserito il n. $numero";

        // print_r($lista_nomi_preferiti); //print_r()

        $prodotti = [
            1 => "Evidenziatore",
            2 => "Matita",
            3 => "Penna",
            4 => "Blocco Note",
        ];
        $prezzi = [
            1 => 1.25, 
            2 => 0.55, 
            3 => 0.60, 
            4 => 1.90
        ];
        $immagini = [
            1 => "evid.jpg", 
            2 => "mat.jpg", 
            3 => "pen.jpg", 
            4 => "note.jpg"
        ];
        //ricevere il codice dalla $_GET e visualizzare il nome del prodotto
        print "<hr>";
        //http://localhost/modulo-9/lezione6/lezione6.php?numero=5&codice=1
        $codice = $_GET["codice"];
        $prodotto = $prodotti[$codice];
        // print "il Prodotto è: $prodotto";
        $prezzo = $prezzi[$codice];
        $immagine = $immagini[$codice];
    ?>
    <a href="lezione6.php?codice=1" class="btn btn-secondary"><?= $prodotti[1] ?></a>
    <a href="lezione6.php?codice=2" class="btn btn-secondary"><?= $prodotti[2] ?></a>
    <a href="lezione6.php?codice=3" class="btn btn-secondary"><?= $prodotti[3] ?></a>
    <a href="lezione6.php?codice=4" class="btn btn-secondary"><?= $prodotti[4] ?></a>
        <div class="card" style="width: 18rem;">
        <img src="<?= $immagine ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php print $prodotto ?></h5>
            <p class="card-text"><?= "€ $prezzo" ?></p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
        </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>