<!DOCTYPE html>
<html>
<head>
    <title>exam</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="">
  
                            

<div class="row">

<div class="col-xl-8 col-lg-7 ">
                      <div class="card shadow mb-3">
                      <div class="card-header py-3">
                          <h6 class="m-0 font-weight-bold text-primary">Graphique</h6>

                                         <div>
                                            <canvas id="myChart"></canvas>
                                            <canvas id="formationChart"></canvas>
                                        </div>

                                        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                                        <script>
                                            const ctx = document.getElementById('myChart');
                                            var ages = <?php echo $ages; ?>;
                                                    var labels = [], data = [];
                                                    for (var i = 0; i < ages.length; i++) {
                                                        labels.push(ages[i].age);
                                                        data.push(ages[i].total);
                                                    }
                                            
                                            new Chart(ctx, {
                                                type: 'bar',
                                                data: {
                                                labels: labels,
                                                datasets: [{
                                                    label: '# Tranche age',
                                                    data: data,
                                                    backgroundColor: [
                                                    'rgba(31, 58, 147, 1)',
                                                    'rgba(37, 116, 169, 1)',
                                                    'rgba(92, 151, 191, 1)',
                                                    'rgb(200, 247, 197)',
                                                    'rgb(77, 175, 124)',
                                                    'rgb(30, 130, 76)'
                                                    ],
                                                    borderColor: [
                                                        'rgba(31, 58, 147, 1)',
                                                        'rgba(37, 116, 169, 1)',
                                                        'rgba(92, 151, 191, 1)',
                                                        'rgb(200, 247, 197)',
                                                        'rgb(77, 175, 124)',
                                                        'rgb(30, 130, 76)'
                                                    ],
                                                    borderWidth: 1
                                                }]
                                                },
                                                options: {
                                                scales: {
                                                    y: {
                                                    beginAtZero: true
                                                    }
                                                }
                                                }
                                                
                                            });
                                            
                                            
                          
                                            const ctx1 = document.getElementById('formationChart');

                                            var formation_tranche = <?php echo $formation_tranche; ?>;
                                            var labelformation = [], dataformation = [];
                                            for (var i = 0; i < formation_tranche.length; i++) {
                                                labelformation.push(formation_tranche[i].isStarted);
                                                dataformation.push(formation_tranche[i].total);
                                            }
                                            new Chart(ctx1, {
                                                type: 'bar',
                                                data: {
                                                labels: labelformation,
                                                datasets: [{
                                                    label: '# Statistique formation',
                                                    data: dataformation,
                                                    backgroundColor: [
                                                    'rgba(31, 58, 147, 1)',
                                                    'rgba(37, 116, 169, 1)',
                                                    'rgba(92, 151, 191, 1)',
                                                    'rgb(200, 247, 197)',
                                                    'rgb(77, 175, 124)',
                                                    'rgb(30, 130, 76)'
                                                    ],
                                                    borderColor: [
                                                        'rgba(31, 58, 147, 1)',
                                                        'rgba(37, 116, 169, 1)',
                                                        'rgba(92, 151, 191, 1)',
                                                        'rgb(200, 247, 197)',
                                                        'rgb(77, 175, 124)',
                                                        'rgb(30, 130, 76)'
                                                    ],
                                                    borderWidth: 1
                                                }]
                                                },
                                                options: {
                                                scales: {
                                                    y: {
                                                    beginAtZero: true
                                                    }
                                                }
                                                }
                                                
                                            });
                                ??????????????</script>
                    </div>





</body>
</html>

</body>
</html>