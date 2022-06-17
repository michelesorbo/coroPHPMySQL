
<!doctype html>
<html lang="it">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Signin Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
<link href="config/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="config/img/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="config/img/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="config/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="config/img/favicons/manifest.json">
<link rel="mask-icon" href="config/img/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="config/img/favicon.ico">
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="config/css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <img class="mb-4" src="config/img/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="email" name="mail" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" name="pwd" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
  </form>

  <?php
    include('config/con_db.php');

    if(isset($_POST['mail'])){
       // echo $_POST['mail'];
        //echo $_POST['pwd'];

        $sql = "SELECT * FROM user WHERE mail = '".$_POST['mail']."'";

        $result = $db_conn->query($sql);

        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            if($row['mail'] == $_POST['mail'] && $row['pwd'] == md5($_POST['pwd'])){
                session_start();
                $_SESSION['logged'] = TRUE;
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_nome'] = $row['nome'];
                $_SESSION['user_cognome'] = $row['cognome'];
                $_SESSION['mail'] = $row['mail'];
                header("Location: dashboard.php");
            }else
                echo "Mail o password errati";
        }else{
            echo "Mail non presente chiedi di registrarti";
        }
    }
?>


</main>
  </body>
</html>
