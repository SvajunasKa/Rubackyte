<?php require_once('includes/header.php'); ?>
<?php $mainEmail = Email::find(1); ?>
<?php $inf = informacija::find(1); ?>
<?php $web = kontaktai::find(1); ?>
<?php
if (isset($_POST['siusti']) && isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
    $vardas = $_POST['vardas'];
    $telefonas = $_POST['telefonas'];
    $email = $_POST['email'];
    $komentaras = $_POST['komentaras'];

    $secret = '6Le6OYoUAAAAAHy3ClmcZbpPEFMNW8YZjEZGBq4r';
    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
    $responseData = json_decode($verifyResponse);

    $subject = "Gavote naują užklausą per svetainę, nuo: " . $vardas . " ";
    $fullMessage = "
                Nauja užklausa:<br>
                <hr>
                Vardas: <b>" . $vardas . "</b><br>
                Telefonas: <b>" . $telefonas . "</b><br>
                El.paštas: <b>" . $email . "</b><br>
                Komentaras: <b>" . $komentaras . "</b><br>
                ";
    $headers .= "From: MUZA <info@muza.fr>\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    if($responseData->success){
        if (mail($mainEmail->email, $subject, $fullMessage, $headers)) {
            $_SESSION['issiusta_message'] = 1;
        } else {
            echo 'error';
        }
    }else{
        echo "capcha error";
    }


}
?>
<?php $kontaktai = kontaktai::find(1); ?>
<?php if (!empty($_SESSION['issiusta_message']) == 1) { ?>
    <script type="text/javascript">
        setTimeout(
            function () {
                $('.message-send').fadeOut('slow');
                <?php $_SESSION['issiusta_message'] = ''; ?>
            }, 5555555000);
    </script>
    <div class="message-send">
        <div class="message-sended">
            <i class="fa fa-times" aria-hidden="true"></i>
            <?php if ($_SESSION['lang'] == 'lt') {
                echo "<h3>" . $mainEmail->zinuteLt . "</h3>";
            } ?>
            <?php if ($_SESSION['lang'] == 'en') {
                echo "<h3>" . $mainEmail->zinuteEn . "</h3>";
            } ?>
            <?php if ($_SESSION['lang'] == 'fr') {
                echo "<h3>" . $mainEmail->zinuteFr . "</h3>";
            } ?>
        </div>
    </div>
    <?php $_SESSION['issiusta_message'] = ''; ?>
<?php } ?>
<section id="kontaktai">
    <div class="container padding_on_mobile_contacts">
        <div class="row">
            <div class="col-sm-12">
                <?php if ($_SESSION['lang'] == 'lt') {
                    echo "<h2>Dėl koncertų organizavimo teirautis:</h2>";
                } ?>
                <?php if ($_SESSION['lang'] == 'en') {
                    echo "<h2>For the organization to inquire:</h2>";
                } ?>
                <?php if ($_SESSION['lang'] == 'fr') {
                    echo "<h2>Pour l'organisation pour en savoir davantage:</h2>";
                } ?>
                <div class="col-sm-6">
                    <?php if ($_SESSION['lang'] == 'en') { ?>
                        <h3><?php echo "For Latin America" ?></h3>
                    <?php } ?>
                    <?php if ($_SESSION['lang'] == 'fr') { ?>
                        <h3><?php echo "2-Pour la France, Belgique, Luxembourg, Allemagne  " ?></h3>
                    <?php } ?>

                        <div class="contact">
                            <div class="contact_row">
                                <i class="fa fa-user fa-2x"></i>
                                <?php if ($_SESSION['lang'] == 'lt') { ?>
                                    <p><?php echo "Lietuvos nacionalinė filharmonija" ?></p>
                                <?php } ?>
                                <?php if ($_SESSION['lang'] == 'en') { ?>
                                    <p><?php echo "Conciertos Grapa"?></p>
                                <?php } ?>
                                <?php if ($_SESSION['lang'] == 'fr') { ?>
                                    <?php echo "<p>Bettina Sadoux</p>"?>
                                <?php } ?>
                            </div>
                            <div class="contact_row">
                                <i class="fa fa-map-marker fa-2x"></i>
                                <?php if ($_SESSION['lang'] == 'lt') { ?>
                                <p><?php echo "Aušros Vartų g. 5, LT-01304 Vilnius, Lietuva" ?></p>
                                <?php } ?>
                                <?php if ($_SESSION['lang'] == 'en') { ?>
                                    <p><?php echo "Juncal 1360, 2ºA (C1062ABP) Buenos Aires, Argentina" ?></p>
                                <?php } ?>
                                <?php if ($_SESSION['lang'] == 'fr') { ?>
                                    <?php echo "<p>BSArtist Management</p>"?>
                                <?php } ?>
                            </div>
                            <div class="contact_row">
                                <i class="fa fa-phone fa-2x"></i>
                                <?php if ($_SESSION['lang'] == 'lt') { ?>
                                    <p><?php echo "(8 5) 266 52 10, 8 698 51954"?></p>
                                <?php } ?>
                                <?php if ($_SESSION['lang'] == 'en') { ?>
                                    <p><?php echo "54-11-4813-2724 or 4813-1709" ?></p>
                                <?php } ?>
                                <?php if ($_SESSION['lang'] == 'fr') { ?>
                                    <?php echo "<p>+33(0)6 72 82 72 67</p>"?>
                                <?php } ?>
                            </div>
                            <div class="contact_row">
                                <i class="fa fa-envelope-o fa-2x"></i>
                                <?php if ($_SESSION['lang'] == 'lt') { ?>
                                    <p><?php echo "info@filharmonija.lt"?></p>
                                <?php } ?>
                                <?php if ($_SESSION['lang'] == 'en') { ?>
                                    <p><?php echo " carlos.grynfeld@conciertosgrapa.com" ?></p>
                                <?php } ?>
                                <?php if ($_SESSION['lang'] == 'fr') { ?>
                                    <?php echo "<p>bettina.sadoux@bs-artist.com</p>"?>
                                <?php } ?>
                            </div>
                            <div class="contact_row">
                                <?php if ($_SESSION['lang'] == 'en') { ?>
                                    <?php echo "<i class=\"fa fa-globe fa-2x\"></i><a href='http://www.conciertosgrapa.com' target='_blank'>www.conciertosgrapa.com</a>" ?>
                                <?php } ?>
                                <?php if ($_SESSION['lang'] == 'fr') { ?>
                                    <?php echo "<i class=\"fa fa-globe fa-2x\"></i><a href='http://www.bs-artist.com' target='_blank'>www.bs-artist.com</a>"?>
                                <?php } ?>
                            </div>
                            <div class="contact_row">
                                <?php if ($_SESSION['lang'] == 'en') { ?>
                                    <?php echo "<i class=\"fa fa-skype fa-2x\"></i><p>conciertosgrapa</p>" ?>
                                <?php } ?>
                            </div>

                        </div>

                </div>
                <div class="col-sm-6 mobile-top-contacts">
                    <?php if ($_SESSION['lang'] == 'en') { ?>
                        <h3><?php echo "For France, Belgium, Luxembourg, Germany" ?></h3>
                    <?php } ?>
                    <?php if ($_SESSION['lang'] == 'fr') { ?>
                        <h3><?php echo "Relations presse" ?></h3>
                    <?php } ?>
                        <div class="contact">

                            <div class="contact_row">
                                <?php if ($_SESSION['lang'] == 'en') { ?>
                                    <?php echo "<i class=\"fa fa-user fa-2x\"></i><p>Bettina Sadoux</p>" ?>
                                <?php } ?>
                                <?php if ($_SESSION['lang'] == 'fr') { ?>
                                    <?php echo "<i class=\"fa fa-user fa-2x\"></i><p>Catherine Kauffmann-Saint-Martin</p>"?>
                                <?php } ?>
                            </div>
                            <div class="contact_row">
                                <?php if ($_SESSION['lang'] == 'en') { ?>
                                    <?php echo "<i class='fa fa-map-marker fa-2x'></i> <p>BSArtist Management</p>"?>
                                <?php } ?>

                            </div>
                            <div class="contact_row">
                                <?php if ($_SESSION['lang'] == 'en') { ?>
                                    <?php echo "<i class='fa fa-phone fa-2x'></i> <p>+33(0)6 72 82 72 67</p>"?>
                                <?php } ?>
                                <?php if ($_SESSION['lang'] == 'fr') { ?>
                                    <?php echo "<i class='fa fa-phone fa-2x'></i> <p>+33 6 81 46 37 21</p>"?>
                                <?php } ?>

                            </div>
                            <div class="contact_row">
                                <?php if ($_SESSION['lang'] == 'en') { ?>
                                    <?php echo "<i class='fa fa-envelope-o fa-2x'></i> <p>bettina.sadoux@bs-artist.com</p>"?>
                                <?php } ?>
                                <?php if ($_SESSION['lang'] == 'fr') { ?>
                                    <?php echo "<i class='fa fa-envelope-o fa-2x'></i><p>cksm@orange.fr</p>"?>
                                <?php } ?>
                            </div>
                            <div class="contact_row">
                                <?php if ($_SESSION['lang'] == 'en') { ?>
                                    <?php echo "<i class='fa fa-globe fa-2x'></i> <p><a href='http://www.bs-artist.com' target='_blank'>www.bs-artist.com</a></p>"?>
                                <?php } ?>

                            </div>
                        </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="kontaktu_forma">
    <div class="container padding_on_mobile_contacts">
        <div class="row">
            <div class="col-sm-12">
                <?php if ($_SESSION['lang'] == 'lt') {
                    echo "<h2>" . $inf->klausimai_lt . "</h2>";
                } ?>
                <?php if ($_SESSION['lang'] == 'en') {
                    echo "<h2>" . $inf->klausimai_en . "</h2>";
                } ?>
                <?php if ($_SESSION['lang'] == 'fr') {
                    echo "<h2>" . $inf->klausimai_fr . "</h2>";
                } ?>
            </div>
            <form id="konForm" class="forma" action="" method="post">
                <div class="col-sm-6">
                    <?php if ($_SESSION['lang'] == 'lt') {
                        echo "<label for=''>Vardas, pavardė:</label>";
                    } ?>
                    <?php if ($_SESSION['lang'] == 'en') {
                        echo "<label for=''>Name, surname:</label>";
                    } ?>
                    <?php if ($_SESSION['lang'] == 'fr') {
                        echo "<label for=''>Nom:</label>";
                    } ?>
                    <input type="text" name="vardas">

                    <?php if ($_SESSION['lang'] == 'lt') {
                        echo "<label for=''>Telefonas:</label>";
                    } ?>
                    <?php if ($_SESSION['lang'] == 'en') {
                        echo "<label for=''>Phone:</label>";
                    } ?>
                    <?php if ($_SESSION['lang'] == 'fr') {
                        echo "<label for=''>Téléphone:</label>";
                    } ?>
                    <input type="text" name="telefonas">

                    <?php if ($_SESSION['lang'] == 'lt') {
                        echo "<label for=''>El.paštas:</label>";
                    } ?>
                    <?php if ($_SESSION['lang'] == 'en') {
                        echo "<label for=''>Email:</label>";
                    } ?>
                    <?php if ($_SESSION['lang'] == 'fr') {
                        echo "<label for=''>E-mail:</label>";
                    } ?>
                    <input type="text" name="email">
                </div>
                <div class="col-sm-6">
                    <?php if ($_SESSION['lang'] == 'lt') {
                        echo "<label for=''>Komentaras:</label>";
                    } ?>
                    <?php if ($_SESSION['lang'] == 'en') {
                        echo "<label for=''>Comment:</label>";
                    } ?>
                    <?php if ($_SESSION['lang'] == 'fr') {
                        echo "<label for=''>Commentaire:</label>";
                    } ?>
                    <textarea name="komentaras" id="" cols="10" rows="6"></textarea>
                    <div class="g-recaptcha" data-theme="dark"	 data-sitekey="6Le6OYoUAAAAABpAEqSQRkdHU5mGljWACMQocV3o"></div>
                    <?php if ($_SESSION['lang'] == 'lt') {
                        echo '<img src="assets/images/send-symbol.png" alt=""><input type="submit" name="siusti" value="Siųsti">';
                    } ?>
                    <?php if ($_SESSION['lang'] == 'en') {
                        echo '<img src="assets/images/send-symbol.png" alt=""><input type="submit" name="siusti" value="Send">';
                    } ?>
                    <?php if ($_SESSION['lang'] == 'fr') {
                        echo '<img src="assets/images/send-symbol.png" alt=""><input type="submit" name="siusti" value="Envoyer">';
                    } ?>
                </div>
            </form>
        </div>
    </div>
</section>

<?php require_once('includes/main_footer.php'); ?>

<script type="text/javascript">
    $(document).ready(function () {
        $('#konForm').submit(function (event) {
            var vardas = $('input[name=vardas]').val();
            var telefonas = $('input[name=telefonas]').val();
            var email = $('input[name=email]').val();
            var komentaras = $('textarea[name=komentaras]').val();
            var error = 0;

            if (vardas == '') {
                error++;
                $('input[name=vardas]').addClass('klaidaFormoje');
            } else {
                $('input[name=vardas]').removeClass('klaidaFormoje');
            }

            if (telefonas == '') {
                error++;
                $('input[name=telefonas]').addClass('klaidaFormoje');
            } else {
                $('input[name=telefonas]').removeClass('klaidaFormoje');
            }

            if (email == '') {
                error++;
                $('input[name=email]').addClass('klaidaFormoje');
            } else {
                $('input[name=email]').removeClass('klaidaFormoje');
            }

            if (komentaras == '') {
                error++;
                $('textarea[name=komentaras]').addClass('klaidaFormoje');
            } else {
                $('textarea[name=komentaras]').removeClass('klaidaFormoje');
            }

            if (error == 0) {

            } else {
                event.preventDefault();
            }
        });
    });
</script>