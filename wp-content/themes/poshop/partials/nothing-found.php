<?php // Exit if accessed directly
if (!defined('ABSPATH')) {echo '<h1>Forbidden</h1>'; exit();} ?>

<article class="media well">

    <header class="media-body">
        <h2 class="media-heading">
            <?php _e('Nothing found', 'elano'); ?>
        </h2>
    </header>

    <div class="clearfix"></div>
    <br />

    <section>
        <?php _e('Ops! there is nothing here...', 'elano'); ?>
        <hr />
        <?php get_search_form(TRUE); ?>
    </section>

    <div class="clearfix"></div>
    <br />

    <a href="<?php echo get_site_url(); ?>" title="<?php _e('Home', 'elano'); ?>"><?php _e('Take me home', 'elano'); ?></a>

</article>