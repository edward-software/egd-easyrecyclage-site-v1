<?php
/*
The Single Posts Loop
=====================
*/
?> 

<?php if(have_posts()): while(have_posts()): the_post(); $do_not_duplicate = $post->ID; ?>

<section class="post-section-content">

    <!-- Page Content -->
    <div class="container">

        <div class="col-md-1 block-social-container">
            <div class="block-social">
                <ul>
                    <li class="link-facebook"><a href="javascript:" onclick="javascript:window.open('//www.facebook.com/sharer/sharer.php?u=<?php echo $post->guid; ?>', '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="f"><img src="<?php bloginfo("template_directory"); ?>/images/blog/post-picto-facebook.png"></a></li>

                    <li class="link-twitter">
                    <a target="_blank" title="Twitter" href="https://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>&via=la&nbsp;Corbeille&nbsp;Bleue" rel="nofollow" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=700');return false;">
                    <img src="<?php bloginfo("template_directory"); ?>/images/blog/post-picto-twitter.png" alt="Twitter"></a></li>

                    <li class="link-google-plus"><a target="_blank" title="Google +" href="https://plus.google.com/share?url=<?php the_permalink(); ?>&hl=fr" rel="nofollow" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=450,width=650');return false;"><img src="<?php bloginfo("template_directory"); ?>/images/blog/post-picto-google-plus.png" alt="Google Plus" /></a></li>


                    <li class="link-linkedin"><a href="javascript:" onclick="javascript:window.open('//www.linkedin.com/shareArticle?mini=true&url=<?php echo $post->guid; ?>&title=<?php echo $post->post_title; ?>&summary=<?php echo $post->post_excerpt; ?>&source=<?php ?>','','menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=800');return false;" title="lin"><img src="<?php bloginfo("template_directory"); ?>/images/blog/post-picto-link.png"></a></li>

                    <li class="link-print"><a onclick="window.print(); return false;" target="_blank"><img src="<?php bloginfo("template_directory"); ?>/images/blog/post-picto-print.png"></a></li>
                    <li class="link-send"><a onclick="window.print(); return false;" target="_blank"><img src="<?php bloginfo("template_directory"); ?>/images/blog/post-picto-send.png"></a></li>
                </ul>
            </div>
            <!-- /.block-social -->
        </div>
        <!-- /.col-md-1 -->

        <div class="col-md-11 col-xs-12">
            <div class="row">
                <div class="col-xs-12 post-block-header">
                    <div class="block-header pull-left">
                        <a href="<?php bloginfo("home"); ?>/blog/">
                            <img src="<?php echo bloginfo("template_directory"); ?>/images/blog/post-retour.png">
                        </a>
                    </div>
                    <!-- /.block-img -->
                  <div class="block-title">
                    <h3 class="text-center">Le Blog</h3>
                    <hr>
                  </div>
                </div>
                <!-- /.post-block-header -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-xs-12 post-block-container">
                  <?php if(get_the_post_thumbnail()){ ?>
                    <div id="blockImagPostID" class="block-img img-responsive">
                        <?php the_post_thumbnail(); ?>
                    </div>
                  <?php } ?>
                    <!-- /.block-img -->

                    <div class="block-title">
                        <h2 class="text-center"><?php the_title()?></h2>
                        <div class="text-center block-category-container">
                        <!-- <div class="text-center"> -->
                    <?php
                        $categories = get_the_category();
                        if($categories){
                            foreach($categories as $category) {
                                    $rl_category_color = rl_color($category->cat_ID);
                                    ?>
                                    <a class="post-category-container blog-category-<?php echo strtolower($category->name); ?>" style="background-color: <?php echo $rl_category_color; ?>;">
                                        <!-- <p class="post-category-content"> -->
                                            <?php echo $category->cat_name; ?>
                                        <!-- </p> -->
                                    </a>
                                    <?php
                            }
                        }
                    ?>
                        </div>

                        <div class="text-center">
                        </div>
                    </div>
                    <!-- /.block-title -->

                    <div class="block-content">
                        <?php the_content()?>
                    </div>
                    <!-- /.post-block-container -->
                </div>
                <!-- /.post-block-container -->
            </div>
            <!-- /.row -->

            <div class="row post-block-footer">
                <div class="post-block-footer-container">

                    <div class="col-md-6 col-xs-12 block-offer-container">

                    <?php

                        $productUrl = EASY_RECYCLAGE_STORE_URL."/subscription/product/random";
                        $product = file_get_contents($productUrl);
                        $product = json_decode($product, TRUE);      
                    ?>


                        <div id="link_box_<?php echo $product['product']['id']; ?>" class="block-offer">
                            <h3>DÉCOUVREZ NOS PRESTATIONS<br>
                            ET RECYCLEZ VOUS AUSSI VOS <?php echo $product['product']['name']; ?> !</h3>
                            <div class="block-picto">
                                <img src="<?php echo $product['product']['picto1']; ?>">
                            </div>
                            <a class="btn btn-default" href="<?php echo get_page_link(22); ?>#<?php echo strtolower(str_replace(' ','-',$product['product']['name'])); ?>" target="_blank">voir nos offres</a>
                        </div>
                        <!-- /.block-offer -->
                    </div>
                    <!-- /.col-md-6 -->

                    <div class="col-md-6 col-xs-12 block-newsletter-container">
                        <div class="block-newsletter">
                            <h3>inscrivez-vous<br>
                                à la newsletter easyrecyclage !</h3>
                            <form id="addNewsletter" class="form-horizontal" method="post" action="<?php bloginfo("home"); ?>/?na=s" onsubmit="return newsletter_check(this)">

                                <input type="hidden" name="nr" value="page">

                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="adresse e-mail" name="ne" required>
                                </div>
                                <!-- <a type="submit" class="btn btn-default">s'inscrire</a> -->
                                <input class="btn btn-default" type="submit" value="s'inscrire">
                            </form>

                        </div>
                        <!-- /.post-block-footer -->
                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.post-block-footer-container -->
            </div>
            <!-- /.row -->

            <div class="row post-nav-container">
                <div class="col-xs-6 post-nav-before-container">
                    <div class="post-nav-footer">
                        <!-- Lien vers l'article suivant -->
                        <?php
                            $next_post = get_next_post();
                            if (!empty( $next_post ) && $next_post != ''){
                                ?>
                            <a class="pull-left" href="<?php echo  get_permalink( $next_post->ID ); ?>">
                                <img src="<?php echo bloginfo("template_directory"); ?>/images/blog/post-precedent.png" target="_blank">
                            </a>
                            <?php } ?>
                    </div>
                    <!-- /.post-nav-footer -->
                </div>
                <!-- /.col-xs-6 -->

                <div class="col-xs-6 post-nav-after-container">
                    <div class="post-nav-footer">
                        <!-- Lien vers l'article précédent -->
                        <?php
                        $previous_post = get_previous_post();
                        if (!empty( $previous_post ) && $previous_post != ''){
                            ?>
                            <a class="pull-right" href="<?php echo  get_permalink( $previous_post->ID ); ?>">
                                <img src="<?php echo bloginfo("template_directory"); ?>/images/blog/post-suivant.png">
                            </a>
                            <?php } ?>
                    </div>
                    <!-- /.post-nav-footer -->
                </div>
                <!-- /.col-xs-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.col-md-11 -->
    </div><!-- /.container -->
