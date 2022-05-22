<?php get_header(); ?>

<main>
    <p>teste</p>
<div class="container " id="section-membros">
    <div class="row ">
            <div class="col-12 m-0 p-0">
                <h5> NOSSO TIME</h5>
                <h2> Conheça a equipe da Fasjus</h2>
            </div>    
        </div>
    
    <div class="row membros gx-5 text-center">
        <?php 
            $args = array (
                'post_type' => 'membro',
                'orderby' => 'date',
                'order' => 'DSC',
            );
            $membro_query = new WP_Query($args);

            if($membro_query->have_posts()) : 
                while ($membro_query->have_posts()) : $membro_query->the_post(); ?>
                    <div class="col-lg-2 col-md-6 text-center p-0 card-membro mb-5 gap-4 justify-content-center"> 
                        <div class="card-membro-content">
                        <img class=" img-membro" src="<?php echo get_the_post_thumbnail_url($post->ID); ?>" alt="<?php echo get_the_title($post->ID); ?>"/>
                        <h6><?php echo get_the_title($post->ID); ?></h6>
                        <p><?php echo get_the_content($post->ID); ?></p>
                        </div>
                        
                    </div>
            <?php endwhile; endif; wp_reset_postdata();?>
        </div>
    </div>
    <div class="container" id="section-metricas">
    <div class="row ">
            <div class="col-12 m-0 p-0">
                <h5> NOSSOS NÚMEROS</h5>
                <h2> Frase sobre as métricas dos serviços da FASJUS</h2>
            </div>    
        </div>
    <div class="row membros gx-5 text-center card-metrica align-itens-center justify-content-center">
        <?php 
            $args = array (
                'post_type' => 'metrica',
                'orderby' => 'date',
                'order' => 'DSC',
            );
            $metrica_query = new WP_Query($args);
            if($metrica_query->have_posts()) : 
                while ($metrica_query->have_posts()) : $metrica_query->the_post(); ?>
                        <div class="card-metrica-content col-lg-4 col-md-6 text-center p-0 mb-5 mt-5 gap-4 ">
                            <div class="titulo-metrica d-flex justify-content-center">
                            <h1><?php echo get_the_title($post->ID);?></h1>
                            <h1>+</h1>
                            </div>
                            <h5><?php echo get_the_excerpt($post->ID); ?></h5>
                            <h2><?php echo get_the_content($post->ID); ?></h2>
                    </div>
            <?php endwhile; endif; wp_reset_postdata();?>
        </div>
    </div>  
    <p>oi<p>
    <div class="container" id="section-metricas">
    <div class="row ">
            <div class="col-12 m-0 p-0">
                <h5> NOSSOS SERVIÇOS</h5>
                <h2> Frase resumida sobre os serviços que a FASJUS oferece</h2>
            </div>    
        </div>
    <div class="row membros gx-3 ">
        <?php 
            $args = array (
                'post_type' => 'servico',
                'orderby' => 'date',
                'order' => 'DSC',
            );
            $metrica_query = new WP_Query($args);
            if($metrica_query->have_posts()) : 
                while ($metrica_query->have_posts()) : $metrica_query->the_post(); ?>
                <div class="card-servico col-lg-4 col-md-12 ">
                <div class="card-servico-content justify-content-center mt-5">
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
                    <a href="<?php echo get_home_url() . "/contato/"?>">Entre em contato</a>
                    </div>
                </div>
                        
            <?php endwhile; endif; wp_reset_postdata();?>
        </div>
    </div>  


</main>

<?php get_footer(); ?>