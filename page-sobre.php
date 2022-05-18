<?php get_header(); ?>

<main>
<div class="container" id="section-membros">
    <!-- <div class="row ">
            <div class="col-md-12">
                <h4> Nosso time</h4>
                <h2> Conheça a equipe da Fasjus</h2>
            </div>    
        </div>
    <div> -->
    <div class="row membros gap-5">
        <h1> alice </h1>
        <?php 
            $args = array (
                'post_type' => 'membro',
                'orderby' => 'date',
                'order' => 'DSC',
            );
            $membro_query = new WP_Query($args);

            if($membro_query->have_posts()) : 
                while ($membro_query->have_posts()) : $membro_query->the_post(); ?>
                    <div class="col-12 col-md-2 text-center p-0"> 
                        <div class="membro-card">
                            <img class="rounded-3 img-member" src="<?php echo get_the_post_thumbnail_url($post->ID); ?>" alt="<?php echo get_the_title($post->ID); ?>"/>
                            <h4><?php echo get_the_title($post->ID); ?></h4>
                            <p><?php echo get_the_excerpt($post->ID); ?></p>
                        </div>
                    </div>
            <?php endwhile; endif; wp_reset_postdata();?>
        </div>
    </div>
</main>

<?php get_footer(); ?>