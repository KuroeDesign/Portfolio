<?php
require 'functions/crea-function.php';
$creations = allCrea();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style/style.css">
    <!-- Lier bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"/>

    <!-- Script JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>

    <!-- intégration icon fontawesome -->
    <script src="https://kit.fontawesome.com/6939106af0.js" crossorigin="anonymous"></script>
    <title>KuroeDesign</title>
</head>
<body>

<header class="sticky-top">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img src="images/logoKuroeCircle.png" alt="Logo Kuroe"
                                                          height="80px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                <?php
                foreach ($creations as $creation) {
                    $picture3 = '';
                    $picture4 = '';
                    $url = '';
                    if($creation['picture3'] != ''){
                        $picture3 = '<div class="carousel-item">
                                        <img src="images/'.$creation['picture3'].'" class="d-block w-100" alt="'.$creation['picture3'].'">
                                     </div>';
                    }
                    if($creation['picture4'] != ''){
                        $picture4 = '<div class="carousel-item">
                                        <img src="images/'.$creation['picture4'].'" class="d-block w-100" alt="'.$creation['picture4'].'">
                                     </div>';
                    }
                    if($creation['url'] != ''){
                        $url = '<a class="btn ms-4 mt-3 btn-outline-warning shadow-sm" href = "'.$creation['url'].'" title = "Vers le site" target = "_blank" > Voir le site <i class="fas fa-angle-right" ></i></a >';
                    }
                    echo('<div class="p-3 col-xxl-3 item col-md-6">
                            <div class="box" style="background-image:url(images/'.$creation['picture'].')">
                                <div class="cover">
                                    <h3 class="mb-3">'.$creation['name'].'</h3>
                                    <p><strong>Réalisation(s) :</strong><br/>'.$creation['realisation'].'</p >
                                    <div class="framworks" >
                                        '.$creation['framworks'].'
                                    </div >
                                    '.$url.'
                                    <button class="btn mt-3 btn-outline-warning shadow-sm" data-bs-toggle = "modal" data-bs-target = "#modal'.$creation['suffixe'].'" > Plus d\'images</button>
                                </div>
                                <div class="modal" id="modal'.$creation['suffixe'].'">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                        <!-- Modal body -->
                                            <div class="modal-body">
                                                <div class="text-end">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>
                                                <div id="carousel'.$creation['suffixe'].'" class="carousel slide mb-3" data-bs-ride="carousel">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img src="images/'.$creation['picture1'].'" class="d-block w-100" alt="'.$creation['picture1'].'">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="images/'.$creation['picture2'].'" class="d-block w-100" alt="'.$creation['picture2'].'">
                                                        </div>
                                                        '.$picture3.$picture4.'
                                                    </div>
                                                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel'.$creation['suffixe'].'" data-bs-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Previous</span>
                                                    </button>
                                                    <button class="carousel-control-next" type="button" data-bs-target="#carousel'.$creation['suffixe'].'" data-bs-slide="next">
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
                        </div>');
                        }
                ?>
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
                    <a class="btn btn-outline-warning shadow-sm" href="contact.php" title="Envoyer un message">Contacte
                        moi !</a>
                </div>
            </div>
        </div>
    </section>

</main>

<footer>
    <?php include 'footer.php'; ?>
</footer>

</body>
</html>