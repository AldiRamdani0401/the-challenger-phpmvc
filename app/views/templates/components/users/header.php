<!DOCTYPE html>
<html lang="en">

<head>
  <title>{ BracketSters | <?= $data['title'] ?> }</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?= BASEURL ?>/">{ BracketSters }</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link  <?php if($data['title'] === 'Home'){ echo "active"; }?>" aria-current="page" href="<?= BASEURL ?>/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if($data['title'] === 'About'){ echo "active"; }?>" href="<?= BASEURL ?>/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  <?php if($data['title'] === 'Leaderboard'){ echo "active"; }?>" href="#">Leaderboard</a>
          </li>
        </ul>
        <div class="d-flex">
          <a class="btn btn-primary">Login</a>
        </div>
      </div>
    </div>
  </nav>