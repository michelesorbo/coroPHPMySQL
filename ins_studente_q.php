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

    <?php
        include('config/funzioni.php');

        $nome = pulisci_dati($_POST['nome']);
        //echo $nome;
        //echo "<br>";
        $cognome =  pulisci_dati($_POST['cognome']);
        //echo $cognome;
        //echo "<br>";
        $cf = pulisci_cf($_POST['cf']);
        //echo $cf;
        //echo "<br>";
        //echo $_POST['data_nascita'];
        //echo "<br>";
        //echo $_POST['pwd'];
        $pwd = md5($_POST['pwd']);
        //echo "<br>";
        $email = strtolower(trim($_POST['email']));
        //echo $email;
        //echo "<br>";
        //echo $_POST['condizioni'];

        if(isset($_POST['condizioni'])){
            //$sql = "INSERT INTO studenti VALUES (NULL,'Michele','Sorbo','SRB','mic@mail.it','aass')";
            $sql = "INSERT INTO studenti VALUES (NULL,'".$nome."','".$cognome."','".$cf."','".$_POST['data_nascita']."','".$pwd."','".$email."')";
            //echo "<br>";
            //echo $sql; //Stampo a video la query

            if($db_conn->query($sql) == TRUE){
                echo "Studente inserito correttamente";
            }else{
                echo "Errore nella query ".$sql."<br>".$db_conn->error;
            }
        }else{
            echo "Condizioni non accettate torna indietro e accetta le condizioni per iscriverti!!!!!!";
        }
    ?>

    
    

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