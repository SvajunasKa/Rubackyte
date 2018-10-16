<?php require_once('includes/header.php'); ?>
<?php $press = Press::find_by_query("SELECT * FROM ziniasklaida ORDER BY id ASC"); ?>
<?php foreach ($press as $straip) { ?>
<section class="spauda">
        <div class="row">
            <div class="container">


                    <div class="heading">
                        <?php if($_SESSION['lang'] == 'lt' ) { echo '<p>Spauda</p>'; } ?>
                        <?php if($_SESSION['lang'] == 'en' ) { echo '<p> Press</p>'; } ?>
                        <?php if($_SESSION['lang'] == 'fr' ) { echo '<p> Press</p>'; } ?>
                    </div>
                        <?php echo $straip->straipsnisLt; ?>
                        <?php echo $straip->nuoroda; ?>
                        <?php echo $straip->nuotrauka; ?>

            </div>
        </div>
</section>
<?php } ?>
<?php require_once('includes/main_footer.php'); ?>
