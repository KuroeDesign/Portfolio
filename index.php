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
                    <a class="navbar-brand" href="index.php"><img src="images/logoKuroeCircle2.png" alt="Logo Kuroe" height="80px"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="realisations.php">Réalisations</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="formations.php">Parcours</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="contact.php">Me contacter</a>
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
                            <h2>Designer & Développeur web</h2>
                            <img src="images/avatar.png" alt="Avatar Kuroe" width="280px" class="img-fluid mt-5">
                        </div>
                    </div>
                </div>
            </section>

<!-- CV -->
            <section class="bg-green text-white p-5">
                <div class="container text-center"> <!-- container ou fluid ? -->
                    <div class="row"> <!-- align 12 colonnes -->
                        <div class="col-12">
                            <h2>Salut, moi c’est Cloé !</h2>
                            <p>
                                Designeuse et développeuse web junior innovante de 22 ans je suis actuellement à la recherche d'un stage du 11 avril au 22 juin 2022 dans les environs de Martigues qui rassemble créativité, dynamisme, challenge et code.<br/>
                                Mon tempérament sociable, motivée, perfectionniste ainsi que curieuse me permet de m’adapter à un environnement que je ne connais pas et donner le meilleur de moi même dans toutes les situations.<br/>
                                Tous mes choix dans mon parcours montrent que l'informatique doit absolument faire partie de ma vie professionnelle.
                            </p>
                            <a class="btn mb-3 btn-outline-success shadow-sm" href="pdf/CV-Cloe-DS.pdf" title="Pdf du CV" target="_blank">Télécharger mon CV</a>
                        </div>
                    </div>
                </div>
            </section>

<!-- Compétences -->
            <section class="mb-5 bg-gradienttop">
                <div class="container text-center"> <!-- container ou fluid ? -->
                    <div class="row"> <!-- align 12 colonnes -->
                        <div class="col-lg-4 borderleft p-4">
                            <img src="images/design.png" class="img-fluid mb-3" width="100px">
                            <h2>Design</h2>
                            <p>J'apprécie une structure de contenu simple, des modèles de conception épurés et des interactions réfléchies.</p>
                            <p><strong class="text-green">Ce que j'aime réaliser :</strong><br/>Logo, Maquettes de sites & applications, Flyers, Cartes de visite, etc...</p>
                            <p>
                                <strong class="text-green">Outils de conception :</strong><br/>
                                Figma<br/>
                                Adobe XD<br/>
                                Adobe Photoshop<br/>
                                Adobe Illustator<br/>
                                InDesign
                            </p>
                        </div>
                        <div class="col-lg-4 bordercenter p-4">
                            <img src="images/web-programming.png" class="img-fluid mb-3" width="100px">
                            <h2>Front End</h2>
                            <p>J'aime coder des choses à partir de zéro et j'aime donner vie à des idées dans le navigateur.</p>
                            <p><strong class="text-green">Langages utilisés & Compétences :</strong><br/>Html 5, CSS 3, JavaScript, jQuery, JSON, Ajax</p>
                            <p>
                                <strong class="text-green">Outils de developpement & CMS :</strong><br/>
                                Bootstrap 5<br/>
                                Visual Studio Code<br/>
                                Symfony<br/>
                                Wordpress<br/>
                                Angular
                            </p>
                        </div>
                        <div class="col-lg-4 borderright p-4">
                            <img src="images/computer.png" class="img-fluid mb-3" width="100px">
                            <h2>Back End</h2>
                            <p>Développement de sites web, création  et gestion de bases de données, programmation orientée objet et modèle 3 tiers, mise en ligne.</p>
                            <p><strong class="text-green">Compétences :</strong><br/>Php, SEO, Connexion FTP, MySQL</p>
                            <p>
                                <strong class="text-green">Outils de developpement :</strong><br/>
                                phpMyAdmin<br/>
                                Wamp<br/>
                                FileZilla
                            </p>
                        </div>
                    </div>
                </div>
            </section>

