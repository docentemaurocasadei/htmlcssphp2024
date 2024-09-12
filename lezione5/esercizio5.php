<!-- creare uno script php che:
- definisca una variabile chiamata prezzo
- definisca una variabile chiamata descrizione
- durante la definizione il prezzo deve valere 105.22 e la descrizione 
"scarpe nike "
- stampare a video un h3 con 
    il prezzo delle scarpe nike è 105.22

- passare alla get un parametro chiamato sconto (valore a piacere)
    localhost:8080/modulo9/lezione5/esercizio5.php?sconto=20
- modificare il testo proposto come:
    il prezzo delle scarpe nike è 105.22 scontato per te a ***.** 
     -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio 5</title>
    <link rel="stylesheet" href="./esercizio5.css">
</head>
<body>
    <?php 
        //localhost:8080/modulo9/lezione5/esercizio5.php
        //http://localhost/modulo-9/lezione5/esercizio5.php
        $prezzo = 105.22;
        $descrizione = "Scarpe Nike";
        $sconto = $_GET["sconto"];
        $prezzo_scontato = $prezzo - ($prezzo * $sconto / 100);
        print " <h3>
                    Il prezzo delle $descrizione è $prezzo scontato ad € $prezzo_scontato
                </h3>";
                
    ?>
    <!-- < ?php print oppure < ?=  sono uguali -->
    <h3>
        Il prezzo delle <?= $descrizione ?> 
        è <span class="rosso_barrato"> <?= $prezzo ?>  </span>  
        scontato a <span class="verde_grande">   <?= $prezzo_scontato ?>  </span>
    </h3>
</body>
</html>
