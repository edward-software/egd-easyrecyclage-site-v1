<?php
/**
 *    Template Name: your-offer
 *
 *    The template for dispalying Custom Page Template: Your-offre.
 *
 * @package    WordPress
 * @subpackage bst
 */
?>

<!-- header -->
<?php get_template_part('includes/header'); ?>

<!-- Formulaire souscription à une offre -->
<div class="form-header">
  <div class="container">
    <div class="row">

      <div class="col-lg-2 col-xs-12 block-title-container">

        <div class="block-title">
          <h5 class="text-left">réalisez votre devis</h5>
        </div><!-- /.block-title -->

      </div><!-- /.col-md-2 -->

      <div class="col-lg-10 col-xs-12">

        <div class="form-souscription">

          <form id="formSubscription" class="form-inline pull-left" method="post"
                action="<?php echo EASY_RECYCLAGE_STORE_URL; ?>/besoin">
            <div class="form-group">

              <select id="selectPostalCode" class="form-control"></select>
              <input type="hidden" id="form_postalCode" name="form[postalCode]" value=""/>

              <select id="selectSizeRange" name="form[sizeRange]" class="form-control">
                <option value="" selected="selected">Effectif de votre entreprise</option>
              </select>
              <button type="submit" class="btn btn-default form-control">Estimez votre besoin</button>
            </div>
          </form>

        </div>
        <!-- /.form-souscription -->


        <div class="add-call-block-container">
          <div class="form-callback">
            <a href="<?php bloginfo("template_directory"); ?>/contact.php" type="button"
               class="btn btn-default call-button modal-call-button"
               data-fancybox-type="iframe">
              <img class="img-responsive img-callback"
                   src="<?php bloginfo("template_directory"); ?>/images/home/Picto_EtreRappele.png"/>
              être rappelé
            </a>
          </div>
          <!-- /.form-callback -->
        </div>
        <!-- /.add-call-block-container -->
      </div>
      <!-- /.col-lg-8 -->

    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</div>
<!-- /.form-header -->
<!-- /header -->
<section class="section-page-header">
    <!-- Page Content -->
    <div class="container">
        <!-- Marketing Icons Section -->
        <div class="row">
            <?php if (!function_exists('dynamic_sidebar') || dynamic_sidebar('offer_widget_header_titre')): ?>
                <!-- Display something after the sidebar widgets contents -->
            <?php else : ?>
                <div class="col-md-4 col-xs-12">
                    <div class="block-title">
                        <h3 class="text-center">notre offre</h3>
                        <hr class="offer-horizontal-rule">
                    </div><!-- /.block-title -->
                </div><!-- /.col-md-4 -->
            <?php endif; ?>
            <?php if (!function_exists('dynamic_sidebar') || dynamic_sidebar('offer_widget_header_textLeft')): ?>
                <!-- Display something after the sidebar widgets contents -->
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

