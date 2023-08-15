<div class="footer-links">
      <div class="contacts">
        <div   >
          <img class="img"
          width="100"
          height="60"
           
            
            src= "<?php echo get_template_directory_uri() . '/assets/images/logo.jpg'?> " 
            
              
            alt=""
          />
        </div>
        <div class="contact">
          <p class="location">
            <i class="fa-solid fa-location-dot"></i>
            nouacchott, mouritania
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
      </div>
      <div class="tours">
        <h4>tours</h4>
        <ul> 
          <?php
            get_simple_menu('footer-tours');
            ?>
        </ul>
      </div>
      <div class="Attractions">
        <h4>Attractions</h4>
        <ul>
          <!-- <li><a href="">Chinguetti</a></li>
          <li><a href="">Ouadane</a></li>
          <li><a href="">Oualata</a></li>
          <li><a href="">Tichit</a></li> -->
          <?php
            get_simple_menu('footer-attractions');
            ?>
        </ul>
      </div>
    </div>