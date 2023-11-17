@extends('admin.master')
@section('main-content')
    <section>
        <div class="content dashbaord">
            <div class="in-content-wrapper">
                <div class="row no-gutters">
                    <div class="col">
                        <div class="heading-messages">
                            <h3>Trang chủ</h3>
                        </div><!-- End heading-messages -->
                    </div><!-- End column -->
                    <div class="col-md-4">
                        <div class="breadcrumb">
                            <div class="breadcrumb-item"><i class="fas fa-angle-right"></i><a href="#">Trang chủ</a>
                            </div>
                        </div><!-- End Breadcrumbs-->
                    </div><!-- End column -->
                </div><!-- End row -->

                <div class="box">
                    <div class="dashboard-wrapper">
                        <div class="row">
                            <div class="col-xl">
                                <div class="dashboard-box">
                                    <h4>Đơn đã hoàn thành</h4>
                                    <h1 class="pbh1"><i class="fas fa-briefcase pb1i"></i>2400</h1>
                                    <div class="progress">
                                        <div class="progress-bar pb1" role="progressbar" aria-valuenow="25"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p>Tăng 60% so với năm ngoái</p>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="dashboard-box">
                                    <h4>New Bookings</h4>
                                    <h1 class="pbh2"><i class="fas fa-briefcase pb2i"></i>1010</h1>
                                    <div class="progress">
                                        <div class="progress-bar pb2" role="progressbar" aria-valuenow="25"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p>80% Increase From Last Year</p>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="dashboard-box">
                                    <h4>New Orders</h4>
                                    <h1 class="pbh3"><i class="fas fa-briefcase pb3i"></i>400</h1>
                                    <div class="progress">
                                        <div class="progress-bar pb3" role="progressbar" aria-valuenow="25"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p>20% Increase From Last Year</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- End dashboard-wrapper -->
                    <div class="box dashbaord-reviews">

                        <div class="row">
                            <div class="col">
                                <div class="details-text">
                                    <h4>Reviews</h4>
                                </div>
                            </div>
                        </div><!-- end row -->
                        <div class="reviews-body">
                            <ul>
                                <li>
                                    <div class="media">
                                        <img src="{{ asset('assets') }}/images/commenter-2.jpg"
                                            class="mr-1 mr-sm-3 rounded-circle" alt="...">
                                        <div class="media-body">
                                            <h5>Mary Luise <small>By Ms. Sara hann</small></h5>
                                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                class="fas null fa-star"></i>
                                            <span class="text-sm-right mb-3 float-sm-right">January 18, 2019</span>
                                            <p>
                                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                                                scelerisque
                                                ante sollicitudin. Cras purus odio, vestibulum in vulputate at,
                                                tempus
                                                viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                                                Donec lacinia congue felis in faucibus.
                                            </p>

                                            <div class="media">
                                                <a href="#">
                                                    <img src="{{ asset('assets') }}/images/commenter-3.jpg"
                                                        class="mr-1 mr-sm-3 rounded-circle" alt="...">
                                                </a>
                                                <div class="media-body">
                                                    <h5>Author <small>By R.Hujo Kelvin</small></h5>
                                                    <p class="text-sm-right mb-3">January 17, 2019</p>
                                                    <p>
                                                        Thank you for your Support.
                                                    </p>
                                                </div><!-- end media-body -->
                                            </div><!-- end media -->
                                        </div><!-- end media-body -->
                                    </div><!-- end media -->
                                </li>
                            </ul>
                        </div><!-- end reviews-body -->
                    </div><!-- end box -->
                </div><!-- End Box -->
            </div><!-- End in-content-wrapper -->
        </div><!-- End content-dashboard -->
    </section>
@endsection
@section('add-js')
    <script src="{{ asset('assets') }}/js/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('assets') }}/js/popper.min.js"></script>
    <script src="{{ asset('assets') }}/js/bootstrap.min4.2.1.js"></script>
    <script src="{{ asset('assets') }}/js/customscriptfile.js"></script>
    <script src="{{ asset('assets') }}/js/progressbar.min.js"></script>
    <script src="{{ asset('assets') }}/vendors/chart.js-2.8.0/dist/Chart.min.js"></script>
    <script src="{{ asset('assets') }}/vendors/datatables/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
    <script>
        var ctx = document.getElementById("myChart2");
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [{
                    label: '# of Sales',
                    data: [2, 4, 2, 5, 1, 3, 6],
                    backgroundColor: [
                        'rgba(260, 103, 134, 0.1)',

                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                    ],
                    borderWidth: 2
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            // fontSize: 15,
                            fontColor: 'black',
                        }
                    }],
                    xAxes: [{
                        ticks: {
                            // fontSize: 15,
                            fontColor: 'black',
                            beginAtZero: true,
                        }
                    }]
                }
            }
        });

        var ctx = document.getElementById("myChart3");
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ["January", "February", "March", "April", "May", "June"],
                datasets: [{
                    label: '# of Bookings',
                    data: [12, 19, 3, 5, 10, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            // fontSize: 15,
                            fontColor: 'black',
                        }
                    }],
                    xAxes: [{
                        ticks: {
                            // fontSize: 15,
                            fontColor: 'black',
                            beginAtZero: true,
                        }
                    }]
                }
            }
        });
        var ctx = document.getElementById("myChart3");
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ["January", "February", "March", "April", "May", "June"],
                datasets: [{
                    label: '# of Bookings',
                    data: [12, 19, 3, 5, 10, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            // fontSize: 15,
                            fontColor: 'black',
                        }
                    }],
                    xAxes: [{
                        ticks: {
                            // fontSize: 15,
                            fontColor: 'black',
                            beginAtZero: true,
                        }
                    }]
                }
            }
        });
    </script>
@endsection
