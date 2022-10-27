
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
    <h1>matériel</h1>
    <br>
        <label for='type'>type de matériel</label>
        <br>
        <select>
        <option>pc portable</option>
        <option>tour pc</option>
        <option>écran</option>
        <option>souris</option>
        <option>clavier</option>
        </select>
    <br>
        <label for='num_serie'>numéro de série du matériel</label>
        <br>
        <select>
        <option></option>
        <option></option>
        <option></option>
        <option></option>
        </select>
    <br>
        <label for='modele'>modèle du matériel prêté</label>
        <br>
        <select>
        <option></option>
        <option></option>
        <option></option>
        <option></option>
        </select>
    <br>
        <label for='etat'>état</label>
        <br>
        <select>
        <option>neuf</option>
        <option>acceptable</option>
        <option>à réparer</option>
        <option>en réparation</option>
        <option>DEEE</option>
        <option>prété</option>
        </select>
    <br>
        <label for='dispo'>disponibilité</label>
        <br>
        <select>
        <option>oui</option>
        <option>non</option>

        </select>
    <br>
    <br>
        <label for='visuel'>visuel</label>
        <br>
        <input type='file' name='visuel' value='' />
    <br>
    <br>
        <input type='submit' value='soumettre' />
    </fieldset>
</form>
</center>
</body>
</html>