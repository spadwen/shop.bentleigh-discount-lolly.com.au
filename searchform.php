<form class="bdls-search" method="get" name="searchform" action="<?php echo esc_url( site_url() ); ?>/">
	<input name="s" type="text" value="<?php echo esc_attr(get_search_query()); ?>" />
	<input class="bdls-search-button" type="submit" value="" />
</form>