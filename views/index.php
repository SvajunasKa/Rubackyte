<?php require_once( 'includes/index_header.php' ); ?>
<?php $biografija = Biografija::find( 1 ); ?>
<section id="main_about">
    <div class="container">
        <div class="row">
            <div class="col-sm-offset-1 col-sm-10">
				<?php if ( $_SESSION['lang'] == 'lt' ) {
					echo $biografija->aprasymasLt;
				} ?>
				<?php if ( $_SESSION['lang'] == 'en' ) {
					echo $biografija->aprasymasEn;
				} ?>
				<?php if ( $_SESSION['lang'] == 'fr' ) {
					echo $biografija->aprasymasFr;
				} ?>
            </div>
        </div>
    </div>
</section>

<section id="main_about_her">
    <div class="container">
        <div class="row">
            <div class="col-sm-offset-1 col-sm-10">
                <div class="col-sm-6 padding-none jquery_1">
					<?php if ( $_SESSION['lang'] == 'lt' ) {
						echo $biografija->aprasymasLt2;
					} ?>
					<?php if ( $_SESSION['lang'] == 'en' ) {
						echo $biografija->aprasymasEn2;
					} ?>
					<?php if ( $_SESSION['lang'] == 'fr' ) {
						echo $biografija->aprasymasFr2;
					} ?>
                    <!--  <p class="about_p"></p>-->

                    <img class="main_img_about" src="assets/images/MergedLayers.png" alt="">
                </div>
                <div class="col-sm-6 padding-none left-margin jquery_2">
                    <img src="assets/images/Muza-IMG.png" alt="">
					<?php if ( $_SESSION['lang'] == 'lt' ) {
						echo $biografija->aprasymasLt3;
					} ?>
					<?php if ( $_SESSION['lang'] == 'en' ) {
						echo $biografija->aprasymasEn3;
					} ?>
					<?php if ( $_SESSION['lang'] == 'en' ) {
						echo "<p>Download
                   <a href=\"http://muza.fr/files/Biography-short-EN.pdf\" target='_blank'>short</a> or 
                    <a href=\"http://muza.fr/files/Biography-long-EN.pdf\" target='_blank'>full</a> version of biography in PDF</p>";
					} ?>

					<?php if ( $_SESSION['lang'] == 'fr' ) {
						echo $biografija->aprasymasFr3;
					} ?>
	                <?php if ( $_SESSION['lang'] == 'fr' ) {
		                echo "<p>Biographie 
                   <a href=\"http://muza.fr/files/Biographie-courte-FR.pdf\" target='_blank'>courte en PDF</a> </p> 
                    <p>Biographie <a href=\"http://muza.fr/files/Biographie-longue-FR.pdf\" target='_blank'>longue en PDF</a></p>";
	                } ?>
                </div>

                </div>
            </div>
        </div>
    </div>
    <div class="bottom_img"></div>
</section>

<?php require_once( 'includes/index_footer.php' ); ?>

<script type="text/javascript">
    $(function () {
        $('a[href*="#"]:not([href="#"])').click(function () {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
</script>