<div class="container-fluid p-3 text-white text-center" style="background:#101010;">
    <h1> Battlefield </h1>
</div>
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
                                <h6 class="">Points</h6>
                            </td>
                            <td>:</td>
                            <td>
                                <h6>1000</h6>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h6 class="">Rank</h6>
                            </td>
                            <td>:</td>
                            <td>
                                <h6>10</h6>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-sm-3 text-white p-2" style="margin-right:5px; margin-bottom:10px; background:#000;">
            <h3 class="text-center">echo "..." ;</h3>
            <hr>
            <p class="text-center">Pertama-tama, pecahkan masalahnya. Kemudian, tulis kodenya.</p>
            <p class="text-center"><strong>(John Johnson)</strong></p>
        </div>
        <div class="col-sm-4 bg-dark text-white p-2" style="margin-right: 5px; margin-bottom: 10px;">
            <h3 class="text-center">Coders Aktif</h3>
            <div class="table-responsive mt-5" style="max-height: 200px; overflow-y: scroll;">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Rank</th>
                            <th>Coders</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Tampilkan 100 baris data di sini -->
                        <?php for ($i = 1; $i <= 100; $i++) : ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td>Data <?php echo $i; ?></td>
                            </tr>
                        <?php endfor; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>