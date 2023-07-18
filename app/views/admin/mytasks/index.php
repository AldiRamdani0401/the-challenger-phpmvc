<?php
    if (!$_SESSION['login'] && is_null($_SESSION['username'])) {
        header('Location: ' .BASEURL. '/login');
        exit;
    }

    $username = isset($_SESSION['username']) ? $_SESSION['username'] : null;
?>

<div class="container-fluid p-3 bg-primary text-white text-center">
    <h1>{ MyTasks }</h1>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-7 bg-dark text-white p-2" style="margin-right:5px; margin-bottom:10px;">
            <h3 class="text-center mt-4">Daily Task</h3>
            <hr>
            <div class="table-responsive mt-5" style="max-height: 200px; overflow-y: scroll;">
                <table class="table table-striped table-hover text-center">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Task</th>
                            <th>Priority</th>
                            <th>Category</th>
                            <th>Manager</th>
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
                                <td>SetBattle</td>
                                <td>Budi Santoso</td>
                                <td>Point <?php echo $i; ?></td>
                                <td><a href="#" class="btn btn-primary">Start</a></td>
                            </tr>
                        <?php endfor; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-sm-4 bg-dark text-white p-3" style="margin-right:5px; margin-bottom:10px;">
            <h3 class="text-center mt-4">Chat to Manager</h3>
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