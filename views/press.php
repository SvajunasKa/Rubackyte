<?php require_once('includes/header.php'); ?>
<?php $press = Press::find_by_query("SELECT * FROM ziniasklaida ORDER BY id ASC"); ?>
<?php foreach ($press as $straip) { ?>
<section class="spauda" id="dvd">
        <div class="row">
            <div class="container">


                    <div class="heading">
                        <?php if($_SESSION['lang'] == 'lt' ) { echo '<h2>Spauda</h2>'; } ?>
                        <?php if($_SESSION['lang'] == 'en' ) { echo '<h2> Press</h2>'; } ?>
                        <?php if($_SESSION['lang'] == 'fr' ) { echo '<h2> Press</h2>'; } ?>
                    </div>
                        <?php echo $straip->straipsnisLt; ?>
                        <?php echo $straip->nuoroda; ?>
                        <?php echo $straip->nuotrauka; ?>

            </div>
        </div>
</section>
<?php } ?>
<?php require_once('includes/main_footer.php'); ?>
