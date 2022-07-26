<?php 

    // Função para configurar o tema
    
    function theme_setup(){
        add_theme_support('post-thumbnails');

        add_theme_support('title-tag');

        register_nav_menus(
            array(
                'main_menu' => 'Main Menu',
                'my_footer_menu' => 'Footer Menu'
            )
        );
    }
    add_action('after_setup_theme','theme_setup');
    function special_nav_class ($classes, $item) {
        if (in_array('current-menu-item', $classes) ){
          $classes[] = 'active ';
        }
        return $classes;
      }
      add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

    function css_files() {
        wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css');
        wp_enqueue_style('poppins', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap');
        wp_enqueue_style('header', get_template_directory_uri().'/assets/css/header.css');
        wp_enqueue_style('style', get_template_directory_uri().'/assets/css/style.css');
        wp_enqueue_style('footer', get_template_directory_uri().'/assets/css/footer.css');
       
        if ( is_front_page() == true ) {         // só vai carregar se estiver na front-page         
            wp_enqueue_style('home', get_template_directory_uri() . '/assets/css/home.css');     }
        if ( is_page('sobre') == true ) {
            // só vai carregar se estiver na pag sobre
            wp_enqueue_style('membros', get_template_directory_uri() . '/assets/css/membros.css');
        }
        if ( is_page('sobre') == true ) {
            // só vai carregar se estiver na pag sobre
            wp_enqueue_style('sobre', get_template_directory_uri() . '/assets/css/sobre.css');
        }
        if (is_page('contato')==true) {
            // só vai carregar se estiver na page contato
            wp_enqueue_style('contato', get_template_directory_uri(). '/assets/css/contato.css');
        }
        if (is_page('servicos')==true) {
            // só vai carregar se estiver na page contato
            wp_enqueue_style('servicos', get_template_directory_uri(). '/assets/css/servicos.css');
        }
       
    }
    add_action('wp_enqueue_scripts', 'css_files');

    function scripts_files() {
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.js', false, null, false); 
        wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js', array('jquery'));
        wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js', array('popper'));
    }
    add_action('wp_enqueue_scripts', 'scripts_files');  
    require_once(get_template_directory().'/app/cpt/cpt-metricas.php');
    require_once(get_template_directory().'/app/cpt/cpt-membros.php');
    require_once(get_template_directory().'/app/cpt/cpt-servicos.php');
?>