<!-- Réalisations -->
            <section class="my-5">
                <div class="container-fluid  text-center">
                    <h2 class="m-3">Mes derniers projets :</h2> <!-- container ou fluid ? -->
                    <div class="row"> <!-- align 12 colonnes -->
                    <div class="p-3 col-xxl-3 item col-md-6">
                            <div class="box" style="background-image:url(images/lpoa.png)">
                                <div class="cover">
                                    <h3 class="mb-3">Lapins Perdus Of Azeroth</h3>
                                    <p><strong>Réalisation(s) :</strong><br/>un site, création d'identité visuelle, des bannieres discord</p>
                                    <div class="framworks">
                                        <i class="fab fa-wordpress fa-2x p-3"></i>
                                        <i class="fab fa-html5 fa-2x p-3"></i>
                                    </div>
                                    <a class="btn ms-4 mt-3 btn-outline-warning shadow-sm" href="https://lpoa.nvg-tv.com/" title="Vers le site" target="_blank">Voir le site <i class="fas fa-angle-right"></i></i></i></a>
                                    <button class="btn mt-3 btn-outline-warning shadow-sm" data-bs-toggle="modal" data-bs-target="#modalLPOA">Plus d'images</button>
                                </div>
                                <div class="modal" id="modalLPOA">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                        <!-- Modal body -->
                                            <div class="modal-body">
                                                <div class="text-end">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button> 
                                                </div>
                                                <div id="carouselLPOA" class="carousel slide mb-3" data-bs-ride="carousel">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img src="images/lpoa.png" class="d-block w-100" alt="image1">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="images/bannièrelpoa.png" class="d-block w-100" alt="image2">
                                                        </div>
                                                        <div class="carousel-item">
                                                        <img src="images/prixraids.png" class="d-block w-100" alt="image3">
                                                        </div>
                                                    </div>
                                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselLPOA" data-bs-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Previous</span>
                                                    </button>
                                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselLPOA" data-bs-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Next</span>
                                                    </button>
                                                </div>
                                                <a class="btn btn-outline-danger shadow-sm" href="https://lpoa.nvg-tv.com/" title="Vers le site" target="_blank">Voir le site <i class="fas fa-angle-right"></i></i></i></a>
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-3 col-xxl-3 item col-md-6">
                            <div class="box" style="background-image:url(images/nvg.png)">
                                <div class="cover">
                                    <h3 class="mb-3">Normandie Viking Gaming</h3>
                                    <p><strong>Réalisation(s) :</strong><br/>un site, des maquettes, une charte graphique</p>
                                    <div class="framworks">
                                        <i class="fab fa-wordpress fa-2x p-3"></i>
                                        <i class="fab fa-html5 fa-2x p-3"></i>
                                        <i class="fab fa-js fa-2x p-3"></i>
                                        <i class="fab fa-buysellads fa-2x p-3"></i>
                                    </div>
                                    <a class="btn ms-4 mt-3 btn-outline-warning shadow-sm" href="https://nvg-tv.com/" title="Vers le site" target="_blank">Voir le site <i class="fas fa-angle-right"></i></i></i></a>
                                    <button class="btn mt-3 btn-outline-warning shadow-sm" data-bs-toggle="modal" data-bs-target="#modalNVG">Plus d'images</button>
                                </div>
                                <div class="modal" id="modalNVG">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                        <!-- Modal body -->
                                            <div class="modal-body">
                                                <div class="text-end">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button> 
                                                </div>
                                                <div id="carouselNVG" class="carousel slide mb-3" data-bs-ride="carousel">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img src="images/nvg.png" class="d-block w-100" alt="image1">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="images/maquette_site_2.0.1.png" class="d-block w-100" alt="image2">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="images/partenaires.png" class="d-block w-100" alt="image3">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="images/menu.png" class="d-block w-100" alt="image4">
                                                        </div>
                                                    </div>
                                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselNVG" data-bs-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Previous</span>
                                                    </button>
                                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselNVG" data-bs-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Next</span>
                                                    </button>
                                                </div>
                                                <a class="btn btn-outline-danger" href="https://nvg-tv.com/" title="Vers le site" target="_blank">Vers le site <i class="fas fa-angle-right"></i></i></i></a>
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-3 col-xxl-3 item col-md-6">
                            <div class="box" style="background-image:url(images/logo_caro3.png)">
                                <div class="cover">
                                    <h3 class="mb-3">Les créas de Caro</h3>
                                    <p><strong>Réalisation(s) :</strong><br/>un logo, un mockup d'une bannière facebook</p>
                                    <div class="framworks">
                                        <i class="fab fa-buysellads fa-2x p-3"></i>
                                    </div>
                                    <a class="btn ms-4 mt-3 btn-outline-warning shadow-sm" href="https://www.facebook.com/Les-Cr%C3%A9as-de-Caro-1423384494609517/" title="Vers le site" target="_blank">Voir le site <i class="fas fa-angle-right"></i></i></i></a>
                                    <button class="btn mt-3 btn-outline-warning shadow-sm" data-bs-toggle="modal" data-bs-target="#modalCaro">Plus d'images</button>
                                </div>
                                <div class="modal" id="modalCaro">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                        <!-- Modal body -->
                                            <div class="modal-body">
                                                <div class="text-end">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button> 
                                                </div>
                                                <div id="carouselCaro" class="carousel slide mb-3" data-bs-ride="carousel">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img src="images/logo_caro3.png" class="d-block w-100" alt="image1">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="images/banner_caro.png" class="d-block w-100" alt="image2">
                                                        </div>
                                                        <div class="carousel-item">
                                                        <img src="images/pagefb_caro.png" class="d-block w-100" alt="image3">
                                                        </div>
                                                    </div>
                                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselCaro" data-bs-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Previous</span>
                                                    </button>
                                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselCaro" data-bs-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Next</span>
                                                    </button>
                                                </div>
                                                <a class="btn btn-outline-danger shadow-sm" href="https://www.facebook.com/Les-Cr%C3%A9as-de-Caro-1423384494609517/" title="Vers le site" target="_blank">Voir le site <i class="fas fa-angle-right"></i></i></i></a>
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-3 col-xxl-3 item col-md-6">
                            <div class="box" style="background-image:url(images/bannereds.png)">
                                <div class="cover">
                                    <h3 class="mb-3">E.D.S</h3>
                                    <p><strong>Réalisation(s) :</strong><br/>3 bannières youtube</p>
                                    <div class="framworks">
                                        <i class="fab fa-buysellads fa-2x p-3"></i>
                                    </div>
                                    <button class="btn mt-3 btn-outline-warning shadow-sm" data-bs-toggle="modal" data-bs-target="#modalEDS">Plus d'images</button>
                                </div>
                                <div class="modal" id="modalEDS">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                        <!-- Modal body -->
                                            <div class="modal-body">
                                                <div class="text-end">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button> 
                                                </div>
                                                <div id="carouselEDS" class="carousel slide mb-3" data-bs-ride="carousel">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img src="images/bannereds.png" class="d-block w-100" alt="image1">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="images/bannièrebasic.png" class="d-block w-100" alt="image2">
                                                        </div>
                                                        <div class="carousel-item">
                                                        <img src="images/bannière-sound.png" class="d-block w-100" alt="image3">
                                                        </div>
                                                    </div>
                                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselEDS" data-bs-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Previous</span>
                                                    </button>
                                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselEDS" data-bs-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Next</span>
                                                    </button>
                                                </div>
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="btn m-3 btn-outline-info shadow-sm" href="realisations.php" title="Portfolio">En voir plus</a>
                </div>
            </section>

