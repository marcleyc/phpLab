<?php
//https://tutorialjustica.github.io/
$url= 'http://ckandev.northeurope.cloudapp.azure.com';
$urlPath = '/api/action/datastore_search';
$graph = file_get_contents($url.$urlPath.'?resource_id=e692486c-e84c-48db-a119-e7bfea4f45e1');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js"></script>
    <title>B A S E   B O O T S T R A P</title>
</head>

<body>
    <canvas id="graph" class="embedGraph" style="height:200px;"></canvas>

<script>

var graphData = <?php echo $graph; ?>;
graphData = graphData.result.records;

function getLabels(data){
    var temp = [];
    data.forEach(function(result){
        temp.push(result.Year.toString());
    });
    return temp;
}
function getDatasetdata(data, property) {
    var temp = [];
    data.forEach(function(result){
        temp.push(result[property]);
    });
    return temp;
}

var graphData = {
    labels: getLabels(graphData),
    datasets: [{
        label: 'Número de Jovens',
        backgroundColor: "rgba(13, 206, 169, 0.3)",
        borderColor: "rgba(13, 206, 169, 1)",
        borderWidth: 1,
        data: getDatasetdata(graphData, 'NumeroJovens')
    }]
};

new Chart(document.getElementById("graph").getContext('2d'), {
    type: 'line',
    data: graphData,
    options: {
        responsive: true,
        tooltips: {
            mode: 'index',
            intersect: false,
        },
        hover: {
            mode: 'nearest',
            intersect: true
        }
    }
});





</script> 

</body>
</html>