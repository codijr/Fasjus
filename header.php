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
<nav class="navbar sticky-top navbar-expand-lg align-middle stroke montserrat header">
        <div class="container">
            <div class=" logo justify-content-start ">
                <a href="#" style="text-decoration:none;">
                    <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/logo2.svg" alt="logo">
                    
                </a> 
            </div>
            <button class="navbar-toggler navbar-dark collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="mb-0 pl-5 navbar-nav mb-2 mb-lg-0 d-flex">
              <li class=" nav-item"> 
                <a style="text-decoration:none;"class=" nav-link" id="home-menu" href="#">Home</a>
              </li>
              <li class="  nav-item "> 
                <a class="nav-link" id="home-menu" href="#">Quem somos</a>
              </li>
              <li class="  nav-item "> 
                <a class=" nav-link" id="home-menu" href="#">Serviços</a>
              </li>
              <li class="  nav-item "> 
                <a class=" nav-link" id="home-menu" href="#">Blog</a>
              </li>
              <li class="  nav-item "> 
                <a class=" nav-link" id="home-menu" href="#">Contato</a>
              </li>
            </ul> 
            
          </div>
        </div>
    </nav>