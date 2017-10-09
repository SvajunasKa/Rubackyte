    <?php require_once('includes/header.php'); ?>
    
    <section id="archyvas">
        <div class="container archyvas-padding-none">
            <!--    DEFAULT      -->
            <?php if(empty($_GET['metai']) AND empty($_GET['kategorija'])) { ?>
            <div class="row">
                <div class="col-sm-offset-1 col-sm-10">
                    <div class="archyvas_juosta on-mobile-koncertai-second" style="margin-top: 57px;">
                        <?php $kategorijos = GrafikasKategorija::all(); ?>
                        <p class="archyvas-data"></p>
                        <?php foreach($kategorijos as $kategorija) { ?>
                            <!-- class="active_koncertu_metai" -->
                            <?php if($_SESSION['lang'] == 'lt' ) {
                                if($kategorija->id == 1) {
                                    echo '<p class="metai"><a class="active_koncertu_metai" href="?kategorija='.$kategorija->id.'#muza">'.$kategorija->kategorijaLt.'</a></p>';
                                } else {
                                    echo '<p class="metai"><a href="?kategorija='.$kategorija->id.'#muza">'.$kategorija->kategorijaLt.'</a></p>'; 
                                }
                            } ?>
                            <?php if($_SESSION['lang'] == 'en' ) { 
                                if($kategorija->id == 1) {
                                    echo '<p class="metai"><a class="active_koncertu_metai" href="?kategorija='.$kategorija->id.'#muza">'.$kategorija->kategorijaEn.'</a></p>';
                                } else {
                                    echo '<p class="metai"><a href="?kategorija='.$kategorija->id.'#muza">'.$kategorija->kategorijaEn.'</a></p>'; 
                                }
                            } ?>
                            <?php if($_SESSION['lang'] == 'fr' ) { 
                                if($kategorija->id == 1) {
                                    echo '<p class="metai"><a class="active_koncertu_metai" href="?kategorija='.$kategorija->id.'#muza">'.$kategorija->kategorijaFr.'</a></p>';
                                } else {
                                    echo '<p class="metai"><a href="?kategorija='.$kategorija->id.'#muza">'.$kategorija->kategorijaFr.'</a></p>'; 
                                }
                            } ?>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-sm-offset-1 col-sm-10">
                    <?php if($_SESSION['lang'] == 'lt' ) { 
                        $grafikai = Repertuaras::find_by_query("SELECT * FROM repertuaras WHERE kategorija = 1 ORDER BY kompozitorius ASC");
                    } ?>
                    <?php if($_SESSION['lang'] == 'en' ) {
                        $grafikai = Repertuaras::find_by_query("SELECT * FROM repertuaras WHERE kategorija = 1 ORDER BY kompozitorius_en ASC");
                    } ?>
                    <?php if($_SESSION['lang'] == 'fr' ) {
                        $grafikai = Repertuaras::find_by_query("SELECT * FROM repertuaras WHERE kategorija = 1 ORDER BY kompozitorius_fr ASC");
                    } ?>

                    <?php foreach($grafikai as $grafikas) { ?>
                        <div class="archyvas_juosta">
                            <?php if($_SESSION['lang'] == 'lt' ) { echo '<p class="archyvas-data">'.$grafikas->kompozitorius.'</p>'; } ?>
                            <?php if($_SESSION['lang'] == 'en' ) { echo '<p class="archyvas-data">'.$grafikas->kompozitorius_en.'</p>'; } ?>
                            <?php if($_SESSION['lang'] == 'fr' ) { echo '<p class="archyvas-data">'.$grafikas->kompozitorius_fr.'</p>'; } ?>
                            
                            <?php if($_SESSION['lang'] == 'lt' ) { echo '<p class="archyvas-informacija">'.$grafikas->pavadinimasLt.'</p>'; } ?>
                            <?php if($_SESSION['lang'] == 'en' ) { echo '<p class="archyvas-informacija">'.$grafikas->pavadinimasEn.'</p>'; } ?>
                            <?php if($_SESSION['lang'] == 'fr' ) { echo '<p class="archyvas-informacija">'.$grafikas->pavadinimasFr.'</p>'; } ?>
                        </div>
                        <div class="clearfix"></div>
                    <?php } ?>
                </div>
            </div>
            <?php } ?>
            
            
            <!--      IF YEARS AND CATEGORY NOT EMPTY     -->
            <?php if(isset($_GET['kategorija'])) { ?>
            <div class="row">
                <div class="col-sm-offset-1 col-sm-10">
                    <div class="archyvas_juosta on-mobile-koncertai-second" style="margin-top: 57px;">
                        <?php $kategorijos = GrafikasKategorija::all(); ?>
                        <p class="archyvas-data"></p>
                        <?php foreach($kategorijos as $kategorija) { ?>
                            <!-- class="active_koncertu_metai" -->
                            <?php if($_SESSION['lang'] == 'lt' ) {
                                if($kategorija->id == $_GET['kategorija']) {
                                    echo '<p class="metai"><a class="active_koncertu_metai" href="?kategorija='.$kategorija->id.'#muza">'.$kategorija->kategorijaLt.'</a></p>';
                                } else {
                                    echo '<p class="metai"><a href="?kategorija='.$kategorija->id.'#muza">'.$kategorija->kategorijaLt.'</a></p>'; 
                                }
                            } ?>
                            <?php if($_SESSION['lang'] == 'en' ) { 
                                if($kategorija->id == $_GET['kategorija']) {
                                    echo '<p class="metai"><a class="active_koncertu_metai" href="?kategorija='.$kategorija->id.'#muza">'.$kategorija->kategorijaEn.'</a></p>';
                                } else {
                                    echo '<p class="metai"><a href="?kategorija='.$kategorija->id.'#muza">'.$kategorija->kategorijaEn.'</a></p>'; 
                                }
                            } ?>
                            <?php if($_SESSION['lang'] == 'fr' ) { 
                                if($kategorija->id == $_GET['kategorija']) {
                                    echo '<p class="metai"><a class="active_koncertu_metai" href="?kategorija='.$kategorija->id.'">'.$kategorija->kategorijaFr.'</a></p>';
                                } else {
                                    echo '<p class="metai"><a href="?kategorija='.$kategorija->id.'#muza">'.$kategorija->kategorijaFr.'</a></p>'; 
                                }
                            } ?>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-sm-offset-1 col-sm-10">
                    <?php $cat2 = $_GET['kategorija']; 
                        if($cat2 == 1) {
                            
                            if($_SESSION['lang'] == 'lt' ) { 
                                $grafikai = Repertuaras::find_by_query("SELECT * FROM repertuaras WHERE kategorija = ".$cat2." ORDER BY kompozitorius ASC ");
                            } 
                            if($_SESSION['lang'] == 'en' ) {
                                $grafikai = Repertuaras::find_by_query("SELECT * FROM repertuaras WHERE kategorija = ".$cat2." ORDER BY kompozitorius_en ASC ");
                            }
                            if($_SESSION['lang'] == 'fr' ) {
                                $grafikai = Repertuaras::find_by_query("SELECT * FROM repertuaras WHERE kategorija = ".$cat2." ORDER BY kompozitorius_fr ASC ");
                            }
                            
                        }                           
                                                  
                        if($cat2 == 2) {
                            if($_SESSION['lang'] == 'lt' ) { 
                                $grafikai = Repertuaras::find_by_query("SELECT * FROM repertuaras WHERE kategorija = ".$cat2." ORDER BY kompozitorius ASC ");
                            } 
                            if($_SESSION['lang'] == 'en' ) {
                                $grafikai = Repertuaras::find_by_query("SELECT * FROM repertuaras WHERE kategorija = ".$cat2." ORDER BY kompozitorius_en ASC ");
                            }
                            if($_SESSION['lang'] == 'fr' ) {
                                $grafikai = Repertuaras::find_by_query("SELECT * FROM repertuaras WHERE kategorija = ".$cat2." ORDER BY kompozitorius_fr ASC ");
                            }
                        }  
                    
                        if($cat2 == 3) {
                            if($_SESSION['lang'] == 'lt' ) { 
                                $grafikai = Repertuaras::find_by_query("SELECT * FROM repertuaras WHERE kategorija = ".$cat2." ORDER BY kompozitorius ASC ");
                            } 
                            if($_SESSION['lang'] == 'en' ) {
                                $grafikai = Repertuaras::find_by_query("SELECT * FROM repertuaras WHERE kategorija = ".$cat2." ORDER BY kompozitorius_en ASC ");
                            }
                            if($_SESSION['lang'] == 'fr' ) {
                                $grafikai = Repertuaras::find_by_query("SELECT * FROM repertuaras WHERE kategorija = ".$cat2." ORDER BY kompozitorius_fr ASC ");
                            }
                        } 
                    ?>
                    <?php foreach($grafikai as $grafikas) { ?>
                        <div class="archyvas_juosta">
                            <?php if($_SESSION['lang'] == 'lt' ) { echo '<p class="archyvas-data">'.$grafikas->kompozitorius.'</p>'; } ?>
                            <?php if($_SESSION['lang'] == 'en' ) { echo '<p class="archyvas-data">'.$grafikas->kompozitorius_en.'</p>'; } ?>
                            <?php if($_SESSION['lang'] == 'fr' ) { echo '<p class="archyvas-data">'.$grafikas->kompozitorius_fr.'</p>'; } ?>
                            
                            <?php if($_SESSION['lang'] == 'lt' ) { echo '<p class="archyvas-informacija">'.$grafikas->pavadinimasLt.'</p>'; } ?>
                            <?php if($_SESSION['lang'] == 'en' ) { echo '<p class="archyvas-informacija">'.$grafikas->pavadinimasEn.'</p>'; } ?>
                            <?php if($_SESSION['lang'] == 'fr' ) { echo '<p class="archyvas-informacija">'.$grafikas->pavadinimasFr.'</p>'; } ?>
                        </div>
                        <div class="clearfix"></div>
                    <?php } ?>
                </div>
            </div>
            <?php } ?>
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