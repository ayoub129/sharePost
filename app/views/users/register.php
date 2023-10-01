<?php require APPROOT . "/views/inc/header.php" ?>
<div class="row">
    <div class="col-md-5 mx-auto">
        <div class="card card-body bg-white mt-5">
            <h2>Create an Account</h2>
            <p>Please fill out this form to register with us</p>
            <form action="<?php echo URLROOT ?>/users/register" method="POST">
                <div class="form-group mt-4">
                    <label for="name" class="mb-2">Name: <sup>*</sup></label>
                    <input type="text" id="name" name="name" class="form-control form-control-lg <?php echo (!empty($data['name_error'])) ? "is-invalid" : "" ?>" value="<?php echo $data['name'] ?>">
                    <span class="invalid-feedback"><?php echo $data['name_error'] ?></span>
                </div>
                <div class="form-group mt-4">
                    <label for="email" class="mb-2">Email: <sup>*</sup></label>
                    <input type="email" id="email" name="email" class="form-control form-control-lg <?php echo (!empty($data['email_error'])) ? "is-invalid" : "" ?>" value="<?php echo $data['email'] ?>">
                    <span class="invalid-feedback"><?php echo $data['email_error'] ?></span>
                </div>
                <div class="form-group mt-4">
                    <label for="password" class="mb-2">Password: <sup>*</sup></label>
                    <input type="password" id="password" name="password" class="form-control form-control-lg <?php echo (!empty($data['password_error'])) ? "is-invalid" : "" ?>" value="<?php echo $data['password'] ?>">
                    <span class="invalid-feedback"><?php echo $data['password_error'] ?></span>
                </div>
                <div class="form-group mt-4">
                    <label for="confirm" class="mb-2">Confirm Password: <sup>*</sup></label>
                    <input type="password" id="confirm" name="confirm" class="form-control form-control-lg <?php echo (!empty($data['confirm_password_error'])) ? "is-invalid" : "" ?>" value="<?php echo $data['confirm_password'] ?>">
                    <span class="invalid-feedback"><?php echo $data['confirm_password_error'] ?></span>
                </div>

                <div class="row mt-5">
                    <div class="col-6">
                        <input type="submit" value="Register" class="btn-success w-full btn">
                    </div>
                    <div class="col-6">
                        <a href="<?php echo URLROOT ?>/users/login" class="btn btn-light w-full">Have an Account ? Login</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php require APPROOT . "/views/inc/footer.php" ?>