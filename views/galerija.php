    <?php require_once('includes/header.php'); ?>
    <?php $nuotraukos = Galerija::all(); ?>
    <?php $web = Informacija::find(1); ?>
    <section id="galerija">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 galerija-on-mobile">
                    <?php foreach($nuotraukos as $nuotrauka) { ?>
                    <div class="img_background">
                        <a class="test-popup-link" href="assets/images/<?php echo $nuotrauka->nuotrauka ?>">
                            <div class="img_info">
                                <p class="title_info"><?php echo $nuotrauka->pavadinimas; ?></p>
                                <?php if($_SESSION['lang'] == 'lt' ) { ?>
                                <p class="description_info"><?php echo $nuotrauka->aprasymas; ?></p>
                                <?php } ?>
                                <?php if($_SESSION['lang'] == 'en' ) { ?>
                                <p class="description_info"><?php echo $nuotrauka->aprasymasEn; ?></p>
                                <?php } ?>
                                <?php if($_SESSION['lang'] == 'fr' ) { ?>
                                <p class="description_info"><?php echo $nuotrauka->aprasymasFr; ?></p>
                                <?php } ?>
                                
                            </div>
                            <div class="small-img" style="background: url('assets/images/<?php echo $nuotrauka->nuotrauka ?>') no-repeat; background-size: cover; background-position: center top"></div>
                        </a>
                        <a class="down_button" href="assets/images/<?php echo $nuotrauka->nuotrauka ?>" download ><img src="assets/images/download-BTN.png" alt=""><br>
                        <?php if($_SESSION['lang'] == 'lt' ) { echo $web->nuotrauka_lt; } ?>
                        <?php if($_SESSION['lang'] == 'en' ) { echo $web->nuotrauka_en; } ?>
                        <?php if($_SESSION['lang'] == 'fr' ) { echo $web->nuotrauka_fr; } ?>
                        </a>
                    </div>
                    <?php } ?>
                </div>
<!--
                <div class="col-sm-12 gallery_bottom">
                    <?php if($_SESSION['lang'] == 'lt' ) { echo "<h2>Aukštos kokybės nuotraukos</h2>"; } ?>
                    <?php if($_SESSION['lang'] == 'en' ) { echo "<h2>High Quality photos</h2>"; } ?>
                    <?php if($_SESSION['lang'] == 'fr' ) { echo "<h2>Photos de haute qualité</h2>"; } ?>
                    <button type="submit" onclick="window.open('file.doc')">Download!</button>
                    <?php if($_SESSION['lang'] == 'lt' ) { echo '<h2>Parsisiųsti <a href="#"><img src="assets/images/download-BTN.png" alt=""></a></h2>'; } ?>
                    <?php if($_SESSION['lang'] == 'en' ) { echo '<h2>Download <a href="#"><img src="assets/images/download-BTN.png" alt=""></a></h2>'; } ?>
                    <?php if($_SESSION['lang'] == 'fr' ) { echo '<h2>Télécharger <a href="#"><img src="assets/images/download-BTN.png" alt=""></a></h2>'; } ?>
                </div>
-->
            </div>
        </div>
    </section>
    
    <?php require_once('includes/main_footer.php'); ?>
    
    <script type="text/javascript">
        $(document).ready(function() {
            $('.img_background').hover(
                  function() {
                      $( this ).find( ".down_button" ).show();
                  }, function() {
                    $( this ).find( ".down_button" ).hide();
                  }
            );
            
        });
    </script>