    <?php require_once('includes/header.php'); ?>
    <?php $archyvai = KoncertuGrafikas::all(); ?>
    <section id="archyvas">
        <div class="container">
            <div class="row">
                <div class="col-sm-offset-1 col-sm-10">
                    <p class="archyvas-data2">Tour in Cher, France organized by Chemins de Musique</p>
                </div>
                <div class="col-sm-offset-1 col-sm-10">
                    <?php foreach($archyvai as $archyvas) { ?>
                    <div class="archyvas_juosta">
                        <p class="archyvas-data"><?php echo $archyvas->data; ?></p>
                        <?php if($_SESSION['lang'] == 'lt' ) { echo '<p class="archyvas-informacija">'.$archyvas->aprasymasLt.'</p>'; } ?>
                        <?php if($_SESSION['lang'] == 'en' ) { echo '<p class="archyvas-informacija">'.$archyvas->aprasymasEn.'</p>'; } ?>
                        <?php if($_SESSION['lang'] == 'fr' ) { echo '<p class="archyvas-informacija">'.$archyvas->aprasymasFr.'</p>'; } ?>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
   
    <?php require_once('includes/main_footer.php'); ?>
    
    <script type="text/javascript">
        $(document).ready(function() {
            $('html, body').animate({
                scrollTop: $("#scrollHere").offset().top
            }, 1000); 
        });
    </script>