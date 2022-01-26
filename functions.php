<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:
    function wpb_hook_javascript_footer(){
        ?>
       
        <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>    
        <script src="https://cdn.jsdelivr.net/npm/TagCloud@2.2.0/dist/TagCloud.min.js"></script>
    <script>
        if(window.innerWidth<1000){
            const Texts=['HTML',"CSS","JAVASCRIPT","PHP","MYSQL","WORDPRESS","JAVASCRIPT"
,"PHP","WORDPRESS",'HTML',"CSS","JAVASCRIPT","PHP","MYSQL"];
     var tagCloud=TagCloud('.Sphere',Texts,{
         radius: 150,
         maxSpeed: 'normal',
         initSpeed:'fast',
         direction:135,
         keep:true


     });
        }else{
            const Texts=['HTML',"CSS","JAVASCRIPT","PHP","MYSQL","WORDPRESS","JAVASCRIPT"
,"PHP","WORDPRESS",'HTML',"CSS","JAVASCRIPT","PHP","MYSQL"];
     var tagCloud=TagCloud('.Sphere',Texts,{
         radius: 250,
         maxSpeed: 'normal',
         initSpeed:'fast',
         direction:135,
         keep:true


     });
        }
   
     var color ='crimson';
     document.querySelector(".Sphere").style.color=color;
 </script>

        <?php
    }

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'font-awesome','simple-line-icons','oceanwp-style','fontawesome' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION
add_action('wp_footer','wpb_hook_javascript_footer');
 function add_enqueue_script(){
    wp_enqueue_script('zmenu',get_stylesheet_directory_uri() . '/js/zmenu.js',array(),'1.0.0',true);

}
add_action('wp_enqueue_scripts','add_enqueue_script');

 function add_enqueue_particles(){
    wp_enqueue_script('particles',get_stylesheet_directory_uri() . '/js/particles.js',array(),'1.0.0',true);

}
add_action('wp_enqueue_scripts','add_enqueue_particles');
function add_enqueue_zapp(){
    wp_enqueue_script('zapp',get_stylesheet_directory_uri() . '/js/zapp.js',array(),'1.0.0',true);

}
add_action('wp_enqueue_scripts','add_enqueue_zapp');

add_action( 'wp_enqueue_scripts', 'add_aos_animation' );
 function add_aos_animation() {
     wp_enqueue_style('AOS_animate', 'https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css', false, null);
     wp_enqueue_script('AOS', 'https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js', false, null, true);
     wp_enqueue_script('theme', get_stylesheet_directory_uri() . '/js/theme.js', array( 'AOS' ), null, true);
 }
?>