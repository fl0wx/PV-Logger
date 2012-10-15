<div class="container-fluid">
    <div class="row-fluid">
        <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">
                Graphen
              </li>
              <li>
              </li>
              <li class="">
                <?php echo anchor('power/test', '<i class="icon-dashboard"></i> Momentanleistung');?>  
              </li>
              <li class="">
                <a href="#">
                  <i class="icon-bar-chart"></i> Leistung heute
                </a>
              </li>
              <li class="">
                <a href="#">
                  <i class="icon-bar-chart"></i> Leistung Monat
                </a>
              </li>
              <li class="">
                <a href="#">
                  <i class="icon-bar-chart"></i> Leistung Transnet-BW
                </a>
              </li>
              <li class="">
                <a href="#">
                  <i class="icon-bar-chart"></i> Selbstdefinierter Zeitraum
                </a>
              </li>
              <li class="">
                <a href="#">
                  <i class="icon-money"></i> Wirtschaftlichkeit
                </a>
              </li>
              <li class="">
                <a href="#">
                  <i class="icon-bar-chart"></i> Vergleich Vorjahr
                </a>
              </li>
              <li class="">
                <a href="#">
                  <i class="icon-bar-chart"></i> Darstellung Wechselrichter
                </a>
              </li>
            </ul>
            <br />
            <br />
            <br />
            <br />
            <br />
          </div>
        </div>
        <div class="span9">    
          <div class="row-fluid">
           <div class="span9">
              <div class="page-header">
                    <h1>Momentanleistung</h1>
              </div>
              <div id="google_chart">
                     
               <script type="text/javascript">
            // access php variable
            power_graph='<?php echo $power_graph;?>';

            //Lade Gauge Package
            google.load('visualization', '1', {'packages':['gauge']});

            // Set a callback to run when the Google Visualization API is loaded.
            google.setOnLoadCallback(drawChart);
            
            function drawChart() {
              var jsonData = $.ajax({
                  url: "http://studi.stoiner.de/power/getTestData/"+power_graph,
                  dataType:"json",
                  async: false
                  }).responseText;

              // Create our data table out of JSON data loaded from server.
              var data = new google.visualization.DataTable(jsonData);

              // Instantiate and draw our chart, passing in some options.
              var chart = new google.visualization.Gauge(document.getElementById('google_chart'));
              chart.draw(data, {width: 550, height: 300 ,max: 6000, minorTicks: 10});
            }

            

            </script>

               
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