<?php
    if (!$_SESSION['login'] && is_null($_SESSION['username'])) {
        header('Location: ' .BASEURL. '/login');
        exit;
    }

    $username = isset($_SESSION['username']) ? $_SESSION['username'] : null;
?>
<div class="container">
    <div class="container">
        <div class="container">
            <div class="col-lg-3 bg-dark text-white rounded mx-auto d-block m-3 p-2 text-wrap">
                <div class="card mx-auto" style="max-width: 400px;">
                    <div class="card-body">
                    <h1 class="text-center mb-2 text-white p-2 rounded" style='background: #212280;'>Settings</h1>
                        <form class="row" method="post" action="<?= BASEURL; ?>/register/daftar">
                            <div class="col-md-12 mt-2">
                                <label for="nama_pelanggan" class="form-label fw-bold">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" placeholder="fullname" required>
                            </div>
                            <div class="col-md-12 mt-2">
                                <label for="nama_pelanggan" class="form-label fw-bold">Email</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="email" required>
                            </div>
                            <div class="col-md-12 mt-2">
                                <label for="username" class="form-label fw-bold">Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="username" required>
                            </div>
                            <div class="col-md-12 mt-2">
                                <label for="password" class="form-label fw-bold">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="password" required>
                            </div>
                            <div class="col-md-12 mt-2">
                                <label for="confPassword" class="form-label fw-bold">Confirm Password</label>
                                <input type="password" class="form-control" id="confPassword" name="confPassword" placeholder="confirm password" required>
                            </div>
                            <div class="col-12 mt-3 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>