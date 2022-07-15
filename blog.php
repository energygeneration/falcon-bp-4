<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>eg/blog</title>
</head>

<body>

    <!-- ======================== la navbar ====================== -->
    <?php include('./php/navbar.php'); ?>
    <!-- ============================= =============== -->

    <div class="container  my-5">
        <div class="lien-acceuil m-auto d-flex  fs-5">
            <div>
                <a href="#" class="text-dark">All Posts</a>
            </div>

            <div>
                <a href="#" class="text-dark">Formation Solaire</a>
            </div>

            <div>
                <a href="#" class="text-dark">formation</a>
            </div>

            <div>
                <a href="#" class="text-dark">énergie renouvelable
                </a>
            </div>

            <div>
                <a href="#" class="text-dark">énergie solaire</a>
            </div>

            <div>
                <a href="#" class="text-dark">Plus</a>
                <select name="formation" style="width: 19px;">
                    <option>formation entrepreneuriale</option>
                    <option value="solaire">formation entrepreneuriale solaire</option>
                    <option value="training">Solar Training</option>
                </select>

            </div>

            <div>
                <a href="#"> <img src="image/search.png" style="width: 20px;" alt="search"> </a>
            </div>
        </div>
    </div>

    <!-- =============blog============== -->

    <div class="container">

        <div class="row row-cols-1 row-cols-sm-2  g-3">
            <div class="col">
                <div class="card shadow-sm">
                    <img src="image/homme_qui_parle.webp" class="homme-communicateur container p-0 m-0" alt="homme-communoicateur">
                    <div class="card-body">
                        <p class="card-text fw-bold fs-5">Coup de projecteur sur le parcours entrepreneuriat de la
                            Formation Solaire
                            à Energy Generation</p>

                        <!-- <p class="card-text ">Parce que le solaire représente une véritable opportunité de création
                    d'emplois pour les jeunes, tout en
                    participant au développement...</p> -->
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between mx-3">
                        <p>
                            <span><a href="#" class="text-blog text-black">7 commentaire</a></span>
                        </p>
                        <div>
                            <span>6</span> <a href="#"><img src="image/coeur.png" class="" style="    width: 23px; height: 23px;" alt="coeur"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <img src="image/homme_qui_parle.webp" class="homme-communicateur container p-0 m-0" alt="homme-communoicateur">

                    <div class="card-body">
                        <p class="card-text fw-bold fs-5">Spotlight on the entrepreneurial journey from Solar Training
                            to Energy
                            Generation</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-muted">3 days ago</small>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between mx-3">
                        <p>
                            <span><a href="#" class="text-blog text-black">12 commentaire</a></span>
                        </p>
                        <div>
                            <span>4</span> <a href="#"><img src="image/coeur.png" class="" style="    width: 23px; height: 23px;" alt="coeur"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <img src="image/homme_qui_parle.webp" class="homme-communicateur container p-0 m-0" alt="homme-communoicateur">

                    <div class="card-body">
                        <p class="card-text fw-bold fs-5">Progress report for the first session of the Training in Solar
                            Entrepreneurship at Energy Generation</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-muted">8 days ago</small>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between mx-3">
                        <p>
                            <span><a href="#" class="text-blog text-black">3 commentaire</a></span>
                        </p>
                        <div>
                            <span>9</span> <a href="#"><img src="image/coeur.png" class="" style="    width: 23px; height: 23px;" alt="coeur"></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card shadow-sm">
                    <img src="image/homme_qui_parle.webp" class="homme-communicateur container p-0 m-0" alt="homme-communoicateur">

                    <div class="card-body">
                        <p class="card-text fw-bold fs-5">La 4ème édition de l’Africa Energy Generation Prize lancée.
                            Cette compétition est dédiée à l’accompagnement et à l’accélération business des porteurs de
                            projets talentueux issus du continent africain.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-muted">10 days ago</small>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between mx-3">
                        <p>
                            <span><a href="#" class="text-blog text-black">13 commentaire</a></span>
                        </p>
                        <div>
                            <span>30</span> <a href="#"><img src="image/coeur.png" class="" style="    width: 23px; height: 23px;" alt="coeur"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- ==============section footer =============== -->


    <!--End-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="./js/app.js"></script>

</body>

</html>