<?php
/**
 *  Template Name: Home
 *
 *  The template for dispalying Custom Page Template: Home.
 *
 * @package WordPress
 * @subpackage bst
 */
?>
<?php get_template_part('includes/header'); ?>
<!-- Header Carousel -->
<header id="myCarousel" class="carousel slide">

    <?php if (!function_exists('dynamic_sidebar') || dynamic_sidebar('home_widget_header')): ?>

    <?php else : ?>
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active">1</li>
        <li data-target="#myCarousel" data-slide-to="1">2</li>
        <!-- <li data-target="#myCarousel" data-slide-to="2">3</li> -->
        <!--        <li data-target="#myCarousel" data-slide-to="3">4</li>-->
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <div class="fill img-responsive"
               style="background-image:url('<?php bloginfo("template_directory"); ?>/images/home/Slider/slider-item5.png');"></div>
          <div class="carousel-caption-content text-pull-right">
            <h1 class="slider-text-content slider-text-color-white text-line-left">
              La Transition Énergétique<br>
              vous concerne !<br>
              La Corbeille Bleue<br>
              est à votre écoute<br>
              et vous informe.</h1>
          </div>
        </div>
        <div class="item">
          <div class="fill img-responsive"
               style="background-image:url('<?php bloginfo("template_directory"); ?>/images/home/Slider/slider-item6.png');"></div>
          <div class="carousel-caption-content text-pull-left">
            <h1 class="slider-text-content slider-text-color-white text-line-center ">
              Au bureau,<br>
              <span class="slider-text-color-purple">recyclez</span><br>
              vos dechets<br>
              avec les box<br>
              easyrecyclage.
            </h1>
          </div>
        </div>
        <!--         <div class="item">
            <div class="fill" style="background-image:url('<?php bloginfo("template_directory"); ?>/images/home/Slider/slider-item3.png');"></div>
            <div class="carousel-caption-content">
                <h1 class="slider-text-content slider-text-color-white">Donnez une seconde vie<br>à vos déchets de bureau !</h1>
            </div>
        </div> -->
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <!-- <span class="glyphicon glyphicon-chevron-left"></span> -->
        <img src="<?php bloginfo("template_directory"); ?>/images/home/Slider/slider-arrow-left.png"
             class="slider-arrow-left">
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <!-- <span class="glyphicon glyphicon-chevron-right"></span> -->
        <img src="<?php bloginfo("template_directory"); ?>/images/home/Slider/slider-arrow-right.png"
             class="slider-arrow-right">
      </a>

    <?php endif; ?>


</header>

<img src="<?php bloginfo("template_directory"); ?>/images/home/img-home-mobile.png"
     class="img-fixed-mobile img-responsive">

<!-- Formulaire souscription à une offre -->
<div class="form-header">
  <div class="container">
    <div class="row">

      <div class="col-lg-4 col-xs-12 block-title-container">

        <div class="block-title">
          <h5 class="text-right"><span class="title-offer">OFFRE</span> sans engagement</h5>
        </div><!-- /.block-title -->

      </div><!-- /.col-md-2 -->

      <div class="col-lg-8 col-xs-12">

        <div class="form-souscription">

          <form id="formSubscription" class="form-inline pull-left" method="post"
                action="<?php echo EASY_RECYCLAGE_STORE_URL; ?>/besoin">
            <div class="form-group">

              <select id="selectPostalCode" class="form-control"></select>
              <input type="hidden" id="form_postalCode" name="form[postalCode]" value=""/>
                <?php
                /*
              <select id="selectSizeRange" name="form[sizeRange]" class="form-control">
                <option value="" selected="selected">Effectif de votre entreprise</option>
              </select>
                */
                ?>
              <button type="submit" class="btn btn-default form-control">Réalisez votre devis</button>
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

