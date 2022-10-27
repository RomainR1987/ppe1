
<!DOCTYPE html>
<html lang='fr'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' type='text/css' href='/ppe1/style.css'>
    <link id='favicon' rel='shortcut icon' href='/ppe1/images/formatech.png'>
    <title>Formatech base de données</title>
</head>
<body>

<center>
<img src='/ppe1/images/formatech.png'>
<form action='http://127.0.0.1/ppe1/index.php' method='POST' >
    <fieldset>
    <h1>prêt</h1>
    <br>
        <label for='date_pret'>date du prêt</label>
        <br>
        <input type='date' name='date_pret' value='' />
    <br>
    <label for='date_retour'>date de retour du prêt</label>
    <br>
    <input type='date' name='date_retour' value='' />
    <br>
        <label for='etat_retour'>état de retour du matériel prêté</label>
        <br>
        <select>
        <option>comme neuf</option>
        <option>acceptable</option>
        <option>à réparer</option>
        <option>DEEE</option>
        </select>
    <br>
    <br>
        <input type='submit' value='soumettre' />
    </fieldset>
</form>
</center>
</body>
</html>