@extends('layouts.app')

@section('title')
    Dashboard
@endsection

@section('title page')
    Dashboard
@endsection

@section('content')
    <section class="content">
        <div id="count" class="count container-fluid">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-envelope"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Total Surat Masuk</span>
                            <span class="info-box-number counter-value" data-count="10">
                                0
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-paper-plane"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Total Surat Keluar</span>
                            <span class="info-box-number counter-value" data-count="41410">
                                0
                            </span>
                        </div>
                    </div>
                </div>
                <div class="clearfix hidden-md-up"></div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-users"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Total Pengguna</span>
                            <span class="info-box-number counter-value" data-count="760">
                                0
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <div class="">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Laporan Surat Tahun  @php echo date('Y') @endphp</h5>
    
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p class="text-center">
                                            <strong>Surat Masuk & Surat Keluar</strong>
                                        </p>
    
                                        <div class="chart">
                                            <canvas id="salesChart" height="180" style="height: 180px;"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="">
                        <div class="card">
                            <div class="card-header border-transparent">
                            <h3 class="card-title">Latest Orders</h3>
    
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                                </button>
                            </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table m-0">
                                <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Item</th>
                                    <th>Status</th>
                                    <th>Popularity</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                    <td>Call of Duty IV</td>
                                    <td><span class="badge badge-success">Shipped</span></td>
                                    <td>
                                    <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="pages/examples/invoice.html">OR1848</a></td>
                                    <td>Samsung Smart TV</td>
                                    <td><span class="badge badge-warning">Pending</span></td>
                                    <td>
                                    <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                    <td>iPhone 6 Plus</td>
                                    <td><span class="badge badge-danger">Delivered</span></td>
                                    <td>
                                    <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                    <td>Samsung Smart TV</td>
                                    <td><span class="badge badge-info">Processing</span></td>
                                    <td>
                                    <div class="sparkbar" data-color="#00c0ef" data-height="20">90,80,-90,70,-61,83,63</div>
                                    </td>
                                </tr>
                                </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                        <h3 class="card-title">Recently Added Products</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                            </button>
                        </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                        <ul class="products-list product-list-in-card pl-2 pr-2">
                            <li class="item">
                            <div class="product-img">
                                <img src="{{ asset('assets/dist/img/default-150x150.png') }}" alt="Product Image" class="img-size-50">
                            </div>
                            <div class="product-info">
                                <a href="javascript:void(0)" class="product-title">Samsung TV
                                <span class="badge badge-warning float-right">$1800</span></a>
                                <span class="product-description">
                                Samsung 32" 1080p 60Hz LED Smart HDTV.
                                </span>
                            </div>
                            </li>
                            <li class="item">
                                <div class="product-img">
                                    <img src="{{ asset('assets/dist/img/default-150x150.png') }}" alt="Product Image" class="img-size-50">
                                </div>
                                <div class="product-info">
                                    <a href="javascript:void(0)" class="product-title">Bicycle
                                    <span class="badge badge-info float-right">$700</span></a>
                                    <span class="product-description">
                                    26" Mongoose Dolomite Men's 7-speed, Navy Blue.
                                    </span>
                                </div>
                            </li>
                            <li class="item">
                            <div class="product-img">
                                <img src="{{ asset('assets/dist/img/default-150x150.png') }}" alt="Product Image" class="img-size-50">
                            </div>
                            <div class="product-info">
                                <a href="javascript:void(0)" class="product-title">
                                Xbox One <span class="badge badge-danger float-right">
                                $350
                                </span>
                                </a>
                                <span class="product-description">
                                Xbox One Console Bundle with Halo Master Chief Collection.
                                </span>
                            </div>
                            </li>
                            <li class="item">
                            <div class="product-img">
                                <img src="{{ asset('assets/dist/img/default-150x150.png') }}" alt="Product Image" class="img-size-50">
                            </div>
                            <div class="product-info">
                                <a href="javascript:void(0)" class="product-title">PlayStation 4
                                <span class="badge badge-success float-right">$399</span></a>
                                <span class="product-description">
                                PlayStation 4 500GB Console (PS4)
                                </span>
                            </div>
                            </li>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    {{-- Count --}}
    <script>
        $(document).ready(function() {
            var a = 0;
                var cTop = $('#count').offset().top - window.innerHeight,
                    scroll = $(window).scrollTop();
                if (a == 0 && scroll > cTop ) {
                    $('.counter-value').each(function() {
                        var $this 	= $(this),
                            countTo = $this.attr('data-count');
                        $({
                            countNum: $this.text()
                        }).animate({
                            countNum: countTo
                        },
                        {
                            duration: 5*1000,
                            easing: 'swing',
                            step: function() {
                                if($this.hasClass('with-plus')) {
                                    $this.text(Math.floor(this.countNum) + '+');
                                } else {
                                    $this.text(Math.floor(this.countNum));
                                }
                            },
                            complete: function() {
                                if($this.hasClass('with-plus')) {
                                    $this.text(this.countNum + '+');
                                } else {
                                    $this.text(this.countNum);
                                }
                                // alert('finished');
                            }
                        });
                    });
                    a = 1;
                }
            
        })
    </script>

    {{-- Chart --}}
    <script>
        $(function () {
        'use strict'

        /* ChartJS
        * -------
        * Here we will create a few charts using ChartJS
        */

        //-----------------------
        // - MONTHLY SALES CHART -
        //-----------------------

        // Get context with jQuery - using jQuery's .get() method.
        var salesChartCanvas = $('#salesChart').get(0).getContext('2d')

        var salesChartData = {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [
            {
                label: 'Digital Goods',
                backgroundColor: 'rgba(60,141,188,0.9)',
                borderColor: 'rgba(60,141,188,0.8)',
                pointRadius: false,
                pointColor: '#3b8bba',
                pointStrokeColor: 'rgba(60,141,188,1)',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(60,141,188,1)',
                data: [28, 48, 40, 19, 86, 27, 90]
            },
            {
                label: 'Electronics',
                backgroundColor: 'rgba(210, 214, 222, 1)',
                borderColor: 'rgba(210, 214, 222, 1)',
                pointRadius: false,
                pointColor: 'rgba(210, 214, 222, 1)',
                pointStrokeColor: '#c1c7d1',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(220,220,220,1)',
                data: [65, 59, 80, 81, 56, 55, 40]
            }
            ]
        }

        var salesChartOptions = {
            maintainAspectRatio: false,
            responsive: true,
            legend: {
            display: false
            },
            scales: {
            xAxes: [{
                gridLines: {
                display: false
                }
            }],
            yAxes: [{
                gridLines: {
                display: false
                }
            }]
            }
        }

        // This will get the first returned node in the jQuery collection.
        // eslint-disable-next-line no-unused-vars
        var salesChart = new Chart(salesChartCanvas, {
            type: 'line',
            data: salesChartData,
            options: salesChartOptions
        }
        )

        //---------------------------
        // - END MONTHLY SALES CHART -
        //---------------------------

        //-------------
        // - PIE CHART -
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
        var pieData = {
            labels: [
            'Chrome',
            'IE',
            'FireFox',
            'Safari',
            'Opera',
            'Navigator'
            ],
            datasets: [
            {
                data: [700, 500, 400, 600, 300, 100],
                backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de']
            }
            ]
        }
        var pieOptions = {
            legend: {
            display: false
            }
        }
        // Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        // eslint-disable-next-line no-unused-vars
        var pieChart = new Chart(pieChartCanvas, {
            type: 'doughnut',
            data: pieData,
            options: pieOptions
        })

        //-----------------
        // - END PIE CHART -
        //-----------------

        /* jVector Maps
        * ------------
        * Create a world map with markers
        */
        $('#world-map-markers').mapael({
            map: {
            name: 'usa_states',
            zoom: {
                enabled: true,
                maxLevel: 10
            }
            }
        })

        // $('#world-map-markers').vectorMap({
        //   map              : 'world_en',
        //   normalizeFunction: 'polynomial',
        //   hoverOpacity     : 0.7,
        //   hoverColor       : false,
        //   backgroundColor  : 'transparent',
        //   regionStyle      : {
        //     initial      : {
        //       fill            : 'rgba(210, 214, 222, 1)',
        //       'fill-opacity'  : 1,
        //       stroke          : 'none',
        //       'stroke-width'  : 0,
        //       'stroke-opacity': 1
        //     },
        //     hover        : {
        //       'fill-opacity': 0.7,
        //       cursor        : 'pointer'
        //     },
        //     selected     : {
        //       fill: 'yellow'
        //     },
        //     selectedHover: {}
        //   },
        //   markerStyle      : {
        //     initial: {
        //       fill  : '#00a65a',
        //       stroke: '#111'
        //     }
        //   },
        //   markers          : [
        //     {
        //       latLng: [41.90, 12.45],
        //       name  : 'Vatican City'
        //     },
        //     {
        //       latLng: [43.73, 7.41],
        //       name  : 'Monaco'
        //     },
        //     {
        //       latLng: [-0.52, 166.93],
        //       name  : 'Nauru'
        //     },
        //     {
        //       latLng: [-8.51, 179.21],
        //       name  : 'Tuvalu'
        //     },
        //     {
        //       latLng: [43.93, 12.46],
        //       name  : 'San Marino'
        //     },
        //     {
        //       latLng: [47.14, 9.52],
        //       name  : 'Liechtenstein'
        //     },
        //     {
        //       latLng: [7.11, 171.06],
        //       name  : 'Marshall Islands'
        //     },
        //     {
        //       latLng: [17.3, -62.73],
        //       name  : 'Saint Kitts and Nevis'
        //     },
        //     {
        //       latLng: [3.2, 73.22],
        //       name  : 'Maldives'
        //     },
        //     {
        //       latLng: [35.88, 14.5],
        //       name  : 'Malta'
        //     },
        //     {
        //       latLng: [12.05, -61.75],
        //       name  : 'Grenada'
        //     },
        //     {
        //       latLng: [13.16, -61.23],
        //       name  : 'Saint Vincent and the Grenadines'
        //     },
        //     {
        //       latLng: [13.16, -59.55],
        //       name  : 'Barbados'
        //     },
        //     {
        //       latLng: [17.11, -61.85],
        //       name  : 'Antigua and Barbuda'
        //     },
        //     {
        //       latLng: [-4.61, 55.45],
        //       name  : 'Seychelles'
        //     },
        //     {
        //       latLng: [7.35, 134.46],
        //       name  : 'Palau'
        //     },
        //     {
        //       latLng: [42.5, 1.51],
        //       name  : 'Andorra'
        //     },
        //     {
        //       latLng: [14.01, -60.98],
        //       name  : 'Saint Lucia'
        //     },
        //     {
        //       latLng: [6.91, 158.18],
        //       name  : 'Federated States of Micronesia'
        //     },
        //     {
        //       latLng: [1.3, 103.8],
        //       name  : 'Singapore'
        //     },
        //     {
        //       latLng: [1.46, 173.03],
        //       name  : 'Kiribati'
        //     },
        //     {
        //       latLng: [-21.13, -175.2],
        //       name  : 'Tonga'
        //     },
        //     {
        //       latLng: [15.3, -61.38],
        //       name  : 'Dominica'
        //     },
        //     {
        //       latLng: [-20.2, 57.5],
        //       name  : 'Mauritius'
        //     },
        //     {
        //       latLng: [26.02, 50.55],
        //       name  : 'Bahrain'
        //     },
        //     {
        //       latLng: [0.33, 6.73],
        //       name  : 'São Tomé and Príncipe'
        //     }
        //   ]
        // })
        })
    </script>
@endpush