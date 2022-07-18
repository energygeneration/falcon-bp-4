<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Mentorat</title>
</head>

<body>
    <!-- ======================== la navbar ====================== -->
    <?php include('./php/navbar.php'); ?>
    <!-- ================ section carousel =============== -->

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./image/img-carousel-un.webp" class="d-block w-100 img-carousel" alt="un">
            </div>
            <div class="carousel-item">
                <img src="./image/img-carousel-deux.webp" class="d-block w-100 img-carousel" alt="deux">
            </div>
            <div class="carousel-item">
                <img src="./image/img-carousel-trois.webp" class="d-block w-100 img-carousel" alt="trois">
            </div>
            <div class="carousel-item">
                <img src="./image/img-carousel-qtre.webp" class="d-block w-100 img-carousel" alt="quatre">
            </div>
            <div class="carousel-item">
                <img src="./image/img-carousel-cinq.webp" class="d-block w-100 img-carousel" alt="cinq">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- ============== contenu de la page ============ -->

    <div class="container">
        <h2 class="text-center mt-5 mb-5 fs-h_deux">PARTICIPEZ AU SUCCÈS DE NOS ENTREPRENEUR.E.S</h2>

        <p class="text-start text-justify p-regular fs-paragraphe">
            Chez Energy Generation, un mentor apporte un regard critique, challenge et donne des conseils bienveillants
            à un.e entrepreneur.e ou une équipe d’entrepreneur.e.s sur leur projet d’entreprise. Il leur transmet de
            façon proactive son expérience et son savoir-être de dirigeant.e ou d’expert.e. Il peut être amené, dans la
            mesure du possible, à mettre en œuvre les moyens dont il dispose (contacts, réseau, ressources…) pour
            accompagner au mieux le développement de la start up. Le mentor n’a en aucun cas un pouvoir de décision dans
            la direction de la start up. L’activité de mentorat n’est pas rémunérée.
        </p>

        <h2 class="text-center mt-5 mb-5 fs-h_deux">
            DEVENEZ MENTOR : transmettez votre expertise !
        </h2>

        <p class="text-start text-justify p-regular mb-5 fs-paragraphe">
            Les mentors sont des personnes volontaires, enthousiastes, et dotées de capacités d’écoute, de dialogue et
            de créativité. Leur rôle est de bâtir une relation de confiance avec les entrepreneur.e.s. <br> <br>

            Pour être mentor, vous devez : <br> <br>

            -Avoir au moins 5 années d’expérience professionnelle ou une expérience entrepreneuriale probante <br> <br>

            -Être à l'écoute, enthousiaste et avoir envie de partager vos compétences et vos expériences <br> <br>

            -Être disponible pour une séance de travail au moins 1 fois par mois minimum avec l’entrepreneur.e que vous
            mentorez et ce, pour une période de 6 mois minimum <br> <br>

            NB : L’activité de mentorat n’est pas rémunérée.
        </p>

    </div>

    <div class="bar-nos-prog-vdeux text-justify">
        <h1 class="m-auto fs-h_un">NOS MENTORS</h1>
    </div>

    <div class="container">
        <div class="row row-cols-2">
            <div class="col-12 col-sm-6 my-auto">
                <img src="./image/img-matt_stedman.webp" class="img-fluid" alt="logo-eg-accueil">
            </div>
            <div class="col-12 col-sm-6 my-auto">
                <p class="p-regular entrep-solaire-descript text-justify me-0 fs-paragraphe ">
                    "J'ai commencé à faire du mentorat pour les entrepreneurs d'Energy Generation en octobre 2020, à
                    raison de quelques heures par semaine, a distance : j'aidais les entrepreneurs a progresser en
                    anglais. En mars 2021, je me suis rendu sur le campus ou j'ai pu mentorer un aspect plus concret des
                    projets en résidence : le prototypage et le développement de produit, mais aussi en partageant mon
                    expérience du monde des start up et capital-risque."
                </p>

            </div>
        </div>
    </div>

    <div class="bar-nos-prog-vdeux text-justify mb-5">
        <h1 class="m-auto fs-h_un">Intéréssé.e ? Manifestez votre intérêt ici !</h1>
    </div>

    <div class="container">
        <button type="button" class="btn m-auto mb-5 d-flex btn-primary btn-color pding-bnt">
            DEVENEZ MENTOR
        </button>
    </div>

    <!-- ==============section footer =============== -->

    <?php include('./php/footer.php'); ?>

    <!--End-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>