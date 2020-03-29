$( document ).ready(function() {

  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);
  
  function drawChart() {
  
   $.get("http://projetweb.test/ProjetECommerce/statsDataProvider").done(function(jsonData){
      var data = new google.visualization.DataTable();
                data.addColumn('string', 'Type');
                data.addColumn('number', 'Quantite');
  
      jsonData = JSON.parse(jsonData);
      Object.keys(jsonData).forEach(function (key) {
            data.addRow(jsonData[key]);
          });
  
      var options = {
      };
  
      var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  
      chart.draw(data, options);
    });
  }
});