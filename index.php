<?php
$headerData = [
  "Introduzione",
  "Norme sulla privacy",
  "Termini di servizio",
  "Teconologie",
  "Domande Frequenti"
];

?>

<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Google FAQ</title>
  <!-- link bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- link css -->
  <link rel="stylesheet" href="styles/style.css">
</head>

<body>

  <header>
    <div class="container-fluid">
      <div class="row w-50 align-items-center">
        <div class="col flex-grow-0">
          <img src="img/Google-Logo.png" alt="google-logo-img">
        </div>
        <div class="col p-0">
          <h2 class="fw-light">Privacy & Termini</h2>
        </div>
      </div>
      <div class="row align-items-center border-bottom border-2">
        <ul class="d-flex list-unstyled m-0">
          <?php
          for ($i = 0; $i < count($headerData); $i++) {
            echo "<li class='px-3 py-3'><a href=#>$headerData[$i]</a></li>";
          }
          ?>
        </ul>
      </div>
    </div>
  </header>

  <main>


  </main>

  <footer>

  </footer>
</body>

</html>