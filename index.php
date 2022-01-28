<?php
require 'functions/crea-function.php';
$creations = allCrea();
?>
<!DOCTYPE html>
<html  prefix="og: http://ogp.me/ns#">
    <head>
        <meta charset="utf-8">
        <meta property="og:title" content="KuroeDesign"/>
        <meta property="og:description" content="Site dédié à la présentation des réalisations et du parcours de Kuroe"/>
        <meta property="og:image" content="https://kuroedesign.fr/images/logoKuroeBanner.png" />
        <meta property="og:image:width" content="1200" />
        <meta property="og:image:height" content="627" />
        <meta property="og:image:alt" content="Logo KuroeDesign" />
        <meta property="og:url" content="https://kuroedesign.fr/" />
        <?php require 'parts/links.php'?>
        <title>KuroeDesign</title>
    </head>
    <body>

        <header class="sticky-top">
            <?php require 'parts/header.php' ?>
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
                            <p>Développement de sites web, création  et gestion de bases de données, programmation orientée objet, mise en ligne.</p>
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
                        <?php
                        $i = 0;
                        while($i < 4){
                                $picture3 = '';
                                $picture4 = '';
                                $url = '';
                                if($creations[$i]['picture3'] != ''){
                                    $picture3 = '<div class="carousel-item">
                                        <img src="images/'.$creations[$i]['picture3'].'" class="d-block w-100" alt="'.$creations[$i]['picture3'].'">
                                     </div>';
                                }
                                if($creations[$i]['picture4'] != ''){
                                    $picture4 = '<div class="carousel-item">
                                        <img src="images/'.$creations[$i]['picture4'].'" class="d-block w-100" alt="'.$creations[$i]['picture4'].'">
                                     </div>';
                                }
                                if($creations[$i]['url'] != ''){
                                    $url = '<a class="btn ms-4 mt-3 btn-outline-warning shadow-sm" href = "'.$creations[$i]['url'].'" title = "Vers le site" target = "_blank" > Voir le site <i class="fas fa-angle-right" ></i></a >';
                                }
                                echo('<div class="p-3 col-xxl-3 item col-md-6">
                                        <div class="box" style="background-image:url(images/'.$creations[$i]['picture'].')">
                                            <div class="cover">
                                                <h3 class="mb-3">'.$creations[$i]['name'].'</h3>
                                                <p><strong>Réalisation(s) :</strong><br/>'.$creations[$i]['realisation'].'</p >
                                                <div class="framworks" >
                                                    '.$creations[$i]['framworks'].'
                                                </div >
                                                '.$url.'
                                                <button class="btn mt-3 btn-outline-warning shadow-sm" data-bs-toggle = "modal" data-bs-target = "#modal'.$creations[$i]['suffixe'].'" > Plus d\'images</button>
                                            </div>
                                            <div class="modal" id="modal'.$creations[$i]['suffixe'].'">
                                                <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                    <!-- Modal body -->
                                                        <div class="modal-body">
                                                            <div class="text-end">
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                            </div>
                                                            <div id="carousel'.$creations[$i]['suffixe'].'" class="carousel slide mb-3" data-bs-ride="carousel">
                                                                <div class="carousel-inner">
                                                                    <div class="carousel-item active">
                                                                        <img src="images/'.$creations[$i]['picture1'].'" class="d-block w-100" alt="'.$creations[$i]['picture1'].'">
                                                                    </div>
                                                                    <div class="carousel-item">
                                                                        <img src="images/'.$creations[$i]['picture2'].'" class="d-block w-100" alt="'.$creations[$i]['picture2'].'">
                                                                    </div>
                                                                    '.$picture3.$picture4.'
                                                                </div>
                                                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel'.$creations[$i]['suffixe'].'" data-bs-slide="prev">
                                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                    <span class="visually-hidden">Previous</span>
                                                                </button>
                                                                <button class="carousel-control-next" type="button" data-bs-target="#carousel'.$creations[$i]['suffixe'].'" data-bs-slide="next">
                                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                    <span class="visually-hidden">Next</span>
                                                                </button>
                                                            </div>
                                                            '.$url.'
                                                            <button type="button" class="btn ms-4 mt-3 btn-danger" data-bs-dismiss="modal">Fermer</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>'
                                );
                                $i++;


                        }

                        ?>
                        <div class="text-center">
                            <a class="btn m-3 btn-outline-info shadow-sm" href="realisations.php" title="Portfolio">En voir plus</a>
                        </div>
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
            <?php require 'parts/footer.php';?>
        </footer>
        <?php require 'parts/scripts.php'?>
    </body>
</html>