
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
    <h1>authentification</h1>
        <label for='identifiant'>identifiant</label>
        <br>
        <input name='identifiant' value='' />
        <br>
        <label for='mdp'>mot de passe</label>
        <br>
        <input type='password' name='mdp' value='' />
        <br>
        <br>
        <input type='submit' value='se connecter' />
    </fieldset>
</form>
</center>
</body>
</html>