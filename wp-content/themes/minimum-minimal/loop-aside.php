<article id="post-<?php the_ID(); ?>" <?php post_class('articlebox'); ?>>
	<div class="postlistbox postlistboxnotitle postlistboxaside">	
		<div class="entry-meta-status">
			<a class="url fn n" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" title="<?php printf( esc_attr__( 'View all posts by %s', 'minimum-minimal' ), get_the_author() ); ?>"><?php the_author(); ?></a>  / <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') );  _e( ' ago', 'minimum-minimal' )?>:	
		</div><!-- .entry-meta -->			
		<?php the_content(); ?>	
	<div style="clear:both;"></div>
	<span class="icon-comment-alt"> </span> <span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'minimum-minimal' ), __( 'One Comment', 'minimum-minimal' ), __( '% Comments', 'minimum-minimal' ) ); ?></span>
	</div>
</article>