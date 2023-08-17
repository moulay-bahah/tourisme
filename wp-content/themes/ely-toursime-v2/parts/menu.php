<?php
require_once('menu-utiles.php');


?>

<div class="nav-icon" id="navBotton">
    <span></span>
    <span></span>
    <span></span>
</div>
<nav id="nav">
    <div class="iteme">
        <ul>
            <li class="logo">
            
                
             
                <?php
                //$res = get_the_permalink().'book/';
               // $log_message = print_r($res, true); // Utilisez true pour capturer la sortie dans une variable
                // Enregistrez le message dans le fichier de journalisation en utilisant error_log
               // error_log($log_message);
                //LOG_DEBUG($items); 
               // error_log($log_message);

                ?>
                <a href="<?php echo get_the_permalink(); ?>">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/logo.jpg' ?>" alt="logo" />
                </a>
            </li>
            <li><a href="<?php echo get_the_permalink().'book/'; ?>">Book Now</a></li>



            <?php
            get_menu_with_items('tours');
            ?>
            <?php
            get_menu_with_items('attractions');
            ?>

            <?php
            get_simple_menu('header-menu');
            ?>


        </ul>
    </div>
    <div class="contact">
        <p class="location">
            <i class="fa-solid fa-location-dot"></i>
            nouakchott, mouritania
        </p>
        <div class="icons">
            <i class="fa-brands fa-google" style="color: #e83f3a"></i>
            <i class="fa-brands fa-whatsapp" style="color: #2ba63b"></i>
            <i class="fa-brands fa-facebook" style="color: #4b69b1"></i>
            <i class="fa-brands fa-instagram" style="color: rgb(224 74 145)"></i>
        </div>
        <p class="telephone">
            <i class="fa-solid fa-phone"></i>
            +222 34532523
        </p>
    </div>
</nav>
