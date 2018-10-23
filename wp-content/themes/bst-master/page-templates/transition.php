<?php
/**
 *	Template Name: transition-energetic
 *
 *	The template for dispalying Custom Page Template: Transition-energetic.
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
                <?php if(  !function_exists( 'dynamic_sidebar' ) || dynamic_sidebar('transition_widget_header_titre') ): ?>
                <?php else : ?>
                    <div class="col-md-4 col-xs-12">
                        <div class="block-title">
                            <h3 class="text-center">La transition<br>
                                énergétique
                            </h3>
                            <hr class="transition-horizontal-rule">
                        </div><!-- /.block-title -->
                    </div><!-- /.col-md-4 -->
                <?php endif; ?>
                <?php if(  !function_exists( 'dynamic_sidebar' ) || dynamic_sidebar('transition_widget_header_textLeft') ): ?>
                <?php else : ?>
                    <div class="col-md-8 col-xs-12">
                        <div class="block-content">
                            <p class="text-left">La loi de transition énergétique pour la croissance verte permet à la France de contribuer plus efficacement<br>
                                à la lutte contre le dérègement climatique et de renforcer son indépendance énergétique<br>
                                en équilibrant mieux ses différentes sources d'approvisionnement.
                            </p>
                        </div><!-- /.block-content -->
                    </div><!-- /.col-md-8 -->
                <?php endif; ?>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.section-header-page -->

    <section class="transition-section-one">
        <div class="container">
            <!-- Service Tabs -->
            <div class="row">
                <?php if(  !function_exists( 'dynamic_sidebar' ) || dynamic_sidebar('transition_widget_obligationReglementaire_blocHaut') ): ?>

                <?php else : ?>
                    <div class="block-header">
                        <div class="col-md-4 col-xs-12">
                            <div class="block-img">
                                <img class="img-responsive" src="<?php bloginfo("template_directory"); ?>/images/transition/Picto_RecyclageEntreprise.png">
                            </div><!-- /.block-img -->
                        </div><!-- /.col-md-4 -->
                        <div class="col-md-8 col-xs-12">
                            <div class="block-description">
                                <p class="text-left">Art. D. 543-286</p>
                                <h4 class="text-left">Obligation de <strong>trier le papier</strong><br>
                                    pour les entreprises présentes sur une implantation de bureau.</h4>
                                <hr align="left">
                            </div><!-- /.block-description -->
                        </div><!-- /.col-md-8 -->
                    </div><!-- /.block-header -->
                <?php endif; ?>
            </div><!-- /.row -->

            <div class="row block-content-container">
                <?php if(  !function_exists( 'dynamic_sidebar' ) || dynamic_sidebar('transition_widget_obligationReglementaire_blocPrincipal') ): ?>

                <?php else : ?>

                        <div class="col-md-4 col-sm-6 col-xs-12 block-content">

                            <div class="block-title block-title-one">
                                <div class="block-img">
                                    <img class="img-responsive" src="<?php bloginfo("template_directory"); ?>/images/transition/Picto_Entreprise100.png">
                                </div><!-- /.block-img -->
                                <div class="block-effectif">
                                    <h3 class="text-left">
                                    + de <br>
                                    <span>100</span><br>
                                    personnes
                                    </h3>
                                </div><!-- /.block-description -->
                            </div><!-- /.block-title -->
                            <div class="block-detail">
                                <p class="text-center block-date">
                                    dès le 1er Juillet 2016
                                </p>
                                <p class="text-center block-description">
                                    (20 personnes pour l'administration publique)
                                </p>
                            </div>
                            <!-- /.block-detail -->
                        </div>
                        <!-- /.col-md-4 -->

                        <div class="col-md-4 col-sm-6 col-xs-12 block-content">

                            <div class="block-title block-title-two">
                                    <div class="block-img">
                                        <img class="img-responsive" src="<?php bloginfo("template_directory"); ?>/images/transition/Picto_Entreprise50.png">
                                    </div><!-- /.block-img -->
                                    <div class="block-effectif">
                                        <h3 class="text-left">
                                        + de <br>
                                        <span>50</span><br>
                                        personnes
                                        </h3>
                                    </div><!-- /.block-description -->
                                </div><!-- /.block-title -->
                            <div class="block-detail">
                                <p class="text-center block-date">
                                    dès le 1er Janvier 2017
                                    </p>
                                </div>
                                <!-- /.block-detail -->
                        </div>
                        <!-- /.block-content -->

                        <div class="col-md-4 col-sm-6 col-xs-12 block-content">

                                <div class="block-title block-title-three">
                                    <div class="block-img">
                                        <img class="img-responsive" src="<?php bloginfo("template_directory"); ?>/images/transition/Picto_Entreprise20.png">
                                    </div><!-- /.block-img -->
                                    <div class="block-effectif">
                                        <h3 class="text-left">+ de <br>
                                        <span>20</span><br>
                                        personnes
                                        </h3>
                                    </div><!-- /.block-description -->
                                </div><!-- /.block-title -->
                                <div class="block-detail">
                                    <p class="text-center block-date">dès le 1er Janvier 2018</p>
                                </div><!-- /.block-detail -->
                        </div><!-- /.block-content -->


                            <div class="col-md-4 col-sm-6 col-xs-12 block-content block-content-center">
                                <div class="block-title block-title-five">
                                    <div class="block-img">
                                        <img class="img-responsive" src="<?php bloginfo("template_directory"); ?>/images/transition/Picto_Dechet.png">
                                    </div><!-- /.block-img -->
                                    <div class="block-effectif">
                                        <h3 class="text-left">+ de<br><span>1 100L</span><br>de déchets<br>/semaine</h3>
                                    </div><!-- /.block-description -->
                                </div><!-- /.block-title -->

                                <div class="block-detail">
                                    <p class="text-center block-date">dès le 1er Juillet 2016<br>
                                    tri de 5 déchets valorisables,<br>
                                    à part du déchet non valorisabble :<br>
                                    Papier, Métaux, Plastiques, Verre, Bois
                                    </p>
                                </div><!-- /.block-detail -->
                            </div><!-- /.block-content -->

                <?php endif; ?>

            </div><!-- /.block-content-container -->
          </div><!-- /.container -->
  </section> <!-- /.section -->

<section class="transition-section-two">
    <!-- Page Content -->
    <div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <?php if(  !function_exists( 'dynamic_sidebar' ) || dynamic_sidebar('transition_widget_obligationReglementaire_blocBas_pictoCenter') ): ?>
                <!-- Display something after the sidebar widgets contents -->
            <?php else : ?>
                <div class="col-md-4 col-xs-12 block-image">
                    <div class="block-img">
                        <img class="img-responsive center-block" src="<?php bloginfo("template_directory"); ?>/images/transition/picto_recyclage.png">
                    </div><!-- /.block-img -->
                </div><!-- /.col-md-4 -->
            <?php endif; ?>

            <?php if(  !function_exists( 'dynamic_sidebar' ) || dynamic_sidebar('transition_widget_obligationReglementaire_blocBas_textLeft') ): ?>

            <?php else : ?>
                <div class="col-md-8 col-xs-12 block-content">
                    <p class="text-left paragraph-article">Art. D. 543-281</p>
                    <p class="text-left paragraph-description">Les producteurs ou détenteurs de déchets de papier, de métal,<br>
                        de plastique, de verre et de bois <strong>trient à la source</strong> ces déchets<br>
                        par rapport aux autres déchets.</p>
                </div>
            <?php endif; ?>
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.section -->

  <!-- footer -->
  <?php get_template_part('includes/footer'); ?>
  <!-- /footer -->
