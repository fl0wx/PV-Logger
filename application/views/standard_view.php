<div class="container-fluid">
        <div class="span9">
          <div class="hero-unit">
          <?php 
            if($logged_in != TRUE)
            { ?>
            <div>
              <h1>
                Übersicht
              </h1>
              <p>
                Bitte einloggen.
              </p>
            </div>            
           <?php }
           else
           { ?>
              <div>
              <h1>
                Übersicht
              </h1>
              <p>
                Willkommen <?php echo $name ?>
              </p>
            </div> 
           <?php }
           ?>
          </div>
          <div class="row-fluid">
          </div>