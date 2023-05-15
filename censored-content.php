<?php
  $lenght = 0;
  $content = $_POST['content'];
  $word = $_POST['word'];
  $length = strlen($content);
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>PHP Badwords</title>
</head>

<body>
  <div class="wrapper container d-flex flex-column justify-content-center align-items-center">
    <header class="text-center pb-5">
      <h1>Ecco il tuo risultato</h1>
    </header>

    <main>

      <!-- Stampa paragrafo non censurato -->
      <div>Lunghezza del veccio paragrafo: <?php echo $length ?></div>
      <p><?php echo $content ?> </p>

      <!-- Stampa paragrafo censurato -->
      <div>Lunghezza del nuovo paragrafo: <?php echo $length ?></div>
      <div>Contenuto Censurato: </div>
      <p><?php  echo str_replace($word, '***', $content); ?></p>

      <div class="text-center mt-3">
        <a class="btn btn-primary" href='index.php'>Torna alla home</a>
      </div>
    </main>
  </div>
</body>

</html>