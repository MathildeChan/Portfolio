<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <title>PortFolio - Mathilde Goré</title>
    <link href="style/main.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d2e9c2de17.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
</head>

<body>

    <header id="header">
        <img class="header-img" src="img/Headerpic2.jpg" alt="Image représentant du code HTML">
        <div class="header-text">
            <h2>&lsaquo; Mathilde Goré /&rsaquo;</h2>
        </div>
    </header>
    <div class="cloudy left">
        <div id="first-cloud"></div>
    </div>
    <div class="cloudy left-second">
        <div id="tiny-cloud"></div>
    </div>
    <div class="cloudy right">
        <div id="last-cloud"></div>
    </div>
    <div class="airplane-trail">
        <img src="img/airplane-trail.svg">
    </div>
    <div id="container">
        <div class="passport">
            <div class="surround-passport">
                <div class="inside-passport">
                    <div class="passport-img">
                    </div>
                    <div class="passport-info">
                        <h3>Nom :</h3>
                        <p>Goré</p>
                        <h3>Prénom :</h3>
                        <p>Mathilde</p>
                        <h3>Date de naissance :</h3>
                        <p><time datetime="2000-09-19">19 Septembre 2000</time></p>
                        <h3>Taille :</h3>
                        <p>1m63</p>
                    </div>
                    <div class="passport-contact-info">
                        <h3>Adresse e-mail :</h3>
                        <p>mathilde.gore61@gmail.com</p>
                        <h3>Adresse postale :</h3>
                        <p>2 rue Singer<br>
                            14000 Caen</p>
                        <h3>Numéro de téléphone :</h3>
                        <p>0695343234</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="title-part">
            <h2><i class="fas fa-graduation-cap"></i>&nbsp;Mes études</h2>
        </div>

        <div class="title-part">
            <h2><i class="fas fa-envelope"></i>&nbsp;Contact</h2>
        </div>

        
        <div class="contact-form">
            <form method="post" target="" id="contact_form">
            <div class="form-field">
                <label for="nom" class="form-label"> Nom* :</label>
                <input class="form-input" type="text" name="nom" id="nom" maxlenghh="40" />
            </div>
            <div class="form-field">
                <label for="email" class="form-label"> Adresse e-mail* :</label>
                <input class="form-input" type="text" name="email" id="email" />
            </div>
            <div class="form-field">
                <label for="nom" class="form-label"> Message* :</label>
                <textarea  class="form-input textarea" name="message" cols="30" rows="3" id="message"></textarea>
            </div>
            <div class="form-field">
                <button class="form-submit-button" type="submit" name="submit" name="submit"><i class="fas fa-paper-plane"></i>&nbsp;Envoyer</button>
            </div>
            </form>
        </div>

    </div>
    <footer id="footer">

    </footer>
</body>

</html>