<section class="home-section-one">

  <div class="container">

    <div class="row">

        <?php
        $pages = array(
            'post_type' => 'page',
            'post__in' => array(48, 50, 30),
            'posts_per_page' => 3
        );
        $query = new WP_Query($pages); ?>
        <?php while ($query->have_posts()) : $query->the_post();
            global $post; ?>

          <div class="col-md-4">
            <div class="block-container">
              <div class="block-img">
                <img class="img-responsive"
                     src="<?php bloginfo("template_directory"); ?>/images/home/S1-icons/section1-home-<?php echo $post->ID; ?>.png"/>
              </div><!-- /.block-img -->
              <div class="block-content">
                <div class="block-title">
                  <h2><?php the_title(); ?></h2>
                </div><!-- /.block-title -->
                <div class="block-description">
                    <?php the_content() ?>
                </div><!-- /.block-description -->
              </div><!-- /.block-content -->
            </div><!-- /.block-container -->
          </div><!-- /.col-md-4 -->

        <?php endwhile; ?>
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>


<section class="section-bg-img home-section-two"
         style="background-image: url('<?php bloginfo("template_directory"); ?>/images/bg-section/bg-home.png')">
  <!-- Page Content -->
  <div class="container">
    <!-- Marketing Icons Section -->
    <div class="row">
        <?php if (!function_exists('dynamic_sidebar') || dynamic_sidebar('home_widget_recycleAvecLaCorbeilleBleue')): ?>

        <?php else : ?>

        <?php endif; ?>
    </div> <!-- /.row -->
  </div><!-- /.container -->
</section>

<section class="home-section-three">

  <div class="container">

    <div class="row">

        <?php if (!function_exists('dynamic_sidebar') || dynamic_sidebar('home_widget_temoignage_titre')): ?>
        <?php else : ?>
          <!--              <div class="col-xs-12">-->
          <!--                  <div class="block-title">-->
          <!--                      <h3>témoignages</h3>-->
          <!--                      <hr>-->
          <!--                  </div>-->
          <!--              </div>-->
        <?php endif; ?>

    </div>
    <!-- /.row -->
    <div class="row">
      <div class="block-container">
          <?php dynamic_sidebar('home_widget_temoignage_container'); ?>
      </div>
      <!-- /.block-container -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>

<section class="home-section-four">

  <div class="container">
    <div class="row">
        <?php if (!function_exists('dynamic_sidebar') || dynamic_sidebar('home_widget_ilNousFontConfiance_titre')): ?>

        <?php else : ?>
          <!--                <div class="block-title">-->
          <!--                    <h3>Il nous font confiances</h3>-->
          <!--                    <hr>-->
          <!--                </div>-->
        <?php endif; ?>

      <div class="block-customer-logo-container">
          <?php if (!function_exists('dynamic_sidebar') || dynamic_sidebar('home_widget_ilNousFontConfiance_img')): ?>

          <?php else : ?>

          <?php endif; ?>
      </div>
      <!-- /.block-customer-logo-container -->
    </div>
  </div>
</section>

<section class="home-section-video section-bg-img" style="background-image: url('<?php bloginfo("template_directory"); ?>/images/bg-section/bg-foret.jpg')">
  <div class="container">
    <div class="row">
        <?php if(  !function_exists( 'dynamic_sidebar' ) || dynamic_sidebar('home_widget_video') ): ?>

        <?php else : ?>
          <div class="col-xs-12 block-content-container">
            <a class="fancybox-media center-block" href="https://www.youtube.com/watch?v=zVYnMfbae8s"><img src="<?php bloginfo("template_directory"); ?>/images/picto-play.png"></i></a>
            <h3 class="text-center text-uppercase">LE PROJET PELAGOS</h3>
            <p class="text-center">Protégeons les Océans et les Côtes ensemble</p>
          </div><!-- /.col-md-12 -->
        <?php endif; ?>
    </div><!-- /.row -->
  </div><!-- /.container -->
</section>


