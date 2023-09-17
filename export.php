<?php
require 'function.php';
require 'cek.php';
?>
<html>

<head>
    <title>Asset Data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
</head>

<body>
    <div class="container">
        <h2>Asset Data</h2>
        <h4>Export</h4>
        <div class="data-tables datatable-dark">
            <table class="table table-bordered" id="AssetData" width="100%" cellspacing="0">
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
                            <td><?php echo $i++ ?></td>
                            <td><?php echo $serial_number ?></td>
                            <td><?php echo $name ?></td>
                            <td><?php echo $status ?></td>
                            <td><?php echo $short_description ?></td>
                            <td><?php echo $supplier_name ?></td>
                            <td><?php echo $model_number ?></td>
                            <td><?php echo $asset_id ?></td>
                            <td><?php echo $tier_1 ?></td>
                            <td><?php echo $tier_2 ?></td>
                            <td><?php echo $tier_3 ?></td>
                            <td><?php echo $modified_date ?></td>
                            <td><?php echo $modified_by ?></td>
                            <td><?php echo $site_group ?></td>
                            <td><?php echo $asset_site ?></td>
                            <td><?php echo $building ?></td>
                            <td><?php echo $floor_room ?></td>
                            <td><?php echo $people_relationship_status ?></td>
                            <td><?php echo $site ?></td>
                            <td><?php echo $psa_code ?></td>
                            <td><?php echo $psa_site_name ?></td>
                            <td><?php echo $organization ?></td>
                            <td><?php echo $department ?></td>
                            <td><?php echo $remedy_login_id ?></td>
                            <td><?php echo $full_name ?></td>
                            <td><?php echo $entity_relationship_status ?></td>
                            <td><?php echo $div ?></td>
                            <td><?php echo $dept ?></td>
                            <td><?php echo $support_group_supported_by_relationship_status ?></td>
                            <td><?php echo $supported_by_organization ?></td>
                            <td><?php echo $supported_by_support_group ?></td>
                            <td><?php echo $support_group_managed_by_relationship_status ?></td>
                            <td><?php echo $managed_by_organization ?></td>
                            <td><?php echo $managed_by_support_group ?></td>
                            <td><?php echo $normalized_entity ?></td>
                            <td><?php echo $organization_merged ?></td>
                            <td><?php echo $department_merged ?></td>
                            <td><?php echo $description ?></td>
                            <td><?php echo $tag_number ?></td>
                            <td><?php echo $siegel_normalized ?></td>
                            <td><?php echo $siegel_c ?></td>
                            <td><?php echo $phm_status ?></td>
                            <td><?php echo $pc_new_model ?></td>
                            <td><?php echo $company ?></td>
                            <td><?php echo $phase ?></td>
                        </tr>
                    <?php
                    };
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#AssetData').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'excel'
                ]
            });
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>



</body>

</html>
