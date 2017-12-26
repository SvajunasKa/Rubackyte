<?php require_once('includes/header.php'); ?>
<?php $press = Press::find_by_query("SELECT * FROM ziniasklaida ORDER BY id ASC"); ?>
<?php foreach ($press as $straip) { ?>
<section class="spauda">
        <div class="row">
            <div class="container">
                <div class="col-sm-offset-1 col-sm-10">
                        <?php echo $straip->straipsnisLt; ?>
                        <?php echo $straip->nuoroda; ?>
                        <?php echo $straip->nuotrauka; ?>
                </div>
            </div>
        </div>
</section>
<?php } ?>
<?php require_once('includes/main_footer.php'); ?>
