<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
     <title>index</title>
</head>
<body>
     <form action="badwords.php" method="GET">

          <div>
               <label class="form-label">Inserisci testo</label>
               <textarea class="form-control" id="exampleFormControlTextarea1" name="testo" placeholder="Testo"></textarea>
          </div>

          <div>
               <label class="form-label">Scegli la censura</label>
               <input class="form-control" type="text" placeholder="bad words" name="parola">
          </div>

          <div>
               <button type="submit">Submit</button>
          </div>
     </form>

</body>
</html>