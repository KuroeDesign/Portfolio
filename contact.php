<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <?php require 'parts/links.php'?>
        <title>KuroeDesign : Contacte moi !</title>
    </head>
    <body>

        <header class="sticky-top">
            <?php require 'parts/header.php'?>
        </header>

        <main>

<!-- Erreurs -->
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

<!-- form -->
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
                        <div class="col-lg-2"></div>
                        <div class="col-xl-2">
                            <i class="fas fa-at fa-2x"></i>
                            <p><a href="mailto:cloe.ds@hotmail.com" class="footeraBis">cloe.ds@hotmail.com</a></p>
                        </div>
                        <div class="col-xl-4">
                            <i class="fas fa-map-marker-alt fa-2x"></i>
                            <p><a target="_blank" href="https://www.google.fr/maps/place/Rue+Guillaume+Appolinaire,+13500+Martigues/@43.4210413,5.0462761,18z/data=!3m1!4b1!4m5!3m4!1s0x12b61e3a8429a6d1:0xded466cb1607de10!8m2!3d43.4210394!4d5.0473704" class="footeraBis">Rue Guillaume Apollinaire, la Pastorale F<br/>13500 Martigues</a></p>
                        </div>
                        <div class="col-xl-2">
                            <i class="fas fa-phone-alt fa-2x"></i>
                            <p><a href="tel:+33634534359" class="footeraBis">06 34 53 43 59</a></p>
                        </div>
                        <div class="col-lg-2"></div>
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
                            <a href="https://github.com/KuroeDesign" title="GitHub" target="_blank"><i class="fab fa-github fa-2x"></i></a>
                        </div>
                        <div class="col-2">
                            <a href="mailto: cloe-13500@hotmail.fr" title="Email" target="_blank"><i class="fas fa-envelope fa-2x"></i></a>
                        </div>
                        <div class="col-1"></div>
                    </div>
                </div>
            </section>
        </footer>
        <?php require 'parts/scripts.php'?>
    </body>
</html>