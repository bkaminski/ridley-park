<header>
	<div class="container-fluid overflow-hidden g-0">
		<div class="row">
			<div class="col-md-2 text-center p-2">
				<a href="<?php echo get_home_url(); ?>">
					<img src="<?php echo get_home_url();?>/wp-content/uploads/Ridley-Park-Logo.png" class="img-fluid" alt="Ridley Park Borough" width="150" />
				</a>
			</div>
			<div class="col-md-10">
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
					
			</div>
		</div>
	</div>	
</header>