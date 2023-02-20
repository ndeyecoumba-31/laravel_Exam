
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

   

    <!-- Custom fonts for this template-->
    <link href="{{asset('style/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Menu</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    
                    <li>
                    
                              <a href="{{ url('/type') }}" class="btn  btn-sm text-white" title="Liste">
                    <i class="fas fa-fw fa-wrench"></i>
                    
                    <h7><span>Type</span></h7>
                    </li>
                              
                              
                        <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                             
                              </a>
                              <a href="{{ url('/referentiel') }}" class="btn  btn-sm text-white" title="Liste">
                              
                                      <i class="fas fa-fw fa-cog"></i>
                                      <span><h7>Referentiel</h7></span>
                                 </a>
                           
                            

                        </ul></br>
                        <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                        <li class="nav-item">
                                <a href="{{ url('formation') }}" class="btn  btn-sm text-white" title="Liste">
                                 <i class="fas fa-fw fa-tachometer-alt"></i>
                                          <span><h7>Formation</h7></span></a>
                                     </li></ul></br>
                    
                    
                    
                    
                              <!-- Nav Item - Tables -->
                            <li class="nav-item">
                            <a href="{{ url('candidat') }}" class="btn  btn-sm text-white" title="Liste">
                                    <i class="fas fa-fw fa-table"></i>
                                    <span><h7>Candidat</h7></span></a>
                            </li></br>
                   
                    
                     <!-- Nav Item - Charts -->
                     <li class="nav-item">
                         <a href="{{ url('statistique') }}" class="btn  btn-sm text-white" title="Liste">
                                <i class="fas fa-fw fa-chart-area"></i>
                                     <span>Graphique</span>
                          </a>
                         </li>
                       
                     </ul>
                    <hr>
                
                 </div>
                          </div>
                            <div class="col py-3">
                            
                                <!-- Page Wrapper -->
                        <div id="wrapper">

                    
                    <!-- Content Wrapper -->
                    <div id="content-wrapper" class="d-flex flex-column">

                        <!-- Main Content -->
                        <div id="content">


                            <!-- Begin Page Content -->
                            <div class="container-fluid">
                                 <!-- Page Heading -->
                                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                    <h1 class="h3 mb-0 text-gray-800">Statistique</h1>
                                </div>
                                <!-- Content Row -->
                                <div class="row">

                                    <!-- candidat/formation -->
                                    <div class="col-xl-3 col-md-6 mb-4">
                                        <div class="card border-left-primary text-white bg-secondary shadow  py-2">
                                            <div class="card-body">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col mr-2">
                                                    <div class="card-header">Candidat/Formation</div>
                                                <div class="card-body">
                                                            @foreach($formation as $count)
                                                        <li> {{ $count->candidat_count }} {{ $count->nom}}</li>
                                                         @endforeach</div>
                                                    
                                                        </div>
                                                        <div class="col-auto">
                                                <i class="fas fa-comments fa-2x text-gray-300"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Formation/Referentiel -->
                                    <div class="col-xl-3 col-md-6 mb-4">
                                        <div class="card border-left text-white bg-dark shadow  py-2">
                                            <div class="card-body">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col mr-2">
                                                    <div class="card-header">Formation/Referenti</div>
                                                    @foreach($referentiel as $count)
                                                    <li>{{ $count->formation_count }}
                                                    {{ $count->libelle}}</li>
                                                             @endforeach
                                                        <div class="col-auto">
                                                <i class="fas fa-comments fa-2x text-gray-300"></i></div></div>
                                                        
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- type/formation -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                        <div class="card border-left text-white bg-secondary shadow h-100  py-2">
                                            <div class="card-body">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col mr-2">

                                                    <div class="card-header">formation/type</div>
                                                    <lu>@foreach ($formations_type as $type)
                                                            <li> Type {{ $type->libelle}}</li>
                                                                @foreach ($type->referentiel as $referentiel)
                                                                    @foreach ($referentiel->formation as $formation)
                                                                    {{ $formation->nom }}</br>
                                                                    @endforeach
                                                                    @endforeach
                                                            </lu>
                                                         @endforeach</div>
                                                <div class="col-auto">
                                                <i class="fas fa-comments fa-2x text-gray-300"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                    <!-- Pending Requests Card Example -->
                                    <div class="col-xl-3 col-md-6 mb-4" >
                                        <div class="card border-left text-white bg-dark">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col mr-2">
                                                    
                                                    <div class="card-header">SexeCandidat</div>
                                                    <div class="card-body">
                                                        <h5 class="card-title"><li>{{ $candidat_total }} AU TOTAL</li></h5>
                                                                <li>{{ $candidat_feminins }} Femme(s)</li>
                                                                <li>{{ $candidat_masculins }} Homme(s)</li>
                                                                <div class="col-auto">
                                                <i class="fas fa-comments fa-2x text-gray-300"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                </div>
                                

                            </div>
                            </div>
                        </div>
                    </div>
                    <div>
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
                                       </script>
                    </div>

<body id="page-top">

                    
</body>

</html>

</x-app-layout>