<div class="offcanvas offcanvas-start sidebar-nav bg-white" tabindex="-1" id="sidebar">
    <div class="offcanvas-body p-0">
        <nav class="navbar-dark">
            <ul class="navbar-nav">
                <li>
                    <div class="text-muted small fw-bold text-uppercase px-3">
                        <div class="TopBar">
                            <div class="logo">
                                <img src="../asset/img/logo.png" alt="" style="width: -webkit-fill-available; width: -moz-available; transform:scale(.8)">
                                <hr class="dropdown-divider bg-dark" />
                            </div>
                        </div>
                </li>
                <li>
                    <a href="../index.php" class="nav-link px-3 active text-dark">
                        <span class="me-2"><i class="bi bi-speedometer2 text-dark"></i></span>
                        <span><b>Dashboard</b></span>
                    </a>
                </li>
                <li>
                    <hr class="dropdown-divider bg-dark" />
                </li>
                <li>
                    <div class="text-white small fw-bold text-uppercase px-3 mb-2">
                    </div>
                </li>
                <!-- pengurus -->
                <ul class="navbar-nav">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    <b>
                                        <i class="bi bi-people-fill"></i>
                                        <span>Pengurus</span>
                                    </b>
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <li><a class="dropdown-item" href="../pengurus/agama.php">Agama</a></li>
                                    <li><a class="dropdown-item" href="../pengurus/rekening-pembayaran.php">Rekening Pembayaran</a></li>
                                    <li><a class="dropdown-item" href="../pengurus/jabatan.php">Jabatan</a></li>
                                    <li><a class="dropdown-item" href="../pengurus/data-pengurus.php">Data Pengurus</a></li>
                                    <li><a class="dropdown-item" href="../pengurus/foto-pengurus.php">Foto Pengurus</a></li>
                                    <li><a class="dropdown-item" href="../pengurus/struktur-organisasi.php">Stuktur Organisasi</a></li>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    <b>
                                        <i class="bi bi-gear-fill"></i>
                                        <span>Menu Setting</span>
                                    </b>
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <li><a class="dropdown-item" href="../menu-setting/slide.php">Slide</a></li>
                                    <li><a class="dropdown-item" href="../menu-setting/profile.php">Profile</a></li>
                                    <li><a class="dropdown-item" href="../menu-setting/berita.php">Berita</a></li>
                                    <li><a class="dropdown-item" href="../menu-setting/agenda.php">Agenda</a></li>
                                    <li><a class="dropdown-item" href="../menu-setting/kategori-download.php">Kategori Download</a></li>
                                    <li><a class="dropdown-item" href="../menu-setting/download.php">Download</a></li>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    <b>
                                        <i class="bi bi-file-earmark-text"></i>
                                        <span>Master Data</span>
                                    </b>
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <li><a class="dropdown-item" href="../master-data/provinsi.php">Provinsi</a></li>
                                    <li><a class="dropdown-item" href="../master-data/kota-kabupaten.php">Kota/Kabupaten</a></li>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                    <b>
                                        <i class="bi bi-collection"></i>
                                        <span>Klasifikasi</span>
                                    </b>
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <li><a class="dropdown-item" href="../klasifikasi/sbu-kosntruksi.php">SBU Konstruksi</a></li>
                                    <li><a class="dropdown-item" href="../klasifikasi/sbu-nonkonstruksi.php">SBU Non Konstruksi</a></li>
                                    <li><a class="dropdown-item" href="../klasifikasi/sub-sbu-konstruksi.php">Sub SBU Konstruksi</a></li>
                                    <li><a class="dropdown-item" href="../klasifikasi/sub-sbu-nonkonstruksi.php">Sub SBU Non Konstruksi</a></li>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                    <b>
                                        <i class="bi bi-credit-card"></i>
                                        <span>Anggota</span>
                                    </b>
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <li><a class="dropdown-item" href="../perusahaan/anggota.php">KTA</a></li>
                                    <li><a class="dropdown-item" href="../perusahaan/sbu-konstruksi.php">SBU Konstruksi</a></li>
                                    <li><a class="dropdown-item" href="../perusahaan/sbu-nonkonstruksi.php">SBU Non Konstruksi</a></li>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                    <b>
                                    <i class="bi bi-credit-card"></i>
                                        <span>Pembayaran</span>
                                    </b>
                                </button>
                            </h2>
                            <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <li><a class="dropdown-item" href="../pembayaran/perpanjang-kta.php">Perpanjang KTA</a></li>
                                    <li><a class="dropdown-item" href="../pembayaran/perpanjang-sbu-kosntruksi.php">Perpanjang SBU Konstruksi</a></li>
                                    <li><a class="dropdown-item" href="../pembayaran/perpanjang-sbu-nonkonstruksi.php">Perpanjang SBU Non Konstruksi</a></li>
                                    <li><a class="dropdown-item" href="../pembayaran/registrasi-sbu-konstruksi.php">Registrasi SBU Konstruksi</a></li>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                                    <b>
                                        <i class="bi bi-clock-history"></i>
                                        <span>Histori Pembayaran</span>
                                    </b>
                                </button>
                            </h2>
                            <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <li><a class="dropdown-item" href="../histori-pembayaran/perpanjang-kta.php">Perpanjang KTA</a></li>
                                    <li><a class="dropdown-item" href="../histori-pembayaran/perpanjang-sbu-kosntruksi.php">Perpanjang SBU Konstruksi</a></li>
                                    <li><a class="dropdown-item" href="../histori-pembayaran/perpanjang-sbu-nonkonstruksi.php">Perpanjang SBU Non Konstruksi</a></li>
                                    <li><a class="dropdown-item" href="../histori-pembayaran/registrasi-sbu-konstruksi.php">Registrasi SBU Konstruksi</a></li>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingEight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                                    <b>
                                        <i class="bi bi-person-fill"></i>
                                        <span>Pengguna</span>
                                    </b>
                                </button>
                            </h2>
                            <div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="flush-headingHeight" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <li><a class="dropdown-item" href="/pengguna/administrator.php">Administrator</a></li>
                                </div>
                            </div>
                        </div>
                    </div>
                </ul>
            </ul>

        </nav>
    </div>
</div>