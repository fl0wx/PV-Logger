<div class="container-fluid">
    <div class="row-fluid">
<!--        <div class="span3">
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
        <div class="span12">
            <div class="page-header">
                <h1>Nutzer-Verwaltung</h1>
            </div>
          <div class="row-fluid">
           <div class="span9">
              <div>
                  
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Username</th>
                      <th>Email</th>
                      <th>Userlevel</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php foreach ($manageusers as $row): ?>
                        <tr>
                            <td><?php echo $row->ID;?></td>
                            <td><?php echo $row->username;?></td>
                            <td><?php echo $row->email;?></td>
                            <td><?php echo $row->userlevel;?></td>
                        </tr>
                      <?php endforeach; ?>
                  </tbody>
                </table>
              </div>

            </div>
<!--           <div class="span4">
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
            </div>-->
          </div>
<!--          <div class="row-fluid">
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