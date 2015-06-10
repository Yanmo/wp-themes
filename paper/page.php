<?php get_header(); ?>   
		<div class="content">
			<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>
			<div class="post-main">
				<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				<div class="post">
					<?php the_content(); ?><?php wp_link_pages( $args ); ?><?php //comments_template(); ?>
				</div>
			</div>
			<?php endwhile; ?>			
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