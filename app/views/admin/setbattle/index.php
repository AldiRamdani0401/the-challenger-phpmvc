<?php
    if (!$_SESSION['login'] && is_null($_SESSION['username'])) {
        header('Location: ' .BASEURL. '/login');
        exit;
    }

    $username = isset($_SESSION['username']) ? $_SESSION['username'] : null;
?>

<div class="container-fluid p-3 bg-primary text-white text-center">
    <h1> { Settings Battle }</h1>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-4 bg-dark text-white p-3" style="margin-right:5px; margin-bottom:10px;">
            <h3 class="text-center mt-4">SetBattle Tasks</h3>
            <hr>
            <div class="table-responsive mt-5 mb-3" style="max-height: 300px; overflow-y: scroll;">
                <table class="table table-striped table-hover table-bordered text-center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Pesan</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Tampilkan 100 baris data di sini -->
                        <?php for ($i = 1; $i <= 100; $i++) : ?>
                            <tr>
                                <td><?= $i ?></td>
                                <td>Aplikasi anda bagus sekali, saya sangat suka</td>
                                <td>read</td>
                            </tr>
                        <?php endfor; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-sm-7 bg-dark text-white p-4" style="margin-right:5px; margin-bottom:10px;">
            <h3 class="text-center mt-4">Options</h3>
            <hr>
            <div class="d-grid gap-5 mt-5 mb-2">
                <a class="btn btn-success" type="button">Settings <b>EASY</b> Mode</a>
                <a class="btn btn-warning" type="button">Settings <b>MEDIUM</b> Mode</a>
                <a class="btn btn-danger" type="button">Settings <b>HARD</b> Mode</a>
                <a class="btn btn-secondary" type="button">Settings <b>EXPERT</b> Mode</a>
            </div>
        </div>
    </div>
</div>
</div>