<?php require_once( 'includes/header.php' ); ?>
<?php $web = Informacija::find( 1 ); ?>
<section id="diskografija">
    <div class="container">

        <div class="row">
		    <?php $cdvinilas11 = DiskografijaCd::find_by_query( "SELECT * FROM diskografija_cd WHERE pavadinimasLt LIKE 'NEW'" ); ?>
            <div class="col-sm-12 diskografas-on-mobile">
			    <?php if ( $_SESSION['lang'] == 'lt' ) {
				    echo '<h2>' . $web->cd_lt . '</h2>';
			    } ?>
			    <?php if ( $_SESSION['lang'] == 'en' ) {
				    echo '<h2>' . $web->cd_en . '</h2>';
			    } ?>
			    <?php if ( $_SESSION['lang'] == 'fr' ) {
				    echo '<h2>' . $web->cd_fr . '</h2>';
			    } ?>
			    
				<?php if ( $_SESSION['lang'] == 'lt' ) {
				    echo '<p class="title">CD NAUJIENOS</p>';
			    } ?>
			    <?php if ( $_SESSION['lang'] == 'en' ) {
				    echo '<p class="title">NEW CD RELEASES</p>';
			    } ?>
			    <?php if ( $_SESSION['lang'] == 'fr' ) {
				    echo '<p class="title">NOUVEAUTÉS CD</p>';
			    } ?>

			    <?php foreach ( $cdvinilas11 as $cd1 ) { ?>
                    <div class="diskografija_box">
                        <div class="img_info">
						    <?php if ( $_SESSION['lang'] == 'lt' ) {
							    echo '<p class="title_info" data-id="' . $cd1->id . '"></p>';
						    } ?>
						    <?php if ( $_SESSION['lang'] == 'en' ) {
							    echo '<p class="title_info" data-id="' . $cd1->id . '"></p>';
						    } ?>
						    <?php if ( $_SESSION['lang'] == 'fr' ) {
							    echo '<p class="title_info" data-id="' . $cd1->id . '"></p>';
						    } ?>
                        </div>
					    <?php $nuotrauka = 'assets/images/' . $cd1->nuotrauka; ?>
                        <div class="disk-small-img"
                             style='background: url("<?php echo $nuotrauka; ?>") no-repeat; background-size: cover; background-position: center'></div>
                    </div>
			    <?php } ?>
            </div>
        </div>	
	
	<!--====================================================================================-->
	
        <div class="row">
		    <?php $cdvinilas12 = DiskografijaCd::find_by_query( "SELECT * FROM diskografija_cd WHERE pavadinimasLt LIKE 'Vilnius Piano Festival'" ); ?>
            <div class="col-sm-12 diskografas-on-mobile">
			    <?php echo '<p class="title">';
			    echo $cdvinilas12[0]->pavadinimasLt;
			    '</p>' ?>
				
			    <?php foreach ( $cdvinilas12 as $cd1 ) { ?>
                    <div class="diskografija_box">
                        <div class="img_info">
						    <?php if ( $_SESSION['lang'] == 'lt' ) {
							    echo '<p class="title_info" data-id="' . $cd1->id . '"></p>';
						    } ?>
						    <?php if ( $_SESSION['lang'] == 'en' ) {
							    echo '<p class="title_info" data-id="' . $cd1->id . '"></p>';
						    } ?>
						    <?php if ( $_SESSION['lang'] == 'fr' ) {
							    echo '<p class="title_info" data-id="' . $cd1->id . '"></p>';
						    } ?>
                        </div>
					    <?php $nuotrauka = 'assets/images/' . $cd1->nuotrauka; ?>
                        <div class="disk-small-img"
                             style='background: url("<?php echo $nuotrauka; ?>") no-repeat; background-size: cover; background-position: center'></div>
                    </div>
			    <?php } ?>
            </div>
        </div>

        <!--====================================================================================-->
		
        <div class="row">
		    <?php $cdvinilas8 = DiskografijaCd::find_by_query( "SELECT * FROM diskografija_cd WHERE pavadinimasLt LIKE 'LIGIA'" ); ?>
            <div class="col-sm-12 diskografas-on-mobile">
			    <?php echo '<p class="title">';
			    echo $cdvinilas8[0]->pavadinimasLt;
			    '</p>' ?>
				
			    <?php foreach ( $cdvinilas8 as $cd1 ) { ?>
                    <div class="diskografija_box">
                        <div class="img_info">
						    <?php if ( $_SESSION['lang'] == 'lt' ) {
							    echo '<p class="title_info" data-id="' . $cd1->id . '"></p>';
						    } ?>
						    <?php if ( $_SESSION['lang'] == 'en' ) {
							    echo '<p class="title_info" data-id="' . $cd1->id . '"></p>';
						    } ?>
						    <?php if ( $_SESSION['lang'] == 'fr' ) {
							    echo '<p class="title_info" data-id="' . $cd1->id . '"></p>';
						    } ?>
                        </div>
					    <?php $nuotrauka = 'assets/images/' . $cd1->nuotrauka; ?>
                        <div class="disk-small-img"
                             style='background: url("<?php echo $nuotrauka; ?>") no-repeat; background-size: cover; background-position: center'></div>
                    </div>
			    <?php } ?>
            </div>
        </div>

        <!--====================================================================================-->		

        <div class="row">
			<?php $cdvinilas = DiskografijaCd::find_by_query( "SELECT * FROM diskografija_cd WHERE pavadinimasLt LIKE 'MARCO POLO'" ); ?>
            <div class="col-sm-12 diskografas-on-mobile">
				<?php echo '<p class="title">';
				echo $cdvinilas[0]->pavadinimasLt;
				'</p>' ?>

				<?php foreach ( $cdvinilas as $cd1 ) { ?>
                    <div class="diskografija_box">
                        <div class="img_info">
							<?php if ( $_SESSION['lang'] == 'lt' ) {
								echo '<p class="title_info" data-id="' . $cd1->id . '"></p>';
							} ?>
							<?php if ( $_SESSION['lang'] == 'en' ) {
								echo '<p class="title_info" data-id="' . $cd1->id . '"></p>';
							} ?>
							<?php if ( $_SESSION['lang'] == 'fr' ) {
								echo '<p class="title_info" data-id="' . $cd1->id . '"></p>';
							} ?>
                        </div>
						<?php $nuotrauka = 'assets/images/' . $cd1->nuotrauka; ?>
                        <div class="disk-small-img"
                             style='background: url("<?php echo $nuotrauka; ?>") no-repeat; background-size: cover; background-position: center'></div>
                    </div>
				<?php } ?>
            </div>
        </div>

        <!-- =================================================================================================-->

        <div class="row">
			<?php $cdvinilas1 = DiskografijaCd::find_by_query( "SELECT * FROM diskografija_cd WHERE pavadinimasEn LIKE 'LYRINX'" ); ?>
            <div class="col-sm-12 diskografas-on-mobile">
				<?php echo '<p class="title">';
				echo $cdvinilas1[0]->pavadinimasLt;
				'</p>' ?>

				<?php foreach ( $cdvinilas1 as $cd ) { ?>
                    <div class="diskografija_box">
                        <div class="img_info">
							<?php if ( $_SESSION['lang'] == 'lt' ) {
								echo '<p class="title_info" data-id="' . $cd->id . '">' . $cd->pavadinimasLt . '</p>';
							} ?>
							<?php if ( $_SESSION['lang'] == 'en' ) {
								echo '<p class="title_info" data-id="' . $cd->id . '">' . $cd->pavadinimasEn . '</p>';
							} ?>
							<?php if ( $_SESSION['lang'] == 'fr' ) {
								echo '<p class="title_info" data-id="' . $cd->id . '">' . $cd->pavadinimasFr . '</p>';
							} ?>
                        </div>
						<?php $nuotrauka = 'assets/images/' . $cd->nuotrauka; ?>
                        <div class="disk-small-img"
                             style='background: url("<?php echo $nuotrauka; ?>") no-repeat; background-size: cover; background-position: center'></div>
                    </div>
				<?php } ?>
            </div>
        </div>

        <!-- =================================================================================================-->

        <div class="row">
			<?php $cdvinilas2 = DiskografijaCd::find_by_query( "SELECT * FROM diskografija_cd WHERE pavadinimasEn LIKE 'BRILLIANT CLASSICS'" ); ?>
            <div class="col-sm-12 diskografas-on-mobile">
				<?php echo '<p class="title">';
				echo $cdvinilas2[0]->pavadinimasLt;
				'</p>' ?>

				<?php foreach ( $cdvinilas2 as $cd1 ) { ?>
                    <div class="diskografija_box">
                        <div class="img_info">
							<?php if ( $_SESSION['lang'] == 'lt' ) {
								echo '<p class="title_info" data-id="' . $cd1->id . '">' . $cd1->pavadinimasLt . '</p>';
							} ?>
							<?php if ( $_SESSION['lang'] == 'en' ) {
								echo '<p class="title_info" data-id="' . $cd1->id . '">' . $cd1->pavadinimasEn . '</p>';
							} ?>
							<?php if ( $_SESSION['lang'] == 'fr' ) {
								echo '<p class="title_info" data-id="' . $cd1->id . '">' . $cd1->pavadinimasFr . '</p>';
							} ?>
                        </div>
						<?php $nuotrauka = 'assets/images/' . $cd1->nuotrauka; ?>
                        <div class="disk-small-img"
                             style='background: url("<?php echo $nuotrauka; ?>") no-repeat; background-size: cover; background-position: center'></div>
                    </div>
				<?php } ?>
            </div>
        </div>

        <!-- =================================================================================================-->

        <div class="row">
			<?php $cdvinilas3 = DiskografijaCd::find_by_query( "SELECT * FROM diskografija_cd WHERE pavadinimasEn LIKE 'DORON - Great Lithuanian Live Recordings'" ); ?>
            <div class="col-sm-12 diskografas-on-mobile">
				<?php echo '<p class="title">';
				echo $cdvinilas3[0]->pavadinimasLt;
				'</p>' ?>

				<?php foreach ( $cdvinilas3 as $cd1 ) { ?>
                    <div class="diskografija_box">
                        <div class="img_info">
							<?php if ( $_SESSION['lang'] == 'lt' ) {
								echo '<p class="title_info" data-id="' . $cd1->id . '">' . $cd1->pavadinimasLt . '</p>';
							} ?>
							<?php if ( $_SESSION['lang'] == 'en' ) {
								echo '<p class="title_info" data-id="' . $cd1->id . '">' . $cd1->pavadinimasEn . '</p>';
							} ?>
							<?php if ( $_SESSION['lang'] == 'fr' ) {
								echo '<p class="title_info" data-id="' . $cd1->id . '">' . $cd1->pavadinimasFr . '</p>';
							} ?>
                        </div>
						<?php $nuotrauka = 'assets/images/' . $cd1->nuotrauka; ?>
                        <div class="disk-small-img"
                             style='background: url("<?php echo $nuotrauka; ?>") no-repeat; background-size: cover; background-position: center'></div>
                    </div>
				<?php } ?>
            </div>
        </div>

        <!-- =================================================================================================-->

        <div class="row">
			<?php $cdvinilas4 = DiskografijaCd::find_by_query( "SELECT * FROM diskografija_cd WHERE pavadinimasEn LIKE 'LONTANO / Warner'" ); ?>
            <div class="col-sm-12 diskografas-on-mobile">
				<?php echo '<p class="title">';
				echo $cdvinilas4[0]->pavadinimasLt;
				'</p>' ?>

				<?php foreach ( $cdvinilas4 as $cd1 ) { ?>
                    <div class="diskografija_box">
                        <div class="img_info">
							<?php if ( $_SESSION['lang'] == 'lt' ) {
								echo '<p class="title_info" data-id="' . $cd1->id . '">' . $cd1->pavadinimasLt . '</p>';
							} ?>
							<?php if ( $_SESSION['lang'] == 'en' ) {
								echo '<p class="title_info" data-id="' . $cd1->id . '">' . $cd1->pavadinimasEn . '</p>';
							} ?>
							<?php if ( $_SESSION['lang'] == 'fr' ) {
								echo '<p class="title_info" data-id="' . $cd1->id . '">' . $cd1->pavadinimasFr . '</p>';
							} ?>
                        </div>
						<?php $nuotrauka = 'assets/images/' . $cd1->nuotrauka; ?>
                        <div class="disk-small-img"
                             style='background: url("<?php echo $nuotrauka; ?>") no-repeat; background-size: cover; background-position: center'></div>
                    </div>
				<?php } ?>
            </div>
        </div>

        <!-- =================================================================================================-->

        <div class="row">
			<?php $cdvinilas5 = DiskografijaCd::find_by_query( "SELECT * FROM diskografija_cd WHERE pavadinimasEn LIKE 'NAXOS'" ); ?>
            <div class="col-sm-12 diskografas-on-mobile">
				<?php echo '<p class="title">';
				echo $cdvinilas5[0]->pavadinimasLt;
				'</p>' ?>

				<?php foreach ( $cdvinilas5 as $cd1 ) { ?>
                    <div class="diskografija_box">
                        <div class="img_info">
							<?php if ( $_SESSION['lang'] == 'lt' ) {
								echo '<p class="title_info" data-id="' . $cd1->id . '">' . $cd1->pavadinimasLt . '</p>';
							} ?>
							<?php if ( $_SESSION['lang'] == 'en' ) {
								echo '<p class="title_info" data-id="' . $cd1->id . '">' . $cd1->pavadinimasEn . '</p>';
							} ?>
							<?php if ( $_SESSION['lang'] == 'fr' ) {
								echo '<p class="title_info" data-id="' . $cd1->id . '">' . $cd1->pavadinimasFr . '</p>';
							} ?>
                        </div>
						<?php $nuotrauka = 'assets/images/' . $cd1->nuotrauka; ?>
                        <div class="disk-small-img"
                             style='background: url("<?php echo $nuotrauka; ?>") no-repeat; background-size: cover; background-position: center'></div>
                    </div>
				<?php } ?>
            </div>
        </div>

        <!-- =================================================================================================-->

        <div class="row">
			<?php $cdvinilas6 = DiskografijaCd::find_by_query( "SELECT * FROM diskografija_cd WHERE pavadinimasEn LIKE 'OPERA OMNIA%'" ); ?>
            <div class="col-sm-12 diskografas-on-mobile">
				<?php echo '<p class="title">';
				echo $cdvinilas6[0]->pavadinimasLt;
				'</p>' ?>

				<?php foreach ( $cdvinilas6 as $cd1 ) { ?>
                    <div class="diskografija_box">
                        <div class="img_info">
							<?php if ( $_SESSION['lang'] == 'lt' ) {
								echo '<p class="title_info" data-id="' . $cd1->id . '">' . $cd1->pavadinimasLt . '</p>';
							} ?>
							<?php if ( $_SESSION['lang'] == 'en' ) {
								echo '<p class="title_info" data-id="' . $cd1->id . '">' . $cd1->pavadinimasEn . '</p>';
							} ?>
							<?php if ( $_SESSION['lang'] == 'fr' ) {
								echo '<p class="title_info" data-id="' . $cd1->id . '">' . $cd1->pavadinimasFr . '</p>';
							} ?>
                        </div>
						<?php $nuotrauka = 'assets/images/' . $cd1->nuotrauka; ?>
                        <div class="disk-small-img"
                             style='background: url("<?php echo $nuotrauka; ?>") no-repeat; background-size: cover; background-position: center'></div>
                    </div>
				<?php } ?>
            </div>
        </div>
