<?php
session_start();
if($_SESSION['logged'] == FALSE){
    header("Location: sign_in.php");
}
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

    <title>Nuovo Corso</title>
  </head>
  <body>
    <div class="container">
    <?php include('menu.php'); //Richiamo il menù?>
    <h1>Inserisci nouvo corso</h1>
    <!-- INSERISCI IL CONTENUTO DELLA PAGINA QUI -->
    <form method="post" action="ins_corso_q.php">
        <div class="mb-3">
            <label for="exampleInputCorso1" class="form-label">Nome del Corso</label>
            <input type="text" name="nome" class="form-control" id="exampleInputCorso1">
        </div>

        <div class="mb-3">
            <label for="exampleInputCorso2" class="form-label">Edizione</label>
            <input type="text" name="edizione" class="form-control" id="exampleInputCorso2">
        </div>
        
        <div class="row">
            <div class="mb-3 col-6">
                <label for="exampleInputDN" class="form-label">Data inizio</label>
                <input type="date" class="form-control" id="exampleInputDN" name="data_inizio">
            </div>

            <div class="mb-3 col-6">
                <label for="exampleInputDN" class="form-label">Data fine</label>
                <input type="date" class="form-control" id="exampleInputDN" name="data_fine">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Inserisci</button>
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