</section><!-- /.section-header-page -->

    <section class="post-section-post-preference-content">
        <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="block-title">
                    <h3 class="text-left">ces articles pourraient aussi vous intéresser</h3>
                </div>
                <!-- /.block-title -->
            </div>
            <!-- /.col-xs-12 -->

            <div class="col-xs-12 post-list-preference-block-footer">
                <?php
                $numberPost = 3;
                $args = array(
                    'post_type' => 'post',
                    'post__not_in' => array($do_not_duplicate),
    //                'category_name' => 'all',
                    'posts_per_page' => $numberPost
                );

                $ajax_query = new WP_Query($args);
                $i = 0;
                if ( $ajax_query->have_posts() ) : while ( $ajax_query->have_posts() ) : $ajax_query->the_post();
    //                if( $post->ID == $do_not_duplicate ) continue; update_post_caches($posts);
                    $i++;?>
                    <div class="col-md-4 block-<?php echo $i; ?>">
                        <div class="blog-header img-responsive">
                            <a href="<?php the_permalink(); ?>">
                                <?php
                                    $title = get_the_title();
                                        if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                                            the_post_thumbnail('', array(
                                                                'alt' => $title,
                                                                'title' => $title));
                                        }
                                ?>
                               </a>
                        </div>
                        <div class="blog-title">
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        </div>
                    </div>
                <?php endwhile; endif; ?>
            </div>
            <!-- /.post-list-preference-block-footer -->

        </div>
        <!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.section-header-page -->

<?php //comments_template('/includes/loops/comments.php'); ?>
<?php endwhile; ?>
<?php else: get_template_part('includes/loops/content', 'none'); ?>
<?php endif; ?>
