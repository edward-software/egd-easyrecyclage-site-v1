<?php
/**
 *	Template Name: About-us
 *
 *	The template for dispalying Custom Page Template: About-us.
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

            <?php if(  !function_exists( 'dynamic_sidebar' ) || dynamic_sidebar('about_widget_header_titre') ): ?>

            <?php else : ?>
                <div class="col-md-4 col-xs-12">
                    <div class="block-title">
                        <h3 class="text-center">qui sommes-nous ?</h3>
                        <hr>
                    </div><!-- /.block-title -->
                </div><!-- /.col-md-4 -->
            <?php endif; ?>
            <?php if (!function_exists('dynamic_sidebar') || dynamic_sidebar('about_widget_header_textLeft')): ?>

            <?php else : ?>
                <div class="col-md-8 col-xs-12">
                    <div class="block-content">
                    <p class="text-left">&nbsp</p>
                    </div><!-- /.block-content -->
                </div><!-- /.col-md-8 -->
            <?php endif; ?>
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.section-header-page -->

<section id="services" class="about-section-services">

    <div class="container">
    <div class="row">
            <?php if(  !function_exists( 'dynamic_sidebar' ) || dynamic_sidebar('about_widget_decouvrerNosServices_titreCenter') ): ?>

            <?php else : ?>
        <div class="col-xs-12">
            <div class="block-title">
                <h3>Découvrez nos autres services</h3>
                <hr>
            </div><!-- /.block-header -->

        </div><!-- /.col-xs-12 -->

            <?php endif; ?>
    </div><!-- /.row -->

<?php
        $serviceListUrl = EASY_RECYCLAGE_STORE_URL."/subscription/serviceList";
        $services = file_get_contents($serviceListUrl);
        $services = json_decode($services, TRUE);

        if(is_array($services['services']) && count($services['services']))
        {
    ?>

    <div class="row">
    <?php
            $i = 0;
            foreach($services['services'] as $service)
            {
    ?>

                <div id="link_box_<?php echo $service['id']; ?>" class="col-lg-2 col-md-3 col-xs-6 link_box <?php if($i == 0){ ?> active<?php } ?>">

                  <?php if( $service['url'] != null ) {  ?>
                    <a style="color:<?php echo $service['color']; ?>;" href="<?php echo $service['url']; ?>" target="_blank">
                  <?php } else { ?>
                    <a href="#modal_service_<?php echo $service['id']; ?>" class="modal-service-action" style="color:<?php echo $service['color']; ?>;">

                            <?php  } ?>
                        <div class="container-img">
                            <img class="featurette-image img-responsive center-block"
                                 src="<?php echo $service['picto1']; ?>">
                        </div>
                        <h5 class="text-center" style="color:<?php echo $service['color']; ?>;"><?php echo $service['name']; ?></h5>
                    </a>


                </div><!-- /.col-md-2 -->

                <div id="modal_service_<?php echo $service['id']; ?>" class="modal-service">
                    <div class="row-fluid">

                        <?php if ( $service['picture'] != null ) {  ?>

                        <div class="col-md-4 col-md-offset-1 text-center">
                            <img class="img-responsive img-portfolio img-hover service-img"
                                 src="<?php echo $service['picture']; ?>"
                                 alt="">
                        </div>

                        <?php  }; ?>

                        <div class="<?php if ( $service['picture'] != null ) {  ?>col-md-6 col-md-offset-1<?php } else { ?>col-md-12<?php } ?>">
                            <!--h6 class="service-name" style="color:<?php echo $service['color']; ?>;"><?php echo $service['name']; ?></h6-->
                            <div class="service-description"><?php echo $service['description']; ?></div>

                          <a href="<?php bloginfo("template_directory"); ?>/other-services.php?serviceId=<?php echo $service['id']; ?>" type="button"
                             class="btn btn-default other-services-button modal-other-services-button"
                             data-fancybox-type="iframe">
                            En savoir +
                          </a>
                        </div>
                    </div>
                </div><!-- /.col-md-2 -->

    <?php
                $i++;
            }
    ?>
    </div>
    <?php
        }
    ?>

    </div><!-- /.container -->
</section>

<section class="about-section-two bg-color-block-container-purple">
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <?php if(  !function_exists( 'dynamic_sidebar' ) || dynamic_sidebar('about_widget_recyclerAvecLaCorbeilleBleue_titreLeft') ): ?>

            <?php else : ?>
                <div class="col-md-8 col-xs-12">
                    <div class="block-title">
                        <h3 class="text-uppercase text-left">et si vous recycliez aussi avec la corbeille bleue ?</h3>
                    </div><!-- /.block-title -->
                </div><!-- /.col-md-8 -->
            <?php endif; ?>

                <div class="col-md-4 col-xs-12">
                    <div class="block-action-subscription">
                        <a class="btn btn-default pull-right text-center" href="<?php echo EASY_RECYCLAGE_STORE_URL; ?>">estimez votre besoin</a>
                    </div><!-- /.block-action-subscription -->
                </div><!-- /.col-md-8 -->

        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.about-section-one -->

<section id="corbeille-bleue" class="about-section-one">
    <!-- Page Content -->
    <div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="block-header">
            <?php if(  !function_exists( 'dynamic_sidebar' ) || dynamic_sidebar('about_widget_specialistDuRecyclage_titre') ): ?>

            <?php else : ?>
                <div class="col-xs-12">
                    <div class="block-title">
                        <h3>Spécialiste du recyclage<br>
                            dans le secteur tertiaire
                        </h3>
                        <hr>
                    </div><!-- /.block-header -->
                </div><!-- /.col-xs-12 -->
            <?php endif; ?>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <!-- Content Column -->
            <?php if(  !function_exists( 'dynamic_sidebar' ) || dynamic_sidebar('about_widget_specialistDuRecyclage_blocPrincipal') ): ?>

            <?php else : ?>

                <div class="col-md-6 col-xs-12">
                    <div class="block-container">
                        <div class="block-img">
                            <img class="img-responsive" src="<?php bloginfo("template_directory"); ?>/images/about-us/section-one/picto-fleche-recyclage.png"/>
                        </div><!-- /.block-img -->
                        <div class="block-content">
                            <div class="block-title">
                                <h2 class="text-center">Traitement de l’ensemble<br>
                                des déchets</h2>
                            </div><!-- /.block-title -->
                            <div class="block-description">
                                <p class="text-center">La Corbeille Bleue mobilise l’ensemble<br>
                                des filières déchet de Paprec Group au plan national :<br>
                                papier, carton, toners, bio-déchets, déchets électriques et électroniques,<br>
                                bois, tubes fluo, piles, métal, plastiques</p>
                            </div>
                            <!-- /.block-description -->
                        </div>
                        <!-- /.block-content -->
                    </div>
                    <!-- /.block-container -->
                </div>
                <!-- /.col-md-6 -->

                <div class="col-md-6 col-xs-12">
                    <div class="block-container">
                        <div class="block-img">
                            <img class="img-responsive" src="<?php bloginfo("template_directory"); ?>/images/about-us/section-one/picto-poubelle.png"/>
                        </div><!-- /.block-img -->
                        <div class="block-content">
                            <div class="block-title">
                                <h2 class="text-center">des solutions globales<br>
                                et sur-mesure</h2>
                            </div><!-- /.block-title -->
                            <div class="block-description">
                                <p class="text-center">A travers le développement de la maitrise des problématiques de recyclage<br>
                                et de protection des données confidentielles, La Corbeille Bleue propose<br>
                                à ses clients des solutions globales et sur-mesure pour les accompagner vers :</p>
                                <p class="text-center">
                                    1. Le respect de leurs obligations réglementaires<br>
                                    2. La détermination puis l’atteinte de leurs objectifs environnementaux<br>
                                    3. Le développement de vos actions RSE
                                </p>
                            </div><!-- /.block-description -->
                        </div><!-- /.block-content -->
                    </div><!-- /.block-container -->
                </div><!-- /.col-md-4 -->

            <?php endif; ?>
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.about-section-one -->

<section class="about-section-three">
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <?php if(  !function_exists( 'dynamic_sidebar' ) || dynamic_sidebar('about_widget_lesChiffres_titleCenter') ): ?>

            <?php else : ?>
                <div class="col-xs-12">
                    <div class="block-title">
                        <h3 class="text-center">paprec group c'est...</h3>
                    </div><!-- /.block-title -->
                </div><!-- /.col-xs-12 -->
            <?php endif; ?>
        </div>
        <!-- /.rows -->
        <div class="row">
            <?php if(  !function_exists( 'dynamic_sidebar' ) || dynamic_sidebar('about_widget_lesChiffres_blocPrincipal') ): ?>

            <?php else : ?>
                <!-- Marketing Icons Section -->
                <div class="col-md-4">
                    <div class="block-content">
                        <h3 class="text-center"><span class="counter">110</span></h3>
                        <h4 class="text-center">
                            Sites<br>
                            en France et en Suisse
                        </h4>
                    </div><!--/.block-content-->
                </div><!--/.col-md 4-->
                <div class="col-md-4">
                    <div class="block-content">
                        <h3 class="text-center"><span class="counter">7000000</span></h3>
                        <h4 class="text-center">
                            De tonnes de déchets<br>
                            Collectés et valorisés<br>
                            en 2016
                        </h4>
                        </div><!--/.block-content-->
                </div><!--/.col-md 4-->
                <div class="col-md-4">
                    <div class="block-content">
                        <h3 class="text-center"><span class="counter">950000000</span></h3>
                        <h4 class="text-center">
                            D'euros<br>
                            de chiffre d'affaires<br>
                            en 2016
                        </h4>
                    </div><!--/.block-content-->
                </div><!--/.col-md 4-->
            <?php endif; ?>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /.section -->

<!-- Marketing Icons Section -->
<!-- about-section-four -->
<section class="about-section-four section-bg-img masked" style="background-image: url('<?php bloginfo("template_directory"); ?>/images/bg-section/bg-about-us.png')">

    <div class="container rel-1">
        <div class="row">
            <?php if(  !function_exists( 'dynamic_sidebar' ) || dynamic_sidebar('about_widget_section_video') ): ?>

            <?php else : ?>
                    <div class="col-md-12 block-content-container">
                      <a class="fancybox-media center-block" href="https://www.youtube.com/watch?v=sIDFeRuYxi4"><img src="<?php bloginfo("template_directory"); ?>/images/picto-play.png"></i></a>
                      <h3 class="text-center">
                          Paprec Group,<br>
                          producteur de matières premières du 21ème siècle
                      </h3>
                  </div><!-- /.col-md-12 -->

            <?php endif; ?>
        </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /.section -->


  <!-- footer -->
  <?php get_template_part('includes/footer'); ?>
  <!-- /footer -->
