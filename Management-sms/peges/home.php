<?php


declare(strict_types=1);

# Sample data for demonstration purposes Orders Received Card
$recivedOrders = 150;
$completeOrders = 120;

# Sample data for demonstration purposes Food Menu Item Card and Total Item Card
$foodMenuItems = 43;
$totalItems = 23;

# Stock data
$iteminstock = 50;
$itemlowstock = 10;

# Weekly Orders Data for Line Chart
$mondayOrders = 165;
$tuesdayOrders = 189;
$wednesdayOrders = 142;
$thursdayOrders = 198;
$fridayOrders = 225;
$saturdayOrders = 267;
$sundayOrders = 245;

# Order Status Data for Donut Chart
$pendingOrders = 45;
$cancelledOrders = 25;
$processingOrders = 22;

?>

<div class="container my-5 font-monospace fw-bold " style="margin-left: 15px; width: 100%; ">
    <div class="row g-3">
        <div class="col-md-4 ">
            <div class="card card-custom p-3 bg-danger " style="height: 170px;">
                <div class="d-flex align-items-center mb-5 text-white">
                    <i class="bi bi-cart-fill card-icon me-2"></i>
                    <span>Orders Received</span>
                </div>
                <div class="card-number mb-4 text-white text-bold text-large" style="margin-left: 11rem;">
                    <?php echo $recivedOrders; ?>
                </div>
                <div class="card-footer-text d-flex justify-content-between text-white">
                    <span>Complete Order</span>
                    <span><?php echo $completeOrders; ?></span>
                </div>
            </div>
        </div>
        <div class="col-md-3 bg-red">
            <div class="card card-custom p-3 bg-primary" style="height: 170px;">
                <div class="d-flex align-items-center mb-5 text-white">
                    <i class="bi bi-list card-icon me-2"></i>
                    <span>Food Menu Item</span>
                </div>
                <div class="card-number mb-4 text-white d-flex justify-content-between">
                    <span>Total Diesh</span>
                    <span><?php echo $foodMenuItems; ?></span>
                </div>
                <div class="card-footer-text  justify-content-between d-flex text-white">
                    <span>Daily Specials</span>
                    <span><?php echo $totalItems; ?></span>
                </div>
            </div>
        </div>
        <div class="col-md-4 bg-orange">
            <div class="card card-custom p-3 bg-warning" style="height: 170px; width: 56vh;">
                <div class="d-flex align-items-center mb-5 text-white">
                    <i class="bi bi-box card-icon me-2"></i>
                    <span>Total Item</span>
                </div>
                <div class="card-number mb-4 justify-content-between d-flex text-white">
                    <span>Items in Stock </span>
                    <span><?php echo $iteminstock; ?></span>
                </div>
                <div class="card-footer-text justify-content-between d-flex text-white">
                    <span>Low Stock Item</span>
                    <span><?php echo $itemlowstock; ?></span>
                </div>
            </div>
        </div>
    </div>

    <!----Section2 of cards start here---->
    <div class="row g-3 mt-2">
        <div class="col-md-4">
            <div class="card card-custom p-3 bg-success" style="height: 170px;">
                <div class="d-flex align-items-center mb-5 text-white">
                    <i class="bi bi-people-fill me-2"></i>
                    <span>User Overview</span>
                </div>
                <div class="d-flex card-number justify-content-between text-white text-bold mb-4">
                    <span>Registered Users</span>
                    <span><?php echo $recivedOrders; ?></span>
                </div>
                <div class="card-footer-text d-flex justify-content-between text-white">
                    <span>Complete Order</span>
                    <span><?php echo $completeOrders; ?></span>
                </div>
            </div>
        </div>
        <div class="col-md-3 bg-red">
            <div class="card card-custom p-3 bg-danger" style="height: 170px;">
                <div class="d-flex align-items-center mb-5 text-white">
                    <i class="bi bi-list card-icon me-2"></i>
                    <span>Total Order</span>
                </div>
                <div class="card-number mb-4 text-white d-flex justify-content-between">
                    <span>Percent</span>
                    <span><?php echo $foodMenuItems; ?>%</span>
                </div>
                <div class="card-footer-text justify-content-between d-flex text-white">
                    <span>Complete Order</span>
                    <span><?php echo $totalItems; ?></span>
                </div>
            </div>
        </div>
        <div class="col-md-4 bg-orange">
            <div class="card card-custom p-3 bg-primary" style="height: 170px; width: 56vh;">
                <div class="d-flex align-items-center mb-5 text-white">
                    <i class="bi bi-box card-icon me-2"></i>
                    <span>Total Revenue</span>
                </div>
                <div class="card-number mb-4 justify-content-between d-flex text-white">
                    <span>Money In </span>
                    <span><?php echo $iteminstock; ?></span>
                </div>
                <div class="card-footer-text justify-content-between d-flex text-white g-2">
                    <span>Refunds</span>
                    <span><?php echo $itemlowstock; ?></span>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts Section -->
    <div class="d-flex">
        <div class="container justify-content-left" style="height: 450px; margin-top: 50px; margin-left: 0px; margin-bottom: 20px; width: 95vh;">
            <h4>LineReport</h4>
            <div class="bg-white rounded p-3 text-white" style="border: 1px solid gray;">
                <canvas id="myChart"></canvas>
            </div>
        </div>
        <div class="container justify-content-left" style="height: 450px; margin-top: 50px; margin-left: 0px; margin-bottom: 20px; width: 85vh;">
            <h4>Donut Report</h4>
            <div class="rounded p-3 text-white" style="width: 550px; border: 1px solid gray; background-color: white; height: 350px;">
                <canvas id="myChart2"></canvas>
            </div>
        </div>
    </div>

    <!-- Image Section -->
    <div class="d-flex rounded align-items-center justify-content-between"
        style="height: 250px; margin-bottom: 60px; width: 96%; background-color: rgb(244, 240, 240); border: 1px solid gray;">
        <img src="../assets/images/pizza.jpg" alt="Company Logo" style="height:200px; width:200px; margin-left: 20px;" class="rounded-circle">
        <img src="../assets/images/buger.jpg" alt="Company Logo" style="height:200px; width:200px;" class="rounded-circle">
        <img src="../assets/images/man.jpg" alt="Company Logo" style="height:200px; width:200px;" class="rounded-circle">
        <img src="../assets/images/rice.jpg" alt="Company Logo" style="height:200px; width:200px; margin-right: 20px;" class="rounded-circle">
    </div>
