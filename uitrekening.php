<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tafels</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <div class="phpindex-text">
        <h1>Tafels berekenen.</h1>
        <p>Hier kunt u tafels berekenen!</p>
    </div>
  
<div class="submit-button">    
    <form action="index.html">
        <input type="submit" id="submitphp" value="Opnieuw iets berekenen">
    </form>
</div>
    
    <div class="phpcode">
        <?php

            $tafel = $_POST['tafel'];
            $van = $_POST['vanaf'];
            $tm = $_POST['tm'];
        
            $afstand = abs($van - $tm);

            if($afstand > 20) {
                echo "De afstand is groter dan 20. Voer alstublieft een getal kleiner of gelijk aan 20.";
            } else {
                // Check if $van is greater than $tm and swap them if necessary
                if($van > $tm) {
                    $temp = $van;
                    $van = $tm;
                    $tm = $temp;
                }
                
                echo "Hier is uw resultaat! <br><br>";

                for($i=$van; $i<=$tm; $i++){
                    $uitkomst = $i * $tafel;

                    echo "$i keer $tafel is $uitkomst <br>";
                }
            }

        ?>
    </div>
        <br><br><br>
</body>
</html>
