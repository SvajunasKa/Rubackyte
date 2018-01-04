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
                        <div class="nav navbar-nav">
                            <div class="menu-item"><a <?php if(strpos($uri, 'biografija') !== false) { echo 'class="active_bottom"'; } ?> href="biografija.php#muza"><?php echo $meniu->biografijaLt; ?></a></div>
                            <div class="menu-item"><a <?php if(strpos($uri, 'diskografija') !== false) { echo 'class="active_bottom"'; } ?> href="diskografija.php#muza"><?php echo $meniu->diskografijaLt; ?></a></div>
                            <div class="menu-item"><a <?php if(strpos($uri, 'repertuaras') !== false) { echo 'class="active_bottom"'; } ?> href="repertuaras.php#muza"><?php echo $meniu->archyvasLt; ?></a></div>
                            <div class="menu-item"><a <?php if(strpos($uri, 'koncertai') !== false) { echo 'class="active_bottom"'; } ?> href="koncertai.php#muza"><?php echo $meniu->grafikasLt; ?></a></div>
                            <div class="menu-item"><a <?php if(strpos($uri, 'galerija') !== false) { echo 'class="active_bottom"'; } ?> href="galerija.php#muza"><?php echo $meniu->galerijaLt; ?></a></div>
                            <div class="menu-item1" <?php if(strpos($uri, 'press') !== false) { echo 'class="active_bottom"'; } ?>> <?php echo $meniu->mediaLt; ?>
                                <div class="show-menu">
                                    <div class="drop-list"> <a <?php if(strpos($uri, 'audio') !== false) { echo 'class="active_bottom"'; } ?> href="audio.php#muza"><?php echo $meniu->subMenu1Lt; ?></a></div>
                                    <div class="drop-list"> <a <?php if(strpos($uri, 'video') !== false) { echo 'class="active_bottom"'; } ?> href="video.php#muza"><?php echo $meniu->subMenu2Lt; ?></a></div>
                                    <div class="drop-list"> <a <?php if(strpos($uri, 'press') !== false) { echo 'class="active_bottom"'; } ?> href="press.php#muza"><?php echo $meniu->subMenu3Lt; ?></a></div>
                                </div>
                            </div>
                            <div class="menu-item"><a <?php if(strpos($uri, 'kontaktai') !== false) { echo 'class="active_bottom"'; } ?> href="kontaktai.php#muza"><?php echo $meniu->kontaktaiLt; ?></a></div>
                        </div>
                    <?php } ?>
                    <?php if($_SESSION['lang'] == 'en') { ?>
                        <div class="nav navbar-nav">
                            <div class="menu-item"><a <?php if(strpos($uri, 'biografija') !== false) { echo 'class="active_bottom"'; } ?> href="biografija.php#muza"><?php echo $meniu->biografijaEn; ?></a></div>
                            <div class="menu-item"><a <?php if(strpos($uri, 'diskografija') !== false) { echo 'class="active_bottom"'; } ?> href="diskografija.php#muza"><?php echo $meniu->diskografijaEn; ?></a></div>
                            <div class="menu-item"><a <?php if(strpos($uri, 'repertuaras') !== false) { echo 'class="active_bottom"'; } ?> href="repertuaras.php#muza"><?php echo $meniu->archyvasEn; ?></a></div>
                            <div class="menu-item"><a <?php if(strpos($uri, 'koncertai') !== false) { echo 'class="active_bottom"'; } ?> href="koncertai.php#muza"><?php echo $meniu->grafikasEn; ?></a></div>
                            <div class="menu-item"><a <?php if(strpos($uri, 'galerija') !== false) { echo 'class="active_bottom"'; } ?> href="galerija.php#muza"><?php echo $meniu->galerijaEn; ?></a></div>
                            <div class="menu-item1" <?php if(strpos($uri, 'press') !== false) { echo 'class="active_bottom"'; } ?>> <?php echo $meniu->mediaLt; ?>
                                <div class="show-menu">
                                    <div class="drop-list"> <a <?php if(strpos($uri, 'audio') !== false) { echo 'class="active_bottom"'; } ?> href="audio.php#muza"><?php echo $meniu->subMenu1En; ?></a></div>
                                    <div class="drop-list"> <a <?php if(strpos($uri, 'video') !== false) { echo 'class="active_bottom"'; } ?> href="video.php#muza"><?php echo $meniu->subMenu2En; ?></a></div>
                                    <div class="drop-list"> <a <?php if(strpos($uri, 'press') !== false) { echo 'class="active_bottom"'; } ?> href="press.php#muza"><?php echo $meniu->subMenu3En; ?></a></div>
                                </div>
                            </div>
                            <div class="menu-item"><a <?php if(strpos($uri, 'kontaktai') !== false) { echo 'class="active_bottom"'; } ?> href="kontaktai.php#muza"><?php echo $meniu->kontaktaiEn; ?></a></div>
                        </div>
                    <?php } ?>
                    <?php if($_SESSION['lang'] == 'fr') { ?>
                        <div class="nav navbar-nav">
                            <div class="menu-item"><a <?php if(strpos($uri, 'biografija') !== false) { echo 'class="active_bottom"'; } ?> href="biografija.php#muza"><?php echo $meniu->biografijaFr; ?></a></div>
                            <div class="menu-item"><a <?php if(strpos($uri, 'diskografija') !== false) { echo 'class="active_bottom"'; } ?> href="diskografija.php#muza"><?php echo $meniu->diskografijaFr; ?></a></div>
                            <div class="menu-item"><a <?php if(strpos($uri, 'repertuaras') !== false) { echo 'class="active_bottom"'; } ?> href="repertuaras.php#muza"><?php echo $meniu->archyvasFr; ?></a></div>
                            <div class="menu-item"><a <?php if(strpos($uri, 'koncertai') !== false) { echo 'class="active_bottom"'; } ?> href="koncertai.php#muza"><?php echo $meniu->grafikasFr; ?></a></div>
                            <div class="menu-item"><a <?php if(strpos($uri, 'galerija') !== false) { echo 'class="active_bottom"'; } ?> href="galerija.php#muza"><?php echo $meniu->galerijaFr; ?></a></div>
                            <div class="menu-item1" <?php if(strpos($uri, 'press') !== false) { echo 'class="active_bottom"'; } ?>> <?php echo $meniu->mediaLt; ?>
                                <div class="show-menu">
                                    <div class="drop-list"> <a <?php if(strpos($uri, 'audio') !== false) { echo 'class="active_bottom"'; } ?> href="audio.php#muza"><?php echo $meniu->subMenu1Lt; ?></a></div>
                                    <div class="drop-list"> <a <?php if(strpos($uri, 'video') !== false) { echo 'class="active_bottom"'; } ?> href="video.php#muza"><?php echo $meniu->subMenu2Fr; ?></a></div>
                                    <div class="drop-list"> <a <?php if(strpos($uri, 'press') !== false) { echo 'class="active_bottom"'; } ?> href="press.php#muza"><?php echo $meniu->subMenu3Fr; ?></a></div>
                                </div>
                            </div>
                            <div class="menu-item"><a <?php if(strpos($uri, 'kontaktai') !== false) { echo 'class="active_bottom"'; } ?> href="kontaktai.php#muza"><?php echo $meniu->kontaktaiFr; ?></a></div>
                        </div>
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
    <script src="assets/js/custom.js"></script>
</body>

</html>