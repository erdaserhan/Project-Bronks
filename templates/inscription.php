<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header id="logoInscription">
        <a href="?section=homepage"><img src="../public/img/logo-Bronks.png" alt=""></a>
    </header>
    <div id="titleInscription">
        <h1>INSCRIPTION</h1>
    </div>
    <form action="">
        <div id="inscriptionPage">
            <div class="formMail">
                <label for="email">E-MAIL* </label>
                <input type="email" name="email" id="email" required />
            </div>
            <div class="formNom">
                <label for="name">NOM* </label>
                <input type="text" name="name" id="non" required />
            </div>
            <div class="formPrenom">
                <label for="name">PRÉNOM* </label>
                <input type="text" name="name" id="prenom" required />
            </div>
            <div class="formAdresse">
                <label for="name">ADRESSE </label>
                <input type="text" name="name" id="adresse" />
            </div>
            <div class="formSubmit">
                <input type="submit" value="ENVOYER" />
            </div>
        </div>
    </form>
</body>
</html>