function drawChart() {
    var jsonData = $.ajax({
        url: "https://ssl-id.de/studi.stoiner.de/power/getPower/"+power_graph,
        dataType:"json",
        async: false
    }).responseText;

    // DataTable aus den JSON Daten erzeugen
    var data = new google.visualization.DataTable(jsonData);

    // Instanziierung und Zeichnung des Graphen.
    if(power_graph == 'current'){
        var chart = new google.visualization.Gauge(document.getElementById('google_chart'));
        chart.draw(data, {width: 540, height: 290 ,max: 6000, minorTicks: 10});
    }else{
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses'],
          ['2004',  1000,      400],
          ['2005',  1170,      460],
          ['2006',  660,       1120],
          ['2007',  1030,      540]
        ]);

        var options = {
          title: 'Company Performance',
          hAxis: {title: 'Year',  titleTextStyle: {color: 'red'}}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('google_chart'));
        chart.draw(data, options);
    }
    
}

