<?php
    if (!$_SESSION['login'] && is_null($_SESSION['username'])) {
        header('Location: ' .BASEURL. '/login');
        exit;
    }

    $username = isset($_SESSION['username']) ? $_SESSION['username'] : null;
?>

<div class="container-fluid p-3 bg-primary text-white text-center">
    <?= Flasher::flash(); echo "<h1>Dashboard { $username }</h1>"; ?>
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
                                <h6 class="">Admin ID</h6>
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
            <h3 class="text-center mt-4">Daily Task</h3>
            <hr>
            <div class="table-responsive mt-5" style="max-height: 200px; overflow-y: scroll;">
                <table class="table table-striped table-hover text-center">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Task</th>
                            <th>Level</th>
                            <th>Status</th>
                            <th>Action</th>
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
                                <td><a href="#" style="text-decoration:none; background:blue; color:white; padding:5px; border-radius:5px;">Detail</a></td>
                            </tr>
                        <?php endfor; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-sm-4 bg-dark text-white p-3" style="margin-right:5px; margin-bottom:10px;">
            <h3 class="text-center mt-4">Chat from Developer</h3>
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