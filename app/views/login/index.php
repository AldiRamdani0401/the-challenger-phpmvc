<div class="container-fluid p-3 bg-primary text-white text-center">
    <h1> { BracketSters } => Login </h1>
</div>
<div class="container">
    <div class="container">
        <div class="container">
            <div class="col-lg-3 bg-dark text-white rounded mx-auto d-block m-5 p-2 text-wrap">
                <div class="card mx-auto" style="max-width: 400px;">
                    <div class="card-body">
                            <h1 class="text-center mb-4 text-white p-2" style='background: #212280;'>Login</h1>
                        <form method="post" action="<?= BASEURL; ?>/login/login">
                            <div class="mb-3">
                                <label for="username" class="form-label fw-bold">Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Your username" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label fw-bold">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Your password" required>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                        <p class="text-center mt-3">Not registered? <a href="<?= BASEURL; ?>/register">Register Now!</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>