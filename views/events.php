    <?php require_once('includes/header.php'); ?>
    <?php $events = Events::find_by_query("SELECT * FROM events ORDER BY id ASC");; ?>
    <?php $eventsCd = EventsCd::all('DESC'); ?>
    <section id="archyvas">
        <div class="container">
            <div class="row">
                <div class="col-sm-offset-1 col-sm-10">
                    <?php $text5 = EventsText::find(1); ?>
                    <?php if($_SESSION['lang'] == 'lt' ) { echo '<p class="archyvas-data2 events">'.$text5->pavadinimas.'</p>'; } ?>
                    <?php if($_SESSION['lang'] == 'en' ) { echo '<p class="archyvas-data2 events">'.$text5->pavadinimasEn.'</p>'; } ?>
                    <?php if($_SESSION['lang'] == 'fr' ) { echo '<p class="archyvas-data2 events">'.$text5->pavadinimasFr.'</p>'; } ?>
                </div>
                <div class="col-sm-offset-1 col-sm-10">
                    <?php foreach($events as $event) { ?>
                    <div class="archyvas_juosta">
                        <?php if($_SESSION['lang'] == 'lt' ) { echo '<p class="archyvas-data">'.$event->data.'</p>'; } ?>
                        <?php if($_SESSION['lang'] == 'en' ) { echo '<p class="archyvas-data">'.$event->data_en.'</p>'; } ?>
                        <?php if($_SESSION['lang'] == 'fr' ) { echo '<p class="archyvas-data">'.$event->data_fr.'</p>'; } ?>
                        
                        <?php if($_SESSION['lang'] == 'lt' ) { echo '<p class="archyvas-informacija">'.$event->aprasymasLt.'</p>'; } ?>
                        <?php if($_SESSION['lang'] == 'en' ) { echo '<p class="archyvas-informacija">'.$event->aprasymasEn.'</p>'; } ?>
                        <?php if($_SESSION['lang'] == 'fr' ) { echo '<p class="archyvas-informacija">'.$event->aprasymasFr.'</p>'; } ?>
                    </div>
                    <?php } ?>

                    <?php $text6 = EventsText::find(1); ?>
                    <?php if($_SESSION['lang'] == 'lt' ) { echo '<p class="archyvas-data2 datess">'.$text6->pavadinimas2.'</p>'; } ?>
                    <?php if($_SESSION['lang'] == 'en' ) { echo '<p class="archyvas-data2 datess">'.$text6->pavadinimas2En.'</p>'; } ?>
                    <?php if($_SESSION['lang'] == 'fr' ) { echo '<p class="archyvas-data2 datess">'.$text6->pavadinimas2Fr.'</p>'; } ?>
                    
                    <?php foreach($eventsCd as $eventCd) { ?>
                    <div class="cds">
                        <?php $nuotrauka = 'assets/images/'.$eventCd->nuotrauka; ?>
                        <div class="cd-cover">
                            <div class="open_cd_img" style="background: url('<?php echo $nuotrauka ?>'); background-size: cover; background-position: center; width: 150px; height: 150px;"></div>
                        </div>
                        <div class="cd-aprasymas">
                            <?php if($_SESSION['lang'] == 'lt' ) { echo '<p>'.$eventCd->aprasymasLt.'</p>'; } ?>
                            <?php if($_SESSION['lang'] == 'en' ) { echo '<p>'.$eventCd->aprasymasEn.'</p>'; } ?>
                            <?php if($_SESSION['lang'] == 'fr' ) { echo '<p>'.$eventCd->aprasymasFr.'</p>'; } ?>
                        </div>
                    </div>
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