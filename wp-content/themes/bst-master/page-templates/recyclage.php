<?php
/**
 *	Template Name: Recyclage
 *
 *	The template for dispalying Custom Page Template: Recyclage.
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
                <?php if(  !function_exists( 'dynamic_sidebar' ) || dynamic_sidebar('recyclage_widget_header_titre') ): ?>
                    <!-- Display something after the sidebar widgets contents -->
                <?php else : ?>
                    <div class="col-md-4 col-xs-12">
                        <div class="block-title">
                            <h3 class="text-center">Le recyclage</h3>
                            <hr class="recyclage-horizontal-rule">
                        </div><!-- /.block-title -->
                    </div><!-- /.col-md-4 -->
                <?php endif; ?>
                <?php if(  !function_exists( 'dynamic_sidebar' ) || dynamic_sidebar('recyclage_widget_header_textLeft') ): ?>
                    <!-- Display something after the sidebar widgets contents -->
                <?php else : ?>
                    <div class="col-md-8 col-xs-12">
                    <div class="block-content">
                        <p class="text-left">&nbsp</p>
                        </div><!-- /.block-content -->
                    </div>
                <?php endif; ?>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.section-header-page -->

    <section class="recyclage-section-one">
        <!-- Page Content -->
        <div class="container">
            <!-- Service Tabs -->
            <div class="row">
                <?php if(  !function_exists( 'dynamic_sidebar' ) || dynamic_sidebar('recyclage_widget_process_blocPrincipal') ): ?>

                <?php else : ?>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="block-img text-center">
                            <img class="image-responsive" src="<?php bloginfo("template_directory"); ?>/images/recycling/block-content/recyclage-block-carton.png">
                        </div><!-- /.block-img -->
                    </div><!-- /.col-md-4 col-xs-12 -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="block-img text-center">
                            <img class="image-responsive" src="<?php bloginfo("template_directory"); ?>/images/recycling/block-content/recyclage-block-papiers.png">
                        </div><!-- /.block-img -->
                    </div><!-- /.col-md-4 col-xs-12 -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="block-img text-center">
                            <img class="image-responsive" src="<?php bloginfo("template_directory"); ?>/images/recycling/block-content/recyclage-block-canettes.png">
                        </div><!-- /.block-img -->
                    </div><!-- /.col-md-4 col-xs-12 -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="block-img text-center">
                            <img class="image-responsive" src="<?php bloginfo("template_directory"); ?>/images/recycling/block-content/recyclage-block-plastiques-pet.png">
                        </div><!-- /.block-img -->
                    </div><!-- /.col-md-4 col-xs-12 -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="block-img text-center">
                            <img class="image-responsive" src="<?php bloginfo("template_directory"); ?>/images/recycling/block-content/recyclage-block-dechet-alimentaire.png">
                        </div><!-- /.block-img -->
                    </div><!-- /.col-md-4 col-xs-12 -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="block-img text-center">
                            <img class="image-responsive" src="<?php bloginfo("template_directory"); ?>/images/recycling/block-content/recyclage-block-emballages.png">
                        </div><!-- /.block-img -->
                    </div><!-- /.col-md-4 col-xs-12 -->
                    <div class="col-md-4 col-md-offset-4 col-sm-6 col-xs-12">
                        <div class="block-img text-center">
                            <img class="image-responsive" src="<?php bloginfo("template_directory"); ?>/images/recycling/block-content/recyclage-block-verre.png">
                        </div><!-- /.block-img -->
                    </div><!-- /.col-md-4 col-xs-12 -->

                <?php endif; ?>
              </div><!-- /.row -->
          </div><!-- /.container -->
    </section><!-- /.section -->

    <section class="recyclage-section-two">
        <!-- Page Content -->
        <div class="container">
            <!-- Page Heading/Breadcrumbs -->
            <div class="row">
                <?php if(  !function_exists( 'dynamic_sidebar' ) || dynamic_sidebar('recyclage_widget_redirectionSiteGroup_titreLeft') ): ?>

                <?php else : ?>
                    <div class="col-md-8 col-xs-12">
                        <div class="block-title">
                            <h3 class="text-uppercase text-left">Retrouvez plus d’infos sur le recyclage<br>
                            sur le site de paprec group</h3>
                        </div>
                    </div>
                <?php endif; ?>

                    <div class="col-md-4 col-xs-12">
                        <a class="btn btn-default pull-right text-center" href="https://www.paprec.com/fr" target="_blank">en savoir &#x2b;</a>
                    </div>

            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.section -->

  <!-- footer -->
  <?php get_template_part('includes/footer'); ?>
  <!-- /footer -->
