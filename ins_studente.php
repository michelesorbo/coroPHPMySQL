<?php
session_start();
if(!$_SESSION['logged'] == $_COOKIE['logged']){
    header("Location: sign_in.php");
}
?>
<!doctype html>
<html lang="it">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Inserimento Studenti</title>
  </head>
  <body>
    <div class="container">
    <?php include('menu.php'); ?>
    <h1>Inserimento studenti</h1>

    
    <!-- Creo il Form di inserimento studenti -->
    <form method="post" action="ins_studente_q.php">
        <div class="mb-3">
            <label for="exampleInputNome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="exampleInputNome" aria-describedby="nomeHelper" name="nome" required>
            <div id="nomeHelper" class="form-text">Devi inserire il tuo nome</div>
        </div>

        <div class="mb-3">
            <label for="exampleInputCognome" class="form-label">Cognome</label>
            <input type="text" class="form-control" id="exampleInputCognome" name="cognome" required>
        </div>

        <div class="mb-3">
            <label for="exampleInputCF" class="form-label">Codice Fiscale</label>
            <input type="text" class="form-control" id="exampleInputCF" name="cf" maxlength="16" required>
        </div>

        <div class="mb-3">
            <label for="exampleInputDN" class="form-label">Data Nascita</label>
            <input type="date" class="form-control" id="exampleInputDN" name="data_nascita" required>
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>

        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="pwd" required>
        </div>

        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1" name="condizioni">
          <label class="form-check-label" for="exampleCheck1">Accetto le condizioni</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

      

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>