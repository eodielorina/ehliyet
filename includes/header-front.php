<!-- START OF HEADER HERE -->
<nav class="navbar container px-md-0 mt-md-3  navbar-expand-lg">
    <a class="navbar-brand" href="index.php">
        <img src="assets/images/logo.png" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <!-- <i class="bi bi-list text-purple" style="font-size: 2.45rem;"></i> -->
        <img src="assets/images/Hamburger_icon.png" width="40" alt="" class="Hamburger">
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item d-lg-none">
                <a href="/"> <img src="assets/images/logo.png" alt=""></a>
                <span class="navbar-toggler"><img src="assets/images/close.png" class="float-end mt-2" alt=""></span>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Anasayfa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Hazırlık Testi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Sınav Başvuru</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Sınav Ayarlama</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="modal" href="javascript:void(0)" data-bs-target="#iletisimModal">iletişim</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="loginBtn" data-bs-toggle="modal" href="javascript:void(0)" data-bs-target="#girisModal">Üye Ol / Giriş</a>
            </li>
        </ul>
    </div>
</nav>

<!-- END OF HEADER HERE -->

<div class="row d-none">
    <div class="col-2">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalProfilInfo">
            Profil Bilgileri
        </button>
    </div>
    <div class="col-2">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTestDetay">
            Test Detay
        </button>
    </div>
    <div class="col-2">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalIstatistik">
            Test İstatistik
        </button>
    </div>
</div>