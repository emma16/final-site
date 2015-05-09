<?php
/**
 * Image Category 
 *
 * @package gridsby
 */

get_header(); ?>

    
   
   <?php if ( 'option1' == gridsby_sanitize_index_content( get_theme_mod( 'gridsby_category_title' ) ) ) : ?> 
    
    	<header class="archive-header">
                                
			<h1 class="cat-gallery-title"><?php printf( __( '%s', 'gridsby' ), single_cat_title( '', false ) ); ?></h1>

			<?php
			// Display optional category description
 			if ( category_description() ) : ?>
								
            <div class="archive-meta"><?php echo category_description(); ?></div>
			<?php endif; ?>
                                    
		</header>
    
    <?php endif; ?>
    
	<section class="grid3d horizontal" id="grid3d">
		<div class="grid-wrap">
                   
                <div id="gallery-container" class="gridsby infinite-scroll">
                    
                    <?php while ( have_posts() ) : the_post(); 

								// The Loop 
								if ( 'option1' == gridsby_sanitize_index_content( get_theme_mod( 'gridsby_post_link_method' ) ) ) : ?> 

      									<figure class="gallery-image">
											<?php the_post_thumbnail('gridsby-gallery-thumb'); ?> 
                            			</figure><!-- gallery-image -->  
                            
                        		<?php else : ?>
                                
                           				<a href="<?php the_permalink(); ?>">
                                			<figure class="gallery-image">
												<?php the_post_thumbnail('gridsby-gallery-thumb'); ?> 
                            				</figure><!-- gallery-image -->
                                		</a>
                                
                    <?php endif; 	 

					endwhile; ?>
                    
                    
           		</div>    
           </div>
				
               <div class="content">
         
               <?php while ( have_posts() ) : the_post(); 
                            
                            
               		if ( 'option1' == gridsby_sanitize_index_content( get_theme_mod( 'gridsby_post_link_method' ) ) ) : ?>
            
                      	<div>
                        	<div class="lightbox-content">
							<div class="dummy-img"><?php the_post_thumbnail('gridsby-gallery-full'); ?></div> 
                            <h2 class="dummy-title"><?php the_title(); ?><div class='share-button share-button-left'></div></h2>
							<?php the_content(); ?>
                            </div>
						</div> 
                                
                        <?php else : ?>
						<?php endif; ?>
                            
				<?php endwhile;  ?>
                        
				<span class="loading"></span>
				<span class="icon close-content"><i class="fa fa-close"></i></span>
                    
                
    	</div><!-- /grid-wrap -->   
	</section>