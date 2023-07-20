<?php
if (!$_SESSION['login'] && is_null($_SESSION['username'])) {
    header('Location: ' . BASEURL . '/login');
    exit;
}

$username = isset($_SESSION['username']) ? $_SESSION['username'] : null;
$datas = $this->model('Users_model')->getUsers();


?>

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
                        <?php foreach ($data['user'] as $data) : ?>
                            <tr>
                                <td>
                                    <h6 class="">Username</h6>
                                </td>
                                <td>:</td>
                                <td>
                                    <h6><?= $data['username']; ?></h6>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6 class="">User ID</h6>
                                </td>
                                <td>:</td>
                                <td>
                                    <h6><?= $data['user_id']; ?></h6>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6 class="">Points</h6>
                                </td>
                                <td>:</td>
                                <td>
                                    <h6 id="points"><?= $data['points'] ?></h6>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6 class="">Rank</h6>
                                </td>
                                <td>:</td>
                                <td>
                                    <h6><?= $data['rank'] ?></h6>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-sm-3 text-white p-2" style="margin-right:5px; margin-bottom:10px; background:#000;">
            <h3 class="text-center mt-3">Select Mode</h3>
            <hr>
            <div class="mt-5">
                <a class="btn btn-success d-block m-2 fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModal">Easy</a>
                <a href="<?= BASEURL; ?>/maintenance" class="btn btn-warning d-block m-2 fw-bold">Medium</a>
                <a href="<?= BASEURL; ?>/maintenance" class="btn btn-danger d-block m-2 fw-bold">Hard</a>
                <a href="<?= BASEURL; ?>/maintenance" class="btn btn-dark d-block m-2 fw-bold">Expert</a>
            </div>
        </div>
        <div class="col-sm-4 bg-dark text-white p-2" style="margin-right: 5px; margin-bottom: 10px;">
            <h3 class="text-center mt-3">Coders Aktif</h3>
            <hr>
            <div class="table-responsive mt-5 text-center" style="max-height: 200px; overflow-y: scroll;">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Coders</th>
                            <th>Rank</th>
                            <th>Points</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($datas as $data) : ?>
                            <tr>
                                <td><?= $data['username'] ?></td>
                                <td><?= $data['rank'] ?></td>
                                <td><?= $data['points'] ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h4 class="text-center">Apakah anda sudah siap?</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Close</button>
                <form action="<?= BASEURL ?>/quiz">

                    <button type="submit" class="btn btn-primary">Start</button>
                </form>
            </div>
        </div>
    </div>
</div>