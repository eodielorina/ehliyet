<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Açıklama Sayfası</title>

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

        <div class="section-title w-100 shadow d-flex justify-content-between align-items-center py-3">
            <h3 class="ms-4">Soru: - / - </h3>
            <span class="close">
                <img src="assets/images/close.png" width="30" class="me-3" alt="">
            </span>
        </div>

        <div class="container-fluid px-0">
            <div class="row">
                <div class="col-md-6 position-relative">
                    <div class="screen" style="min-height: 50vh;">

                    </div>
                    <button class="btn btn-light float-end resetBtn d-md-none shadow me-3 mb-3">
                        <i class="bi bi-arrow-clockwise  font-weight-bold fs-4"></i>
                    </button>
                </div>

                <div class="col-md-6 d-md-flex row-aciklama p-4 justify-content-start align-items-center">
                    <div class="descript-content  px-3">
                        <h5 class="description-title">AÇIKLAMA</h5>
                        <p class="description-text">Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore
                            et dolore magna aliqua. Quis ipsum
                            suspendisse ultrices gravida. Risus
                            commodo viverra maecenas
                            accumsan lacus vel facilisis.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="description-section px-4  shadow pt-3 pb-5 w-100">
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
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="question trueAnswer">
                            <p><b>C-</b> Lorem ipsum dolor sit amet </p>
                        </div>
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