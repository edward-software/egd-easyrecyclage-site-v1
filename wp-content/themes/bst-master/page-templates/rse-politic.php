<?php
/**
 *	Template Name: RSE-politic
 *
 *	The template for dispalying Custom Page Template: RSE-politic.
 *
 *	@package WordPress
 *	@subpackage bst
 */
?>

<!-- header -->
<?php get_template_part('includes/header'); ?>
<!-- /header -->
  <section class="section-page-header">
      <!-- Page Content -->
      <div class="container">
          <!-- Marketing Icons Section -->
          <div class="row">
              <?php if(  !function_exists( 'dynamic_sidebar' ) || dynamic_sidebar('politiqueRSE_widget_header_titre') ): ?>
                  <!-- Display something after the sidebar widgets contents -->
              <?php else : ?>
                  <div class="col-md-4 col-xs-12">
                      <div class="block-title">
                          <h3 class="text-center">
                              WWF<br>
                              & la corbeille bleue
                          </h3>
                          <hr class="politic-rse-horizontal-rule">
                      </div><!-- /.block-title -->
                  </div><!-- /.col-md-4 -->
              <?php endif; ?>
              <?php if(  !function_exists( 'dynamic_sidebar' ) || dynamic_sidebar('politiqueRSE_widget_header_textLeft') ): ?>
                  <!-- Display something after the sidebar widgets contents -->
              <?php else : ?>
                  <div class="col-md-8 col-xs-12">
                      <div class="block-content">
                        <p class="text-left">En souscrivant à nos prestations vous soutenez 3 programmes WWF en faveur de la diversité des écosystèmes :</p>
                      </div><!-- /.block-content -->
                  </div>
              <?php endif; ?>
          </div>
          <!-- /.row -->
      </div>
      <!-- /.container -->
  </section><!-- /.section-header-page -->

<section id="programmes" class="rse-section-one">
      <!-- Page Content -->
      <div class="container">
          <!-- Page Heading/Breadcrumbs -->
          <div class="row block-header-container">
              <div class="block-header">
                  <?php if(  !function_exists( 'dynamic_sidebar' ) || dynamic_sidebar('politiqueRSE_widget_programme_titre') ): ?>
                      <!-- Display something after the sidebar widgets contents -->
                  <?php else : ?>
                  <div class="col-xs-12">
                      <div class="block-title">
                          <h3>les programmes</h3>
                          <hr>
                      </div><!-- /.block-header -->
                  </div><!-- /.col-md-12 -->
                  <?php endif; ?>
              </div><!-- /.block-header -->
          </div><!-- /.row -->
          <div class="row block-content-container">
              <!-- Content Column -->
              <?php if(  !function_exists( 'dynamic_sidebar' ) || dynamic_sidebar('politiqueRSE_widget_programme_blocContenu') ): ?>

              <?php else : ?>

                  <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="block-container">
                        <div class="block-title">
                            <h2 class="text-center">01</h2>
                            <h4 class="text-center text-uppercase">LA MER</h4>
                            <h5 class="text-center text-uppercase">(MEDTRENDS)</h5>
                        </div><!-- /.block-title -->
                        <div class="block-content">
                            <h6 class="text-center text-uppercase">OBJECTIF</h6>
                            <p class="text-center">Dresser une cartographie des scénarios intégrés de développement économique maritime les plus probables au niveau transational, pour les 20 années à venir.</p>
                            <h6 class="text-center text-uppercase">ACTION</h6>
                            <p class="text-center">Collecte de données et cartographie de scénarios intégrés de l’économie maritime.</p>
                        </div> <!-- /.block-content -->
                    </div><!-- /.block-container -->
                  </div><!-- /.col-md-4 -->

                  <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="block-container">
                        <div class="block-title">
                            <h2 class="text-center text-uppercase">02</h2>
                            <h4 class="text-center text-uppercase">LA MONTAGNE</h4>
                            <h5 class="text-center text-uppercase">(EALP)</h5>
                        </div> <!-- /.block-title -->
                        <div class="block-content">
                            <h6 class="text-center text-uppercase">OBJECTIF</h6>
                            <p class="text-center">Sauvegarder ce joyau de la biodiversité et assurer l’existence d’un réseau écologique intact.</p>
                            <p class="text-center">Le WWF contribue à faciliter le retour des loups, des ours et des lynx dans les territoires alpins où ils étaient précédemment implantés, en remédiant à la fragmentation du milieu naturel.</p>
                        </div><!-- /.block-content -->
                    </div><!-- /.block-container -->
                  </div><!-- /.col-md-4 -->

                  <div class="col-md-4 col-sm-6 col-xs-12">
                          <div class="block-container">
                              <div class="block-title">
                                  <h2 class="text-center">03</h2>
                                  <h4 class="text-center text-uppercase">LES ETANGS EN PLAINE</h4>
                                  <h5 class="text-center text-uppercase">(La Réserve naturelle de Chérine)</h5>
                              </div> <!-- /.block-title -->
                              <div class="block-content">
                                  <p class="text-center">Elle a pour mission de protéger les espèces menacées : oiseaux, tortues cistudes, libellules, grenouilles, plantes, loutre…</p>
                                  <p class="text-center">Elle mène des études scientifiques et développe des actions de sensibilisation à l’intention des visiteurs et des acteurs locaux.</p>
                              </div><!-- /.block-content -->
                          </div><!-- /.block-container -->
                      </div><!-- /.block-container -->
                  </div><!-- /.col-md-4 -->

              <?php endif; ?>

          </div><!-- /.row -->
        </div><!-- /.row -->
      </div><!-- /.container -->
  </section><!-- /.rse-section-one -->

