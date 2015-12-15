<?php 

/*
Plugin name: Niels' Instagrab Shortcode
Description: Brug shortcode [instagrab] for at vise Insta Grabagram's do_action output i en editor
*/

function niels_instagrab_shortcode(){
    
    if(has_action('insta_grab_a_gram')){
        ob_start();
        
        do_action('insta_grab_a_gram');
        
        return ob_get_clean();
    }
}    
add_shortcode('instagrab','niels_instagrab_shortcode');