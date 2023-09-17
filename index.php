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
    <title>Asset Management</title>
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
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Master Data
                        </a>
                        <a class="nav-link" href="edit.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-pencil-alt"></i></div>
                            Edit
                        </a>
                        <a class="nav-link" href="history.php">
                            <div class="sb-nav-link-icon"><i class="far fa-clock"></i></div>
                            Update History
                        </a>
                        <div class="sb-sidenav-menu-heading"></div>
                        <a class="nav-link" href="logout.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-sign-out-alt"></i></div>
                            Logout
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:
                        <?php
                        $email = $_SESSION['email'];

                        $query = "SELECT first_name, last_name FROM users WHERE email = '$email'";
                        $result = mysqli_query($conn, $query);

                        if ($result && mysqli_num_rows($result) > 0) {
                            $row = mysqli_fetch_assoc($result);
                            $full_name = $row['first_name'] . ' ' . $row['last_name'];
                            echo $full_name;
                        } else {
                            echo 'User Not Found';
                        }
                        ?>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Master Data</h1>
                    <div class="card mb-4">
                        <div class="card-header">
                            <button type="button" class="btn btn-warning" onclick="redirect()">
                                Export
                            </button>
                            <script>
                                function redirect() {
                                    window.location.href = "export.php"
                                }
                            </script>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
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
                                            <th>Modified Date</th>
                                            <th>Modified By</th>
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
                                            <th>Modified Date</th>
                                            <th>Modified By</th>
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
                                            $modified_date = $data['modified_date'];
                                            $modified_by = $data['modified_by'];
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
                                                <td><?= $modified_date ?></td>
                                                <td><?= $modified_by ?></td>
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

</html>
