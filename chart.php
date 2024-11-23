<?php

include 'layout/header.php';

?>
<style>
    .back-color1{
        background-color: #43bee5;
    }
    .back-color2{
        background-color: #ed4984;
    }
    .back-color3{
        background-color: #326e3c;
    }
    .house{
        background-color: #286b81;
    }
   /* .card{
        background-color: #286b81;
        color: white;
    } */
     .card-title{
        font-family: sans-serif;
     }
     
     .table thead {
            background-color: #d1e7fd;
            color: black;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #e9ecef;
        }

        .table-striped tbody tr:hover {
            background-color: aliceblue;
        }
        .bg-success {
    --bs-bg-opacity: 1;
    background-color: rgb(45 207 27) !important;
}
.badge-danger {
    border: 1px solid #fe7c96;
    color: #ffffff;
    background: #f33259;
}
</style>

            <div class="content-wrapper">
                <div class="page-header">
                    <h3 class="page-title">
                        <span class="page-title-icon house text-white me-2">
                        <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                        </span> Visit And Sales Chart
                    </h3>
                  
                </div>
               
                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="clearfix">
                                    <h4 class="card-title float-start">Visit And Sales Statistics</h4>
                                    <div id="visit-sale-chart-legend"
                                        class="rounded-legend legend-horizontal legend-top-right float-end"></div>
                                </div>
                                <canvas id="visit-sale-chart" class="mt-4"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Traffic Sources</h4>
                                <div class="doughnutjs-wrapper d-flex justify-content-center">
                                    <canvas id="traffic-chart"></canvas>
                                </div>
                                <div id="traffic-chart-legend"
                                    class="rounded-legend legend-vertical legend-bottom-left pt-4"></div>
                            </div>
                        </div>
                    </div>
                </div>
               


            </div>
           
           
        <?php 
            include 'layout/footer.php';
        
        ?>
</html>