</div>

<script>
    // Line Chart - Get canvas context FIRST
    const lineCtx = document.getElementById('myChart').getContext('2d');
    const lineChart = new Chart(lineCtx, {
        type: 'line',
        data: {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            datasets: [{
                    label: 'Total Orders',
                    data: [
                        <?php echo $mondayOrders; ?>,
                        <?php echo $tuesdayOrders; ?>,
                        <?php echo $wednesdayOrders; ?>,
                        <?php echo $thursdayOrders; ?>,
                        <?php echo $fridayOrders; ?>,
                        <?php echo $saturdayOrders; ?>,
                        <?php echo $sundayOrders; ?>
                    ],
                    borderColor: '#667eea',
                    backgroundColor: 'rgba(102, 126, 234, 0.1)',
                    borderWidth: 3,
                    fill: true,
                    tension: 0.4,
                    pointBackgroundColor: '#667eea',
                    pointBorderColor: '#fff',
                    pointBorderWidth: 2,
                    pointRadius: 5,
                    pointHoverRadius: 7
                },
                {
                    label: 'Completed Orders',
                    data: [152, 176, 138, 185, 210, 248, 227],
                    borderColor: '#48bb78',
                    backgroundColor: 'rgba(72, 187, 120, 0.1)',
                    borderWidth: 3,
                    fill: true,
                    tension: 0.4,
                    pointBackgroundColor: '#48bb78',
                    pointBorderColor: '#fff',
                    pointBorderWidth: 2,
                    pointRadius: 5,
                    pointHoverRadius: 7
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: true,
            plugins: {
                legend: {
                    display: true,
                    position: 'top',
                    labels: {
                        usePointStyle: true,
                        padding: 20,
                        font: {
                            size: 13,
                            weight: '600'
                        }
                    }
                },
                tooltip: {
                    mode: 'index',
                    intersect: false,
                    backgroundColor: 'rgba(0, 0, 0, 0.8)',
                    padding: 15,
                    cornerRadius: 8
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        color: 'rgba(0, 0, 0, 0.05)'
                    },
                    ticks: {
                        font: {
                            size: 12
                        }
                    }
                },
                x: {
                    grid: {
                        display: false
                    },
                    ticks: {
                        font: {
                            size: 12,
                            weight: '600'
                        }
                    }
                }
            }
        }
    });

    // Donut Chart - Get canvas context FIRST
    const donutCtx = document.getElementById('myChart2').getContext('2d');
    const donutChart = new Chart(donutCtx, {
        type: "doughnut",
        data: {
            labels: ["Completed", "Pending", "Cancelled", "Processing"],
            datasets: [{
                label: 'Order Status',
                data: [
                    <?php echo $completeOrders; ?>,
                    <?php echo $pendingOrders; ?>,
                    <?php echo $cancelledOrders; ?>,
                    <?php echo $processingOrders; ?>
                ],
                backgroundColor: [
                    "#48bb78",
                    "#ed8936",
                    "#f56565",
                    "#4299e1"
                ],
                borderColor: "#fff",
                borderWidth: 3,
                hoverOffset: 10
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: true,
            plugins: {
                legend: {
                    position: 'bottom',
                    labels: {
                        usePointStyle: true,
                        padding: 15,
                        font: {
                            size: 12,
                            weight: '600'
                        }
                    }
                },
                tooltip: {
                    backgroundColor: 'rgba(0, 0, 0, 0.8)',
                    padding: 12,
                    cornerRadius: 8
                }
            }
        }
    });
</script>