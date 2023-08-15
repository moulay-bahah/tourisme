<div class="links">
      <div class="img">
        <img 
        
        width="100"
          height="60"
           
            
            src= "<?php echo get_template_directory_uri() . '/assets/images/logo.jpg'?> " 

        
          alt="Mauritania trip report Logo" />
      </div>
      <div class="links-nav">
        <h2>Mauritania trip report</h2>
        <ul>
          <li><a href="">Nouakchott</a></li>
          <li><a href="">Heart of the Adrar</a></li>
          <li><a href="">Tagant Desert</a></li>
        </ul>
      </div>
        
    
<div class="form">
    <h2>Start Your Plans</h2>
    <form>
        <div class="input">
            <label for="peopleNum"> Number of Travelers </label>
            <span>How many people will be in your travel group?</span>
            <input value="2" type="number" min="1" max="20" id="peopleNum" />
        </div>
        <div class="input">
            <label for="startData"> Start Date </label>
            <input type="text" id="startData" />
        </div>
        <div class="input">
            <label for="endData"> End Date </label>
            <input type="text" id="endData" />
        </div>
        <div class="input">
            <label for="select">Which tour would you like?</label>
            <select id="select" name="select-1">
                <option value="nouakchott" data-calculation="0">
                    Nouakchott
                </option>
                <option value="heart-of-adrar" selected="selected">
                    Heart of Adrar
                </option>
                <option value="tagant-desert" data-calculation="0">
                    Tagant Desert
                </option>
                <option value="protected-coast" data-calculation="0">
                    Protected Coast
                </option>
                <option value="delta-tour" data-calculation="0">
                    Delta Tour
                </option>
                <option value="build-my-own" data-calculation="0">
                    Build my own
                </option>
            </select>
        </div>
        <button>Start Booking</button>
    </form>
</div>

</div>