<?php get_header(); ?>


<div class="container-fluid caixa-contato p-5">
    <div class="container mt-3 mb-5 p-5">
    <h3 class="texto-contato fw-bold">CONTATO</h3>
    <h1 class="display-5 fw-bold text-white frase">Nosso contato</h1>
    </div>
</div>

<div class="container mb-5 p-5">
    <div class="row mt-5">
        <div class="col-12 col-md-12 col-xl-7">
            <h3 class="text-center text-md-start text-xl-start texto-contato text-dark mt-5">ENTRE EM CONTATO</h3>
            <p class="text-center text-md-start text-xl-start entre-contato">Nós podemos ajudar a sua empresa na <br> área de advocacia</p>
            <p class="text-center text-md-start text-xl-start sub-titulo mb-5">Preencha o formulário ao lado para entrar em contato.</p>
            <p class="text-center text-md-start text-xl-start mensagem mb-5">Ou se preferir, nos mande uma mensagem no whatsapp:</p>

            <p class="text-center text-md-start text-xl-start"><a href="" class="btn-chat">Chat Via Whatsapp</a></p>

            <div class="row mt-5">
                <div class="col-2 col-md-1 col-xl-1 mt-4 ">
                    <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/icons/icon-email.svg" width="90%" alt=""> 
                </div>
                <div class="col-8 ms-4 d-flex flex-column mt-3">
                    
                <p class="fw-bold">Ou envie um e-mail para a gente</p>
                    <p>Fasjusej@gmail.com</p>

                </div>
                <div class="row">
                <div class="col-2 col-md-1 col-xl-1 mt-4">
                <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/icons/icon-insta.svg" width="100%" alt=""> 

                </div>
                <div class="col-8 ms-4 d-flex flex-column mt-3">
                    
                <p class="fw-bold">Ou envie um e-mail para a gente</p>
                    <p>Fasjusej@gmail.com</p>

                </div>
            </div>
            </div>
        </div>
      
        <div class="caixa-form col-12 col-md-12 col-xl-5 mt-5 text-start ">
            <?php echo do_shortcode( '[contact-form-7 id="9" title="contato"]');?>
        </div>
    </div>
</div>
<div class="maps">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.3386750489867!2d-38.51928678545594!3d-3.7361719972817737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c74909f2f3ec27%3A0xf85898f49b8e387f!2sFASJUS!5e0!3m2!1spt-BR!2sbr!4v1652221617909!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>




<?php get_footer(); ?>
