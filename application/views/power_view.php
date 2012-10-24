
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
                <?php echo anchor('power/current', '<i class="icon-dashboard"></i> Momentanleistung');?>  
              </li>
              <li class="">
                <?php echo anchor('power/today', '<i class="icon-bar-chart"></i> Leistung heute');?>
              </li>
              <li class="">
                <?php echo anchor('power/month', '<i class="icon-bar-chart"></i> Leistung Monat');?>
              </li>
              <li class="">
                <?php echo anchor('power/transnet', '<i class="icon-bar-chart"></i> Leistung Transnet-BW');?>
              </li>
              <li class="">
                <?php echo anchor('power/self', '<i class="icon-bar-chart"></i> Selbstdefinierter Zeitraum');?>
              </li>
              <li class="">
                <?php echo anchor('power/efficiency', '<i class="icon-money"></i> Wirtschaftlichkeit');?>
              </li>
              <li class="">
                <?php echo anchor('power/compare', '<i class="icon-bar-chart"></i> Vergleich Vorjahr');?>
              </li>
              <li class="">
                <?php echo anchor('power/inverter', '<i class="icon-bar-chart"></i> Wechselrichter Diagramm');?>
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
              <script type="text/javascript">
                  // access php variable
                  power_graph='<?php echo $power_graph;?>';

                  //Lade benötigte Packages
                  google.load('visualization', '1', {'packages':['gauge','corechart']});
                 
                  //Zeichenfunktion aufrufen sobald die API geladen ist
                  google.setOnLoadCallback(drawChart);
              </script>
              <?php  if ($power_graph  == 'self'){?>
                <div class="alert alert-error" id="alert">
                    <strong>Bitte Enddatum und Startdatum eingeben</strong>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                          <th>
                              Start
                              <a href="#" class="btn small" id="date-start" data-date-format="dd-mm-yyyy">Ändern</a>
                          </th>
                          <th>
                              Ende
                              <a href="#" class="btn small" id="date-end" data-date-format="dd-mm-yyyy">Ändern</a>
                          </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                          <td id="date-start-display">-</td>
                          <td id="date-end-display">-</td>
                        </tr>
                    </tbody>
                </table>
              
              <?php }?>
              <div id="google_chart">
          
              </div>

            </div>
          </div>

        </div>