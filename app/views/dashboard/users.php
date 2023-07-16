<!-- <h1> Selamat Datang  { Coders }</h1> -->

<!-- buat flasher disini => notif ketika user login -->
<div class="container-fluid p-3 bg-primary text-white text-center">
    <h1> Selamat Datang { Coders }</h1>
</div>
<!-- <div class="container">
    <div class="container">
        <div class="container">
        <div class="col-lg-8 bg-dark text-white p-3 rounded mx-auto d-block m-3 text-wrap ">
                <p><b class="fs-3">BracketSters,</b> Merupakan aplikasi berbasis website yang menyediakan Free Test mengenai Bahasa Pemrograman pada bidang Web Development.</p>
                <p>Tujuan utama dibuatnya <b>BracketSters</b> adalah :</p>
                <p class="text-center"><i>" Sebagai sarana edukasi terbuka untuk semua kalangan mengenai Bahasa Pemrogaram teknologi WEB dasar dengan pendekatan sesuai kebutuhan Industri Software, dan sebagai bentuk pengabdian untuk masyarakat. "</i></p>
                <hr>
                <h5 class="text-center m-4">Developer BracketSters</h5>
                <img src="<?= BASEURL ?>/app/src/img/aldi.png" alt="img1" class="mx-auto d-block m-3 img-thumbnail" width="150px" height="150px">
                <h6 class="text-center">Aldi Ramdani</h6>
            </div>
        </div>
    </div>
</div> -->
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-4 bg-dark text-white p-2" style="margin-right:5px; margin-bottom:10px;">
            <div class="col-lg-8 bg-dark text-white rounded mx-auto d-block m-3 text-wrap ">
                <h5 class="text-center m-4">My Profile</h5>
                <hr>
                <img src="<?= BASEURL ?>/app/src/images/aldi.png" alt="img1" class="mx-auto d-block m-3 img-thumbnail" width="150px" height="150px">
                <table class="table table-dark table-striped table-hover">
                    <tbody>
                        <tr>
                            <td>
                                <h6 class="">Username</h6>
                            </td>
                            <td>:</td>
                            <td>
                                <h6>aldiramdani04</h6>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h6 class="">User ID</h6>
                            </td>
                            <td>:</td>
                            <td>
                                <h6>1</h6>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h6 class="">Nama Lengkap</h6>
                            </td>
                            <td>:</td>
                            <td>
                                <h6>Aldi Ramdani</h6>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h6 class="">Email</h6>
                            </td>
                            <td>:</td>
                            <td>
                                <h6>aldi@gmail.com</h6>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-sm-3 bg-dark text-white p-2" style="margin-right:5px; margin-bottom:10px;">
            <h3 class="text-center mt-4">History</h3>
            <hr>
            <div class="table-responsive mt-5" style="max-height: 200px; overflow-y: scroll;">
                <table class="table table-striped table-hover text-center">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Match</th>
                            <th>Points</th>
                            <th>Benar</th>
                            <th>Salah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Tampilkan 100 baris data di sini -->
                        <?php for ($i = 1; $i <= 100; $i++) : ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td>Data <?php echo $i; ?></td>
                                <td>Point <?php echo $i; ?></td>
                                <td>Point <?php echo $i; ?></td>
                                <td>Point <?php echo $i; ?></td>
                            </tr>
                        <?php endfor; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-sm-4 bg-dark text-white p-3" style="margin-right:5px; margin-bottom:10px;">
            <h3 class="text-center mt-4">Chat to Developer</h3>
            <hr>
            <div class="table-responsive mt-5 mb-3" style="max-height: 200px; overflow-y: scroll;">
                <table class="table table-striped table-hover table-bordered text-center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Pesan</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Tampilkan 100 baris data di sini -->
                        <?php for ($i = 1; $i <= 100; $i++) : ?>
                            <tr>
                                <td><b>Me</b></td>
                                <td>Aplikasi anda bagus sekali, saya sangat suka</td>
                                <td>read</td>
                                <td><button>hapus</button></td>
                            </tr>
                        <?php endfor; ?>
                    </tbody>
                </table>
            </div>
            <div class="container">
                <form class="text-center">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="pesan">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>