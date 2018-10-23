<?php
/*
The Default Loop (used by index.php and category.php)
=====================================================

If you require only post excerpts to be shown in index and category pages, then use the [---more---] line within blog posts.

If you require different templates for different post types, then simply duplicate this template, save the copy as, e.g. "content-aside.php", and modify it the way you like it. (The function-call "get_post_format()" within index.php, category.php and single.php will redirect WordPress to use your custom content template.)

Alternatively, notice that index.php, category.php and single.php have a post_class() function-call that inserts different classes for different post types into the section tag (e.g. <section id="" class="format-aside">). Therefore you can simply use e.g. .format-aside {your styles} in css/bst.css style the different formats in different ways.
*/
?>

<section class="blog-section-content">

    <div class="container">
      <div class="block-title">
        <h3 class="text-center">Le Blog</h3>
        <hr>
      </div>
      <br>
        <!--filter -->
        <div class="row">
            <div class="col-xs-12">
                <ul id="filters" class="filters-nav">

                    <?php

                    $args = array(
                        'hide_empty'=> 0,
                        'orderby' => 'name',
                        'order'   => 'DESC'
                    );

                    $categories = get_categories( $args );

                    if ( ! empty( $categories ) ) {
                        foreach( $categories as $category ) {
                            ?>
                            <li><span class="filter" data-filter=".category_<?php echo $category->cat_ID; ?>"><?php echo $category->name; ?></span></li>
                            <?php
                        }
                    }

                    ?>
                </ul><!-- /.#filter -->

            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->

        <!-- Projects Row -->
        <div class="row"  id="postListQuery">
            <?php

            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 1000,
                'display-posts',
            );

            $post_query = new WP_Query($args);

            $i = 0;
            if ( $post_query->have_posts() ) : while ( $post_query->have_posts() ) : $post_query->the_post();

                $i++;
                $postCategories = get_the_category($post->ID);
                $filterCategory = array();

                foreach($postCategories as $postCategory) {
                    $filterCategory[] = 'category_'.$postCategory->cat_ID;
                }

                if ($i %2 == 0) {

                    ?>
                        
                    <div class="col-md-4 col-sm-6 col-xs-12 blog-post-action blog-post-block-container <?php echo implode(' ', $filterCategory); ?>" data-cat="<?php echo implode(', ', $filterCategory); ?>"> 

                            <a class="blog-header" href="<?php echo get_permalink($post->ID); ?>">
                                        <?php

                                    $title = get_the_title();
                                    if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                                        the_post_thumbnail('', array(
                                            'alt' => $title,
                                            'title' => $title,
                                            'class' => 'img-responsive'));
                                    }
                                    ?>
                            </a>

                                <div class="blog-content-container">
                                    <div class="block-category">
                                        
                                    <?php
                                        $categories = get_the_category();
                                        if($categories){
                                            foreach($categories as $category) {
                                                    $rl_category_color = rl_color($category->cat_ID);
                                                    ?>
                                                    <div class="blog-category-container blog-category-<?php echo strtolower($category->name); ?>" style="background-color: <?php echo $rl_category_color; ?>;">
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

                                    <div class="block-content"><?php the_excerpt(); ?>
                                    </div>
                                        <a class="read-more" href="<?php echo get_permalink($post->ID); ?>">Lire la suite</a>

                                </div>
                    </div>
                        

                        <?php
                } elseif ($i %2 == 1) {
                    ?>
                        <div class="col-md-4 col-sm-6 col-xs-12 blog-post-action  blog-post-block-container <?php echo implode(' ', $filterCategory); ?>" data-cat="<?php echo implode(', ', $filterCategory); ?>">

                                <div class="blog-content-container">
                                    <div class="block-category">
                                        
                                    <?php
                                        $categories = get_the_category();
                                        if($categories){
                                            foreach($categories as $category) {
                                                    $rl_category_color = rl_color($category->cat_ID);
                                    ?>
                                                    <div class="blog-category-container blog-category-<?php echo strtolower($category->name); ?>" style="background-color: <?php echo $rl_category_color; ?>;">
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

                                    <div class="block-content"><?php the_excerpt(); ?>
                                    </div>
                                        <a class="read-more" href="<?php echo get_permalink($post->ID); ?>">Lire la suite</a>

                                </div>

                            <a class="blog-header" href="<?php echo get_permalink($post->ID); ?>">
                                        <?php

                                    $title = get_the_title();
                                    if ( has_post_thumbnail() ) { 
                                        the_post_thumbnail('', array(
                                            'alt' => $title,
                                            'title' => $title,
                                            'class' => 'img-responsive'));
                                    }
                                    ?>
                                </a>
                            
                        </div>

                        <?php

                }
            endwhile;
            endif;
            ?>

        </div><!-- /.row -->

       <?php /* ?>
        </div>
        <div class="row post-list-block-footer" id="loading">
           <div class="col-xs-12">
               <a class="btn btn-default center-block">
                    <img src="<?php bloginfo("template_directory"); ?>/images/blog/picto-nav-post-list.png">
                   <img src="<?php bloginfo("template_directory"); ?>/images/blog/picto-nav-post-list.png">
                    <img src="<?php bloginfo("template_directory"); ?>/images/blog/picto-nav-post-list.png">
                </a>
            </div>
       </div>
       <?php */ ?>

    </div><!-- /.container -->
</section>
