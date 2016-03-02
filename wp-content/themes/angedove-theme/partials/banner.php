<div class="row columns">
    <div class="banner">
        <?php if (is_page( 'about-me' )): ?>
            <div class="banner-img"><img src="<?php echo get_template_directory_uri() ?>/img/banners/banner-about.jpg" alt=""></div>
        <?php elseif (is_page( 'get-coached' )): ?>
            <div class="banner-img"><img src="<?php echo get_template_directory_uri() ?>/img/banners/banner-coach.jpg" alt=""></div>
        <?php elseif (is_page( 'contact-me' )): ?>
            <div class="banner-img"><img src="<?php echo get_template_directory_uri() ?>/img/banners/banner-contact.jpg" alt=""></div>
        <?php elseif (is_page( 'blog' )): ?>
             <div class="banner-img"><img src="<?php echo get_template_directory_uri() ?>/img/banners/banner-blog.jpg" alt=""></div>
        <?php else : ?>
            <div class="banner-img"><img src="<?php echo get_template_directory_uri() ?>/img/banners/banner-homepage.jpg" alt=""></div>
        <?php endif; ?>
    </div>
</div>



<div class="container container-title container-light">
    <div class="row columns">
        <?php if ( is_front_page() || is_home() ) : ?>
            <div class="box-cta">
                <div class="blurb">
                    <h2 class="title">Is your business not growing as you had planned?</h2>
                    <p class="lead">Get my new book and find out why.</p>
                </div>
                <div class="cta-img"><img src="<?php echo get_template_directory_uri() ?>/img/img-book.png" alt=""></div>
            </div>
        <?php else : ?>
            <h1 class="text-center post-title"><?php echo get_the_title();?></h1>
        <?php endif; ?>
    </div>
</div>