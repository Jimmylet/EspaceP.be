<form class="menu__search" id="searchform" action="<?php bloginfo('url'); ?>" method="get">
	<label class="menu__search__label" for="s"><?php _e('Search:'); ?></label>
	<input class="menu__search__input" type="search" required placeholder="Rechercher" value="<?php the_search_query(); ?>" name="s" id="s">
	<button class="menu__search__submit" type="submit" name="submit">
				 <img src="<?php echo home_url() . '/wp-content/uploads/2016/10/search.svg'; ?>" alt="">
	</button>
</form>