<!--        ==================================================================================================-->
        <div class="row">
		    <?php $cdvinilas7 = DiskografijaCd::find_by_query( "SELECT * FROM diskografija_cd WHERE pavadinimasEn LIKE 'Private%' AND FIELD(ID,41,42,43)" ); ?>
            <div class="col-sm-12 diskografas-on-mobile">
			    <?php if ( $_SESSION['lang'] == 'lt' ) {
				    echo '<p class="title">VINILAI</p>';
			    } ?>
			    <?php if ( $_SESSION['lang'] == 'en' ) {
				    echo '<p class="title">VINYL</p>';
			    } ?>
			    <?php if ( $_SESSION['lang'] == 'fr' ) {
				    echo '<p class="title">VINYL</p>';
			    } ?>
			    <?php foreach ( $cdvinilas7 as $cd1 ) { ?>
                    <div class="diskografija_box">
                        <div class="img_info">
						    <?php if ( $_SESSION['lang'] == 'lt' ) {
							    echo '<p class="title_info" data-id="' . $cd1->id . '">' . $cd1->pavadinimasLt . '</p>';
						    } ?>
						    <?php if ( $_SESSION['lang'] == 'en' ) {
							    echo '<p class="title_info" data-id="' . $cd1->id . '">' . $cd1->pavadinimasEn . '</p>';
						    } ?>
						    <?php if ( $_SESSION['lang'] == 'fr' ) {
							    echo '<p class="title_info" data-id="' . $cd1->id . '">' . $cd1->pavadinimasFr . '</p>';
						    } ?>
                        </div>
					    <?php $nuotrauka = 'assets/images/' . $cd1->nuotrauka; ?>
                        <div class="disk-small-img"
                             style='background: url("<?php echo $nuotrauka; ?>") no-repeat; background-size: cover; background-position: center'></div>
                    </div>
			    <?php } ?>
            </div>
        </div
                <!--        ====================================================================================================-->

        <div class="row">
		    <?php $cdvinilas10 = DiskografijaCd::find_by_query( "SELECT * FROM diskografija_cd WHERE pavadinimasEn LIKE 'Private%' AND FIELD(ID,39,40)" ); ?>
            <div class="col-sm-12 diskografas-on-mobile">
			    <?php if ( $_SESSION['lang'] == 'lt' ) {
				    echo '<p class="title">KITI</p>';
			    } ?>
			    <?php if ( $_SESSION['lang'] == 'en' ) {
				    echo '<p class="title">OTHER</p>';
			    } ?>
			    <?php if ( $_SESSION['lang'] == 'fr' ) {
				    echo '<p class="title">AUTRE</p>';
			    } ?>
			    <?php foreach ( $cdvinilas10 as $cd1 ) { ?>
                    <div class="diskografija_box">
                        <div class="img_info">
						    <?php if ( $_SESSION['lang'] == 'lt' ) {
							    echo '<p class="title_info" data-id="' . $cd1->id . '">' . $cd1->pavadinimasLt . '</p>';
						    } ?>
						    <?php if ( $_SESSION['lang'] == 'en' ) {
							    echo '<p class="title_info" data-id="' . $cd1->id . '">' . $cd1->pavadinimasEn . '</p>';
						    } ?>
						    <?php if ( $_SESSION['lang'] == 'fr' ) {
							    echo '<p class="title_info" data-id="' . $cd1->id . '">' . $cd1->pavadinimasFr . '</p>';
						    } ?>
                        </div>
					    <?php $nuotrauka = 'assets/images/' . $cd1->nuotrauka; ?>
                        <div class="disk-small-img"
                             style='background: url("<?php echo $nuotrauka; ?>") no-repeat; background-size: cover; background-position: center'></div>
                    </div>
			    <?php } ?>
            </div>
        </div>
        <!-- =================================================================================================-->
        <div class="row">
		    <?php $cdvinilas9 = DiskografijaCd::find_by_query( "SELECT * FROM diskografija_cd WHERE pavadinimasEn LIKE 'Private%' AND FIELD(ID,36, 37, 38)" ); ?>
            <div class="col-sm-12 diskografas-on-mobile">


			    <?php if ( $_SESSION['lang'] == 'lt' ) {
				    echo '<p class="title">ASMENINIAI</p>';
			    } ?>
			    <?php if ( $_SESSION['lang'] == 'en' ) {
				    echo '<p class="title">PRIVATE</p>';
			    } ?>
			    <?php if ( $_SESSION['lang'] == 'fr' ) {
				    echo '<p class="title">PRIVÉ</p>';
			    } ?>


			    <?php foreach ( $cdvinilas9 as $cd1 ) { ?>
                    <div class="diskografija_box">
                        <div class="img_info">
						    <?php if ( $_SESSION['lang'] == 'lt' ) {
							    echo '<p class="title_info" data-id="' . $cd1->id . '">' . $cd1->pavadinimasLt . '</p>';
						    } ?>
						    <?php if ( $_SESSION['lang'] == 'en' ) {
							    echo '<p class="title_info" data-id="' . $cd1->id . '">' . $cd1->pavadinimasEn . '</p>';
						    } ?>
						    <?php if ( $_SESSION['lang'] == 'fr' ) {
							    echo '<p class="title_info" data-id="' . $cd1->id . '">' . $cd1->pavadinimasFr . '</p>';
						    } ?>
                        </div>
					    <?php $nuotrauka = 'assets/images/' . $cd1->nuotrauka; ?>
                        <div class="disk-small-img"
                             style='background: url("<?php echo $nuotrauka; ?>") no-repeat; background-size: cover; background-position: center'></div>
                    </div>
			    <?php } ?>
            </div>
        </div>

    </div>
