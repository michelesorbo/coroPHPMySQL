<?php
include('config/con_db.php');
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
    <?php include('menu.php'); ?>
    <h1>Elenco Studenti</h1>

    <table class="table table-striped">
        <tr>
            <th>Nome</th>
            <th>Cognome</th>
            <th>Codice Fiscale</th>
            <th>Data di Nascita</th>
            <th>Mail</th>
            <th>Opzioni</th>
        </tr>
        <?php
            $sql = "SELECT nome,cognome,cf,data_nascita,email FROM studenti";
            $result = $db_conn->query($sql);

            while($row = $result->fetch_assoc()){
                echo "<tr>";
                echo "<td>".ucfirst($row['nome'])."</td>";
                echo "<td>".ucfirst($row['cognome'])."</td>";
                echo "<td>".$row['cf']."</td>";
                //Trasformo la data in formato italiano
                $timestamp = strtotime($row['data_nascita']);
                echo "<td>".date('d/m/Y', $timestamp)."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td><a href='invia_mail.php?mail=".$row['email']."'><img src='config/img/email_icon.png' width='28px'></a></td>";
                echo "</tr>";
            }

        ?>
    </table>
    

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