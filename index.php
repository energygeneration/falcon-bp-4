<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Acceuil</title>
</head>

<body>
    <!-- ======================== la navbar ====================== -->
    <?php include('./php/navbar-accueil.php'); ?>
    <!-- ================ section carousel =============== -->

    <div>
        <video id="background-video" autoplay loop muted>
            <source src="./video/eg.mp4" type="video/mp4">
        </video>

        <h1 class="text-white fw-bold text-un-headerVideo text-center">ENERGY GENERATION
        </h1>
        <h1 class="text-white fw-bold text-un-headerVideo text-center fs-paragraphe text-deux-headerVideo">Au coeur de
            la reussite des jeunes
        </h1>
    </div>

    <!-- ============== section a propos de nous ============ -->

    <div class="container">
        <div class="text-center mt-5 mb-5">
            <img src="./image/logo-eg-accueil.webp" class="img-fluid logo-eg-second" alt="logo-eg-accueil">
        </div>

        <p class="text-start  fs-paragraphe ">Energy Generation est une <span class="fs-h_deux">organisation
                panafricaine</span> qui
            encourage les jeunes
            Africains à
            relever les défis les plus pressants de leur génération (énergie, agriculture, santé, etc.) à travers
            <span class="fs-h_deux">l'entrepreneuriat et la technologie.</span> <br> <br>
            Energy Generation vise à soutenir et à promouvoir les innovations technologiques et entrepreneuriales afin
            d'identifier, de développer et de diffuser largement les solutions pratiques «<span class="fs-h_deux">made
                in Africa</span> ». <br> <br>
            Mais avant tout, Energy Generation est une <span class="fs-h_deux">plate-forme centrée sur l'humain</span>
            qui offre aux individus des
            possibilités de libérer et d’exprimer toute leur <span class="fs-h_deux">créativité.</span>
        </p> <br> <br>
    </div>

    <!-- ============== =====================-->

    <div class="container mb-5">
        <div class="row">
            <div class="col mb-3">
                <div class="card m-auto img-fluid" style="width: 20rem; height: 100%;">
                    <img src="/image/img-mission.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fs-h_deux">MISSION</h5>
                        <p class="card-text">Révolutionner l'accès à l'éducation, à l'accompagnement et au financement
                            en construisant un
                            écosystème entrepreneurial... </p>
                        <a href="#" class="btn btn-primary">En savoir plus</a>
                    </div>
                </div>
            </div>

            <div class="col mb-3">
                <div class="card m-auto img-fluid" style="width: 20rem; height: 100%;">
                    <img src="/image/img-vision.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fs-h_deux">VISION</h5>
                        <p class="card-text">Permettre l'émergence d'une nouvelle génération africaine en mesure de
                            relever le défi de la dignité
                            humaine sur le continent africain et au-delà.</p>
                        <a href="#" class="btn btn-primary">En savoir plus</a>
                    </div>
                </div>
            </div>

            <div class="col mb-3">
                <div class="card m-auto img-fluid" style="width: 20rem; height: 100%;">
                    <img src="./image/img-form-solaire.webp" class="card-img-top" alt="logo-eg-accueil">
                    <div class="card-body">
                        <h5 class="card-title fs-h_deux">Formation solaire</h5>
                        <p class="card-text">Parce que le solaire représente une véritable opportunité de création
                            d'emplois pour les jeunes tout
                            en
                            participant au développement...</p>
                        <a href="#" class="btn btn-primary">En savoir plus</a>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <!-- ======== nos programmes =========== -->

    <div class="bar-nos-prog text-justify mb-5">
        <h1 class="m-auto fs-h_un">NOS PROGRAMMES</h1>
    </div>

    <div class="container">
        <p class="text-start p-regular mb-5 fs-paragraphe">
            Energy Generation est une organisation panafricaine qui encourage les jeunes
            Au sein de nos Business Schools,<span class="fs-h_deux">théorie et pratique se rencontrent</span> pour
            transformer des idées novatrices en
            entreprises viables. <br><br> En tant qu'étudiant porteur de projet, vous suivrez <span
                class="fs-h_deux">une formation diplômante
                en
                entrepreneuriat</span> et aurez l’occasion de bénéficier de l’expérience pratique des professionnels
            issus
            d'entreprises leader mondiales de leur secteur. <br> <br> Au sein de nos écoles, les porteurs de projet
            bénéficient
            des installations du laboratoire pour <span class="fs-h_deux">développer leur prototype</span> , ainsi que
            d’un accompagnement personnalisé
            pour structurer leur projet entrepreneurial.
        </p>
    </div>

    <div class="container mb-5">
        <div class="row">
            <div class="col ">
                <div class="b-e-school btn-nos-prog d-flex justify-content-center m-auto ms-0">
                    <p class="mb-0 fs-paragraphe">La Business & Energy School</p>
                </div>
            </div>
            <div class="col">
                <div class="b-h-school btn-nos-prog d-flex justify-content-center m-auto">
                    <p class="mb-0 fs-paragraphe">La Business & Healthcare School</p>
                </div>
            </div>
            <div class="col">
                <div class="b-a-school btn-nos-prog d-flex justify-content-center m-auto me-0">
                    <p class="mb-0 fs-paragraphe">La Business & Agri School</p>
                </div>
            </div>
        </div>
    </div>
    <!-- ================== - INCUBATEUR & SEED FUND - =========-->

    <div class="bar-nos-prog text-justify mb-5">
        <h1 class="m-auto fs-h_un">L'ENERGY SPACE <br> - INCUBATEUR & SEED FUND -</h1>
    </div>

    <div class="container mb-5">
        <div class="row  mb-5">
            <div class="col-12 col-sm-6">
                <p class="p-regular entrep-solaire-descript text-justify ms-0 fs-paragraphe">
                    L’Energy Generation Incubator et le Co-working Space accueillent

                    des start-ups prometteuses dans le domaine de l'énergie, mais pas seulement.

                    Les services d'incubation incluent un coaching personnalisé, avec formation et mentorat, ainsi qu’un
                    soutien dans les activités quotidiennes et les défis rencontrés.

                    Afin de soutenir le développement d'un écosystème entrepreneurial international,

                    l'incubateur accueillera des projets issus de l’Academy, mais aussi plusieurs projets de milieux et
                    de pays africains différents.
                </p>


            </div>

            <div class="col-12 col-sm-6">
                <img src="./image/img-form-solaire.webp" class="img-fluid text-justify me-0" alt="logo-eg-accueil">
            </div>
        </div>

        <button type="button" class="btn m-auto mb-5 d-flex btn-danger pding-bnt">L'Energy Space</button>
    </div>

    <!-- ==============section footer =============== -->
    <?php include('./php/footer.php'); ?>
    <!--End-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="./js/app.js"></script>

</body>

</html>