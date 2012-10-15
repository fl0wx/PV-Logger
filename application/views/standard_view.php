<div class="container-fluid">
<!--      <div class="row-fluid">
        <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">
                Header
              </li>
              <li>
              </li>
              <li class="">
                <a href="#">
                  Link
                </a>
              </li>
              <li class="">
                <a href="#">
                  Link
                </a>
              </li>
              <li class="">
                <a href="#">
                  Link
                </a>
              </li>
            </ul>
          </div>
        </div>-->
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
            <!--<a class="btn btn-primary" href="#">
              <i class="icon-exclamation-sign"></i> Lern more
            </a>-->
            
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
           <!--  <div class="span4">
              <div>
                <h2>
                  Heading
                </h2>
                <p>
                  Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus
                  ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo
                  sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed
                  odio dui.
                </p>
              </div>
              <a class="btn" href="#">
                View details »
              </a>
            </div>
           <div class="span4">
              <div>
                <h2>
                  Heading
                </h2>
                <p>
				<a class="btn" href="#">
					<i class="icon-refresh"></i> Refresh</a>
                  Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus
                  ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo
                  sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed
                  odio dui.
                </p>
              </div>
              <a class="btn" href="#">
                View details »
              </a>
            </div>
            <div class="span4">
              <div>
                <h2>
                  Heading
                </h2>
                <p>
                  Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus
                  ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo
                  sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed
                  odio dui.
                </p>
              </div>
              <a class="btn" href="#">
                View details »
              </a>
            </div>
          </div>
          <div class="row-fluid">
            <div class="span4">
              <div>
                <h2>
                  Heading
                </h2>
                <p>
                  Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus
                  ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo
                  sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed
                  odio dui.
                </p>
              </div>
              <a class="btn" href="#">
                View details »
              </a>
            </div>
            <div class="span4">
              <div>
                <h2>
                  Heading
                </h2>
                <p>
                  Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus
                  ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo
                  sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed
                  odio dui.
                </p>
              </div>
              <a class="btn" href="#">
                View details »
              </a>
            </div>
            <div class="span4">
              <div>
                <h2>
                  Heading
                </h2>
                <p>
                  Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus
                  ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo
                  sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed
                  odio dui.
                </p>
              </div>
              <a class="btn" href="#">
                View details »
              </a>
            </div>-->
          </div>