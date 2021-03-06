<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bussiness_Epic
 */
$description_from = business_epic_get_option( 'business_epic_blog_excerpt_option');
$description_length = business_epic_get_option( 'business_epic_description_length_option');

?>
<article id="post-<?php the_ID(); ?>"
         class="post type-post status-publish has-post-thumbnail hentry" <?php post_class(); ?>>


    <figure>
        <div class="view hm-zoom">
            <a href="<?php the_permalink(); ?>">
                <header class="entry-header">
                    <h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                </header>
                
                <?php
                
                if (has_post_thumbnail()) {
                    the_post_thumbnail('full', array('class' => 'img-fluid'));
                }
                ?>

                <div class="mask flex-center">
                    
                </div>
            </a>
        </div>
    </figure>
    <div class="entry-meta">
									<span class="posted-on">
										<a href="">
                                            <i class="fa fa-calendar"></i>
                                            <time class="enty-date posted-date" datetime=""><?php echo get_the_date();?></time>
                                        </a>
									</span>
									<span class="posted-by">
										<a href="">
                                            <i class="fa fa-user"></i>
                                            <?php the_author();?>
                                        </a>
									</span>
									<span class="category-tag">
										
											<i class="fa fa-folder"></i>
										<a href="">
                                            <?php business_epic_entry_footer(); ?>
                                        </a>

									</span>
    </div>

    <div class="entry-content">
        <?php
        echo "<p>";
        if($description_from=='content')
        {
            echo esc_html( wp_trim_words(get_the_content(),$description_length) );
        }
        else
        {
           
            echo esc_html( wp_trim_words(get_the_excerpt(),$description_length) );
        }
        wp_link_pages( array(
            'before' => '<div class="page-links">' . esc_html__( 'Pages:','business-epic' ),
            'after'  => '</div>',
        ) );
        
        echo "</p>";
        ?>
        <a href="<?php the_permalink();?>" class="article-readmore"><?php esc_html_e('Continue Reading', 'business-epic'); ?><span class="arrow-continue"><?php echo esc_html('→','business-epic');?></span></a>
    </div>


</article><!-- #post-<?php the_ID(); ?> -->


