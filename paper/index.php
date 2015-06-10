<?php get_header(); ?>   
		<div class="content">
			<?php if(have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
			<div <?php post_class(); ?>><?php comments_template(); ?>
			<div class="post-main">
				<div class="date"><?php the_date(); ?></div>
				<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				<div class="post">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
					<?php the_content( 'Read more...' ); ?>
					<!-- <span class="entry-comments"><?php //comments_popup_link(__('Comments (0)'), __('Comments (1)'), __('Comments (%)')) ?></span> -->
					<!-- <div class="categories"><tag><?php //the_tags(); ?></tag>	Categories: <?php //the_category(' '); ?></div> -->
				</div>
			</div> 
			</div> 
			<?php endwhile; ?>

		<?php if(function_exists('wp_pagenavi')) : ?>
		<div class="navigation"><?php wp_pagenavi(); ?></div>
		<?php else : ?>
<div class="navigation">
	<div class="alignleft"><?php previous_posts_link(__('&laquo; Newer')) ?></div>
	<div class="alignright"><?php next_posts_link(__('Older &raquo;')) ?></div>
</div>
<?php endif; ?>
			<?php endif; ?>
		</div>
		<aside class="widget">	
			<div class="row">
				<div class="sidebar-left span2">
					<center>
					<?php get_sidebar ('left'); ?>
					</center>
				</div>
			</div>
			<div class="row">
				<div class="sidebar-center span2">
					<center>
					<?php get_sidebar ('center'); ?>
					</center>
				</div>
			</div>
			<div class="row">
				<div class="sidebar-right span2">
					<center>
					<?php get_sidebar ('right'); ?>
					</center>
				</div>
			</div>
		</aside>
	</div>
<?php get_footer(); ?>