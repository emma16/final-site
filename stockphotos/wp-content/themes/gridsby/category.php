<?php
/**
 * Category Gallery Template 
 *
 * @package gridsby
 */

get_header(); ?>


<div class="grid grid-pad">
    
    	<?php if ( 'option1' == gridsby_sanitize_index_content( get_theme_mod( 'gridsby_category_layout' ) ) ) : ?>
            
				<div class="col-1-1 content-wrapper">
                
            <?php else : ?>
                
                <div class="col-9-12 content-wrapper"> 
            
            <?php endif; ?>
            
            
		<div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
            
            
            <?php 
			// Check if there are any posts to display
            if ( have_posts() ) : ?>
            
    
   					<?php if ( is_category() ) :
		
						get_template_part( 'content', get_post_format() ); 
    
    				elseif ( is_tax( 'post_format', 'post-format-image' ) ) : 
		
						get_template_part( 'content', 'image' );
			
					endif;   ?> 
                    
                    
                     <?php gridsby_the_posts_navigation(); ?> 
					
					
                    <?php else :
		
						get_template_part( 'content', 'none' );
						
            
            endif; ?>
            
            
            
            </main><!-- #main -->
        </div><!-- #primary -->
        
    </div><!-- col -->
            
            
	<?php if ( 'option1' == gridsby_sanitize_index_content( get_theme_mod( 'gridsby_category_layout' ) ) ) : ?>
            
		
                
	<?php else : ?>
    
    	<?php get_sidebar(); ?>
                
	<?php endif; ?>


</div><!-- grid -->
<?php get_footer(); ?>
