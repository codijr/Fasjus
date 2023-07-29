<?php get_header(); ?>

<main> 
<div class="container-fluid bg-white">
        <div class="container comeco">
            <di class="row p-5">
                <div class="col-12  text-start text-sm-start text-md-start text-xl-start">
                    <h5 class="mt-5 pergunta">FASJUS EJ</h5>
                    <h1 class="fw-bold frase">Time  <span class="fasjusej">pequeno</span> fazendo<br>
                    história 
                        <span class="fasjusej">grande</span>
                    </h1>
                    <h4 class="fw-light mb-5 mt-3 paragrafo">Venha nos conhecer!</h3>
                    <a href="<?php echo get_home_url(); ?>/sobre" class="btn-conheca">Conheça a FASJUS</a>
                    <br><br><br>
                </div>
                
            </div>
            <div class="caixa-um">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/caixinha.svg" alt="">
                </div>
        </div>
    </div>

<div class="secao2 mt-5">
    <div class="container">
        <div class="row p-5">
            <div class="col-12 col-md-6 col-xl-6 text-start mb-3">
                <h5 class="pergunta text-start text-md-start text-xl-start">O QUE FAZEMOS</h5>
                <h1 class="fw-bold resumo text-start text-md-start text-xl-start">Nossos serviços
                </h1>
                <h4 class="fw-light mb-5 mt-3 resumo1 text-start text-md-start text-xl-start">A FASJUS oferece serviços de consultoria e assessoria jurídica, fornecendo suporte especializado em questões legais para clientes de diversos setores.</h3>
                <p class="mb-5 text-start text-md-start text-xl-start"><a href="<?php echo get_home_url(); ?>/servicos" class="btn-servicos">Conheça nossos serviços</a></p>
            </div>
            <div class="col-12 col-md-3 col-xl-3 text-center">
                <div class="card1 mt-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/img1.svg" class="mt-5 mb-4" alt="">
                    <p class="fw-bold">Consultoria Jurídica</p>
                </div>
            </div>
            <div class="col-12 col-md-3 col-xl-3 text-center">
                <div class="card1 mt-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/martelo.svg" class="mt-5 mb-4" alt="">
                    <p class="fw-bold">Assessoria Jurídica</p>
                </div>
            </div>
        </div>
    </div>
</div>

    
</div>

 <!-- Metricas -->

 <div class="container p-5" id="section-metricas">
    <div class="row">
            <div class="col-12">
                <h5> NOSSAS CONQUISTAS</h5>
                <h2> FASJUS em números</h2>
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
                        <div class="card-metrica-content col-lg-4 col-md-6 text-center  mb-5 mt-5 gap-3 ">
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


</main>

<?php get_footer(); ?>