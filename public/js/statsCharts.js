$( document ).ready(function() {

  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(soldByTitle);
  google.charts.setOnLoadCallback(soldByStyle);
  
  function soldByTitle() {
  
   $.get("http://projetweb.test/ProjetECommerce/statsDataProvider").done(function(jsonData){
      var data = new google.visualization.DataTable();
                data.addColumn('string', 'Type');
                data.addColumn('number', 'Quantite');
  
      jsonData = JSON.parse(jsonData);
      Object.keys(jsonData).forEach(function (key) {
            data.addRow(jsonData[key]);
          });
  
      var options = { title :"Nombre de tome vendu par titre",
        width:600,
        height:600
      };
  
      var chart = new google.visualization.PieChart(document.getElementById('soldByTitle'));
  
      chart.draw(data, options);
    });
  }


  function soldByStyle() {
  
    $.get("http://projetweb.test/ProjetECommerce/statsDataProvider").done(function(jsonData){
       var data = new google.visualization.DataTable();
                 data.addColumn('string', 'Type');
                 data.addColumn('number', 'Quantite');
   
       jsonData = JSON.parse(jsonData);
       Object.keys(jsonData).forEach(function (key) {
             data.addRow(jsonData[key]);
           });
   
       var options = { title :"Nombre de tome vendu par type",
         width:600,
         height:600
       };
   
       var chart = new google.visualization.PieChart(document.getElementById('soldByStyle'));
   
       chart.draw(data, options);
     });
   }

});






soldByStyle