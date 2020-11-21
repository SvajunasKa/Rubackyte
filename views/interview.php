<?php require_once('includes/header.php'); ?>
<section id="dvd">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php $youtube = Interview::all('ASC'); ?>
                <div class="right-side">
                    <div class="heading">
                        <?php if($_SESSION['lang'] == 'lt' ) { echo '<h2>Interviu</h2>'; } ?>
                        <?php if($_SESSION['lang'] == 'en' ) { echo '<h2>interview</h2>'; } ?>
                        <?php if($_SESSION['lang'] == 'fr' ) { echo '<h2>Entrevue</h2>'; } ?>
                    </div>

                    <?php foreach($youtube as $you) { ?>

                        <div class="youtube-g">
                            <a href="#" target="_blank">
                                <iframe src="<?php echo $you->interviu; ?>" frameborder="0" width="500" height="280"></iframe>
                            </a>
                            <p><?php echo $you->pavadinimas; ?></p>
                        </div>
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</section>
<?php require_once('includes/main_footer.php'); ?>