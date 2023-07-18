<?php
    if (!$_SESSION['login'] && is_null($_SESSION['username'])) {
        header('Location: ' .BASEURL. '/login');
        exit;
    }

    $username = isset($_SESSION['username']) ? $_SESSION['username'] : null;
?>

<div class="container-fluid p-3 bg-primary text-white text-center">
    <h1>Settings</h1>
</div>
<div>
    <div class="container mt-5">
        <div class="col-lg-8 text-white rounded mx-auto d-block m-3 text-wrap ">
            <div class="m-2 text-center">
                <a class="btn btn-primary m-2" type="button" style="width: 200px; height: 200px; text-align:center; "><i class="bi bi-person-circle d-block mt-5" style="font-size: 50px;"></i><b>Setting SuperAccount</b></a>
                <a class="btn btn-success" type="button" style="width: 200px; height: 200px;"><i class="bi bi-people-fill d-block mt-5" style="font-size: 50px;"></i><b>Setting Admin</b></a>
                <a class="btn btn-primary m-2" type="button" style="width: 200px; height: 200px; text-align:center; "><i class="bi bi-person-lines-fill d-block mt-5" style="font-size: 50px;"></i><b>Setting Users</b></a>
                <a class="btn btn-danger" type="button" style="width: 200px; height: 200px;"><i class="bi bi-cpu-fill d-block mt-5" style="font-size: 50px;"></i><b>Application</b></a>
            </div>
        </div>
    </div>
</div>