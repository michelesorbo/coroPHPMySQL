<?php

//Connessioa al DB con mysqli_connect
$db_host = "localhost"; //Host del database
$db_user = "root"; //Utente del database
$db_password = "root"; //Password dell'utente se non esiste lasciare gli apici vuoti
$db = "corso"; //Seleziono il DB da usare


//Provo a connettermi al BD
$db_conn = mysqli_connect($db_host,$db_user,$db_password);
//$db_conn = mysqli_connect('localhost','root','root');
if(!$db_conn){
    echo "Errore DB";
}

//Seleziono il DB
mysqli_select_db($db_conn, $db);

?>