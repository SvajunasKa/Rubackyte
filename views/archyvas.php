    <?php require_once('includes/header.php'); ?>
    <?php $metai = GrafikasMetai::find_by_query('SELECT * FROM grafikas_metai ORDER BY metai DESC'); ?>
    <?php $archyvai = KoncertuGrafikas::find_by_query('SELECT * FROM koncertu_grafikas ORDER BY data ASC');; ?>
    <section id="archyvas">
        <div class="container">
            <div class="row">
                <div class="col-sm-offset-1 col-sm-10">
                        <?php $year = date("Y"); ?>
                        <?php foreach($metai as $metas) { ?>
                            <?php if($metas->metai == $year) { ?>
                               <div class="col-sm-10" style="padding: 0;">
                                <p class="archyvas-data2"><a class="active_koncertu_metai" href="koncertai.php?metai=<?php echo $metas->metai; ?>#muza">< <?php echo $metas->metai; ?></a></p>
                                </div>
                            <?php } ?>
                        <?php } ?>
                        
                            <?php foreach($metai as $metas) { ?>
                                <?php if($metas->metai != $year) { ?>
                                <div class="col-sm-10" style="padding: 0;">
                                    <p class="archyvas-data2" style="font-size: 20px;"><?php echo $metas->metai; ?></p>
                                </div>
                                <?php foreach($archyvai as $archyvas) { ?>
                                    <?php if($metas->metai == $archyvas->metai) { ?> 
                                        <div class="archyvas_juosta">
                                            <p class="archyvas-data"><?php echo $archyvas->data; ?></p>
                                            <?php if($_SESSION['lang'] == 'lt' ) { echo '<p class="archyvas-informacija">'.$archyvas->pavadinimasLt.'</p>'; } ?>
                                            <?php if($_SESSION['lang'] == 'en' ) { echo '<p class="archyvas-informacija">'.$archyvas->pavadinimasEn.'</p>'; } ?>
                                            <?php if($_SESSION['lang'] == 'fr' ) { echo '<p class="archyvas-informacija">'.$archyvas->pavadinimasFr.'</p>'; } ?>
                                        </div>
                                    <?php } ?>
                                <?php } ?>
                            <?php } ?>
                        <?php } ?>
                       
                           
                </div>
            </div>
        </div>
    </section>
   
    <?php require_once('includes/main_footer.php'); ?>
    
    <script type="text/javascript">
        $(document).ready(function() {
//            $('html, body').animate({
//                scrollTop: $("#scrollHere").offset().top
//            }, 1000); 
        });
    </script>