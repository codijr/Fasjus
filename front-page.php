<?php get_header(); ?>

<main> 
<div class="container-fluid">
        <div class="container">
            <di class="row p-5">
                <div class="col-12  text-center text-md-start text-xl-start">
                    <h5 class="mt-5 pergunta">FASJUS EJ</h5>
                    <h1 class="fw-bold frase">Time  <span class="fasjusej">pequeno</span> fazendo<br>
                    história 
                        <span class="fasjusej">grande</span>
                    </h1>
                    <h4 class="fw-light mb-5 mt-3 paragrafo">Insira um texto para conhecer a FASJUS de <br> maneira resumida.</h3>
                    <a href="" class="btn-conheca">Conheça a FASJUS</a>
                    <br><br><br>
                </div>
                
            </div>
        </div>
    </div>

<div class="secao2">
    <div class="container">
        <div class="row p-5">
            <div class="col-12 col-md-6 col-xl-6 text-start mb-3">
                <h5 class="pergunta text-center text-md-start text-xl-start">O QUE FAZEMOS</h5>
                <h1 class="fw-bold resumo text-center text-md-start text-xl-start">Resumo dos serviços da FASJUS para um possível cliente
                </h1>
                <h4 class="fw-light mb-5 mt-3 resumo1 text-center text-md-start text-xl-start">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac posuere nibh. Sed mauris dolor, volutpat in mauris id, rhoncus iaculis turpis.</h3>
                <p class="mb-5 text-center text-md-start text-xl-start"><a href="" class="btn-servicos">Conheça o nossos serviços</a></p>
            </div>
            <div class="col-12 col-md-3 col-xl-3 text-center">
                <div class="card1 mt-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/img1.svg" class="mt-5 mb-4" alt="">
                    <p class="fw-bold">Consultoria Juridica</p>
                </div>
            </div>
            <div class="col-12 col-md-3 col-xl-3 text-center">
                <div class="card1 mt-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/martelo.svg" class="mt-5 mb-4" alt="">
                    <p class="fw-bold">Consultoria Juridica</p>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="container-fluid secao3">
        <div class="chamada">
            
        <p class="text-center text-white chamadaa">Chamada do cliente para o contato</p>
            <p class=" text-white frase-final">Frase para convidar o cliente <br> para contactar a empresa</p>
            <p class="text-center mt-5"><a href="" class="btn-servicos text-center">Entre em contato</a></p>
        </div>

    </div>
</div>
</main>

<?php get_footer(); ?>