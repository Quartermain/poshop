<?php
/*
 * Template Name: Blog Template
 *
 */
// Exit if accessed directly
if (!defined('ABSPATH')) {echo '<h1>Forbidden</h1>'; exit();} get_header(); ?>

<?php query_posts('post_type=post&post_status=publish&paged='. get_query_var('paged')); ?>
<section id="blog-normal" class="light-section nopaddingbottom blog-normal">

            <!-- BEGIN BLOG WIDTH | OPTION: "big", "medium" container -->
            <div class="container">
                <!-- START SIDEBAR -->
                <div class="col-xs-12 col-sm-12 col-md-4 blog-sidebar">

                    <?php get_sidebar(); ?>

                </div>
                <!-- BEGIN BLOG POSTS -->
                <div class="journal col-xs-12 col-sm-12 col-md-8">
                     <?php if (have_posts()) : ?>

                        <?php while (have_posts()) : the_post(); ?>

                            <?php get_template_part('partials/article'); ?>

                        <?php endwhile; ?>

                        <?php if ($wp_query->max_num_pages>1) : ?>

                            <?php elano_pagination(); ?>

                        <?php endif; ?>

                    <?php else : ?>

                        <?php get_template_part('partials/nothing-found'); ?>

                    <?php endif; ?>

                </div>
                <!-- END journal -->



            </div>
            <!-- END: BLOG CONTAINER -->
        </section>



<?php get_footer(); ?>