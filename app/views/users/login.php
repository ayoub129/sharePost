<?php require APPROOT . "/views/inc/header.php" ?>
<div class="row">
    <div class="col-md-5 mx-auto">
        <div class="card card-body bg-white mt-5">
            <?php flash("register_success") ?>
            <h2>Log In</h2>
            <p>Please fill out this form to login with us</p>
            <form action="<?php echo URLROOT ?>/users/login" method="POST">
                <div class="form-group">
                    <label for="email" class="mb-2 mt-4">Email: <sup>*</sup></label>
                    <input type="email" id="email" name="email" class="form-control form-control-lg <?php echo (!empty($data['email_error'])) ? "is-invalid" : "" ?>" value="<?php echo $data['email'] ?>">
                    <span class="invalid-feedback"><?php echo $data['email_error'] ?></span>
                </div>
                <div class="form-group">
                    <label for="password" class="mb-2 mt-4">Password: <sup>*</sup></label>
                    <input type="text" id="password" name="password" class="form-control form-control-lg <?php echo (!empty($data['password_error'])) ? "is-invalid" : "" ?>" value="<?php echo $data['password'] ?>">
                    <span class="invalid-feedback"><?php echo $data['password_error'] ?></span>
                </div>
                <div class="row mt-5">
                    <div class="col-6">
                        <input type="submit" value="Login" class="btn-success w-full btn">
                    </div>
                    <div class="col-6">
                        <a href="<?php echo URLROOT ?>/users/register" class="btn btn-light w-full">No Account ? Register</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php require APPROOT . "/views/inc/footer.php" ?>