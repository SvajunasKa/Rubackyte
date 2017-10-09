    <?php require_once('includes/header.php'); ?>
    <?php $web = Informacija::find(1); ?>
    <section id="diskografija">
        <div class="container">
            <div class="row">
                <?php $cdvinilas = DiskografijaCd::all('ASC'); ?>
                <div class="col-sm-12 diskografas-on-mobile">
                    <?php if($_SESSION['lang'] == 'lt' ) { echo '<h2>'.$web->cd_lt.'</h2>'; } ?>
                    <?php if($_SESSION['lang'] == 'en' ) { echo '<h2>'.$web->cd_en.'</h2>'; } ?>
                    <?php if($_SESSION['lang'] == 'fr' ) { echo '<h2>'.$web->cd_fr.'</h2>'; } ?> 
                    <?php foreach($cdvinilas as $cd1) { ?>
                    <div class="diskografija_box">
                        <div class="img_info">
                            <?php if($_SESSION['lang'] == 'lt' ) { echo '<p class="title_info" data-id="'.$cd1->id.'">'.$cd1->pavadinimasLt.'</p>'; } ?>
                            <?php if($_SESSION['lang'] == 'en' ) { echo '<p class="title_info" data-id="'.$cd1->id.'">'.$cd1->pavadinimasEn.'</p>'; } ?>
                            <?php if($_SESSION['lang'] == 'fr' ) { echo '<p class="title_info" data-id="'.$cd1->id.'">'.$cd1->pavadinimasFr.'</p>'; } ?> 
                        </div>
                        <?php $nuotrauka = 'assets/images/'.$cd1->nuotrauka; ?>
                        <div class="disk-small-img" style='background: url("<?php echo $nuotrauka; ?>") no-repeat; background-size: cover; background-position: center'></div>
                        <!--   POPUP OPEN BOX   -->
                        
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    
    <?php foreach($cdvinilas as $cd2) { ?>
        <section id="open_cd<?php echo $cd2->id; ?>" class="outsideS">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="open_box_cd">
                            <div class="inside_box_cd">
                                <div class="row">
                                    <?php if($_SESSION['lang'] == 'lt' ) { echo '<h2>'.$cd2->pavadinimasLt.'</h2>'; } ?>
                                    <?php if($_SESSION['lang'] == 'en' ) { echo '<h2>'.$cd2->pavadinimasEn.'</h2>'; } ?>
                                    <?php if($_SESSION['lang'] == 'fr' ) { echo '<h2>'.$cd2->pavadinimasFr.'</h2>'; } ?>
                                    <div class="col-sm-5">
                                        <?php $nuotrauka2 = 'assets/images/'.$cd2->nuotrauka; ?>
                                        <div class="open_cd_img" style="background: url('<?php echo $nuotrauka2; ?>'); background-size: cover; background-position: center;"></div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="row">
                                            <?php if($_SESSION['lang'] == 'lt' ) { echo $cd2->aprasymasLt; } ?>
                                            <?php if($_SESSION['lang'] == 'en' ) { echo $cd2->aprasymasEn; } ?>
                                            <?php if($_SESSION['lang'] == 'fr' ) { echo $cd2->aprasymasFr; } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="close_btn">X</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>
    
    <section id="dvd">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <?php $dvds = DiskografijaDvd::all('ASC'); ?>
                    <div class="left-side">
                        <?php if($_SESSION['lang'] == 'lt' ) { echo '<h2>'.$web->dvd_lt.'</h2>'; } ?>
                        <?php if($_SESSION['lang'] == 'en' ) { echo '<h2>'.$web->dvd_en.'</h2>'; } ?>
                        <?php if($_SESSION['lang'] == 'fr' ) { echo '<h2>'.$web->dvd_fr.'</h2>'; } ?> 
                        <?php foreach($dvds as $dvd) { ?>
                        <div class="dvd_box">
                            <?php $nuotrauka_dvd = 'assets/images/'.$dvd->nuotrauka; ?>
                            <div class="dvd-small-img" data-id="<?php echo $dvd->id; ?>" style="background: url('<?php echo $nuotrauka_dvd; ?>') no-repeat; background-size: cover; background-position: center"></div>
                            
                        </div>
                        <?php } ?>
                    </div>
                    <?php $youtube = DiskografijaKoncertai::all('ASC'); ?>
                    <div class="right-side">
                        
                        <?php if($_SESSION['lang'] == 'lt' ) { echo '<h2>KONCERTINIAI ĮRAŠAI</h2>'; } ?>
                        <?php if($_SESSION['lang'] == 'en' ) { echo '<h2>CONCERTINO RECORDS</h2>'; } ?>
                        <?php if($_SESSION['lang'] == 'fr' ) { echo '<h2>CONCERTINO RECORDS</h2>'; } ?> 
                        
                        <?php foreach($youtube as $you) { ?>
                        <div class="youtube-g">
                            <a href="#">
                                <iframe src="<?php echo $you->koncertas; ?>" frameborder="0" width="500" height="280" target="_blank"></iframe>
                            </a>
                            <p><?php echo $you->pavadinimas; ?></p>
                        </div>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php foreach($dvds as $dvd) { ?>
    <section id="open_cd_2<?php echo $dvd->id; ?>" class="outsideS onlyDVD">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="open_box_cd">
                        <div class="inside_box_cd">
                            <div class="row">
                                <?php if($_SESSION['lang'] == 'lt' ) { echo '<h2>'.$dvd->pavadinimasLt.'</h2>'; } ?>
                                <?php if($_SESSION['lang'] == 'en' ) { echo '<h2>'.$dvd->pavadinimasEn.'</h2>'; } ?>
                                <?php if($_SESSION['lang'] == 'fr' ) { echo '<h2>'.$dvd->pavadinimasFr.'</h2>'; } ?>
                                <div class="col-sm-4">
                                    <?php $nuotrauka_dvd2 = 'assets/images/'.$dvd->nuotrauka; ?>
                                    <div class="open_cd_img" style="background: url('<?php echo $nuotrauka_dvd2; ?>'); background-size: cover; background-position: center;"></div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="row">
                                        <?php if($_SESSION['lang'] == 'lt' ) { echo $dvd->aprasymasLt; } ?>
                                        <?php if($_SESSION['lang'] == 'en' ) { echo $dvd->aprasymasEn; } ?>
                                        <?php if($_SESSION['lang'] == 'fr' ) { echo $dvd->aprasymasFr; } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="close_btn">X</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } ?>
   
    <?php require_once('includes/main_footer.php'); ?>
    
    <script type="text/javascript">
//        $(document).ready(function() {
//            $('html, body').animate({
//                scrollTop: $("#scrollHere").offset().top
//            }, 1000); 
//        });
    </script>