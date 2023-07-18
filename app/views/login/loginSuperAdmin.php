<!DOCTYPE html>
<html lang="en">

<head>
  <title>{ BracketSters | SuperAdmin }</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?php if($_SESSION["login"] === true){ echo BASEURL . '/dashboard'; } else { echo BASEURL . '/home'; } ?>">{ <b>BracketSters</b> }</a>
    </div>
  </nav>

<div class="container-fluid p-3 bg-primary text-white text-center">
    <h3> { <b>SuperAdmin</b> } </h3>
</div>
<div class="container">
    <div class="container">
        <div class="container">
            <div class="col-lg-3 text-white rounded mx-auto d-block p-2 text-wrap">
                <div class="row justify-content-center">
                    <?= Flasher::flash(); ?>
                </div>
            </div>
            <div class="card mx-auto" style="max-width: 400px;">
                <div class="card-body">
                    <h1 class="text-center mb-4 text-white p-2" style='background: #212280;'>Login</h1>
                    <form method="post" action="<?= BASEURL; ?>/login/loginSuperAdmin">
                        <div class="mb-3">
                            <label for="username" class="form-label fw-bold">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Your username" required>
                        </div>
                        <div class="mb-3">
                            <label for="password1" class="form-label fw-bold">Password</label>
                            <input type="password" class="form-control" id="password1" name="password1" placeholder="Your password" required>
                        </div>
                        <div class="mb-3">
                            <label for="password2" class="form-label fw-bold">Password</label>
                            <input type="password" class="form-control" id="password2" name="password2" placeholder="Your password" required>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<footer class="footer mt-5 py-3 bg-dark ">
  <div class="container text-center">
    <span class="text-white"><p>&copy; 2023 Aldi Ramdani | sponsored by : Bootstrap</p></span>
    <span class="text-white"><p>RPL | Dosen . Rony Regawa Budiman S.Kom, M.Kom</p></span>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>