<?php
/*
The Page Loop
=============
*/
?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>

    <section class="page-section-header" id="post_<?php the_ID()?>" <?php post_class()?>><!-- Page Content -->
        <div class="container"><!-- Marketing Icons Section -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="block-title">
                        <h3 class="text-left"><?php the_title()?></h3>
                    </div><!-- /.block-title -->
                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.section-header-page -->
    <section class="page-section-content">
        <!-- Page Content -->
        <div class="container">
            <!-- Marketing Icons Section -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="block-content">
                    <?php the_content()?>
                    </div>
                    <!-- /.block-content -->
                </div>
                <!-- /.col-xs-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

<?php endwhile; ?>
<?php else: get_template_part('includes/loops/content', 'none'); ?>
<?php endif; ?>
