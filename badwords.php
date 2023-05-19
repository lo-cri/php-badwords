<?php

$testo = $_GET['testo'];
$parola = $_GET['parola'];

$stringaModificata = str_replace($parola, '***', $testo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>badwords</title>
</head>
<body>
     <h3>Testo iniziale</h3>
     <ul>
        <li> <?php echo $testo?> </li>
    </ul>
    <p>Lunghezza stringa: <?php echo strlen($testo)?></p> 


     <h3>Il nuovo testo censurato è:</h3>
     <ul>
        <li> <?php echo $stringaModificata?> </li>
    </ul>
    <p>Lunghezza nuova stringa: <?php echo strlen($stringaModificata)?></p> 

     
</body>
</html>