<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yeni Üye</title>

    <!-- LINK BOOTSTRAP -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap icon -->
    <link rel="stylesheet" href="assets/font/bootstrap-icons.css">

    <!-- LINK CSS -->
    <link rel="stylesheet" href="assets/css/panel.css">

</head>

<body>
    <!-- Header -->
    <?php include "includes/header-panel.php" ?>

    <!-- Page starter -->
    <main class="page-wrapper  px-3 bg-transparent">
        <!-- BAANNER -->
        <hr>

        <div class="d-flex justify-content-between align-items-center flex-wrap">
            <div>
                <span><img src="assets/images/done.png">&nbsp;&nbsp;Hazırlanma Testi</span><br>
                <span class="text-muted"><img src="assets/images/canceled.png">&nbsp;&nbsp;Başvuru evrakları hizmetleri</span><br>
                <span class="text-muted"><img src="assets/images/canceled.png">&nbsp;&nbsp;Sınav organizasyonları Hizmeti</span>
            </div>

            <div>
                <a href="soru.php" class="btn btn-primary text-uppercase font-weight-bold rounded-pill mt-3 mt-md-0">
                    Testi Başlat
                </a>
            </div>
        </div>

        <hr>

        <!-- Pricing -->
        <div class="row">
            <div class="col-md-4 col-sm-6 mt-3">
                <div class="card  shadow mx-4 mx-xxl-4 pricing-card">
                    <div class="card-header border-0 bg-transparent">
                        <h5 class="text-center pricing-title">Hazırlanma Testi</h5>
                    </div>
                    <div class="card-body text-center">
                        <div class="mt-md-4">
                            <p><img src="assets/images/99euro.png" width="100" alt="99 euro"></p>
                            <p><a href="#" class="mt-2 btn text-white border-radius satinAlindiBtn">
                                    Satın Alındı
                                </a>
                            </p>
                        </div>
                        <div class="mt-2 mx-4 small">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</p>
                            <a href="#" class="text-decoration-none">
                                Tekrar Al
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mt-3">
                <div class="card  shadow mx-4 mx-xxl-4 pricing-card">
                    <div class="card-header border-0 bg-transparent">
                        <h5 class="text-center pricing-title">
                            Başvuru Evrakları Hizmeti
                        </h5>
                    </div>
                    <div class="card-body text-center">
                        <div>
                            <p> <img src="assets/images/49euro.png" width="100" alt="49 euro"></p>
                            <p><a href="#" class="mt-2 btn  btn-outline-primary rounded-pill px-4">
                                    Satın Al
                                </a>
                            </p>
                        </div>
                        <div class="mt-2 mx-4 small">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</p>
                            <a href="#" class="text-decoration-none invisible">
                                Tekrar Al
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mt-3">
                <div class="card  shadow mx-4 mx-xxl-4 pricing-card">
                    <div class="card-header border-0 bg-transparent">
                        <h5 class="text-center pricing-title">
                            Sınav Organizasyon Hizmet</h5>
                    </div>
                    <div class="card-body text-center">
                        <div>
                            <p> <img src="assets/images/99euro.png" width="100" alt="99 euro"></p>
                            <p><a href="#" class="mt-2 btn  btn-outline-primary rounded-pill px-4">
                                    Satın Al
                                </a>
                            </p>
                        </div>
                        <div class="mt-2 mx-4 small">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</p>
                            <a href="#" class="invisible">
                                Tekrar Al
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Block of test sonuçları -->
        <div class="accordion mt-4" id="accordionTestResult">
            <div class="accordion-item  border-top">
                <h2 class="accordion-header" id="testResult">
                    <button class="accordion-button bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTestResult" aria-expanded="true" aria-controls="collapseTestResult">
                        TEST SONUÇLARI
                    </button>
                </h2>
                <div id="collapseTestResult" class="accordion-collapse  collapse show" aria-labelledby="testResult" data-bs-parent="#accordionTestResult">
                    <div class="accordion-body  px-0 pt-1 pb-4">
                        <div class="div-stripped">
                            <div class="row">
                                <div class="col-6 col-md-4 mt-1">
                                    <div> Kalan test saysı: <b>150</b></div>
                                    <div><b>0 / 150</b></div>
                                </div>

                                <div class="col-6 col-md-4 mt-1">
                                    <div> Kalan gün saysı: <b>123</b></div>
                                    <div><b>0 / 123</b></div>
                                </div>

                                <div class="col-12 col-md-4 mt-1">
                                    <h6 class="mt-2">
                                        <a href="#" style="border-radius: .7rem;" class="text-white btn-sm bg-purple text-capitalize btn text-decoration-none">İstatistikleri Gör</a>
                                    </h6>
                                </div>
                            </div>
                        </div>

                        <div class="div-stripped">
                            <div class="row">
                                <div class="col-6 col-md-3">
                                    <span> GG /AA / YY</span>
                                </div>
                                <div class="col-6 col-md-3">
                                    <span>Saat</span>
                                </div>
                                <div class="col-6 col-md-3">
                                    <span>DCS / SS</span>
                                </div>
                                <div class="col-6 col-md-3">
                                    <span>Detayları Gör</span>
                                    <a href="#">
                                        <i class="bi text-purple bi-chevron-double-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="div-stripped">
                            <div class="row">
                                <div class="col-6 col-md-3">
                                    <span> GG /AA / YY</span>
                                </div>
                                <div class="col-6 col-md-3">
                                    <span>Saat</span>
                                </div>
                                <div class="col-6 col-md-3">
                                    <span>DCS / SS</span>
                                </div>
                                <div class="col-6 col-md-3">
                                    <span>Detayları Gör</span>
                                    <a href="#">
                                        <i class="bi text-purple bi-chevron-double-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="div-stripped">
                            <div class="row">
                                <div class="col-6 col-md-3">
                                    <span> GG /AA / YY</span>
                                </div>
                                <div class="col-6 col-md-3">
                                    <span>Saat</span>
                                </div>
                                <div class="col-6 col-md-3">
                                    <span>DCS / SS</span>
                                </div>
                                <div class="col-6 col-md-3">
                                    <span>Detayları Gör</span>
                                    <a href="#">
                                        <i class="bi text-purple bi-chevron-double-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="div-stripped">
                            <div class="row">
                                <div class="col-6 col-md-3">
                                    <span> GG /AA / YY</span>
                                </div>
                                <div class="col-6 col-md-3">
                                    <span>Saat</span>
                                </div>
                                <div class="col-6 col-md-3">
                                    <span>DCS / SS</span>
                                </div>
                                <div class="col-6 col-md-3">
                                    <span>Detayları Gör</span>
                                    <a href="#">
                                        <i class="bi text-purple bi-chevron-double-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="div-stripped">
                            <div class="row">
                                <div class="col-6 col-md-3">
                                    <span> GG /AA / YY</span>
                                </div>
                                <div class="col-6 col-md-3">
                                    <span>Saat</span>
                                </div>
                                <div class="col-6 col-md-3">
                                    <span>DCS / SS</span>
                                </div>
                                <div class="col-6 col-md-3">
                                    <span>Detayları Gör</span>
                                    <a href="#">
                                        <i class="bi text-purple bi-chevron-double-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="div-stripped">
                            <div class="row">
                                <div class="col-6 col-md-3">
                                    <span> GG /AA / YY</span>
                                </div>
                                <div class="col-6 col-md-3">
                                    <span>Saat</span>
                                </div>
                                <div class="col-6 col-md-3">
                                    <span>DCS / SS</span>
                                </div>
                                <div class="col-6 col-md-3">
                                    <span>Detayları Gör</span>
                                    <a href="#">
                                        <i class="bi text-purple bi-chevron-double-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="div-stripped">
                            <div class="row">
                                <div class="col-6 col-md-3">
                                    <span> GG /AA / YY</span>
                                </div>
                                <div class="col-6 col-md-3">
                                    <span>Saat</span>
                                </div>
                                <div class="col-6 col-md-3">
                                    <span>DCS / SS</span>
                                </div>
                                <div class="col-6 col-md-3">
                                    <span>Detayları Gör</span>
                                    <a href="#">
                                        <i class="bi text-purple bi-chevron-double-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="div-stripped">
                            <div class="row">
                                <div class="col-6 col-md-3">
                                    <span> GG /AA / YY</span>
                                </div>
                                <div class="col-6 col-md-3">
                                    <span>Saat</span>
                                </div>
                                <div class="col-6 col-md-3">
                                    <span>DCS / SS</span>
                                </div>
                                <div class="col-6 col-md-3">
                                    <span>Detayları Gör</span>
                                    <a href="#">
                                        <i class="bi text-purple bi-chevron-double-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="div-stripped">
                            <div class="row">
                                <div class="col-6 col-md-3">
                                    <span> GG /AA / YY</span>
                                </div>
                                <div class="col-6 col-md-3">
                                    <span>Saat</span>
                                </div>
                                <div class="col-6 col-md-3">
                                    <span>DCS / SS</span>
                                </div>
                                <div class="col-6 col-md-3">
                                    <span>Detayları Gör</span>
                                    <a href="#">
                                        <i class="bi text-purple bi-chevron-double-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <div class="accordion-item border-top border-bottom">
                <h2 class="accordion-header" id="Payment">
                    <button class="accordion-button bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePayment" aria-expanded="true" aria-controls="collapsePayment">
                        ÖDEME GEÇMİŞİ
                    </button>
                </h2>
                <div id="collapsePayment" class="accordion-collapse" aria-labelledby="Payment" data-bs-parent="#accordionTestResult">
                    <div class="accordion-body  px-0 pt-1 pb-4">
                        <div class="div-stripped text-capitalize">
                            <div class="row">
                                <div class="col-6 col-md-3">
                                    <span> GG / AA / YY</span>
                                </div>
                                <div class="col-6 col-md-3">
                                    <span>Saat</span>
                                </div>
                                <div class="col-6 col-md-3">
                                    <span> ürün adı</span>
                                </div>
                                <div class="col-6 col-md-3">
                                    <span>ödenen miktar</span>
                                </div>
                            </div>
                        </div>

                        <div class="div-stripped text-capitalize">
                            <div class="row">
                                <div class="col-6 col-md-3">
                                    <span> GG / AA / YY</span>
                                </div>
                                <div class="col-6 col-md-3">
                                    <span>Saat</span>
                                </div>
                                <div class="col-6 col-md-3">
                                    <span> ürün adı</span>
                                </div>
                                <div class="col-6 col-md-3">
                                    <span>ödenen miktar</span>
                                </div>
                            </div>
                        </div>

                        <div class="div-stripped text-capitalize">
                            <div class="row">
                                <div class="col-6 col-md-3">
                                    <span> GG / AA / YY</span>
                                </div>
                                <div class="col-6 col-md-3">
                                    <span>Saat</span>
                                </div>
                                <div class="col-6 col-md-3">
                                    <span> ürün adı</span>
                                </div>
                                <div class="col-6 col-md-3">
                                    <span>ödenen miktar</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-footer mb-4">
                        <div class="row">
                            <div class="offset-md-4 col-md-4">
                                <a href="#" class="text-decoration-none">
                                    <span class="text-purple font-weight-bold">1 / 15</span>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="#" class="float-end text-decoration-none">Sonraki Sayfa
                                    <i class="bi text-purple bi-chevron-double-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- End of Block of test sonuçları -->
    </main>
    <!-- Footer -->
    <?php include "includes/footer.php" ?>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/panel.js"></script>
</body>

</html>