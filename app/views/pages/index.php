<?php require APPROOT . "/views/inc/header.php" ?>
<div class="h-100 p-5 bg-body-tertiary border rounded-3 text-center w-50 mx-auto">
    <div class="container">
        <h1 class="display-3">
            <?php echo $data['title'] ?>
        </h1>
        <p class="lead"><?php echo $data['description'] ?></p>
    </div>
</div>
<?php require APPROOT . "/views/inc/footer.php" ?>