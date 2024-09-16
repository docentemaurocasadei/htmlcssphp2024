<!-- creare 2 pulsanti 
    <a href="..." class="btn btn-primary">Voto di Giovanni</a>
    <a href="..." class="btn btn-primary">Voto di Silvia</a>
    1. dentro href inserire il corretto link per passare il voto (Giovanni 8 | Silvia 6)
    2. aggiungere ad href anche il nome ?voto=8&nome=Giovanni
        http://localhost/modulo-9/lezione7/lezione7.php?voto=6&nome=Silvia
    3. riecevere e visualizzare anche il paramentro nome dalla $_GET
-->
<?php 
    $voto=$_GET["voto"]; //legge il parametro nella url
    $nome=$_GET["nome"];
    if ($voto >= 7){
        // se vero (allora)
        $class = "alert alert-success";
    }else{
        //se falso (altrimenti)  
        $class = "alert alert-danger";
    }
    //calcolare la media dei voti
    $giovanni=8;
    $silvia=6;
    $maria=9;
    //calcolare la media nella variabile $media
    $media = ($giovanni+$silvia+$maria) / 3;
    //visualizzare la media sotto al messaggio inserito
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lezione 7 Php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./lezione7.css">
  </head>
  <body>
    <h1>Lezione 7 Php</h1>
    <div class="<?= $class ?>">
        Il cliente <?= $nome ?> ha espresso voto: <?= $voto ?>
    </div>
    <a href="http://localhost/modulo-9/lezione7/lezione7.php?voto=6&nome=Silvia" 
            class="btn btn-primary">Voto di Silvia</a>
    <a href="http://localhost/modulo-9/lezione7/lezione7.php?voto=8&nome=Giovanni" 
            class="btn btn-primary">Voto di Giovanni</a>
    <a href="http://localhost/modulo-9/lezione7/lezione7.php?voto=9&nome=Maria" 
            class="btn btn-primary">Voto di Maria</a>

            <!-- 
                bordo intorno
                staccata dai pulsanti
                colore carattere rosa
            -->
    <div class="media">La media dei voti è: <?= $media ?></div>
            

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>