<section class="breadcrumb shadow-two">
	<?php if ( get_header_image() ) : ?>
	<div class="background-overlay" style="background: url('<?php esc_url(header_image()); ?>') no-repeat fixed 0 0 / cover rgba(0, 0, 0, 0.3); background-blend-mode: multiply;opacity: 1;">
	<?php else: ?>
    <div class="background-overlay" style="background: url('<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/breadcrumb.jpg') no-repeat fixed 0 0 / cover rgba(0, 0, 0, 0.3); background-blend-mode: multiply;opacity: 1;">
	<?php endif; ?>	
        <div class="container">
            <div class="row padding-top-40 padding-bottom-40">
                <div class="col-md-6 col-xs-12 col-sm-6">
                     <h2>
						<?php 
							if ( is_home() || is_front_page()):
			
								single_post_title();
								
							elseif ( is_day() ) : 
							
								printf( __( 'Daily Archives: %s', 'spyropress' ), get_the_date() );
							
							elseif ( is_month() ) :
							
								printf( __( 'Monthly Archives: %s', 'spyropress' ), (get_the_date( 'F Y' ) ));
								
							elseif ( is_year() ) :
							
								printf( __( 'Yearly Archives: %s', 'spyropress' ), (get_the_date( 'Y' ) ) );
								
							elseif ( is_category() ) :
							
								printf( __( 'Category Archives: %s', 'spyropress' ), (single_cat_title( '', false ) ));

							elseif ( is_tag() ) :
							
								printf( __( 'Tag Archives: %s', 'spyropress' ), (single_tag_title( '', false ) ));
								
							elseif ( is_404() ) :
						
								printf( __( 'Error 404', 'spyropress' ));
								
							elseif ( is_search() ) :
						
								printf( __( 'Search Results for: %s', 'spyropress' ), (get_search_query() ));		
								
							elseif ( is_author() ) :
							
								printf( __( 'Author: %s', 'spyropress' ), (get_the_author( '', false ) ));			
								
							elseif ( class_exists( 'WooCommerce' ) ) : 
								
								if ( is_shop() ) {
									woocommerce_page_title();
								}
								
								elseif ( is_cart() ) {
									the_title();
								}
								
								elseif ( is_checkout() ) {
									the_title();
								}
								
								elseif ( is_product_category() ) {
									single_cat_title();
								}
								
								else {
									the_title();
								}
							
							else :
									the_title();
								
							endif;
							
						?>
					</h2>
                </div>

                <div class="col-md-6 col-xs-12 col-sm-6 breadcrumb-position">
					<ul class="page-breadcrumb">
						<?php if (function_exists('specia_breadcrumbs')) specia_breadcrumbs();?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="clearfix"></div>