<!-- Hobbies -->
            <section class="mt-5">
                <div class="container text-center"> <!-- container ou fluid ? -->
                    <h2 class="m-3">Ce que j'aime faire :</h2>
                    <div class="row m-3 "> 
                        <div class="col-lg-4 col-sm-6 mt-4"><!-- hobbie 1 -->
                            <img src="images/big-family.png" alt="Famille" width="150px" class="img-fluid">
                            <div class="mt-2 p-3 d-flex align-items-center justify-content-center">
                            <p>
                                <strong>La famille</strong><br/>
                                Etre présente pour ma famille est très important à mes yeux. Avoir une famille unie et pleine de vie est un de mes objectifs de vie 
                            </p>
                        </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 mt-4"><!-- hobbie 2 -->
                            <img src="images/creative-process.png" alt="Activitées Manuelles" width="150px" class="img-fluid">
                            <div class="mt-2 p-3 d-flex align-items-center justify-content-center">
                                <p>
                                    <strong>Les Activités Manuelles</strong><br/>
                                    Entre le scrapbooking, la peinture et la scupture rien ne me fait peur !
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 mt-4"><!-- hobbie 3 -->
                            <img src="images/pencil.png" alt="Dessin" width="150px" class="img-fluid">
                            <div class="mt-2 p-3 d-flex align-items-center justify-content-center">
                                <p>
                                    <strong>Le Dessin</strong><br/>
                                    Depuis toute petite le dessin fait partie de mes plus grandes passions. J'ai eu mon bac avec option art et par la suite je me suis lancé dans une école de design pour approfondir mes compétences.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 mt-4"><!-- hobbie 4 -->
                            <img src="images/dog.png" alt="Animaux" width="150px" class="img-fluid">
                            <div class="mt-2 p-3 d-flex align-items-center justify-content-center">
                                <p>
                                    <strong>Les Animaux</strong><br/>
                                    Qui n’a jamais demandé un animal à ses parents ?<br/>
                                    Personnellement oui et j’ai accompli ce rêve depuis plus d’un an maintenant !
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 mt-4"><!-- hobbie 5 -->
                            <img src="images/game-controller.png" alt="Jeux Vidéos" width="150px" class="img-fluid">
                            <div class=" mt-2 p-3 d-flex align-items-center justify-content-center">
                                <p>
                                    <strong>Les Jeux Vidéo</strong><br/>
                                    World of Warcraft, League of Legends, Valorant, Minecraft, Counter-Strike et bien d’autres...
                                </p>
                            </div>
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
            <?php include 'footer.php';?>
        </footer>
    </body>
</html>