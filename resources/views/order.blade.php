<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders Reporting</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h3>Orders Reporting</h3>
                <hr>
            </div>
            <div class="col-3">
                <div class="card"> 
                    <div class="card-body">
                    <h5 class="card-title">$ {{number_format($data['total_earned'], 2, '.', ',')}}</h5>
                        <small class="card-text">
                            Total Earned
                        </small> 
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card"> 
                    <div class="card-body">
                    <h5 class="card-title">{{number_format($data['avg_order_total'], 2, '.', ',')}}</h5>
                        <small class="card-text">
                           Average Order
                        </small> 
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card"> 
                    <div class="card-body">
                    <h5 class="card-title"> {{$data['category'] ['Toys']}}</h5>
                        <small class="card-text">
                            Toys Category Orders
                        </small> 
                    </div>
                </div>
            </div>
          
            <div class="col-3">
                <div class="card"> 
                    <div class="card-body">
                    <h5 class="card-title"> {{$data['category'] ['Books']}}</h5>
                        <small class="card-text">
                            Toys Category Books
                        </small> 
                    </div>
                </div>
            </div>
            <div class="col-3 mt-2">
                <div class="card"> 
                    <div class="card-body">
                    <h5 class="card-title"> {{$data['category'] ['Home_Supplies']}}</h5>
                        <small class="card-text">
                            Toys Category Home Supplies
                        </small> 
                    </div>
                </div>
            </div>
            <div class="col-3 mt-2">
                <div class="card"> 
                    <div class="card-body">
                    <h5 class="card-title"> {{$data['category'] ['Accessories']}}</h5>
                        <small class="card-text">
                            Toys Category Accessories
                        </small> 
                    </div>
                </div>
            </div>
            <div class="col-3 mt-2">
                <div class="card"> 
                    <div class="card-body">
                    <h5 class="card-title"> {{$data['category'] ['Gadgets']}}</h5>
                        <small class="card-text">
                            Toys Category Gadgets
                        </small> 
                    </div>
                </div>
            </div>
            <div class="col-3 mt-2">
                <div class="card"> 
                    <div class="card-body">
                    <h5 class="card-title"> {{$data['category'] ['Food']}}</h5>
                        <small class="card-text">
                            Toys Category Foods
                        </small> 
                    </div>
                </div>
            </div>
            </iv>
            <div class="col-3 mt-2">
                <div class="card"> 
                    <div class="card-body">
                    <h5 class="card-title"> {{$data['category'] ['Appliances']}}</h5>
                        <small class="card-text">
                            Toys Category Appliances
                        </small> 
                    </div>
                </div>
            </div>
            <div class="col-3 mt-2">
                <div class="card"> 
                    <div class="card-body">
                    <h5 class="card-title"> {{$data['status'] ['processing']}}</h5>
                        <small class="card-text">
                            Status Orders Processing
                        </small> 
                    </div>
                </div>
            </div>
            <div class="col-3 mt-2">
                <div class="card"> 
                    <div class="card-body">
                    <h5 class="card-title"> {{$data['status'] ['shipped']}}</h5>
                        <small class="card-text">
                            Status Orders Shipped
                        </small> 
                    </div>
                </div>
            </div>
            <div class="col-3 mt-2">
                <div class="card"> 
                    <div class="card-body">
                    <h5 class="card-title"> {{$data['status'] ['delivered']}}</h5>
                        <small class="card-text">
                            Status Orders Delivered
                        </small> 
                    </div>
                </div>
            </div>
            <div class="col-3 mt-2">
                <div class="card"> 
                    <div class="card-body">
                    <h5 class="card-title"> {{$data['status'] ['canceled']}}</h5>
                        <small class="card-text">
                            Status Orders Cancelled
                        </small> 
                    </div>
                </div>
            </div>
            <div class="col-3 mt-2">
                <div class="card"> 
                    <div class="card-body">
                    <h5 class="card-title"> {{$data['promotion'] ['used']}}</h5>
                        <small class="card-text">
                           Orders with promotion 
                        </small> 
                    </div>
                </div>
            </div>
            <div class="col-3 mt-2">
                <div class="card"> 
                    <div class="card-body">
                    <h5 class="card-title"> {{$data['promotion'] ['not_used']}}</h5>
                        <small class="card-text">
                           Orders with no promotion
                        </small> 
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        
            <div class="col-4">
                <canvas id="byCategory" width="100px" height="100px"></canvas>
            </div>
            <div class="col-4">
                <canvas id="byStatus" width="100px" height="100px"></canvas>
            </div>
            <div class="col-4">
                <canvas id="byPromotion" width="100px" height="100px"></canvas>
            </div>
            <div class="col-12">
                <canvas id="byYear" width="100%" height="50px"></canvas>
            </div>
        </div>
            
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.3.2/dist/chart.min.js"></script>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>    
<script> 
    var myChart = new Chart(document.getElementById('byCategory').getContext('2d'), {
        type: 'pie',
        data: {
            labels: [
                'Toys Category Orders',
                'Toys Category Books',
                'Toys Category Home Supplies',
                'Toys Category Accessories',
                'Toys Category Gadgets',
                'Toys Category Foods',
                'Toys Category Appliances'

            ],
            datasets: [{ 
                data: [{{$data['category'] ['Toys']}},{{$data['category'] ['Books']}},{{$data['category'] ['Home_Supplies']}},{{$data['category'] ['Accessories']}}
                ,{{$data['category'] ['Gadgets']}} ,{{$data['category'] ['Food']}},{{$data['category'] ['Appliances']}}
             
                ],
                backgroundColor: [
                    'red',
                    'yellow' ,
                    'green',
                    'black',
                    'blue',
                    'orange',
                    'brown'
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
                    text: 'Orders per Category'
                }
            }
        }
    });

    var myChart = new Chart(document.getElementById('byStatus').getContext('2d'), {
        type: 'pie',
        data: {
            labels: [
                'Status Orders Processing',
                'Status Orders Shipped',
                'Status Orders Delivered',
                'Status Orders Cancelled'
             
            ],
            datasets: [{ 
                data: [{{$data['status'] ['processing']}},{{$data['status'] ['shipped']}},
                {{$data['status'] ['delivered']}},{{$data['status'] ['canceled']}}
                ],
                backgroundColor: [
                    'green',
                    'blue' ,
                    'yellow',
                    'red'
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
                    text: 'Orders per Status'
                }
            }
        }
    });
    
    var myChart = new Chart(document.getElementById('byPromotion').getContext('2d'), {
        type: 'pie',
        data: {
            labels: [
                'Orders with promotion', 
                'Orders with no promotion'
             
            ],
            datasets: [{ 
                data: [{{$data['promotion'] ['used']}},{{$data['promotion'] ['not_used']}}],
                backgroundColor: [
                    'green',
                    'red'
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
                    text: 'Orders per Promotion'
                }
            }
        }
    });

     // Line chart 
     var myChart = new Chart(document.getElementById('byYear').getContext('2d'),{
            type: 'bar',
            data: {
                labels: [
                    '2010',
                    '2011',
                    '2012',
                    '2013',
                    '2014',
                    '2015',
                    '2016',
                    '2017',
                    '2018',
                    '2019',
                    '2020',
                    '2021'
                ],
                datasets: [{
                    label: 'Yearly Sales',
                    data: [
                    {{$data['year'] ['10']}},
                    {{$data['year'] ['9']}},
                    {{$data['year'] ['8']}},
                    {{$data['year'] ['7']}},
                    {{$data['year'] ['6']}},
                    {{$data['year'] ['5']}},
                    {{$data['year'] ['4']}},
                    {{$data['year'] ['3']}},
                    {{$data['year'] ['2']}},
                    {{$data['year'] ['1']}},
                    {{$data['year'] ['0']}}
                    
                    ],
                    backgroundColor: [
                        'yellow-orange',
                        'black',
                        'blue',
                        'pink',
                        'green',
                        'purple',
                        'orange',
                        'brown',
                        'yellow',
                        'grey',
                        'violet'

                        
                    ],
                    borderColor: [
                        'red',
                        'black',
                        'blue',
                        'pink',
                        'green',
                        'purple',
                        'orange',
                        'brown',
                        'yellow',
                        'grey',
                        'violet'
                       
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
</body>
</html>
