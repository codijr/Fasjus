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
              <!-- Criar menus no wordpress com o nome "main_nav" para o menu aparecer -->
              <?php wp_nav_menu(array(
                    'menu' => 'main_nav',
                    'menu_class' => 'navbar-nav',
                    'theme_location' => 'primary',
                    'container' => 'false',
                    // 'walker' => new WP_Bootstrap_Navwalker()
                    )
                    );?>
              
                
            </div>
        </div>
    </nav>