<section id="mecene-wwf"  class="rse-section-two">
    <!-- Page Content -->
    <div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <?php if(  !function_exists( 'dynamic_sidebar' ) || dynamic_sidebar('politiqueRSE_widget_reverserWWF_imgCenter') ): ?>

            <?php else : ?>
                <div class="col-md-4 col-xs-12">
                    <div class="block-img">
                        <img class="img-responsive" src="<?php bloginfo("template_directory"); ?>/images/rse/Picto_WWF.png">
                    </div> <!-- /.block-img -->
                </div>
            <?php endif; ?>

            <?php if(  !function_exists( 'dynamic_sidebar' ) || dynamic_sidebar('politiqueRSE_widget_reverserWWF_textLeft') ): ?>
                <!-- Display something after the sidebar widgets contents -->
            <?php else : ?>
                <div class="col-md-8 col-xs-12">
                    <div class="block-description">
                        <p class="text-uppercase text-left">
                            à chaque contrat de recyclage signé avec Easy Recyclage,<br>
                            <strong>10 &#8364 sont reversés au WWF.</strong>
                        </p>
                    </div> <!-- /.block-description -->
                </div>
            <?php endif; ?>
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.rse-section-two -->

<section id="logoWwf">
  <div class="container">
        <div class="row block-img-container">
            <?php if(  !function_exists( 'dynamic_sidebar' ) || dynamic_sidebar('politiqueRSE_widget_logoWWF_imgCenter') ): ?>

            <?php else : ?>
                <div class="col-xs-12">
                        <div class="block-img text-center">
                            <img class="" src="<?php bloginfo("template_directory"); ?>/images/logo/logo-lcb-wwf.png">
                        </div> <!-- /.block-img -->
                </div><!-- /.col-xs-12 -->
            <?php endif; ?>
  </div>
</section>

<section class="rse-section-three">
    <!-- Page Content -->
    <div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <?php if(  !function_exists( 'dynamic_sidebar' ) || dynamic_sidebar('politiqueRSE_widget_soutenirWWF_titre') ): ?>
                <!-- Display something after the sidebar widgets contents -->
            <?php else : ?>
                <div class="col-md-8 col-xs-12">
                  <div class="block-title">
                      <h3 class="text-left">et si vous souteniez aussi le wwf ?</h3>
                  </div>
                </div>
            <?php endif; ?>


              <div class="col-md-4 col-xs-12">
                  <a class="btn btn-default pull-right text-center" href="<?php echo EASY_RECYCLAGE_STORE_URL; ?>">estimez votre besoin</a>
              </div>

        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.rse-section-three -->

<section class="rse-section-four section-bg-img" style="background-image: url('<?php bloginfo("template_directory"); ?>/images/bg-section/bg-politique-rse.png')">
    <div class="container">
        <div class="row">
<?php if(  !function_exists( 'dynamic_sidebar' ) || dynamic_sidebar('politiqueRSE_widget_section_video') ): ?>
              
<?php else : ?>
                <div class="col-xs-12 block-content-container">
                    <a class="fancybox-media center-block" href="https://www.youtube.com/watch?v=zVYnMfbae8s"><img src="<?php bloginfo("template_directory"); ?>/images/picto-play.png"></i></a>
                    <h3 class="text-center text-uppercase">LE PROJET PELAGOS</h3>
                    <p class="text-center">Protégeons les Océans et les Côtes ensemble</p>
                </div><!-- /.col-md-12 -->
<?php endif; ?>
          </div><!-- /.row -->
      </div><!-- /.container -->
</section><!-- /.rse-section-four -->


  <!-- footer -->
  <?php get_template_part('includes/footer'); ?>
  <!-- /footer -->
