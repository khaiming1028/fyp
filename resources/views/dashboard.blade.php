@extends('layouts.main')

@section('content')

<style>
    .chart-container {
        width: 33%; /* Adjust the width to take half of the screen */
        float: left; /* Display charts side by side */
        padding: 10px;
        box-sizing: border-box;
    }
</style>

<div>
    @section('page_name', 'Admin DashBoard')

    <div class="row">
        <div class="chart-container">
            <canvas id="chartTotalCars" width="300" height="300"></canvas>
        </div>
        <div class="chart-container">
            <canvas id="chartAvailableCars" width="300" height="300"></canvas>
        </div>
        <div class="chart-container">
            <canvas id="chartSoldCars" width="300" height="300"></canvas>
        </div>
    </div>


        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="card card-body bg-danger text-white mb-3">
                        <label>Total Cars</label>
                        <h1>{{$totalCars}}</h1>
                        <a href="{{route('dashboard')}}">View Details</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card card-body bg-success text-white mb-3">
                        <label >Total Available Cars</label>
                        <h1>{{$availableCars}}</h1>
                        <a href="{{route('car.index')}}">View Details</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card card-body bg-primary text-white mb-3">
                        <label >Total Cars Sold</label>
                        <h1>{{$totalSoldCars}}</h1>
                        <a href="{{route('car.sold')}}">View Details</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card card-body bg-primary text-white mb-3">
                        <label >Total Message Received</label>
                        <h1>{{$totalContacts}}</h1>
                        <a href="{{route('view.user')}}">View Details</a>
                    </div>
                </div>
            </div>
        </div>


</div>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<script>
    fetch('/get-total-cars-data') // Route to the method in CarController
        .then(response => response.json())
        .then(data => {
            const ctxTotalCars = document.getElementById('chartTotalCars').getContext('2d');
            const ctxAvailableCars = document.getElementById('chartAvailableCars').getContext('2d');
            const ctxSoldCars = document.getElementById('chartSoldCars').getContext('2d');


            const labels = ['Total'];
            const totalCarsData = [data.totalCars, data.availableCars, data.totalSoldCars];

            // Chart for Total Cars
            new Chart(ctxTotalCars, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [
                        {
                            label: 'Total Cars',
                            data: totalCarsData,
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.5)',
                                'rgba(54, 162, 235, 0.5)',
                                'rgba(75, 192, 192, 0.5)',
                            ],

                        }
                    ]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
            // Chart for Available Cars
            new Chart(ctxAvailableCars, {
                type: 'bar',
                data: {
                    labels: ['Available'],
                    datasets: [
                        {
                            label: 'Available Cars',
                            data: [data.availableCars],
                            backgroundColor: 'rgba(75, 192, 192, 0.5)',
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1
                        }
                    ]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
               // Chart for Sold Cars
               new Chart(ctxSoldCars, {
                type: 'bar',
                data: {
                    labels: ['Sold'],
                    datasets: [
                        {
                            label: 'Sold Cars',
                            data: [data.totalSoldCars],
                            backgroundColor: 'rgba(54, 162, 235, 0.5)',
                            borderColor: 'rgba(54, 162, 235, 1)',
                            borderWidth: 1
                        }
                    ]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });
</script>
@endsection
