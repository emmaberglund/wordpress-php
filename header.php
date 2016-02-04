<!DOCTYPE html>
<html <?php language_attributes();?>>
    <head>
        <meta charset="<?php bloginfo('charset')?>">
        <meta name="viewport" content="width=device-width">
        <style>html {margin-top: 0;}</style>
        <title>
            <?php 
                wp_title('|', true, 'right'); //echoar ut till höger om namnet
                bloginfo('name'); //webpage name
            ?>
        </title>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        
        <?php wp_head(); ?>
    </head>
    
<body>
    <header>
        <div id="header-image">
            <label for="show-menu" class="show-menu"><img src="<?php bloginfo('template_directory'); ?>/images/menu_button.png">               </label>
		    <input type="checkbox" id="show-menu" role="button">
            
           
            
            
        
            <!--<h1><a href="<//?php echo home_url();?>"><//?php bloginfo('name');?></a></h1>
            <h5><//?php bloginfo('description');?></h5>

                <//?php if(is_page('about-2')){
                    echo "This is conditional logic that works for specific pages";

                }?>-->
     
         
             <a href="http://berglundscykel.se"><h1 id="logo"><span id="bold">BERGLUNDS</span> Cykel &amp; Sport</h1></a>
                
            <nav class="main-nav">
                <?php wp_nav_menu([
                
                    'theme_location' => 'primary'
            
                ]); ?>
        
                </div>
        </nav>
    </div>
        
    
    </header>
