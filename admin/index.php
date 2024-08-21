<?php include 'templates/header.php' ?>

<div id="login-main-gradient"></div>

<div id="login-section" class="container">
    <div class="row justify-content-center align-items-center">
        <!-- Icon Column -->
        <div class="col-12 col-md-4 text-center mb-4 mb-md-0">
            <img src="../assets/img/handsnap_icon.png" class="img-fluid p-3" alt="Login Icon">
        </div>
        <!-- Login Form Column -->
        <div class="col-12 col-md-8 text-white p-3">
            <h1 class="text-center mb-4">Login</h1>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group mb-3">
                <label for="Password">Password</label>
                <input type="password" id="Password" class="form-control" placeholder="Enter Password">
            </div>
            <div class="form-group text-center">
                <a href="account_mgt.php" class="btn btn-primary" type="button">Login</a>
            </div>
        </div>
    </div>
</div>

<?php include 'templates/footer.php' ?>