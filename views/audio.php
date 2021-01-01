<?php require_once('includes/header.php'); ?>
<section id="dvd">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php $youtube = Audio::all('ASC'); ?>
                <div class="right-side">
                    <div class="heading">
                        <?php if($_SESSION['lang'] == 'lt' ) { echo '<h2>AUDIO ĮRAŠAI</h2>'; } ?>
                        <?php if($_SESSION['lang'] == 'en' ) { echo '<h2>AUDIO RECORDS</h2>'; } ?>
                        <?php if($_SESSION['lang'] == 'fr' ) { echo '<h2>enregistrements audio</h2>'; } ?>
                    </div>

                    <?php foreach($youtube as $you) { ?>
                        <?php if(!empty($you->nuotrauka)) {?>
                            <div class="youtube-g">
                                <a href=<?php echo $you->koncertas; ?> target="_blank">
                                    <img src="assets/images/<?php echo $you->nuotrauka; ?>" >
                                    <div class="icon-play"></div>
                                </a>
                                <p><?php echo $you->pavadinimas; ?></p>
                            </div>
                        <?php } else {?>
                            <div class="youtube-g">
                                <a href="#" target="_blank">
                                    <iframe src="<?php echo $you->koncertas; ?>" frameborder="0" width="500" height="280" target="_blank"></iframe>
                                </a>
                                <p><?php echo $you->pavadinimas; ?></p>
                            </div>
                        <?php } ?>
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</section>
<?php require_once('includes/main_footer.php'); ?>
