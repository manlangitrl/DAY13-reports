<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporting</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h3>Reporting</h3>
                <hr>
            </div>
            <div class="col-3">
                <div class="card"> 
                    <div class="card-body">
                        <h5 class="card-title">{{$total_customers}}</h5>
                        <small class="card-text">
                            Total number of customers
                        </small> 
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card"> 
                    <div class="card-body">
                        <h5 class="card-title">{{$app}}</h5>
                        <small class="card-text">
                           Total customers using app
                        </small> 
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card"> 
                    <div class="card-body">
                        <h5 class="card-title">{{ $browser}}</h5>
                        <small class="card-text">
                        Total customers using browser
                        </small> 
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card"> 
                    <div class="card-body">
                        <h5 class="card-title">{{ $male}}</h5>
                        <small class="card-text">
                        Male Customer
                        </small> 
                    </div>
                </div>
            </div>
            </div>
            <div class="row mt-2">
            <div class="col-3">
                <div class="card"> 
                    <div class="card-body">
                        <h5 class="card-title">{{ $female}}</h5>
                        <small class="card-text">
                        Female Customer
                        </small> 
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card"> 
                    <div class="card-body">
                        <h5 class="card-title">{{ $age['child']}}</h5>
                        <small class="card-text">
                        Child Customer
                        </small> 
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card"> 
                    <div class="card-body">
                        <h5 class="card-title">{{ $age['adolescense']}}</h5>
                        <small class="card-text">
                        Adolescense Customer
                        </small> 
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card"> 
                    <div class="card-body">
                        <h5 class="card-title">{{ $age['adult']}}</h5>
                        <small class="card-text">
                        Adult Customer
                        </small> 
                    </div>
                </div>
            </div>
            <div class="col-3 mt-2">
                <div class="card"> 
                    <div class="card-body">
                        <h5 class="card-title">{{ $age['senior']}}</h5>
                        <small class="card-text">
                        Senior Customer
                        </small> 
                    </div>
                </div>
            </div>
            <div class="col-3 mt-2">
                <div class="card"> 
                    <div class="card-body">
                        <h5 class="card-title">{{ $country['asia']}}</h5>
                        <small class="card-text">
                        ASIA Customer
                        </small> 
                    </div>
                </div>
            </div>
            <div class="col-3 mt-2">
                <div class="card"> 
                    <div class="card-body">
                        <h5 class="card-title">{{ $country['africa']}}</h5>
                        <small class="card-text">
                        AFRICA Customer
                        </small> 
                    </div>
                </div>
            </div>
            <div class="col-3 mt-2">
                <div class="card"> 
                    <div class="card-body">
                        <h5 class="card-title">{{ $country['europe']}}</h5>
                        <small class="card-text">
                       EUROPE Customer
                        </small> 
                    </div>
                </div>
            </div>
            <div class="col-3 mt-2">
                <div class="card"> 
                    <div class="card-body">
                        <h5 class="card-title">{{ $country['us']}}</h5>
                        <small class="card-text">
                      US Customer
                        </small> 
                    </div>
                </div>
            </div>
            <div class="col-3 mt-2">
                <div class="card"> 
                    <div class="card-body">
                        <h5 class="card-title">{{ $country['australia']}}</h5>
                        <small class="card-text">
                      AUSTRALIA Customer
                        </small> 
                    </div>
                </div>
            </div>
            <div class="col-12"></div>
            <div class="col-3">
                <canvas id="bydevice" width="100px" height="100px"></canvas>
            </div>
            <div class="col-3">
                <canvas id="byGender" width="100px" height="100px"></canvas>
            </div>
            <div class="col-3">
                <canvas id="byAge" width="100px" height="100px"></canvas>
            </div>
            <div class="col-3">
                <canvas id="byCountry" width="100px" height="100px"></canvas>
            </div>
        </div>
            
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.3.2/dist/chart.min.js"></script>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>    

<script> 
    var myChart = new Chart(document.getElementById('bydevice').getContext('2d'), {
        type: 'pie',
        data: {
            labels: [
                'App',
                'Browser' 
            ],
            datasets: [{ 
                data: [{{$app}}, {{$browser}}],
                backgroundColor: [
                    'red',
                    'yellow' 
                ]
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Customers by Device'
                }
            }
        }
    });
    </script>

<script> 
    var myChart = new Chart(document.getElementById('byGender').getContext('2d'), {
        type: 'pie',
        data: {
            labels: [
                'Male',
                'Female' 
            ],
            datasets: [{ 
                data: [{{$male}}, {{$female}}],
                backgroundColor: [
                    'black',
                    'pink' 
                ]
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Customers by Gender'
                }
            }
        }
    });
    </script>
    <script> 
    var myChart = new Chart(document.getElementById('byAge').getContext('2d'), {
        type: 'pie',
        data: {
            labels: [
                'Child',
                'Adolescense',
                'Adult',
                'Senior'
               
            ],
            datasets: [{ 
                data: [{{ $age['child']}}, {{ $age['adolescense']}},{{ $age['adult']}},{{ $age['senior']}}],
                backgroundColor: [
                    'red',
                    'blue',
                    'green',
                    'orange' 
                ]
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Customers by Age Group'
                }
            }
        }
    });
    </script>

    <script> 
    var myChart = new Chart(document.getElementById('byCountry').getContext('2d'), {
        type: 'pie',
        data: {
            labels: [
               'ASIA',
                'EUROPE',
                'AFRICA',
                'US',
                'AUSTRALIA',
            ],
            datasets: [{ 
                data: [{{ $country['asia']}}, {{ $country['europe']}},{{ $country['africa']}},{{ $country['us']}},{{ $country['australia']}}],
                backgroundColor: [
                    'red',
                    'yellow' ,
                    'green',
                    'black',
                    'blue'
                ]
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Customers by Country'
                }
            }
        }
    });
    </script> 
</body>
</html>
