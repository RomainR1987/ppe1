
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
    <h1>identité et coordonnées de l'étudiant</h1>
    <br>
        <label for='prenom'>prénom de l'étudiant</label>
        <br>
        <input name='identifiant' value='' />
    <br>
        <label for='nom'>nom de l'étudiant</label>
        <br>
        <input name='nom' value='' />
    <br>
        <label for='naisance'>date de naissance</label>
        <br>
        <input type='date' name='nom' value='' />
    <br>
        <label for='courriel'>courriel</label>
        <br>
        <input type='email' name='courriel' value='' />
    <br>
        <label for='tel'>numéro de téléphone</label>
        <br>
        <input type='tel' name='tel' value='' />
    <br>
    <br>
        <input type='submit' value='soumettre' />
    </fieldset>
</form>
</center>
</body>
</html>