<section class="offer-section-one" id="redirectPositionPage">
    <!-- Page Content -->
    <div class="container">
        <!-- Service Tabs -->
        <div class="row">

            <?php if (!function_exists('dynamic_sidebar') || dynamic_sidebar('offer_widget_contenants_titre')): ?>

            <?php else : ?>

                <div class="col-xs-12">
                    <div class="block-title">
                        <h3 class="text-center">nos contenants</h3>
                        <hr>
                    </div><!-- /.block-title -->
                </div><!-- /.col-md-12 -->
            <?php endif; ?>
        </div><!-- /.row -->
        <div class="block-content-container">

            <div class="row">

                <div class="col-xs-12">


                    <div class="scroll-wrap">


                        <button id="prevButton" class="prev offer-product">prev</button>

                      <div id="offerProductTab" class="scroll-container">

                    <?php
                        $productListUrl = EASY_RECYCLAGE_STORE_URL."/subscription/productList";
                        $products = file_get_contents($productListUrl);
                        $products = json_decode($products, TRUE);

                        if(is_array($products['products']) && count($products['products']))
                        {                
                    ?>
                        <ul class="">
                    <?php
                            $i = 0;
                            foreach($products['products'] as $product) 
                            {
                    ?>

                        <li id="productTabTitle_<?php echo strtolower(str_replace(' ','-',$product['name'])); ?>" class="tab-title tab-title-bg-<?php echo $product['id']; ?> <?php if($i == 0){ ?> active<?php } ?>">
                            <a href="javascript:void(0);" data-target="#<?php echo strtolower(str_replace(' ','-',$product['name'])); ?>" class="tab-title-button">
                                <div class="container-img">
                                    <img class="featurette-image img-responsive center-block picture-box-type-color"
                                         src="<?php echo $product['picto1']; ?>">
                                    <img class="img-responsive center-block picture-box-type-White"
                                         src="<?php echo $product['picto2']; ?>">
                                </div>
                                <h5 class="text-center"><?php echo $product['name']; ?></h5>
                            </a>
                        </li>
                    <?php
                                $i++;
                            }
                    ?>


                        </ul>
                    <?php
                        }
                    ?>
                      </div>
                        <button id="nextButton" class="next offer-product">next</button>

                    </div>

                    <?php

                        if(is_array($products['products']) && count($products['products']))
                        {                
                    ?>
                    <div class="responsive-scroll">

                    <?php
                        $productListUrl = EASY_RECYCLAGE_STORE_URL."/subscription/productList";
                        $products = file_get_contents($productListUrl);
                        $products = json_decode($products, TRUE);

                        if(is_array($products['products']) && count($products['products']))
                        {                
                    ?>

                    <ul class="nav nav-pills nav-justified">
                    <?php
                            $i = 0;
                            foreach($products['products'] as $product) 
                            {
                    ?>
                        <li class="<?php if($i == 0){ ?> active<?php } ?> responsive-scroll-title-bg-<?php echo $product['id']; ?>">
                            <a href="#<?php echo strtolower(str_replace(' ','-',$product['name'])); ?>" data-toggle="tab" class="">
                                <h5 class="text-center"><?php echo $product['name']; ?></h5>
                            </a>
                        </li>
                    <?php
                                $i++;
                            }
                    ?>
                    </ul>
                    <?php
                        }
                    ?>
                    </div>
                    <?php
                        }
                    ?>


                    <?php

                        if(is_array($products['products']) && count($products['products']))
                        {                
                    ?>


                    <div id="offerProductTabContent">
                    <?php
                            $i = 0;
                            foreach($products['products'] as $product) 
                            {
                    ?>
                        <div id="<?php echo strtolower(str_replace(' ','-',$product['name'])); ?>" class="<?php if($i == 0){ ?> active<?php } ?> tab-content tab-content-bg-<?php echo $product['id']; ?>" data-tab-id="<?php echo $i; ?>">
                            <div class="row container-box-detail">
                                <div class="bloc-container-product">

                                    <div class="col-md-4 col-xs-12">
                                        <img class="featurette-image img-responsive center-block"
                                             src="<?php echo $product['picture']; ?>"
                                             alt="<?php echo $product['name']; ?>">
                                    </div><!-- /.col-md-5 -->

                                    <div class="col-md-8 col-xs-12">
                                        <div class="bloc-detail">

                                            <div class="bloc-title">
                                                <h3 class="featurette-heading text-uppercase"><?php echo $product['name']; ?></h3>
                                            </div><!-- /.bloc-title -->

                                            <div class="bloc-content">
                                                <p class="text-left"><?php echo $product['description']; ?>
                                                </p>
                                                <br>
                                                <p class="text-left">Dimensions : <?php echo $product['dimensions']; ?></p>
                                                <br>
                                                <p class="text-left">Capacité : <?php echo $product['capacity']; ?> <?php echo $product['capacityUnit']; ?></p>
                                            </div><!-- /.bloc-content -->

                                        </div><!-- /.bloc-detail -->
                                    </div><!-- /.col-md-8 -->

                                </div><!-- /.bloc-container-product -->
                            </div><!-- /.row featurette -->
                        </div><!-- /.tab-pane -->

                    <?php
                                $i++;
                            }
                    ?>
                    </div>
                    <?php
                        }
                    ?>

                    <style>

                    <?php

                        if(is_array($products['products']) && count($products['products']))
                        {      
                            foreach($products['products'] as $product) 
                            {          
                    ?>
                    .tab-title-bg-<?php echo $product['id']; ?>.active {
                        background-color: <?php echo $product['color']; ?>;
                    }
                    .tab-title-bg-<?php echo $product['id']; ?> h5 {
                        color: <?php echo $product['color']; ?>;
                    }
                    .tab-content-bg-<?php echo $product['id']; ?>.active {
                        border-top: 1px solid <?php echo $product['color']; ?>;
                    }
                    .responsive-scroll-title-bg-<?php echo $product['id']; ?>.active {
                        background-color: <?php echo $product['color']; ?>;
                    }
                    <?php
                            }
                        }
                    ?>



                    </style>


                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.block-content -->
    </div><!-- /.container -->
</section><!-- /.offer-section-two -->

