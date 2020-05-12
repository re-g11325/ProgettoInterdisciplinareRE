<?php

//crea database esercizi
//crea tebella id stato sup popolazione


$db_Host = "localhost";
$db_User = "root";
$db_Password = "";
$connessione=new mysqli($db_Host, $db_User, $db_Password) or die ("Connessione fallita");
$db_name = "Covid-19";
$query = "CREATE DATABASE $db_name";
$ris = $connessione->query($query);
if ( ! $ris)
    die("Errore creazione database: " . $connessione->error);
$connessione->close();


$connessione=new mysqli($db_Host, $db_User, $db_Password) or die ("Connessione fallita");
mysqli_select_db($connessione,$db_name);
$tab_name = "dati";
$q1="CREATE TABLE $tab_name";
$q2="( ID int NOT NULL AUTO_INCREMENT PRIMARY KEY, ";
$q3="sintomi int NOT NULL, ";
$q4="terapia int NOT NULL, ";
$q5="domiciliare int NOT NULL, ";
$q6="totale int NOT NULL, ";
$q7="nuovi int NOT NULL, ";
$q8="guariti int NOT NULL, ";
$q9="deceduti int NOT NULL, ";
$q10="casi int NOT NULL, ";
$q11="tamponi int NOT NULL, ";
$q12="ospedalizzati int NOT NULL, ";
$q13="provincia varchar(30) NOT NULL, ";
$q14="enteLocale varchar(30) NOT NULL) ";


$query = $q1 . $q2 . $q3 . $q4 . $q5 . $q6. $q7. $q8. $q9. $q10. $q11. $q12. $q13. $q14 ;
$ris = $connessione->query($query);
if ( ! $ris)
    die("Errore creazione tabella: " . $connessione->error);
mysqli_close($connessione);


$connessione=new mysqli($db_Host, $db_User, $db_Password) or die ("Connessione fallita");
mysqli_select_db($connessione,$db_name);
$q1 = "INSERT INTO $tab_name (stato,superficie,popolazione) VALUES ";
$q2 = "('Francia',543965,61000000)";
$query = $q1 . $q2;
$ris = $connessione->query($query);
if ( ! $ris) die("Errore comando INSERT: " . $connessione->error);
$q2 = "('Italia',301340,599000000)";
$query = $q1 . $q2;
$ris = $connessione->query($query);
if ( ! $ris) die("Errore comando INSERT: " . $connessione->error);
$q2 = "('Spagna',504645,47025000)";
$query = $q1 . $q2;
$ris = $connessione->query($query);
if ( ! $ris) die("Errore comando INSERT: " . $connessione->error);
$q2 = "('Germania',357023,82438000)";
$query = $q1 . $q2;
$ris = $connessione->query($query);
if ( ! $ris) die("Errore comando INSERT: " . $connessione->error);
print("tutto eseguito con successo");
print("<a href='form.html'>ritorna alla pagina inizio</a><br>");

?>