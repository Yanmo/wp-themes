		<form class="search-main" action="./" method="get">
			<input class="serch-txt" value="Search" onfocus="this.value=''" type="text" onblur="if (this.value=='') this.value='Search';" name="s" id="s" value="<?php the_search_query(); ?>" />
			<input class="serch-btn" type="image" src="<?php bloginfo('template_url'); ?>/images/serach-button.jpg" />
		</form>