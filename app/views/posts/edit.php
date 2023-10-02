<?php require APPROOT . "/views/inc/header.php" ?>
<a href="<?php echo URLROOT ?>/posts/index" class="btn btn-light"><i class="fas fa-backward"></i> Back </a>
<div class="card card-body bg-white mt-5">
    <h2>Edit post</h2>
    <p>Edit the post with this form</p>
    <form action="<?php echo URLROOT ?>/posts/edit/<?php echo $data['id'] ?>" method="POST">
        <div class="form-group">
            <label for="title" class="mb-2 mt-4">Title: <sup>*</sup></label>
            <input type="text" id="title" name="title" class="form-control form-control-lg <?php echo (!empty($data['title_error'])) ? "is-invalid" : "" ?>" value="<?php echo $data['title'] ?>">
            <span class="invalid-feedback"><?php echo $data['title_error'] ?></span>
        </div>
        <div class="form-group">
            <label for="body" class="mb-2 mt-4">body: <sup>*</sup></label>
            <textarea id="body" name="body" class="form-control form-control-lg <?php echo (!empty($data['body_error'])) ? "is-invalid" : "" ?>">   <?php echo $data['body'] ?> </textarea>
            <span class="invalid-feedback"><?php echo $data['body_error'] ?></span>
        </div>
        <input type="submit" value="submit" class="btn btn-success mt-4">
    </form>
</div>
<?php require APPROOT . "/views/inc/footer.php" ?>