<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php wp_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?> ">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <!-- JS -->
	<script src="https://code.jquery.com/jquery-latest.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/source/jquery.fancybox.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/source/jquery.fancybox.css">
    
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">

    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/slide-and-swipe-menu.css">

    <!-- touchSwipe library -->
    <script src="http://labs.rampinteractive.co.uk/touchSwipe/jquery.touchSwipe.min.js"></script>

    <!-- Slider Javascript file -->
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.slideandswipe.min.js"></script>


    <?php wp_head(); ?>
</head>
<body>

        <nav class="nav">
            <?php wp_nav_menu( 'menu' ); ?>
        </nav>
        

<?php if(is_home()): ?>

<div class="header">
    <div class="wrap">
        <h1><a href="<?php echo site_url( ); ?>" title="<?php bloginfo('name'); ?>">AVANTI</a></h1>
            <div class="menu-topo">
                <a href="#" class="ssm-toggle-nav" title="open nav">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>
        <div class="info">
            <?php
                $args = array('post_type' => 'page', 'pagename' => 'about');
                $my_page = get_posts( $args );
            ?>
            <?php if($my_page) : foreach ($my_page as $post ) : setup_postdata( $post ); ?>
            <?php the_content(); ?>
            <a href="<?php the_permalink() ?>" class="custom-buttom">Leia Mais</a>
            <?php endforeach; ?>
            <?php else : ?> <p>Nenhum conteudo na pagina About</p>
            <?php endif; ?>
        </div>
    </div>
</div>  

<?php else: ?>
<div class="header-page">
    <div class="wrap">
        <h1><a href="<?php echo site_url( ); ?>" title="<?php bloginfo('name'); ?>">AVANTI</a></h1>
            <div class="menu-topo menu-interna">
                <a href="#" class="ssm-toggle-nav" title="open nav">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>
            <div class="clear"></div>
    </div>
    <div class="bg-page">
        <div class="wrap">
            <?php if(is_category()): ?>
                <h2>Blog</h2>
            <?php else : ?>
                <h2><?php the_title(); ?></h2>
            <?php endif; ?>
            <?php wp_custom_breadcrumbs(); ?>
        </div>
    </div>
</div>
<?php endif; ?>