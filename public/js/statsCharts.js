$( document ).ready(function() {

  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(soldByTitle);

  
  function soldByTitle() {
  
   $.get("http://projetweb.test/ProjetECommerce/statsDataProvider").done(function(jsonData){
      var data = new google.visualization.DataTable();
                data.addColumn('string', 'Type');
                data.addColumn('number', 'Quantite');
  
      jsonData = JSON.parse(jsonData);
      var result = [];

      for(var i in jsonData)
      result.push([i, jsonData [i]]);

      data.addRows(result);
  
      var options = { title :"Nombre de tome vendu par titre",
        width:600,
        height:600
      };
  
      var chart = new google.visualization.PieChart(document.getElementById('soldByTitle'));
  
      chart.draw(data, options);
    });
  }

});