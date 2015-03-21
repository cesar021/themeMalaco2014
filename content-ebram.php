<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *

 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


    <header class="entry-header">

        <div class="box-ebram">
            <?php
                if (is_single()) :
                    the_title('<h1>', '</h1>');
                else :
                    the_title('<h1"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h1>');
                endif;
                ?>

            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('thumbnail'); ?>
            </a>

        </div>        

    </header><!-- .entry-header -->
 
    <?php if (is_search() || is_category()) : ?>
        <div class="entry-summary">
            <a href="<?php the_permalink() ?>" >
               <?php //the_excerpt(); ?>
            </a>    
        </div><!-- .entry-summary -->
    <?php else : ?>

    <?php endif; ?>

    <?php the_tags('<footer class="entry-meta"><span class="tag-links">', '', '</span></footer>'); ?>
</article><!-- #post-## -->

