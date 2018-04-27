<?php get_header(); ?>

<div class="blog">
    <div class="wrap">
        <h2>BLOG</h2>
        <div class="list-posts">

                <?php 
                 $args = array('post_type'=> 'post', 'showposts'=> 2); 
                 $my_post = get_posts( $args );
                 ?>

                 <?php $count=1; if($my_post) : foreach($my_post as $post) : setup_postdata( $post ) ?>
                 <div class="posts <?php if($count == 2) echo 'second' ?>">
                 <?php the_post_thumbnail(); ?>

                <div class="post-content">
                    <h2><?php the_title(); ?></h2>
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>" class="custom-buttom">Leia Mais</a>
                </div>
                </div>

                <?php $count ++; endforeach; endif; wp_reset_postdata(); ?>  
        </div>
    </div>
</div>

<div class="clear"></div>

<div class="galery">
    <div class="wrap">
        <?php 
            $args = array('post_type' => 'page', 'pagename' => 'galeria');
            $my_page = get_posts( $args );
        ?>
        <?php if($my_page) : foreach($my_page as $post) : setup_postdata( $post ) ?>

        <?php the_content(); ?>
        
        <?php endforeach; endif; ?>
    </div>
</div>

<div class="videos">
    <div class="wrap2">
        <h2>Videos</h2>
        <div class="bxslider">
            
            <!-- LOOP de Vídeo youtube -->
            <?php 
                $args = array('post_type'=>'videos', 'showposts'=> 10);
                $my_slide_video = get_posts( $args );
            ?>
            <?php if( $my_slide_video ) : foreach( $my_slide_video as $post ) : setup_postdata( $post ); ?>
                    
                <?php
                    $textDescription = get_field('link_youtube');
                    $parsed     = parse_url($textDescription);
                    $hostname   = $parsed['host'];
                    $query      = $parsed['query'];
                    $path       = $parsed['path'];
                    $Arr = explode('v=',$query);
                    $videoIDwithString = $Arr[1];
                    $videoID = substr($videoIDwithString,0,11); // 5sRDHnTApSw
                    if( (isset($videoID)) && (isset($hostname)) && ($hostname=='www.youtube.com' || $hostname=='youtube.com')){?>
                        <li><iframe width="707" height="375" src="http://www.youtube.com/embed/<?php echo $videoID; ?>" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowfullscreen></iframe></li>
                <?php }?>

            <?php endforeach; endif; wp_reset_postdata(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
