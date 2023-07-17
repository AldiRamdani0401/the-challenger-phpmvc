<!DOCTYPE html>
<html lang="en">

<head>
  <title>{ BracketSters | <?= $data['title'] ?> }</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<?php if(isset($_SESSION['login'])){
    echo '<body';
      echo ' style="background: #fff;"';
    echo '>';
}
?>

  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #000080;">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?php if($_SESSION["login"] === true){ echo BASEURL . '/superadmin'; } else { echo BASEURL . '/home'; } ?>">{ <b>BracketSters</b> | SuperAdmin }</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <?php if($_SESSION["login"] === true) { ?>
          <li class="nav-item">
            <a class="nav-link  <?php if($data['title'] === 'SuperAdmin'){ echo "active"; }?>" aria-current="page" href="<?= BASEURL ?>/superadmin"><b>Home</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link  <?php if($data['title'] === 'TaskManager'){ echo "active"; }?>" href="<?= BASEURL ?>/superadmin/taskmanager"><b>Task Manager</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link  <?php if($data['title'] === 'Reports'){ echo "active"; }?>" href="<?= BASEURL ?>/superadmin/reports"><b>Reports</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if($data['title'] === 'Settings'){ echo "active"; }?>" href="<?= BASEURL ?>/superadmin/settings"><b>Settings</b></a>
          </li>
        </ul>
        <?php }?>
        <div class="d-flex">
          <?php if ($data['title'] === 'Login' || $data['title'] === 'Register') { ?>
            <a href="<?= BASEURL ?>/" class="btn btn-danger">{ Kembali }</a>
            <?php } elseif ($_SESSION['login'] === true) {?>
              <a href="<?= BASEURL ?>/logout" class="btn btn-danger">Logout</a>
          <?php } else { ?>
              <a href="<?= BASEURL ?>/login" class="btn btn-primary">Login</a>
          <?php } ?>
        </div>
      </div>
    </div>
  </nav>