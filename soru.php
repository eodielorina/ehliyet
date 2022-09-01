<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soru Sayfası</title>

    <!-- LINK BOOTSTRAP -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap icon cdn -->
    <link rel="stylesheet" href="assets/font/bootstrap-icons.css">

    <!-- LINK CSS -->
    <link rel="stylesheet" href="assets/css/panel.css">

</head>

<body>
    <!-- Header -->
    <?php include "includes/header-panel.php" ?>

    <!-- Page starter -->
    <main class="page-wrapper bg-transparent">
        <div class="section-title w-100 shadow d-flex justify-content-between align-items-center py-3 px-3">
            <h3 class="title">Soru: - / - </h3>
            <div>
                <span>Count Down</span>
            </div>
        </div>

        <div class="container-fluid bg-light px-0">
            <div class="banner">
                <div class="screen"></div>
                <div class="reset">
                    <button class="btn btn-light  shadow">
                        <i class="bi bi-arrow-clockwise font-weight-bold fs-4"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="description-section shadow px-4  pt-3 pb-5 w-100">
            <div class="description-box">
                <div class="row">
                    <div class="col-12">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni similique porro vel quas qui, quam consectetur aliquam reprehenderit optio totam.
                            <b>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta, molestiae?</b>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="question">
                            <p><b>A-</b> Lorem ipsum dolor sit amet </p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#ED760E" class="bi bi-chevron-double-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z" />
                                <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z" />
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="question">
                            <p><b>B-</b> Lorem ipsum dolor sit amet </p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#ED760E" class="bi bi-chevron-double-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z" />
                                <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z" />
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="question active">
                            <p><b>C-</b> Lorem ipsum dolor sit amet </p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#fff" class="bi bi-chevron-double-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z" />
                                <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z" />
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="question">
                            <p><b>D-</b> Lorem ipsum dolor sit amet </p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#ED760E" class="bi bi-chevron-double-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z" />
                                <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 d-flex justify-content-end">
                        <a href="#" class="nextQuestion">Sonraki soru
                            <i class="bi bi-chevron-double-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <!-- Footer -->
    <?php include "includes/footer.php" ?>


    <script src="assets/js/jquery.js"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/panel.js"></script>
</body>

</html>