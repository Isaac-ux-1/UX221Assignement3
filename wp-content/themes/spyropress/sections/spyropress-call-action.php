<?php 
	$spyropress_hs_call_actions			= get_theme_mod('hide_show_call_actions','on'); 
	$spyropress_call_action_btn_lbl		= get_theme_mod('call_action_button_label');
	$spyropress_call_action_btn_link	= get_theme_mod('call_action_button_link');
	$spyropress_call_action_btn_target	= get_theme_mod('call_action_button_target');
	$spyropress_cta_btn_label2			= get_theme_mod('call_action_button_label2');
	$spyropress_cta_btn_link2			= get_theme_mod('call_action_button_link2');
	$spyropress_cta_bg_setting			= get_theme_mod('call_action_background_setting',esc_url(get_template_directory_uri() .'/images/cta.jpg'));
	if($spyropress_hs_call_actions == 'on') :
?>
<section id="cta-unique" class="call-to-action-eight wow fadeInDown">
	<div class="background-overlay" style="background-image: url('<?php echo esc_url($spyropress_cta_bg_setting); ?>'); background-attachment: fixed;">
        <div class="container">
            <div class="row padding-top-25 padding-bottom-25">
                
                <div class="col-md-8">
					<?php 
						$spyropress_aboutusquery1 = new wp_query('page_id='.get_theme_mod('call_action_page',true)); 
						if( $spyropress_aboutusquery1->have_posts() ) 
						{   while( $spyropress_aboutusquery1->have_posts() ) { $spyropress_aboutusquery1->the_post(); 
					?>
                    <h2 class="demo1"> <?php the_title(); ?> <?php the_content(); ?></h2>
					
					<?php } } wp_reset_postdata(); ?>
                </div>
				<div class="col-md-4 text-md-right cta-border-left">
					<?php if(!empty($spyropress_cta_btn_label2)): ?>
						<div class="call-wrapper">
							<div class="cta-info">
								<div class="call-phone"><a href="<?php echo esc_url($spyropress_cta_btn_link2); ?>" class="bt-primary bt-effect-1"><?php echo wp_kses_post($spyropress_cta_btn_label2); ?></a></div>
							</div>
						</div>
					<?php endif; ?>
					<?php if($spyropress_call_action_btn_lbl) :?>
						<a id="u-cta-btn" href="<?php echo esc_url($spyropress_call_action_btn_link); ?>" <?php if(($spyropress_call_action_btn_target)== 1){ echo "target='_blank'"; } ?> class="bt-primary bt-effect-2 call-btn-1"><?php echo esc_html($spyropress_call_action_btn_lbl); ?></a>
					<?php endif; ?>
                </div>				
            </div>
        </div>
    </div>
</section>
<div class="clearfix"></div>
<?php endif; ?>
