<?php
   /*
   Plugin Name: Copyright Protected
   Plugin URI: http://www.teamversion.com/plugins/copyright-protected/
   description: A plugin to create and display the copyright year
   Version: 1.0
   Author: Ed Galian
   Author URI: http://www.teamversion.com/about/
   License: GPL2
   */

  function eg_cprp_showCopyright(){
    echo ("<div style='width:100%; font-size: 9px; text-align: center; '>");
    echo ("Copyright ");	
    echo   date("Y"); 
    echo ("</div><p></p>");
  }
  
  function eg_cprp_postPublicDomain($atts){
    $atts = shortcode_atts( array(
                 "bold" => false), $atts );
    $copy = "";
	$copy = "<div style='width:100%; font-size: 9px; text-align: center; color: Grey; '>";
	if ( $atts["bold"]==true ) {
      $copy = $copy."<b>License: Public Domain</b> ";
    } else {
	  $copy = $copy."License: Public Domain ";
    }
    $copy = $copy . "</div><p></p>"; 
    
    return  $copy;
  }
  
  add_action("wp_footer" , "eg_cprp_showCopyright", 1);
  /* short code for showCopyright */
  add_shortcode("postpubdom", "eg_cprp_postPublicDomain");
?>
