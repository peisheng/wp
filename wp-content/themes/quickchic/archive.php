<?php get_header(); ?>
	<div id="content" class="narrowcolumn">

<main>
<section>

<h1><?php _e( 'Archives: ', 'quickchic' ); single_cat_title(); ?></h1>
<?php get_template_part('loop'); ?>
<?php get_template_part('pagination'); ?>

</section>
</main>

</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>