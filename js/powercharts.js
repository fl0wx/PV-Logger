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
        var startDate = new Date(2012,1,20);
        var endDate = new Date(2012,1,25);
        $('#date-start')
            .datepicker({language:'de'})
            .on('changeDate', function(ev){
                if (ev.date.valueOf() > endDate.valueOf()){
                    $('#alert').show().find('strong').text('Startdatum muss vor dem Enddatum liegen.');
                } else {
                    $('#alert').hide();
                    startDate = new Date(ev.date);
                    $('#date-start-display').text($('#date-start').data('date'));
                }
                $('#date-start').datepicker('hide');
            });
        $('#date-end')
            .datepicker({language:'de'})
            .on('changeDate', function(ev){
                if (ev.date.valueOf() < startDate.valueOf()){
                    $('#alert').show().find('strong').text('Startdatum muss vor dem Enddatum liegen.');
                } else {
                    $('#alert').hide();
                    endDate = new Date(ev.date);
                    $('#date-end-display').text($('#date-end').data('date'));
                }
                $('#date-end').datepicker('hide');
            });

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

