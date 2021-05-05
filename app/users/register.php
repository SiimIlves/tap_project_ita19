<?php require_once APPROOT.'/views/inc/header.php'; ?>
<div class="row">
    <div class="col-md-6 mx-auto">
        <!-- form register -->
        <div class="card card-outline-secondary mt-5">
            <div class="card-header">
                <h3 class="mb-0">Sign Up</h3>
                <p class="mt-2">Please fill the fields below to register</p>
            </div>
            <div class="card-body">
                <form class="form" role="form">
                    <div class="form-group">
                        <label for="name">Name<sup>*</sup></label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Full name">
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail<sup>*</sup></label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <label for="password">password<sup>*</sup></label>
                        <input type="text" class="form-control" id="password" name="password" placeholder="Enter your password">
                    </div>
                    <div class="form-group">
                        <label for="conpassword">Confirm password<sup>*</sup></label>
                        <input type="text" class="form-control" id="conpassword" name="conpassword" placeholder="Confirm the password">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success btn-lg float-right" type="submit">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    <h1>Add User</h1>
<?php require_once APPOROOT.'/views/inc/footer.php'; ?>