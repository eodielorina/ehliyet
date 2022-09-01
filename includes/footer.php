<!-- Modal -->
<?php
include "front/modal/CGU_penceresi.php";
include "front/modal/CGV_penceresi.php";
include "front/modal/donne_penceresi.php";
include "front/modal/Genel_kullanim_Kosullari_penceresi.php";
include "front/modal/giris_penceresi.php";
include "front/modal/gizlilik_politikasi_penceresi.php";
include "front/modal/hakkimizda_penceresi.php";
include "front/modal/iletisim_penceresi.php";
include "front/modal/Kullanim_Kosullari_penceresi.php";
include "front/modal/Satis_Kosullari_penceresi.php";

include "panel/modal/profil_bilgileri.php";
include "panel/modal/test_istatistik.php";
include "panel/modal/test_detay.php";
?>

<footer class="container-fluid">
    <div class="footer-parent position-relative">
        <div class="div-watsup">
            <a href="https://wa.me/261320415441" target="_blank">
                <img src="assets/images/whattsapp.png" width="60" alt="watsup">
            </a>
        </div>
        <div class="row py-5">
            <div class="col-12 text-center">
                <img src="assets/images/logoWhite.png" alt="">
            </div>
        </div>
        <div class="row pt-2 pb-5 text-capitalize mx-2">
            <div class="col-md-4">
                <a href="#" class="footer-link">hazırlık testi</a>
                <a href="#" class="footer-link">Sınav Evrak</a>
                <a href="#" class="footer-link">Sınav Rezervasyon</a>
                <a href="#" class="footer-link">Yardım</a>
                <button type="button" class="footer-link btn" data-bs-toggle="modal" data-bs-target="#modalProfilInfo">
                    Üyelik Bilgileri
                </button>
            </div>
            <div class="col-md-4">
                <button type="button" class="footer-link btn" data-bs-toggle="modal" data-bs-target="#hakkimizdaModal">
                    Hakkımızda
                </button>
                <a href="#" class="footer-link">Sınav Evrak</a>
                <button type="button" class="footer-link btn" data-bs-toggle="modal" data-bs-target="#gizlikPolitikasiModal">
                    Gizlilik Politikasi
                </button>
                <button type="button" class="footer-link btn" data-bs-toggle="modal" data-bs-target="#kullanimKusulariModal">
                    Kullanim Koşuları
                </button>
                <button type="button" class="footer-link btn" data-bs-toggle="modal" data-bs-target="#satisKusulariModal">
                    Satış Koşuları
                </button>
                <button type="button" class="footer-link btn" data-bs-toggle="modal" data-bs-target="#iletisimModal">
                    İletişim
                </button>
            </div>
            <div class="col-md-4">
                <button type="button" class="footer-link btn" data-bs-toggle="modal" data-bs-target="#CGUModal">
                    CGU
                </button>
                <button type="button" class="footer-link btn" data-bs-toggle="modal" data-bs-target="#CGVModal">
                    CGV
                </button>
                <button type="button" class="footer-link btn" data-bs-toggle="modal" data-bs-target="#donneModal">
                    DONNÉES PERSONNELLES
                </button>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-12 text-center">
                <h6 class="text-white">trigger</h6>
                <button type="button" class="btn btn-primary m-1" data-bs-toggle="modal" data-bs-target="#modalTestDetay">
                    Test Detay
                </button>
                <button type="button" class="btn btn-primary m-1" data-bs-toggle="modal" data-bs-target="#modalIstatistik">
                    Test İstatistik
                </button>
                <a href="aciklama.php" class="btn btn-primary m-1">Açiklamaya git</a>
                <a href="soru.php" class="btn btn-primary m-1">Soru sayfasına git</a>
                <a href="uye_sayfa_yeni.php" class="btn btn-primary m-1">Uye sayfasına git</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <p class="text-muted">Ehliyet.fr 2020. Tüm Hakları Saklıdır.</p>
            </div>
        </div>
    </div>
</footer>