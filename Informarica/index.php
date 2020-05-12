<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<style type="text/css">

    .vertical{
        width:300px;
        height:300px;
        position:absolute;
        top:50%;
        left:50%;
        margin:-150px 0 0 -150px;
        text-align: center;

    }
    .testopiepagina{
        padding-top: 10px;
        padding-bottom: 10px;
        text-align: center;
        background-color: black;
        color:white;
    }
    .piedipagina {
        position: absolute;
        bottom: 0px;
        margin-bottom: 0%;
        width: 100%;
    }

</style>

<div class="vertical">

    <form action="CreaEInizializza.php">
        <input class="btn btn-success" type="submit" value="crea e inizializza database">
    </form>
    <form action="form.html">
        <input class="btn btn-info" type="submit" value="inserisci dati nel database">
    </form>
    <form action="interrogazioni.php">
        <input class="btn btn-primary" type="submit" value="entra nell'area query">
    </form>

</div>
<div class="piedipagina">
    <div class="testopiepagina">
        Lavoro realizzato a scopo didattico nell'ambito informatico dal gruppo Re, Traina, Fusi, Zanzottera, Casati
    </div>
</div>