<section class="offer-section-two">
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <?php if (!function_exists('dynamic_sidebar') || dynamic_sidebar('offer_widget_commentCaMarche_titre')): ?>
                <!-- Display something after the sidebar widgets contents -->
            <?php else : ?>
                <div class="col-xs-12">
                    <div class="block-title">
                        <h3 class="text-center">Comment ça marche ?</h3>
                        <hr>
                    </div><!-- /.block-title -->
                </div><!-- /.block-title -->
            <?php endif; ?>
        </div><!-- /.row -->
        <!-- .block-content -->
        <div class="block-content-container">
            <div class="row">
                <div class="block-container-img">
                    <img class="img-responsive flech-img flech-one"
                         src="<?php bloginfo("template_directory"); ?>/images/offer/picto-fleche.png"/>
                    <img class="img-responsive flech-img flech-two"
                         src="<?php bloginfo("template_directory"); ?>/images/offer/picto-fleche.png"/>
                    <img class="img-responsive flech-img flech-three"
                         src="<?php bloginfo("template_directory"); ?>/images/offer/picto-fleche.png"/>

                    <?php if (!function_exists('dynamic_sidebar') || dynamic_sidebar('offer_widget_commentCaMarche_process')): ?>
                        <!-- Display something after the sidebar widgets contents -->
                    <?php else : ?>
                        <!-- Marketing Icons Section -->
                        <div class="col-md-3">
                            <div class="block-container">
                                <div class="block-img">
                                    <img class="img-responsive center-block"
                                         src="<?php bloginfo("template_directory"); ?>/images/offer/section-two/offer-section2-picto1-81x81.png"/>
                                </div><!-- /.block-img -->
                                <div class="block-description">
                                    <h3 class="text-center">dimensionnement</h3>
                                    <p class="text-center">Choix des box</p>
                                </div><!-- /.block-description -->
                            </div><!-- /.block-container -->
                        </div><!-- /.col-md-3 -->
                        <div class="col-md-3">
                            <div class="block-container">
                                <div class="block-img">
                                    <img class="img-responsive center-block"
                                         src="<?php bloginfo("template_directory"); ?>/images/offer/section-two/offer-section2-picto2-76x76.png"/>
                                </div><!-- /.block-img -->
                                <div class="block-description">
                                    <h3 class="text-center">validation</h3>
                                    <p class="text-center">Renvoi du contrat signé</p>
                                </div><!-- /.block-description -->
                            </div><!-- /.block-container -->
                        </div><!-- /.col-lg-3 -->
                        <div class="col-md-3">
                            <div class="block-container">
                                <div class="block-img">
                                    <img class="img-responsive center-block"
                                         src="<?php bloginfo("template_directory"); ?>/images/offer/section-two/offer-section2-picto3-79x71.png"/>
                                </div><!-- /.block-img -->
                                <div class="block-description">
                                    <h3 class="text-center">mise en place</h3>
                                    <div class="block-list-center">
                                        <ul>
                                            <li>Enregistrement</li>
                                            <li>Livraisons du matériel</li>
                                            <li>Installation des box</li>
                                        </ul>
                                    </div><!-- /.block-list-center -->
                                </div><!-- /.block-description -->
                            </div><!-- /.block-container -->
                        </div><!-- /.col-lg-3 -->
                        <div class="col-md-3">
                            <div class="block-container">
                                <div class="block-img">
                                    <img class="img-responsive center-block"
                                         src="<?php bloginfo("template_directory"); ?>/images/offer/section-two/offer-section2-picto4-72x72.png"/>
                                </div><!-- /.block-img -->
                                <div class="block-description">
                                    <h3 class="text-center">prestation</h3>
                                    <div class="block-list-center">
                                        <ul>
                                            <li>Collecte programmée</li>
                                            <li>Echanges des box</li>
                                        </ul>
                                    </div><!-- /.block-list-center -->
                                </div><!-- /.block-description -->
                            </div><!-- /.block-container -->
                        </div><!-- /.col-md-3 -->
                    <?php endif; ?>
                </div><!-- /.block-container-img -->
            </div><!-- /.row -->
        </div>
        <!-- /.block-content -->
    </div>
    <!-- /.container -->
</section>
<!-- /.section -->
<section class="offer-section-three">
    <!-- Page Content -->
    <div class="container">
        <!-- Marketing Icons Section -->
        <div class="row">
            <?php if (!function_exists('dynamic_sidebar') || dynamic_sidebar('offer_widget_recyclezAvecLaCorbeilleBleue_picto')): ?>

            <?php else : ?>
                <div class="col-md-4">
                    <div class="block-img">
                        <img class="img-responsive"
                             src="<?php bloginfo("template_directory"); ?>/images/offer/offre-confirmation.png">
                    </div><!-- /.block-img -->
                </div><!-- /.col-md-4 -->
            <?php endif; ?>

            <?php if (!function_exists('dynamic_sidebar') || dynamic_sidebar('offer_widget_recyclezAvecLaCorbeilleBleue_textLeft')): ?>
                
            <?php else : ?>
                <div class="col-md-8">
                    <div class="block-content">
                        <p class="text-left">
                            Recyclez avec Easy Recyclage,<br>
                            et recevez votre ATTESTATION ANNUELLE DE RECYCLAGE.
                        </p>
                    </div><!-- /.block-content -->
                </div><!-- /.col-md-8 -->
            <?php endif; ?>
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.offer-section-three -->
<!-- footer -->
<?php get_template_part('includes/footer'); ?>
<!-- /footer -->
