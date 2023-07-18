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
<div class="container">
    <div class="col-lg-5 bg-dark text-white p-3 rounded mx-auto d-block m-4 text-wrap" style="border: 3px solid gold ;">
        <h5 class="text-center p-4">My Profile</h5>
        <hr>
        <img src="<?= BASEURL ?>/app/src/images/aldi.png" alt="img1" class="mx-auto d-block m-3 img-thumbnail" width="150px" height="150px">
        <table class="table table-striped table-hover">
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

<style>
    @media (max-width: 576px) {
        .container {
            width: auto;
        }

        .col-lg-8 {
            width: 100%;
        }
    }
</style>
