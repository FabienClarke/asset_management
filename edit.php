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
                                            <th>No.</th>
                                            <th>Opsi</th>
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
                                            <th>Support Group Supported by Relationship Status</th>
                                            <th>Supported by Organization</th>
                                            <th>Supported by Support Group</th>
                                            <th>Support Group Managed by Relationship Status</th>
                                            <th>Managed by Organization</th>
                                            <th>Managed by Support Group</th>
                                            <th>Normalized Entity</th>
                                            <th>Organization Merged</th>
                                            <th>Derpartment Merged</th>
                                            <th>Description</th>
                                            <th>Tag Number</th>
                                            <th>Siegel Normalized</th>
                                            <th>Siegel C</th>
                                            <th>PHM - Status SK033/SK026 APR 2023</th>
                                            <th>PC New Model</th>
                                            <th>Company</th>
                                            <th>Phase</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No.</th>
                                            <th>Opsi</th>
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
                                            <th>Support Group Supported by Relationship Status</th>
                                            <th>Supported by Organization</th>
                                            <th>Supported by Support Group</th>
                                            <th>Support Group Managed by Relationship Status</th>
                                            <th>Managed by Organization</th>
                                            <th>Managed by Support Group</th>
                                            <th>Normalized Entity</th>
                                            <th>Organization Merged</th>
                                            <th>Derpartment Merged</th>
                                            <th>Description</th>
                                            <th>Tag Number</th>
                                            <th>Siegel Normalized</th>
                                            <th>Siegel C</th>
                                            <th>PHM - Status SK033/SK026 APR 2023</th>
                                            <th>PC New Model</th>
                                            <th>Company</th>
                                            <th>Phase</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>

                                        <?php
                                        $ambildatabase = mysqli_query($conn, "select * from asset_data");
                                        $i = 1;
                                        while ($data = mysqli_fetch_array($ambildatabase)) {
                                            $serial_number = $data['serial_number'];
                                            $name = $data['name'];
                                            $status = $data['status'];
                                            $short_description = $data['short_description'];
                                            $supplier_name = $data['supplier_name'];
                                            $model_number = $data['model_number'];
                                            $asset_id = $data['asset_id'];
                                            $tier_1 = $data['tier_1'];
                                            $tier_2 = $data['tier_2'];
                                            $tier_3 = $data['tier_3'];
                                            $site_group = $data['site_group'];
                                            $asset_site = $data['asset_site'];
                                            $building = $data['building'];
                                            $floor_room = $data['floor_room'];
                                            $people_relationship_status = $data['people_relationship_status'];
                                            $site = $data['site'];
                                            $psa_code = $data['psa_code'];
                                            $psa_site_name = $data['psa_site_name'];
                                            $organization = $data['organization'];
                                            $department = $data['department'];
                                            $remedy_login_id = $data['remedy_login_id'];
                                            $full_name = $data['full_name'];
                                            $entity_relationship_status = $data['entity_relationship_status'];
                                            $div = $data['div'];
                                            $dept = $data['dept'];
                                            $support_group_supported_by_relationship_status = $data['support_group_supported_by_relationship_status'];
                                            $supported_by_organization = $data['supported_by_organization'];
                                            $supported_by_support_group = $data['supported_by_support_group'];
                                            $support_group_managed_by_relationship_status = $data['support_group_managed_by_relationship_status'];
                                            $managed_by_organization = $data['managed_by_organization'];
                                            $managed_by_support_group = $data['managed_by_support_group'];
                                            $normalized_entity = $data['normalized_entity'];
                                            $organization_merged = $data['organization_merged'];
                                            $department_merged = $data['department_merged'];
                                            $description = $data['description'];
                                            $tag_number = $data['tag_number'];
                                            $siegel_normalized = $data['siegel_normalized'];
                                            $siegel_c = $data['siegel_c'];
                                            $phm_status = $data['phm_status'];
                                            $pc_new_model = $data['pc_new_model'];
                                            $company = $data['company'];
                                            $phase = $data['phase'];
                                        ?>
                                            <tr>
                                                <td><?= $i++ ?></td>
                                                <td>
                                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#Edit" <?= $serial_number; ?>>
                                                        Edit
                                                    </button>
                                                    <input type="hidden" name="serialnumberitem" value="<?= $serial_number; ?>">
                                                </td>
                                                <td><?= $serial_number ?></td>
                                                <td><?= $name ?></td>
                                                <td><?= $status ?></td>
                                                <td><?= $short_description ?></td>
                                                <td><?= $supplier_name ?></td>
                                                <td><?= $model_number ?></td>
                                                <td><?= $asset_id ?></td>
                                                <td><?= $tier_1 ?></td>
                                                <td><?= $tier_2 ?></td>
                                                <td><?= $tier_3 ?></td>
                                                <td><?= $site_group ?></td>
                                                <td><?= $asset_site ?></td>
                                                <td><?= $building ?></td>
                                                <td><?= $floor_room ?></td>
                                                <td><?= $people_relationship_status ?></td>
                                                <td><?= $site ?></td>
                                                <td><?= $psa_code ?></td>
                                                <td><?= $psa_site_name ?></td>
                                                <td><?= $organization ?></td>
                                                <td><?= $department ?></td>
                                                <td><?= $remedy_login_id ?></td>
                                                <td><?= $full_name ?></td>
                                                <td><?= $entity_relationship_status ?></td>
                                                <td><?= $div ?></td>
                                                <td><?= $dept ?></td>
                                                <td><?= $support_group_supported_by_relationship_status ?></td>
                                                <td><?= $supported_by_organization ?></td>
                                                <td><?= $supported_by_support_group ?></td>
                                                <td><?= $support_group_managed_by_relationship_status ?></td>
                                                <td><?= $managed_by_organization ?></td>
                                                <td><?= $managed_by_support_group ?></td>
                                                <td><?= $normalized_entity ?></td>
                                                <td><?= $organization_merged ?></td>
                                                <td><?= $department_merged ?></td>
                                                <td><?= $description ?></td>
                                                <td><?= $tag_number ?></td>
                                                <td><?= $siegel_normalized ?></td>
                                                <td><?= $siegel_c ?></td>
                                                <td><?= $phm_status ?></td>
                                                <td><?= $pc_new_model ?></td>
                                                <td><?= $company ?></td>
                                                <td><?= $phase ?></td>
                                            </tr>
                                            <div class="modal fade" id="Edit" <?= $serial_number; ?>>
                                                <div class="modal-dialog">
                                                    <div class="modal-content">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Edit</h4>
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <form method="post">
                                                            <div class="modal-body">
                                                                <input type="text" name="serial_number" value="<?= $serial_number; ?>" class="form-control" required>
                                                                <br>
                                                                <input type="text" name="name" value="<?= $name; ?>" class="form-control" required>
                                                                <br>
                                                                <input type="text" name="status" value="<?= $status; ?>" class="form-contol" required>
                                                                <br>
                                                                <input type="text" name="short_description" value="<?= $short_description; ?>" class="form-contol" required>
                                                                <br>
                                                                <input type="text" name="supplier_name" value="<?= $supplier_name; ?>" class="form-contol" required>
                                                                <br>
                                                                <input type="text" name="model_number" value="<?= $model_number; ?>" class="form-contol" required>
                                                                <br>
                                                                <input type="text" name="asset_id" value="<?= $asset_id; ?>" class="form-contol" required>
                                                                <br>
                                                                <input type="text" name="tier_1" value="<?= $tier_1; ?>" class="form-contol" required>
                                                                <br>
                                                                <input type="text" name="tier_2" value="<?= $tier_2; ?>" class="form-contol" required>
                                                                <br>
                                                                <input type="text" name="tier_3" value="<?= $tier_3; ?>" class="form-contol" required>
                                                                <br>
                                                                <input type="text" name="site_group" value="<?= $site_group; ?>" class="form-contol" required>
                                                                <br>
                                                                <input type="text" name="asset_site" value="<?= $asset_site; ?>" class="form-contol" required>
                                                                <br>
                                                                <input type="text" name="building" value="<?= $building; ?>" class="form-contol" required>
                                                                <br>
                                                                <input type="text" name="floor_room" value="<?= $floor_room; ?>" class="form-contol">
                                                                <br>
                                                                <input type="text" name="people_relationship_status" value="<?= $people_relationship_status; ?>" class="form-contol">
                                                                <br>
                                                                <input type="text" name="site" value="<?= $site; ?>" class="form-contol" required>
                                                                <br>
                                                                <input type="text" name="psa_code" value="<?= $psa_code; ?>" class="form-contol" required>
                                                                <br>
                                                                <input type="text" name="psa_site_name" value="<?= $psa_site_name; ?>" class="form-contol" required>
                                                                <br>
                                                                <input type="text" name="organization" value="<?= $organization; ?>" class="form-contol" required>
                                                                <br>
                                                                <input type="text" name="department" value="<?= $department; ?>" class="form-contol" required>
                                                                <br>
                                                                <input type="text" name="remedy_login_id" value="<?= $remedy_login_id; ?>" class="form-contol" required>
                                                                <br>
                                                                <input type="text" name="full_name" value="<?= $full_name; ?>" class="form-contol" required>
                                                                <br>
                                                                <input type="text" name="entity_relationship_status" value="<?= $entity_relationship_status; ?>" class="form-contol">
                                                                <br>
                                                                <input type="text" name="div" value="<?= $div; ?>" class="form-contol">
                                                                <br>
                                                                <input type="text" name="dept" value="<?= $dept; ?>" class="form-contol">
                                                                <br>
                                                                <input type="text" name="support_group_supported_by_relationship_status" value="<?= $support_group_supported_by_relationship_status; ?>" class="form-contol">
                                                                <br>
                                                                <input type="text" name="supported_by_organization" value="<?= $supported_by_organization; ?>" class="form-contol">
                                                                <br>
                                                                <input type="text" name="supported_by_support_group" value="<?= $supported_by_support_group; ?>" class="form-contol">
                                                                <br>
                                                                <input type="text" name="support_group_managed_by_relationship_status" value="<?= $support_group_managed_by_relationship_status; ?>" class="form-contol">
                                                                <br>
                                                                <input type="text" name="managed_by_organization" value="<?= $managed_by_organization; ?>" class="form-contol">
                                                                <br>
                                                                <input type="text" name="managed_by_support_group" value="<?= $managed_by_support_group; ?>" class="form-contol">
                                                                <br>
                                                                <input type="text" name="normalized_entity" value="<?= $normalized_entity; ?>" class="form-contol">
                                                                <br>
                                                                <input type="text" name="organization_merged" value="<?= $organization_merged; ?>" class="form-contol">
                                                                <br>
                                                                <input type="text" name="department_merged" value="<?= $department_merged; ?>" class="form-contol">
                                                                <br>
                                                                <input type="text" name="description" value="<?= $description; ?>" class="form-contol" required>
                                                                <br>
                                                                <input type="text" name="tag_number" value="<?= $tag_number; ?>" class="form-contol" required>
                                                                <br>
                                                                <input type="text" name="siegel_normalized" value="<?= $siegel_normalized; ?>" class="form-contol" required>
                                                                <br>
                                                                <input type="text" name="siegel_c" value="<?= $siegel_c; ?>" class="form-contol" required>
                                                                <br>
                                                                <input type="text" name="phm_status" value="<?= $phm_status; ?>" class="form-contol" required>
                                                                <br>
                                                                <input type="text" name="pc_new_model" value="<?= $pc_new_model; ?>" class="form-contol">
                                                                <br>
                                                                <input type="text" name="company" value="<?= $company; ?>" class="form-contol">
                                                                <br>
                                                                <input type="text" name="phase" value="<?= $phase; ?>" class="form-contol">
                                                                <br>                                                                
                                                            </div>
                                                        </form>

                                                        <!-- Modal footer -->
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary" name="update">Update</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php
                                        };
                                        ?>
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
