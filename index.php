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
    <header class="text-center pb-4">
      <h1>Ciao Utente!</h1>
      <h3>Inserisci la parola da censurare ed il paragrafo.</h3>
    </header>
    <main>
      <form action="censored-content.php" method='POST'>
        <div class=" mb-3">
          <span>Parola da censurare:</span>
          <input class="form-control" name='word' placeholder="Inserisci la parola da censurare" />
        </div>
        <div>
          <span>Paragrafo da controllare:</span>
          <textarea class="form-control" name='content' placeholder="Inserisci qui il paragrafo"></textarea>
        </div>
        <div class=" text-center py-4">
          <button class="btn btn-success w-100">Invia</button>
        </div>

      </form>
    </main>
  </div>
</body>

</html>