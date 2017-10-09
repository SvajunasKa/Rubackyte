<!--  FOOTERIS  -->
    <section id="footer">
        <div class="bottom_img"></div>
    </section>
    
    <footer>
        <div class="container on_mobile_footer">
            <div class="row">
                <div class="col-sm-12">
                    <?php 
                        $uri = $_SERVER['REQUEST_URI'];
                        $kategorija = explode('/', $uri);
                        $actual_link = 'http://'.$_SERVER['HTTP_HOST'].'/';
                    ?>
                    <?php if($_SESSION['lang'] == 'lt') { ?>
                    <ul>
                        <li><a <?php if(strpos($uri, 'biografija') !== false) { echo 'class="active_bottom"'; } ?> href="biografija.php#muza"><?php echo $meniu->biografijaLt; ?></a></li>
                        <li><a <?php if(strpos($uri, 'diskografija') !== false) { echo 'class="active_bottom"'; } ?> href="diskografija.php#muza"><?php echo $meniu->diskografijaLt; ?></a></li>
                        <li><a <?php if(strpos($uri, 'koncertai') !== false) { echo 'class="active_bottom"'; } ?> href="koncertai.php#muza"><?php echo $meniu->grafikasLt; ?></a></li>
                        <li><a <?php if(strpos($uri, 'repertuaras') !== false) { echo 'class="active_bottom"'; } ?> href="repertuaras.php#muza"><?php echo $meniu->archyvasLt; ?></a></li>
                        <li><a <?php if(strpos($uri, 'galerija') !== false) { echo 'class="active_bottom"'; } ?> href="galerija.php#muza"><?php echo $meniu->galerijaLt; ?></a></li>
                        <li><a <?php if(strpos($uri, 'kontaktai') !== false) { echo 'class="active_bottom"'; } ?> href="kontaktai.php#muza"><?php echo $meniu->kontaktaiLt; ?></a></li>
                    </ul>
                    <?php } ?>
                    <?php if($_SESSION['lang'] == 'en') { ?>
                    <ul>
                        <li><a <?php if(strpos($uri, 'biografija') !== false) { echo 'class="active_bottom"'; } ?> href="biografija.php#muza"><?php echo $meniu->biografijaEn; ?></a></li>
                        <li><a <?php if(strpos($uri, 'diskografija') !== false) { echo 'class="active_bottom"'; } ?> href="diskografija.php#muza"><?php echo $meniu->diskografijaEn; ?></a></li>
                        <li><a <?php if(strpos($uri, 'koncertai') !== false) { echo 'class="active_bottom"'; } ?> href="koncertai.php#muza"><?php echo $meniu->grafikasEn; ?></a></li>
                        <li><a <?php if(strpos($uri, 'repertuaras') !== false) { echo 'class="active_bottom"'; } ?> href="repertuaras.php#muza"><?php echo $meniu->archyvasEn; ?></a></li>
                        <li><a <?php if(strpos($uri, 'galerija') !== false) { echo 'class="active_bottom"'; } ?> href="galerija.php#muza"><?php echo $meniu->galerijaEn; ?></a></li>
                        <li><a <?php if(strpos($uri, 'kontaktai') !== false) { echo 'class="active_bottom"'; } ?> href="kontaktai.php#muza"><?php echo $meniu->kontaktaiEn; ?></a></li>
                    </ul>
                    <?php } ?>
                    <?php if($_SESSION['lang'] == 'fr') { ?>
                    <ul>
                        <li><a <?php if(strpos($uri, 'biografija') !== false) { echo 'class="active_bottom"'; } ?> href="biografija.php#muza"><?php echo $meniu->biografijaFr; ?></a></li>
                        <li><a <?php if(strpos($uri, 'diskografija') !== false) { echo 'class="active_bottom"'; } ?> href="diskografija.php#muza"><?php echo $meniu->diskografijaFr; ?></a></li>
                        <li><a <?php if(strpos($uri, 'koncertai') !== false) { echo 'class="active_bottom"'; } ?> href="koncertai.php#muza"><?php echo $meniu->grafikasFr; ?></a></li>
                        <li><a <?php if(strpos($uri, 'repertuaras') !== false) { echo 'class="active_bottom"'; } ?> href="repertuaras.php#muza"><?php echo $meniu->archyvasFr; ?></a></li>
                        <li><a <?php if(strpos($uri, 'galerija') !== false) { echo 'class="active_bottom"'; } ?> href="galerija.php#muza"><?php echo $meniu->galerijaFr; ?></a></li>
                        <li><a <?php if(strpos($uri, 'kontaktai') !== false) { echo 'class="active_bottom"'; } ?> href="kontaktai.php#muza"><?php echo $meniu->kontaktaiFr; ?></a></li>
                    </ul>
                    <?php } ?>
                    <ul class="social-media">
                        <li><a href="#"><img src="assets/images/social-facebook.png" alt=""></a></li>
                        <li><a href="#"><img src="assets/images/youtube.png" alt=""></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery-scrolltofixed-min.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>