function drawChart() {
    var chart;
    var data;
    var options;
    
    var jsonData = $.ajax({
        url: "https://ssl-id.de/studi.stoiner.de/power/getPower/"+power_graph,
        dataType:"json",
        async: false
    }).responseText;

    // DataTable aus den JSON Daten erzeugen
    data = new google.visualization.DataTable(jsonData);

    // Instanziierung und Zeichnung des Graphen.
    switch(power_graph)
    {
    case 'current':
      $('div.page-header').html('<h1>Momentanleistung</h1>');
      chart = new google.visualization.Gauge(document.getElementById('google_chart'));
      chart.draw(data, {width: 540, height: 290 ,max: 6000, minorTicks: 10});
      break;
    case 'today':
      $('div.page-header').html('<h1>Leistung heute</h1>');
    
      data = google.visualization.arrayToDataTable([
          ['Stunde', 'Wh'],
          ['0.25',  100],
          ['0.5',  120],
          ['0.75',  124],
          ['1',  125],
          ['2',  100],
          ['3',  120],
          ['4',  124],
          ['5',  150],
          ['8',  420],
          ['9',  830],
          ['11',  1120],
          ['12',  1650],
          ['14',  2334],
          ['17',  980],
          ['19',  670],
          ['24',  100],
        ]);

        options = {
          title: 'Leistung',
          hAxis: {title: 'Uhrzeit',  titleTextStyle: {color: 'red'}}
        };

        chart = new google.visualization.AreaChart(document.getElementById('google_chart'));
        chart.draw(data, options);
        
      break;
    case 'month':
      $('div.page-header').html('<h1>Leistung Monat</h1>');
      break;
    case 'transnet':
      $('div.page-header').html('<h1>Leistung Transnet-BW</h1>');
      break;
    case 'self':
      $('div.page-header').html('<h1>Selbstdefinierter Zeitraum</h1>');
      break;
    case 'efficiency':
      $('div.page-header').html('<h1>Wirtschaftlichkeit</h1>');
      break;
    case 'compare':
      $('div.page-header').html('<h1>Vergleich Vorjahr</h1>');
      break;
    case 'inverter':
      $('div.page-header').html('<h1>Wechselrichter Diagramm</h1>');
      break;
    default:
      
    }
    
}

