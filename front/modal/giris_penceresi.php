<!-- Modal -->
<div class="modal fade" id="girisModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="girisModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-front">
        <div class="modal-content modal-dialog-centered pe-3">
            <div class="modal-body pb-3">
                <form action="">
                    <div class="row">
                        <div class="col-12 mb-1 d-flex justify-content-between">
                            <h5 class="modal-title ps-4">Giriş Yap</h5>
                            <button type="button" class="btn close-modal p-0" data-modal="girisModal">
                                <img src="assets/images/close.png" width="35" alt="Close">
                            </button>
                        </div>
                    </div>

                    <div class="row px-4">
                        <div class="col-12">
                            <div class="form-group mt-2">
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group mt-2">
                                <input type="password" class="form-control" placeholder="Şifre">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex justify-content-between align-items-center mt-2 form-group">
                                <p class="mb-0">Paralomı Unuttum</p>
                                <a href="#" class="btn btn-primary  text-uppercase font-weight-bold rounded-pill text-white">Giriş Yap</a>
                            </div>
                        </div>
                    </div>

                    <div class="row px-4 mt-3">
                        <div class="col-12">
                            <h5 class="modal-title">Üye Ol</h5>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mt-2">
                                <input type="text" class="form-control" placeholder="Ad">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mt-2">
                                <input type="text" class="form-control" placeholder="Soyad">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group mt-2">
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group mt-2">
                                <input type="tel" class="form-control" placeholder="Telefon">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group mt-2">
                                <input type="password" name="" id="oldPassword" placeholder="Eski Şifre" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group mt-2">
                                <input type="password" name="" id="newPasword" placeholder="Yeni Şifre" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row px-4">
                        <div class="col-12">
                            <button class="mt-3 btn btn-primary  text-uppercase font-weight-bold rounded-pill float-end px-4">Üye ol</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>