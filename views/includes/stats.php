<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

       $.get("<?=ROOT_PATH?>statsDataProvider").done(function(jsonData){
          var data = new google.visualization.DataTable();
                    data.addColumn('string', 'Type');
                    data.addColumn('number', 'Quantite');

          jsonData = JSON.parse(jsonData);
          Object.keys(jsonData).forEach(function (key) {
                data.addRow(jsonData[key]);
              });

          var options = {
            title: 'My Daily Activities'
          };

          var chart = new google.visualization.PieChart(document.getElementById('piechart'));

          chart.draw(data, options);
        });
      }

    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>