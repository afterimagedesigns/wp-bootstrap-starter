<form role="search" method="get" class="search-form form-inline" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="form-group">
    	<label class="sr-only" for="exampleInputEmail3">Email address</label>
    	<div class="input-group">
    		<input type="search" class="form-control" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'wp-bootstrap-starter' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php _ex( 'Search for:', 'label', 'wp-bootstrap-starter' ); ?>">
    		<span class="input-group-btn">
        		<button type="button" class="btn btn-default"><?php echo esc_attr_x( 'Search', 'submit button', 'wp-bootstrap-starter' ); ?></button>
			 </span>
    	</div>
  	</div>
  	
</form>


