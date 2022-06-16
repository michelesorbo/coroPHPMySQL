<?php
include('config/con_db.php'); //Creo la connessione al DB
include('config/funzioni.php'); //Connetto le funzioni 
?>
<!doctype html>
<html lang="it">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Lista Studenti</title>
  </head>
  <body>
    <div class="container">
    <?php include('menu.php'); //Richiamo il menù?>
    <h1>Invia Mail a Studente</h1>
    <!-- INSERISCI IL CONTENUTO DELLA PAGINA QUI -->
    <form method="POST" action="#">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Destinatario</label>
        <input type="email" name="destinatario" value="<?php echo $_GET['mail']; ?>" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput2" class="form-label">Oggetto</label>
        <input type="text" name="oggetto" class="form-control" id="exampleFormControlInput2" placeholder="Oggetto della mail">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Messaggio</label>
        <textarea name="messaggio" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Invia Mail</button>
    </form>    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    </div>
  </body>
</html>