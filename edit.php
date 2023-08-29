<?php
require 'function.php';
require 'cek.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Edit</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Asset Management</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Master Data
                        </a>
                        <a class="nav-link" href="edit.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Edit
                        </a>
                        <a class="nav-link" href="export.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Export
                        </a>
                        <div class="sb-sidenav-menu-heading"></div>
                        <a class="nav-link" href="logout.php">
                            Logout
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Start Bootstrap
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Edit Database</h1>

                    <div class="card mb-4">
                        <div class="card-header">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                Edit
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Serial Number</th>
                                            <th>Name</th>
                                            <th>Status</th>
                                            <th>Short Description</th>
                                            <th>Supplier Name</th>
                                            <th>Model Number</th>
                                            <th>Asset ID</th>
                                            <th>Tier 1</th>
                                            <th>Tier 2</th>
                                            <th>Tier 3</th>
                                            <th>Received Date</th>
                                            <th>Installation Date</th>
                                            <th>Modified Date</th>
                                            <th>Site Group</th>
                                            <th>Asset Site</th>
                                            <th>Building</th>
                                            <th>Floor Room</th>
                                            <th>People Relationship Status</th>
                                            <th>Site</th>
                                            <th>PSA Code</th>
                                            <th>PSA Site Name</th>
                                            <th>Organization</th>
                                            <th>Department</th>
                                            <th>Remedy Login ID</th>
                                            <th>Full Name</th>
                                            <th>Entity Relationship Status</th>
                                            <th>Div</th>
                                            <th>Dept</th>
                                            <th>Description</th>
                                            <th>Tag Number</th>
                                            <th>Siegel Normalized</th>
                                            <th>Siegel C</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>5CG2383F1S</td>
                                            <td>EPZ09OFFN1010</td>
                                            <td>Deployed</td>
                                            <td>PC Laptop Common</td>
                                            <td>MITRA INTEGRASI INFORMATIKA, PT.</td>
                                            <td>HP EliteBook 840 G8</td>
                                            <td>23MIIPEPN1-0195</td>
                                            <td>Hardware</td>
                                            <td>Processing Unit</td>
                                            <td>PC Laptop Common</td>
                                            <td>09/02/2023</td>
                                            <td>01/02/2023</td>
                                            <td>27/04/2023</td>
                                            <td>PEP</td>
                                            <td>Asset 5 Office</td>
                                            <td>ZONA 9</td>
                                            <td>0</td>
                                            <td>Used by</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>88009122</td>
                                            <td>Darmapala</td>
                                            <td>-</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>Sr Manager Production & Project</td>
                                            <td>4800148668</td>
                                            <td>PRJ</td>
                                            <td>Project dan Production </td>
                                        </tr>
                                        <tr>
                                            <td>5CG2383F75</td>
                                            <td>EPZ09OFFN1007</td>
                                            <td>Deployed</td>
                                            <td>PC Laptop Common</td>
                                            <td>MITRA INTEGRASI INFORMATIKA, PT.</td>
                                            <td>HP EliteBook 840 G8</td>
                                            <td>EPZ09OFFN1007</td>
                                            <td>Hardware</td>
                                            <td>Processing Unit</td>
                                            <td>PC Laptop Common</td>
                                            <td>09/02/2023</td>
                                            <td>03/02/2023</td>
                                            <td>27/04/2023</td>
                                            <td>PEP</td>
                                            <td>Asset 5 Office</td>
                                            <td>ZONA 9</td>
                                            <td>0</td>
                                            <td>Used by</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>740789</td>
                                            <td>Djoko Soeseno</td>
                                            <td>-</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>Manager Production Operations</td>
                                            <td>4800148668</td>
                                            <td>PRJ</td>
                                            <td>Project dan Production </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/datatables-demo.js"></script>
</body>

<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Edit Database</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <form method="post">
                <div class="modal-body">
                    <select name="Serial Number" class="form-control">
                        <?php
                            $ambildata = mysqli_query($conn, "select * from asset_data");
                            while($fetcharray = mysqli_fetch_array($ambildata)){
                                $serialnumber = $fetcharray['serial_number'];
                                
                            }
                        ?>
                        
                        <option value="<?=$serialnumber;?>"></option>

                        <?php

                        ?>
                    </select>
                    <input type="text" name="Name" placeholder="Name" class="form-contol">
                    <br>
                    <input type="text" name="Status" placeholder="Status" class="form-contol">
                    <br>
                    <button type="submit" class="btn btn-primary" name="update">Submit</button>
                </div>
            </form>

        </div>
    </div>
</div>

</html>