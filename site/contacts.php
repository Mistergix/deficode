<!DOCTYPE html>
<html class="no-js" lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Prendre contact</title>
    <meta name="description" content="Formulaire de contact">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <link type="text/plain" rel="author" href="../humans.txt" />
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">

    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-xl navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand img-link" href="http://parkours.fr/">
                    <img class="img-fluid" src="../img/coloredParkoursLogo.svg" alt="Logo Parkours coloré">
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-main">
                    <span class="navbar-toggler-icon">
                    </span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse-main">
                <ul class="nav navbar-nav m-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#hello">ACCUEIL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#concept">LES SEANCES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#method">LES PROJETS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#stages">COMPLEMENTS</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="content">
        <article class="article content-main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6 offset-3">
                        <p>
                            Les champs suivis d'une astérisque sont obligatoires.
                        </p>
                        <form action="php_scripts/sendmail.php" method="post">
                            Nom*:
                            <br>
                            <input type="text" name="name" id="name" required>
                            <br> E-mail*:
                            <br>
                            <input type="email" name="mail" id="mail" required>
                            <br> Message*:
                            <br>
                            <textarea name="message" id="message" maxlength="6000" required></textarea>
                            <br>
                            <br>
                            <button type="submit" value="Envoyer">Envoyer</button>
                        </form>
                    </div>

                </div>
            </div>
        </article>
    </div>
</body>

</html>