<section class="home-section-five">
  <div class="container">

    <div class="row">
        <?php
        $args = array('numberposts' => 3, 'order' => 'DESC');
        $postslist = get_posts($args);
        $i = 0;
        foreach ($postslist as $key => $post) : setup_postdata($post);
            $i++;
            if ($i == 1) { ?>
              <div class="col-md-4 col-xs-12 blog-post-action blog-post-block-container">
                <a class="blog-header" href="<?php echo get_permalink($post->ID); ?>">
                    <?php
                    /**
                     * Rajout de thumbnail
                     */
                    $title = get_the_title();
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('', array(
                            'alt' => $title,
                            'title' => $title));
                    }
                    ?>
                </a>
                <div class="blog-content-container">
                  <div class="block-category">

                      <?php
                      $categories = get_the_category();
                      if (is_array($categories) && count($categories)) {
                          foreach ($categories as $category) {
                              $rl_category_color = rl_color($category->cat_ID);
                              ?>
                            <div class="blog-category-container blog-category-<?php echo strtolower($category->name); ?>"
                                 style="background-color: <?php echo $rl_category_color; ?>;">
                              <p class="blog-category-content">
                                  <?php echo $category->cat_name; ?>
                              </p>
                            </div>
                              <?php
                          }
                      }
                      ?>

                  </div>
                  <div class="block-title">
                    <h2><?php the_title(); ?></h2>
                  </div>
                  <div class="block-content"><?php the_excerpt(); ?></div>
                  <a class="read-more" href="<?php echo get_permalink($post->ID); ?>">Lire la suite</a>
                </div>
              </div>
              <!-- /.col-md-4 -->
            <?php } elseif ($i == 2) { ?>
              <div class="col-md-4 col-xs-12 blog-post-action blog-post-block-container">
                <div class="blog-content-container">
                  <div class="block-category">

                      <?php
                      $categories = get_the_category();
                      if (is_array($categories) && count($categories)) {
                          foreach ($categories as $category) {
                              $rl_category_color = rl_color($category->cat_ID);
                              ?>
                            <div class="blog-category-container blog-category-<?php echo strtolower($category->name); ?>"
                                 style="background-color: <?php echo $rl_category_color; ?>;">
                              <p class="blog-category-content">
                                  <?php echo $category->cat_name; ?>
                              </p>
                            </div>
                              <?php
                          }
                      }
                      ?>

                  </div>
                  <div class="block-title">
                    <h2><?php the_title(); ?></h2>
                  </div>
                  <div class="block-content"><?php the_excerpt(); ?></div>
                  <a class="read-more" href="<?php echo get_permalink($post->ID); ?>">Lire la suite</a>
                </div>
                <a class="blog-header" href="<?php echo get_permalink($post->ID); ?>">
                    <?php
                    /**
                     * Rajout de thumbnail
                     */
                    $title = get_the_title();
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('', array(
                            'alt' => $title,
                            'title' => $title));
                    }
                    ?>
                </a>
              </div>
              <!-- /.col-md-4 -->
            <?php } elseif ($i == 3) { ?>
              <div class="col-md-4 col-xs-12 blog-post-action blog-post-block-container">
                <a class="blog-header" href="<?php echo get_permalink($post->ID); ?>">
                    <?php
                    /**
                     * Rajout de thumbnail
                     */
                    $title = get_the_title();
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('', array(
                            'alt' => $title,
                            'title' => $title));
                    }
                    ?>
                </a>
                <div class="blog-content-container">
                  <div class="block-category">

                      <?php
                      $categories = get_the_category();

                      if (is_array($categories) && count($categories)) {
                          foreach ($categories as $category) {
                              $rl_category_color = rl_color($category->cat_ID);
                              ?>
                            <div class="blog-category-container blog-category-<?php echo strtolower($category->name); ?>"
                                 style="background-color: <?php echo $rl_category_color; ?>;">
                              <p class="blog-category-content">
                                  <?php echo $category->cat_name; ?>
                              </p>
                            </div>
                              <?php
                          }
                      }
                      ?>

                  </div>
                  <div class="block-title">
                    <h2><?php the_title(); ?></h2>
                  </div>
                  <div class="block-content"><?php the_excerpt(); ?></div>
                  <a class="read-more" href="<?php echo get_permalink($post->ID); ?>">Lire la suite</a>
                </div>
              </div>
              <!-- /.col-md-4 -->
            <?php } ?>
        <?php endforeach; ?>
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>


<?php get_template_part('includes/footer'); ?>
