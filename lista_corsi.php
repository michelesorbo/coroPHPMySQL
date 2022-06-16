<?php
session_start();
if($_SESSION['logged'] == FALSE){
    header("Location: sign_in.php");
}
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

    <title>Lista Corsi</title>
  </head>
  <body>
    <div class="container">
    <?php include('menu.php'); ?>
    <h1>Elenco Corsi</h1>

    <table class="table table-striped">
        <tr>
            <th>Nome</th>
            <th>Edizione</th>
            <th>Data Inizio</th>
            <th>Data Fine</th>
            <th>Stato</th>
            <th>Opzioni</th>
        </tr>
        <?php
            $sql = "SELECT * FROM corsi";
            $result = $db_conn->query($sql);

            while($row = $result->fetch_assoc()){
                echo "<tr>";
                echo "<td>".ucfirst($row['nome'])."</td>";
                echo "<td>".ucfirst($row['edizione'])."</td>";
                //Trasformo la data in formato italiano
                $timestamp_inizio = strtotime($row['data_inizio']);
                echo "<td>".date('d/m/Y', $timestamp_inizio)."</td>";

                $timestamp_fine = strtotime($row['data_fine']);
                echo "<td>".date('d/m/Y', $timestamp_fine)."</td>";
                
                echo "<td>Completato</td>";
                /*
                $today = strtotime(date('Y-m-d'));

                if($timestamp_fine < $today){
                    echo "<td>Completato</td>";
                }else{
                    echo "In Corso";
                }
                */


                echo "<td><a href='#'><img src='config/img/email_icon.png' width='28px'></a></td>";
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