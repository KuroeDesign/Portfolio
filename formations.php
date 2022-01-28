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
        <title>KuroeDesign : Mon parcours</title>
    </head>
    <body>

        <header class="sticky-top">
            <?php require 'parts/header.php'?>
        </header>

        <main>

<!-- Titre -->
        <section>
                <div class="container text-center"> <!-- container ou fluid ? -->
                    <div class="row"> <!-- align 12 colonnes -->
                        <div class="col-12 my-5">
                            <img src="images/avatar.png" alt="Avatar Kuroe" width="180px" class="img-fluid my-5">
                            <h2>Parcours</h2>
                        </div>
                    </div>
                </div>
            </section>

<!-- Parcours -->
        <section>
                <div class="container"> <!-- container ou fluid ? -->
                    <div class="row my-5"> <!-- align 12 colonnes -->
                        <div class="col-12">
                            <ul class="timeline">
                                <li>
                                    <div class="timeline-badge-gold d-flex align-items-center justify-content-center">
                                        <i class="fas fa-graduation-cap fa-1x"></i>
                                    </div>
                                    <div class="timeline-panel-container-inverted">
                                        <div class="timeline-panel-inverted">
                                            <h3>Human Booster - Distanciel</h3>
                                            <p><strong>Formation Dev Web & Web Mobile</strong><br/>Juin 2022</p>
                                            <p>HTML/CSS, Javascript, JQuery, JSON, Php, Symphony, Angular, Wordpress, Responsive Design, Bootstrap, Figma</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-badge-cyan d-flex align-items-center justify-content-center">
                                    <i class="fas fa-briefcase fa-1x"></i>
                                    </div>
                                    <div class="timeline-panel-container">
                                        <div class="timeline-panel">
                                            <h3>La Galette du Ménil</h3>
                                            <p><strong>Vendeuse en boulangerie</strong><br/>Fevrier - Août 2021</p>
                                            <p>Mise en rayon, préparation de commandes et des livraisons, prise de commandes, contact client, service.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-badge-gold d-flex align-items-center justify-content-center">
                                        <i class="fas fa-graduation-cap fa-1x"></i>
                                    </div>
                                    <div class="timeline-panel-container-inverted">
                                        <div class="timeline-panel-inverted">
                                            <h3>ISPN - Caen</h3>
                                            <p><strong>Titre de Web Designer</strong><br/>Juin 2020</p>
                                            <p>HTML/CSS, Wordpress, Responsive Design, Bootstrap,Adobe XD, Photoshop, Illustrator, InDesign, After Effect, Première Pro</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-badge-cyan d-flex align-items-center justify-content-center">
                                    <i class="fas fa-briefcase fa-1x"></i>
                                    </div>
                                    <div class="timeline-panel-container">
                                        <div class="timeline-panel">
                                            <h3>Mcdonald’s</h3>
                                            <p><strong>Equipier polyvalent</strong><br/>Avril 2019 - Mars 2020</p>
                                            <p>Autonomie, renseigner le client sur la composition des produits et enregistrer sa commande, préparer des sandwichs, procédures d'encaissement, cuire des viandes, poissons ou légumes, réaliser la plonge, remettre la commande au client, modes de cuisson des aliments, entretenir des locaux, nettoyer du matériel ou un équipement, utilisation de matériel de nettoyage, gestion de la chaîne du froid</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-badge-cyan d-flex align-items-center justify-content-center">
                                    <i class="fas fa-briefcase fa-1x"></i>
                                    </div>
                                    <div class="timeline-panel-container">
                                        <div class="timeline-panel">
                                            <h3>Association NVG</h3>
                                            <p><strong>Chargée Design Web (stage)</strong><br/>Janvier 2020 - Fevrier 2020</p>
                                            <p>
                                                Création de thème wordpress, HTML/CSS, Création de maquettes et d’un site web à l’adresse :<br/> 
                                                <a href="https://nvg-tv.com/">https://nvg-tv.com/</a>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-badge-gold d-flex align-items-center justify-content-center">
                                        <i class="fas fa-graduation-cap fa-1x"></i>
                                    </div>
                                    <div class="timeline-panel-container-inverted">
                                        <div class="timeline-panel-inverted">
                                            <h3>Strate - Paris</h3>
                                            <p><strong>Ecole de design</strong><br/>Septembre 2017 - Décembre 2018</p>
                                            <p>Dessin, Perspective, Sculpture, Histoire des arts, Créativité</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-badge-gold d-flex align-items-center justify-content-center">
                                        <i class="fas fa-graduation-cap fa-1x"></i>
                                    </div>
                                    <div class="timeline-panel-container-inverted">
                                        <div class="timeline-panel-inverted">
                                            <h3>Lycée Paul Langevin - Martigues</h3>
                                            <p><strong>Baccalauréat S SI</strong><br/>Juillet 2017</p>
                                            <p>
                                                Mention Assez Bien<br/>
                                                Options : Science de l’ingénieur et Art<br/>
                                                <a href="pdf/notesbac.pdf" target="_blank">Notes</a>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

<!-- Contact -->
            <section class="bg-gradientbot mt-5 text-white ">
                <div class="container text-center"> <!-- container ou fluid ? -->
                    <div class="row bg-purple rounded-5 p-3"> <!-- align 12 colonnes -->
                        <div class="col-5">
                            <p>Mon profil te correspond ?<br/>N’hésite pas à me contacter ici </p>
                        </div>
                        <div class="col-2 d-flex align-items-center justify-content-center">
                            <i class="fas fa-chevron-circle-right fa-2x"></i>
                        </div>
                        <div class="col-5 d-flex align-items-center justify-content-center">
                        <a class="btn btn-outline-warning shadow-sm" href="contact.php" title="Envoyer un message">Contacte moi !</a>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer> 
            <?php require 'parts/footer.php';?>
        </footer>
        <?php require 'parts/scripts.php'?>
    </body>
</html>