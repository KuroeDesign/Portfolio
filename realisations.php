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
                            <a class="nav-link " aria-current="page" href="index.php">Accueil</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link active" href="realisations.php">Réalisations</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="formations.php">Formations</a>
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
                            <img src="images/avatar.png" alt="Avatar Kuroe" width="180px" class="img-fluid my-5">
                            <h2>Réalisations</h2>
                        </div>
                    </div>
                </div>
            </section>

<!-- Gallery -->
            <section>
                <div class="container-fluid gallery text-center"> <!-- container ou fluid ? -->
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
                        <div class="p-3 col-xxl-3 item col-md-6">
                            <div class="box" style="background-image:url(images/elevagecanin.png)">
                                <div class="cover">
                                    <h3 class="mb-3">Elevage Canin REA</h3>
                                    <p>Projet fictif : <br/><strong>Réalisation(s) :</strong><br/>Refonte de site, Responsive</p>
                                    <div class="framworks">
                                        <i class="fab fa-html5 fa-2x p-3"></i>
                                        <i class="fab fa-buysellads fa-2x p-3"></i>
                                    </div>
                                    <button class="btn mt-3 btn-outline-warning shadow-sm" data-bs-toggle="modal" data-bs-target="#modalREA">Plus d'images</button>
                                </div>
                            </div>
                            <div class="modal" id="modalREA">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                    <!-- Modal body -->
                                        <div class="modal-body">
                                            <div class="text-end">
                                               <button type="button" class="btn-close" data-bs-dismiss="modal"></button> 
                                            </div>
                                            <div id="carouselREA" class="carousel slide mb-3" data-bs-ride="carousel">
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img src="images/rea1.jpg" class="d-block w-100" alt="image1">
                                                    </div>
                                                    <div class="carousel-item">
                                                    <img src="images/rea2.jpg" class="d-block w-100" alt="image2">
                                                    </div>
                                                </div>
                                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselREA" data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Previous</span>
                                                </button>
                                                <button class="carousel-control-next" type="button" data-bs-target="#carouselREA" data-bs-slide="next">
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
                        <div class="p-3 col-xxl-3 item col-md-6">
                            <div class="box" style="background-image:url(images/notmine.png)">
                                <div class="cover">
                                    <h3 class="mb-3">Notmine</h3>
                                    <p>Projet fictif<br/><strong>Réalisation(s) :</strong><br/>Logotipage, Maquetting</p>
                                    <div class="framworks">
                                        <i class="fab fa-html5 fa-2x p-3"></i>
                                        <i class="fab fa-buysellads fa-2x p-3"></i>
                                    </div>
                                    <button class="btn mt-3 btn-outline-warning shadow-sm" data-bs-toggle="modal" data-bs-target="#modalNotmine">Plus d'images</button>
                                </div>
                                <div class="modal" id="modalNotmine">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                        <!-- Modal body -->
                                            <div class="modal-body">
                                                <div class="text-end">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button> 
                                                </div>
                                                <div id="carouselNotmine" class="carousel slide mb-3" data-bs-ride="carousel">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img src="images/mockupNotmine.png" class="d-block w-100" alt="image1">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="images/maquette_notmine_cloe.png" class="d-block w-100" alt="image2">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="images/maquette_notmine_tel.png" class="d-block w-100" alt="image3">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="images/logoNotmine.png" class="d-block w-100" alt="image4">
                                                        </div>
                                                    </div>
                                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselNotmine" data-bs-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Previous</span>
                                                    </button>
                                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselNotmine" data-bs-slide="next">
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
                        <div class="p-3 col-xxl-3 item col-md-6">
                            <div class="box" style="background-image:url(images/conquerant.png)">
                                <div class="cover ">
                                    <h3 class="mb-3">Conquerant Conseil</h3>
                                    <p><strong>Réalisation(s) :</strong><br/>Logotipage, Affiche, Flyer, Bannière</p>
                                    <div class="framworks">
                                        <i class="fab fa-buysellads fa-2x p-3"></i>
                                    </div>
                                    <button class="btn mt-3 btn-outline-warning shadow-sm" data-bs-toggle="modal" data-bs-target="#modalConquerant">Plus d'images</button>
                                </div>
                                <div class="modal" id="modalConquerant">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                        <!-- Modal body -->
                                            <div class="modal-body">
                                                <div class="text-end">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button> 
                                                </div>
                                                <div id="carouselConquerant" class="carousel slide mb-3" data-bs-ride="carousel">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img src="images/affiche.png" class="d-block w-100" alt="image1">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="images/visitcardconquerant.png" class="d-block w-100" alt="image2">
                                                        </div>
                                                        <div class="carousel-item">
                                                        <img src="images/banniere_conquerant.png" class="d-block w-100" alt="image3">
                                                        </div>
                                                    </div>
                                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselConquerant" data-bs-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Previous</span>
                                                    </button>
                                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselConquerant" data-bs-slide="next">
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
                        <div class="p-3 col-xxl-3 item col-md-6">
                            <div class="box" style="background-image:url(images/logoKuroe.png)">
                                <div class="cover">
                                    <h3 class="mb-3">KuroeDesign</h3>
                                    <p><strong>Réalisation(s) :</strong><br/>création d'identité visuelle, maquettes de site</p>
                                    <div class="framworks">
                                        <i class="fab fa-buysellads fa-2x p-3"></i>
                                    </div>
                                    <button class="btn mt-3 btn-outline-warning shadow-sm" data-bs-toggle="modal" data-bs-target="#modalK">Plus d'images</button>
                                </div>
                                <div class="modal" id="modalK">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                        <!-- Modal body -->
                                            <div class="modal-body">
                                                <div class="text-end">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button> 
                                                </div>
                                                <div id="carouselK" class="carousel slide mb-3" data-bs-ride="carousel">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img src="images/logoKuroe.png" class="d-block w-100" alt="image1">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="images/logo_kuroe2.png" class="d-block w-100" alt="image2">
                                                        </div>
                                                        <div class="carousel-item">
                                                        <img src="images/charteKuroe.png" class="d-block w-100" alt="image3">
                                                        </div>
                                                    </div>
                                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselK" data-bs-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Previous</span>
                                                    </button>
                                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselK" data-bs-slide="next">
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
                        <a class="btn btn-outline-warning shadow-sm" href="contact.php" title="Envoyer un message" >Contacte moi !</a>
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