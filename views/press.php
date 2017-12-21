<?php require_once('includes/header.php'); ?>
<?php $press = Press::all(); ?>
<section id="ziniasklaida">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php foreach($press as $straip) { ?>
                    <section class="spauda">
                <?php  echo $straip->straipsnisLt; ?>
                    </section>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<?php require_once('includes/main_footer.php'); ?>
