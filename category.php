<?php get_header(); ?>
<div class="content">
    <div class="wrap">
        <div class="blog">          
                <div class="list-posts">

                        <?php $count=1; if(have_posts()) : while(have_posts()) : the_post();  ?>
                            <div class="posts <?php if(($count % 2) == 0) echo 'second' ?>">
                            <?php the_post_thumbnail(); ?>

                            <div class="post-content">
                                <h2><?php the_title(); ?></h2>
                                <?php the_excerpt(); ?>
                                <a href="<?php the_permalink(); ?>" class="custom-buttom">Leia Mais</a>
                            </div>
                        </div>

                        <?php $count ++; endwhile; endif; ?>  
                </div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="widget">
        <div class="wrap">
            <?php if(!function_exists('dynamic_sidebar')
            || !dynamic_sidebar( 'Sidebar footer' )): ?>
            <?php endif; ?>
        </div>
        <div class="clear"></div>    
    </div>
</div>
<?php get_footer(); ?>
