<?php include('header.php') ?>

<div class="well gallery">
    <div class="row">
        <?php
        $files = scandir('images/gallery');

        foreach ($files as $file) {
            if ($file == '.' || $file == '..') { continue; } ?>

        <div class="col-xs-3">
            <a class="thumbnail">
                <img src="images/gallery/<?php echo $file ?>" alt="125x125">
            </a>
        </div>
        <?php } ?>
    </div>
</div>

<div class="modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-body"></div>
</div>

<?php include('footer.php') ?>