</section>

<!-- ====================================POP UP'AI ================================================-->

<?php foreach ( $cdvinilas as $cd3 ) { ?>
    <section id="open_cd<?php echo $cd3->id; ?>" class="outsideS">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="open_box_cd">
                        <div class="inside_box_cd">
                            <div class="row">

								<?php if ( $_SESSION['lang'] == 'lt' ) {
									echo '<h2>' . $cd3->pavadinimasLt . '</h2>';
								} ?>
								<?php if ( $_SESSION['lang'] == 'en' ) {
									echo '<h2>' . $cd3->pavadinimasEn . '</h2>';
								} ?>
								<?php if ( $_SESSION['lang'] == 'fr' ) {
									echo '<h2>' . $cd3->pavadinimasFr . '</h2>';
								} ?>
                                <div class="col-sm-5">
									<?php $nuotrauka2 = 'assets/images/' . $cd3->nuotrauka; ?>
                                    <div class="open_cd_img"
                                         style="background: url('<?php echo $nuotrauka2; ?>'); background-size: cover; background-position: center;"></div>
                                </div>
                                <div class="col-sm-7">
									<?php $nuotrauka3 = 'assets/images/' . $cd3->nuotrauka1; ?>
                                    <div class="open_cd_img"
                                         style="background: url('<?php echo $nuotrauka3; ?>'); background-size: contain;
                                                 background-position: center; background-repeat: no-repeat"></div>
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

<!-- ============================================================================================================-->

<?php foreach ( $cdvinilas1 as $cd3 ) { ?>
    <section id="open_cd<?php echo $cd3->id; ?>" class="outsideS">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="open_box_cd">
                        <div class="inside_box_cd">
                            <div class="row">

								<?php if ( $_SESSION['lang'] == 'lt' ) {
									echo '<h2>' . $cd3->pavadinimasLt . '</h2>';
								} ?>
								<?php if ( $_SESSION['lang'] == 'en' ) {
									echo '<h2>' . $cd3->pavadinimasEn . '</h2>';
								} ?>
								<?php if ( $_SESSION['lang'] == 'fr' ) {
									echo '<h2>' . $cd3->pavadinimasFr . '</h2>';
								} ?>
                                <div class="col-sm-5">
									<?php $nuotrauka2 = 'assets/images/' . $cd3->nuotrauka; ?>
                                    <div class="open_cd_img"
                                         style="background: url('<?php echo $nuotrauka2; ?>'); background-size: cover; background-position: center;"></div>
                                </div>
                                <div class="col-sm-7">
									<?php $nuotrauka3 = 'assets/images/' . $cd3->nuotrauka1; ?>
                                    <div class="open_cd_img"
                                         style="background: url('<?php echo $nuotrauka3; ?>'); background-size: contain;
                                                 background-position: center; background-repeat: no-repeat"></div>
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
<!-- ============================================================================================================-->

<?php foreach ( $cdvinilas2 as $cd3 ) { ?>
    <section id="open_cd<?php echo $cd3->id; ?>" class="outsideS">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="open_box_cd">
                        <div class="inside_box_cd">
                            <div class="row">

								<?php if ( $_SESSION['lang'] == 'lt' ) {
									echo '<h2>' . $cd3->pavadinimasLt . '</h2>';
								} ?>
								<?php if ( $_SESSION['lang'] == 'en' ) {
									echo '<h2>' . $cd3->pavadinimasEn . '</h2>';
								} ?>
								<?php if ( $_SESSION['lang'] == 'fr' ) {
									echo '<h2>' . $cd3->pavadinimasFr . '</h2>';
								} ?>
                                <div class="col-sm-5">
									<?php $nuotrauka2 = 'assets/images/' . $cd3->nuotrauka; ?>
                                    <div class="open_cd_img"
                                         style="background: url('<?php echo $nuotrauka2; ?>'); background-size: cover; background-position: center;"></div>
                                </div>
                                <div class="col-sm-7">
									<?php $nuotrauka3 = 'assets/images/' . $cd3->nuotrauka1; ?>
                                    <div class="open_cd_img"
                                         style="background: url('<?php echo $nuotrauka3; ?>'); background-size: contain;
                                                 background-position: center; background-repeat: no-repeat"></div>
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
<!-- ============================================================================================================-->

<?php foreach ( $cdvinilas3 as $cd3 ) { ?>
    <section id="open_cd<?php echo $cd3->id; ?>" class="outsideS">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="open_box_cd">
                        <div class="inside_box_cd">
                            <div class="row">

								<?php if ( $_SESSION['lang'] == 'lt' ) {
									echo '<h2>' . $cd3->pavadinimasLt . '</h2>';
								} ?>
								<?php if ( $_SESSION['lang'] == 'en' ) {
									echo '<h2>' . $cd3->pavadinimasEn . '</h2>';
								} ?>
								<?php if ( $_SESSION['lang'] == 'fr' ) {
									echo '<h2>' . $cd3->pavadinimasFr . '</h2>';
								} ?>
                                <div class="col-sm-5">
									<?php $nuotrauka2 = 'assets/images/' . $cd3->nuotrauka; ?>
                                    <div class="open_cd_img"
                                         style="background: url('<?php echo $nuotrauka2; ?>'); background-size: cover; background-position: center;"></div>
                                </div>
                                <div class="col-sm-7">
									<?php $nuotrauka3 = 'assets/images/' . $cd3->nuotrauka1; ?>
                                    <div class="open_cd_img"
                                         style="background: url('<?php echo $nuotrauka3; ?>'); background-size: contain;
                                                 background-position: center; background-repeat: no-repeat"></div>
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

<!-- ============================================================================================================-->

<?php foreach ( $cdvinilas4 as $cd3 ) { ?>
    <section id="open_cd<?php echo $cd3->id; ?>" class="outsideS">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="open_box_cd">
                        <div class="inside_box_cd">
                            <div class="row">

								<?php if ( $_SESSION['lang'] == 'lt' ) {
									echo '<h2>' . $cd3->pavadinimasLt . '</h2>';
								} ?>
								<?php if ( $_SESSION['lang'] == 'en' ) {
									echo '<h2>' . $cd3->pavadinimasEn . '</h2>';
								} ?>
								<?php if ( $_SESSION['lang'] == 'fr' ) {
									echo '<h2>' . $cd3->pavadinimasFr . '</h2>';
								} ?>
                                <div class="col-sm-5">
									<?php $nuotrauka2 = 'assets/images/' . $cd3->nuotrauka; ?>
                                    <div class="open_cd_img"
                                         style="background: url('<?php echo $nuotrauka2; ?>'); background-size: cover; background-position: center;"></div>
                                </div>
                                <div class="col-sm-7">
									<?php $nuotrauka3 = 'assets/images/' . $cd3->nuotrauka1; ?>
                                    <div class="open_cd_img"
                                         style="background: url('<?php echo $nuotrauka3; ?>'); background-size: contain;
                                                 background-position: center; background-repeat: no-repeat"></div>
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

<!-- ============================================================================================================-->

<?php foreach ( $cdvinilas5 as $cd3 ) { ?>
    <section id="open_cd<?php echo $cd3->id; ?>" class="outsideS">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="open_box_cd">
                        <div class="inside_box_cd">
                            <div class="row">

								<?php if ( $_SESSION['lang'] == 'lt' ) {
									echo '<h2>' . $cd3->pavadinimasLt . '</h2>';
								} ?>
								<?php if ( $_SESSION['lang'] == 'en' ) {
									echo '<h2>' . $cd3->pavadinimasEn . '</h2>';
								} ?>
								<?php if ( $_SESSION['lang'] == 'fr' ) {
									echo '<h2>' . $cd3->pavadinimasFr . '</h2>';
								} ?>
                                <div class="col-sm-5">
									<?php $nuotrauka2 = 'assets/images/' . $cd3->nuotrauka; ?>
                                    <div class="open_cd_img"
                                         style="background: url('<?php echo $nuotrauka2; ?>'); background-size: cover; background-position: center;"></div>
                                </div>
                                <div class="col-sm-7">
									<?php $nuotrauka3 = 'assets/images/' . $cd3->nuotrauka1; ?>
                                    <div class="open_cd_img"
                                         style="background: url('<?php echo $nuotrauka3; ?>'); background-size: contain;
                                                 background-position: center; background-repeat: no-repeat"></div>
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
<!-- ============================================================================================================-->

<?php foreach ( $cdvinilas6 as $cd3 ) { ?>
    <section id="open_cd<?php echo $cd3->id; ?>" class="outsideS">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="open_box_cd">
                        <div class="inside_box_cd">
                            <div class="row">

								<?php if ( $_SESSION['lang'] == 'lt' ) {
									echo '<h2>' . $cd3->pavadinimasLt . '</h2>';
								} ?>
								<?php if ( $_SESSION['lang'] == 'en' ) {
									echo '<h2>' . $cd3->pavadinimasEn . '</h2>';
								} ?>
								<?php if ( $_SESSION['lang'] == 'fr' ) {
									echo '<h2>' . $cd3->pavadinimasFr . '</h2>';
								} ?>
                                <div class="col-sm-5">
									<?php $nuotrauka2 = 'assets/images/' . $cd3->nuotrauka; ?>
                                    <div class="open_cd_img"
                                         style="background: url('<?php echo $nuotrauka2; ?>'); background-size: cover; background-position: center;"></div>
                                </div>
                                <div class="col-sm-7">
									<?php $nuotrauka3 = 'assets/images/' . $cd3->nuotrauka1; ?>
                                    <div class="open_cd_img"
                                         style="background: url('<?php echo $nuotrauka3; ?>'); background-size: contain;
                                                 background-position: center; background-repeat: no-repeat"></div>
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
<!-- ============================================================================================================-->

<?php foreach ( $cdvinilas7 as $cd3 ) { ?>
    <section id="open_cd<?php echo $cd3->id; ?>" class="outsideS">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="open_box_cd">
                        <div class="inside_box_cd">
                            <div class="row">

								<?php if ( $_SESSION['lang'] == 'lt' ) {
									echo '<h2>' . $cd3->pavadinimasLt . '</h2>';
								} ?>
								<?php if ( $_SESSION['lang'] == 'en' ) {
									echo '<h2>' . $cd3->pavadinimasEn . '</h2>';
								} ?>
								<?php if ( $_SESSION['lang'] == 'fr' ) {
									echo '<h2>' . $cd3->pavadinimasFr . '</h2>';
								} ?>
                                <div class="col-sm-5">
									<?php $nuotrauka2 = 'assets/images/' . $cd3->nuotrauka; ?>
                                    <div class="open_cd_img"
                                         style="background: url('<?php echo $nuotrauka2; ?>'); background-size: cover; background-position: center;"></div>
                                </div>
                                <div class="col-sm-7">
									<?php $nuotrauka3 = 'assets/images/' . $cd3->nuotrauka1; ?>
                                    <div class="open_cd_img"
                                         style="background: url('<?php echo $nuotrauka3; ?>'); background-size: contain;
                                                 background-position: center; background-repeat: no-repeat"></div>
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

<!-- ========================================================================================================== -->

<?php foreach ( $cdvinilas8 as $cd3 ) { ?>
    <section id="open_cd<?php echo $cd3->id; ?>" class="outsideS">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="open_box_cd">
                        <div class="inside_box_cd">
                            <div class="row">

								<?php if ( $_SESSION['lang'] == 'lt' ) {
									echo '<h2>' . $cd3->pavadinimasLt . '</h2>';
								} ?>
								<?php if ( $_SESSION['lang'] == 'en' ) {
									echo '<h2>' . $cd3->pavadinimasEn . '</h2>';
								} ?>
								<?php if ( $_SESSION['lang'] == 'fr' ) {
									echo '<h2>' . $cd3->pavadinimasFr . '</h2>';
								} ?>
                                <div class="col-sm-5">
									<?php $nuotrauka2 = 'assets/images/' . $cd3->nuotrauka; ?>
                                    <div class="open_cd_img"
                                         style="background: url('<?php echo $nuotrauka2; ?>'); background-size: cover; background-position: center;"></div>
                                </div>
                                <div class="col-sm-7">
									<?php $nuotrauka3 = 'assets/images/' . $cd3->nuotrauka1; ?>
                                    <div class="open_cd_img"
                                         style="background: url('<?php echo $nuotrauka3; ?>'); background-size: contain;
                                                 background-position: center; background-repeat: no-repeat"></div>
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

<!--===============================================================================================================-->
<?php foreach ( $cdvinilas9 as $cd3 ) { ?>
    <section id="open_cd<?php echo $cd3->id; ?>" class="outsideS">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="open_box_cd">
                        <div class="inside_box_cd">
                            <div class="row">

								<?php if ( $_SESSION['lang'] == 'lt' ) {
									echo '<h2>' . $cd3->pavadinimasLt . '</h2>';
								} ?>
								<?php if ( $_SESSION['lang'] == 'en' ) {
									echo '<h2>' . $cd3->pavadinimasEn . '</h2>';
								} ?>
								<?php if ( $_SESSION['lang'] == 'fr' ) {
									echo '<h2>' . $cd3->pavadinimasFr . '</h2>';
								} ?>
                                <div class="col-sm-5">
									<?php $nuotrauka2 = 'assets/images/' . $cd3->nuotrauka; ?>
                                    <div class="open_cd_img"
                                         style="background: url('<?php echo $nuotrauka2; ?>'); background-size: cover; background-position: center;"></div>
                                </div>
                                <div class="col-sm-7">
									<?php $nuotrauka3 = 'assets/images/' . $cd3->nuotrauka1; ?>
                                    <div class="open_cd_img"
                                         style="background: url('<?php echo $nuotrauka3; ?>'); background-size: contain;
                                                 background-position: center; background-repeat: no-repeat"></div>
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

<!--=================================================================================-->

<?php foreach ( $cdvinilas10 as $cd3 ) { ?>
    <section id="open_cd<?php echo $cd3->id; ?>" class="outsideS">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="open_box_cd">
                        <div class="inside_box_cd">
                            <div class="row">

								<?php if ( $_SESSION['lang'] == 'lt' ) {
									echo '<h2>' . $cd3->pavadinimasLt . '</h2>';
								} ?>
								<?php if ( $_SESSION['lang'] == 'en' ) {
									echo '<h2>' . $cd3->pavadinimasEn . '</h2>';
								} ?>
								<?php if ( $_SESSION['lang'] == 'fr' ) {
									echo '<h2>' . $cd3->pavadinimasFr . '</h2>';
								} ?>
                                <div class="col-sm-5">
									<?php $nuotrauka2 = 'assets/images/' . $cd3->nuotrauka; ?>
                                    <div class="open_cd_img"
                                         style="background: url('<?php echo $nuotrauka2; ?>'); background-size: cover; background-position: center;"></div>
                                </div>
                                <div class="col-sm-7">
									<?php $nuotrauka3 = 'assets/images/' . $cd3->nuotrauka1; ?>
                                    <div class="open_cd_img"
                                         style="background: url('<?php echo $nuotrauka3; ?>'); background-size: contain;
                                                 background-position: center; background-repeat: no-repeat"></div>
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

<!--=================================================================================-->

<?php foreach ( $cdvinilas11 as $cd3 ) { ?>
    <section id="open_cd<?php echo $cd3->id; ?>" class="outsideS">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="open_box_cd">
                        <div class="inside_box_cd">
                            <div class="row">

								<?php if ( $_SESSION['lang'] == 'lt' ) {
									echo '<h2>' . $cd3->pavadinimasLt . '</h2>';
								} ?>
								<?php if ( $_SESSION['lang'] == 'en' ) {
									echo '<h2>' . $cd3->pavadinimasEn . '</h2>';
								} ?>
								<?php if ( $_SESSION['lang'] == 'fr' ) {
									echo '<h2>' . $cd3->pavadinimasFr . '</h2>';
								} ?>
                                <div class="col-sm-5">
									<?php $nuotrauka2 = 'assets/images/' . $cd3->nuotrauka; ?>
                                    <div class="open_cd_img"
                                         style="background: url('<?php echo $nuotrauka2; ?>'); background-size: cover; background-position: center;"></div>
                                </div>
                                <div class="col-sm-7">
									<?php $nuotrauka3 = 'assets/images/' . $cd3->nuotrauka1; ?>
                                    <div class="open_cd_img"
                                         style="background: url('<?php echo $nuotrauka3; ?>'); background-size: contain;
                                                 background-position: center; background-repeat: no-repeat"></div>
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

<!--=================================================================================-->

<?php foreach ( $cdvinilas12 as $cd3 ) { ?>
    <section id="open_cd<?php echo $cd3->id; ?>" class="outsideS">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="open_box_cd">
                        <div class="inside_box_cd">
                            <div class="row">

								<?php if ( $_SESSION['lang'] == 'lt' ) {
									echo '<h2>' . $cd3->pavadinimasLt . '</h2>';
								} ?>
								<?php if ( $_SESSION['lang'] == 'en' ) {
									echo '<h2>' . $cd3->pavadinimasEn . '</h2>';
								} ?>
								<?php if ( $_SESSION['lang'] == 'fr' ) {
									echo '<h2>' . $cd3->pavadinimasFr . '</h2>';
								} ?>
                                <div class="col-sm-5">
									<?php $nuotrauka2 = 'assets/images/' . $cd3->nuotrauka; ?>
                                    <div class="open_cd_img"
                                         style="background: url('<?php echo $nuotrauka2; ?>'); background-size: cover; background-position: center;"></div>
                                </div>
                                <div class="col-sm-7">
									<?php $nuotrauka3 = 'assets/images/' . $cd3->nuotrauka1; ?>
                                    <div class="open_cd_img"
                                         style="background: url('<?php echo $nuotrauka3; ?>'); background-size: contain;
                                                 background-position: center; background-repeat: no-repeat"></div>
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


<!--====================================================================================================-->
<section id="dvd">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
				<?php $dvds = DiskografijaDvd::find_by_query( "SELECT * FROM diskografija_dvd " ); ?>
                <div class="left-side">
					<?php if ( $_SESSION['lang'] == 'lt' ) {
						echo '<h2>' . $web->dvd_lt . '</h2>';
					} ?>
					<?php if ( $_SESSION['lang'] == 'en' ) {
						echo '<h2>' . $web->dvd_en . '</h2>';
					} ?>
					<?php if ( $_SESSION['lang'] == 'fr' ) {
						echo '<h2>' . $web->dvd_fr . '</h2>';
					} ?>
					<?php foreach ( $dvds as $dvd ) { ?>
                        <div class="dvd_box">
							<?php $nuotrauka_dvd = 'assets/images/' . $dvd->nuotrauka; ?>
                            <div class="dvd-small-img" data-id="<?php echo $dvd->id; ?>"
                                 style="background: url('<?php echo $nuotrauka_dvd; ?>') no-repeat; background-size: cover; background-position: center"></div>

                        </div>
					<?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php foreach ( $dvds as $dvd ) { ?>
    <section id="open_cd_2<?php echo $dvd->id; ?>" class="outsideS onlyDVD">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="open_box_cd">
                        <div class="inside_box_cd">
                            <div class="row">
								<?php if ( $_SESSION['lang'] == 'lt' ) {
									echo '<h2>' . $dvd->pavadinimasLt . '</h2>';
								} ?>
								<?php if ( $_SESSION['lang'] == 'en' ) {
									echo '<h2>' . $dvd->pavadinimasEn . '</h2>';
								} ?>
								<?php if ( $_SESSION['lang'] == 'fr' ) {
									echo '<h2>' . $dvd->pavadinimasFr . '</h2>';
								} ?>
                                <div class="col-sm-4">
									<?php $nuotrauka_dvd2 = 'assets/images/' . $dvd->nuotrauka; ?>
                                    <div class="open_cd_img"
                                         style="background: url('<?php echo $nuotrauka_dvd2; ?>'); background-size: cover; background-position: center;"></div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="row">
										<?php if ( $_SESSION['lang'] == 'lt' ) {
											echo $dvd->aprasymasLt;
										} ?>
										<?php if ( $_SESSION['lang'] == 'en' ) {
											echo $dvd->aprasymasEn;
										} ?>
										<?php if ( $_SESSION['lang'] == 'fr' ) {
											echo $dvd->aprasymasFr;
										} ?>
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

<?php require_once( 'includes/main_footer.php' ); ?>

<script type="text/javascript">
    //        $(document).ready(function() {
    //            $('html, body').animate({
    //                scrollTop: $("#scrollHere").offset().top
    //            }, 1000);
    //        });
</script>