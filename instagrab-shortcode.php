<?php 

/*
Plugin name: Niels' Instagrab Shortcode
Description: Brug shortcode [instagrab] for at vise Insta Grabagram's do_action output i en editor
*/

function niels_instagrab_shortcode(){
    // Tjek om vores action findes, ellers gør intet
    if(has_action('insta_grab_a_gram')){ 
        // Start output buffer
        ob_start(); 
        
        // Kør action
        do_action('insta_grab_a_gram'); 
        
        // returner og tøm output buffer
        return ob_get_clean(); 
    }
}
// tilføj vores funktion som shortcode
add_shortcode('instagrab','niels_instagrab_shortcode'); 
