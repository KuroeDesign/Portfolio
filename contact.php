<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style/style.css">
        <!-- Lier bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"/>

        <!-- Script JS -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <!-- intégration icon fontawesome -->
        <script src="https://kit.fontawesome.com/6939106af0.js" crossorigin="anonymous"></script>
        <title>KuroeDesign</title>
    </head>
    <body>

        <header class="sticky-top">
            <!-- navbar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="index.php"><img src="images/logoKuroeCircle.png" alt="Logo Kuroe" height="80px"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Accueil</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="realisations.php">Réalisations</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="formations.php">Formations</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link active" href="contact.php">Me contacter</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <main>

<!-- Titre -->
            <section>
                <div class="container text-center"> <!-- container ou fluid ? -->
                    <div class="row"> <!-- align 12 colonnes -->
                        <div class="col-12 my-5">
                            <img src="images/avatar.png" alt="Avatar Kuroe" width="180px" class="img-fluid my-5">
                            <h2>Mon profil vous correspond ?<br/>Contactez moi sans plus attendre !</h2>
                        </div>
                    </div>
                </div>
            </section>

            <?php
            if(isset($_GET['erreur']) && $_GET['erreur'] == 'erreur'){
                ?>
                <div class="text-center alert alert-danger">
                    ERREUR : Le mail n'a pas été envoyé.
                </div>
                <?php
            }
            if(isset($_GET['message']) && $_GET['message'] == 'envoyé'){
                ?>
                <div class="text-center alert alert-success">
                    Votre message a bien été envoyé.
                </div>
                <?php
            }
        ?>

<!-- Titre -->
            <section>
                <div class="container"> <!-- container ou fluid ? -->
                    <div class="row"> <!-- align 12 colonnes -->
                        <div class="col-12 my-5 ">
                            <form class="row g-3" id="contact-form" name="contact-form" action="mail.php" method="POST" onsubmit="return validateForm()">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Nom || Entreprise</label>
                                    <input type="text" class="form-control border-purple" name="name" id="name">
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control border-purple" name="email" id="email">
                                </div>
                                <div class="col-md-12">
                                    <label for="subject" class="form-label">Sujet</label>
                                    <input type="text" class="form-control border-purple" name="subject" id="subject">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="textarea" class="form-label">Message</label>
                                    <textarea class="form-control border-purple" id="textarea" name="message" rows="5"></textarea>
                                </div>
                                <div class="col-md-12 d-flex justify-content-center">
                                    <button class="btn m-3 btn-outline-info shadow-sm" type="submite" title="Envois">Envoyer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

        </main>

        <footer> 
            <section class=" pt-5 pb-3">
                <div class="container text-center">
                    <div class="row contactsbis mt-3 mb-3">
                        <div class="col-lg-3"></div>
                        <div class="col-xl-2">
                            <i class="fas fa-at fa-2x"></i>
                            <p> cloe.ds@hotmail.com</p>
                        </div>
                        <div class="col-xl-2">
                            <i class="fas fa-phone-alt fa-2x"></i>
                            <p> 06 34 53 43 59</p>
                        </div>
                        <div class="col-xl-2">
                            <i class="fas fa-map-marker-alt fa-2x"></i>
                            <p> Rue Guillaume Apollinaire, la Pastorale F<br/>13500 Martigues</p>
                        </div>
                        <div class="col-lg-3"></div>
                    </div>
                    <div class="row contact mt-5 mb-5"> <!-- align 12 colonnes -->
                        <div class="col-1"></div>
                        <div class="col-2">
                            <a href="https://twitter.com/KuroeGaming" title="Twitter" target="_blank"><i class="fab fa-twitter fa-2x"></i></a>
                        </div>
                        <div class="col-2">
                            <a href="https://www.instagram.com/kuroe.drawing/" title="Instagram" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
                        </div>
                        <div class="col-2">
                            <a href="https://www.linkedin.com/in/clo%C3%A9-dufau-sansot-9b74361ba/" title="Linkedin" target="_blank"><i class="fab fa-linkedin-in fa-2x"></i></a>
                        </div>
                        <div class="col-2">
                            <a href="https://github.com/KuroeGame" title="GitHub" target="_blank"><i class="fab fa-github fa-2x"></i></a>
                        </div>
                        <div class="col-2">
                            <a href="mailto: cloe-13500@hotmail.fr" title="Email" target="_blank"><i class="fas fa-envelope fa-2x"></i></a>
                        </div>
                        <div class="col-1"></div>
                    </div>
                </div>
            </section>
        </footer>
    </body>
</html>