<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name') . ' | ' .  bloginfo('description') ?></title>

    <?php wp_head(); ?>
</head>
<body>

<nav class="navbar sticky-top navbar-expand-lg">
        <div class="container p-0 ">
            <div class="logo p-0 m-0">
                <a href="#" style="text-decoration:none;">
                    <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/logo.svg" alt="logo" >
                    <!-- <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/logo1.svg" alt="logo"> -->
                </a> 
            </div>
            <button class="navbar-toggler navbar-dark collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end  menu" id="navbarNav" >
            <ul class="navbar-nav mb-2 mb-lg-0 d-flex align-items-center">
                        <li class="nav-item">
                            <a class="nav-link <?php if(is_front_page()) { echo 'ativo';} ?>" aria-current="home" href="<?php echo get_home_url(); ?>"><h4 class">Home</h4></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if(is_page('sobre') == true ) { echo 'ativo';} ?>" aria-current="sobre" href="<?php echo get_home_url(); ?>/sobre"><h4 class">Quem Somos</h4></a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link <?php if(is_page('servicos') == true ) { echo 'ativo';} ?>" aria-current="serviços" href="<?php echo get_home_url(); ?>/servicos"><h4 class">Serviços</h4></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?php if(is_category() == true || is_single()) { echo 'ativo';} ?>" aria-current="blog" href="<?php echo get_home_url(); ?>/category/geral"><h4>Blog</h4></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if(is_page('contato') == true ) { echo 'ativo';} ?>" aria-current="home" href="<?php echo get_home_url(); ?>/contato"><h4 class">Contato</h4></a>
                        </li>
                    </ul>
                
            </div>
        </div>
    </nav>