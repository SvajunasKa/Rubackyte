    <?php require_once('includes/header.php'); ?>
    <?php $web = Informacija::find(1); ?>
    <section id="archyvas">
        <div class="container archyvas-padding-none">
            <!--    DEFAULT      -->
            <div class="row">
                <div class="col-sm-offset-1 col-sm-10">
                    <div class="archyvas_juosta on-mobile-koncertai-first">
                        <?php $metai = GrafikasMetai::find_by_query('SELECT * FROM grafikas_metai ORDER BY id DESC LIMIT 1'); ?>
                        <p class="archyvas-data"></p>
                        <?php $year = date("Y"); ?>
                        <?php foreach($metai as $metas) { ?>
                        <!--  class="active_koncertu_metai" -->
                            <?php if($year == $metas->metai) { ?>
                                <p class="metai"><a class="active_koncertu_metai" href="?metai=<?php echo $metas->metai; ?>#muza"><?php echo $metas->metai; ?></a></p>
                                <?php if($_SESSION['lang'] == 'lt' ) { echo ' <p class="metai"><a href="archyvas.php#muza">'.$web->archyvas_lt.'</a></p>'; } ?>
                                <?php if($_SESSION['lang'] == 'en' ) { echo ' <p class="metai"><a href="archyvas.php#muza">'.$web->archyvas_en.'</a></p>'; } ?>
                                <?php if($_SESSION['lang'] == 'fr' ) { echo ' <p class="metai"><a href="archyvas.php#muza">'.$web->archyvas_fr.'</a></p>'; } ?>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-sm-offset-1 col-sm-10">
                    <?php $grafikai = KoncertuGrafikas::find_by_query("SELECT * FROM koncertu_grafikas WHERE metai = ".$year." ORDER BY data ASC"); ?>
                    <?php foreach($grafikai as $grafikas) { ?>
                        <div class="archyvas_juosta">
                            <p class="archyvas-data"><?php echo $grafikas->data; ?></p>
                            <?php if($_SESSION['lang'] == 'lt' ) { echo '<p class="archyvas-informacija">'.$grafikas->pavadinimasLt.'</p>'; } ?>
                            <?php if($_SESSION['lang'] == 'en' ) { echo '<p class="archyvas-informacija">'.$grafikas->pavadinimasEn.'</p>'; } ?>
                            <?php if($_SESSION['lang'] == 'fr' ) { echo '<p class="archyvas-informacija">'.$grafikas->pavadinimasFr.'</p>'; } ?>
                        </div>
                        <div class="clearfix"></div>
                    <?php } ?>
                </div>
            </div>
            
        </div>
    </section>
   
    <?php require_once('includes/main_footer.php'); ?>
    
    <script type="text/javascript">
//        $(document).ready(function() {
//            $('html, body').animate({
//                scrollTop: $("#scrollHere").offset().top
//            }, 1000); 
//        });
    </script>