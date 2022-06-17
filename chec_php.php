<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>check</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Seleziona il docente: 
        <select name="docente">
        <?php
            include('config/con_db.php');
            $sql_docenti = "SELECT id, nome, cognome FROM docenti";
            $res_doc = $db_conn->query($sql_docenti);

            while($row = $res_doc->fetch_assoc()){
                echo "<option value='".$row['id']."'>".ucfirst($row['nome'])." ".ucfirst($row['cognome'])."</option>";

            }
        ?>
        </select>
        <br>
        Seleziona la materia:<br>
        <?php
        $sql_mat = "SELECT * FROM materie";
        $res_mat = $db_conn->query($sql_mat);

        while($row = $res_mat->fetch_assoc()){
            echo "<input type='checkbox' name='materie[]' value='".$row['id']."'>".strtoupper($row['nome'])."<br>";
        }

        ?>
        <input type="submit">
    </form>

    <?php
        if(isset($_POST['docente'])){

        //var_dump($_POST['materie']);
        foreach($_POST['materie'] as $materia ){
            $sql_ins = "INSERT INTO docenti_mateire VALUE (NULL,".$_POST['docente'].",".$materia.")";
            $res_ins = $db_conn->query($sql_ins);
        }
    }
    ?>
    
</body>
</html>