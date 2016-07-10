<!-- #search Form Starts -->

<div class="search-box clearfix">

	<form method="get" class="searchform clearfix" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">

		<input type="text" class="field" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php esc_attr_e( 'Search &hellip;', 'radiance-lite' ); ?>" />

		<div class="search-icon">

			<i class="fa fa-search"></i><input type="submit" class="submit" name="submit" id="searchsubmit" value="" />

		</div>

	</form>

</div>

<!-- #search Form Ends -->