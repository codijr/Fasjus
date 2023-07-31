<?php get_header(); ?>

<main>
<div class="banner">
        <div class="container">
            <div class="row pt-5 pb-5">
                <h3 class="texto-banner fw-bold">Serviços</h3>
                <h1 class="display-5 fw-bold text-white frase-banner">Nossas soluções</h1>
            </div>  
        </div>
</div>

<div id="section-servicos">
    <div class="container">
        <div class="section-title">
            <h6 class="text-title-section"> NOSSOS SERVIÇOS</h6>
            <h4>Soluções</h4>
        </div>
        <div class="row servicos gx-4">
        <?php 
            $args = array (
                'post_type' => 'servico',
                'orderby' => 'date',
                'order' => 'ASC',
            );
            $metrica_query = new WP_Query($args);
            if($metrica_query->have_posts()) : 
                while ($metrica_query->have_posts()) : $metrica_query->the_post(); ?>
                <div class="card-servico col-lg-4 col-md-12">
                <div class="card-servico-content mt-5">
                            <div class="card-img-servico d-block">
                                <img class=" d-block img-servico" src="<?php echo get_the_post_thumbnail_url($post->ID); ?>" alt="<?php echo get_the_title($post->ID); ?>"/>
                                <img  class="d-block"src="<?php echo get_bloginfo('template_url') ?>/assets/icons/t-servico.svg">
                            </div>
                            <div class="card-text-servico ml-5">
                                <h6><?php echo get_the_title($post->ID); ?></h6>
                                <p><?php echo get_the_content($post->ID); ?></p>
                        </div>
                        
                    </div>
                    <div class="link-contato text-center">
                    <a href="<?php echo get_home_url(); ?>/contato">Entre em contato</a>
                    </div>
                </div>
                        
            <?php endwhile; endif; wp_reset_postdata();?>
        </div>
    </div>    
</div>

<?php get_footer(); ?>