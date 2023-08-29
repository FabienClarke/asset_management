<?php
session_start();

//Connect to Database
$conn = mysqli_connect("localhost", "root", "", "asset_management");

//Alter or Update the Database
if(isset($_POST['update'])){
    $reconciliation_identity = $_POST['reconciliaton_identity'];
    $serial_number = $_POST['serial_number'];
    $name = $_POST['name'];
    $status = $_POST['status'];
    $short_description = $_POST['short_description'];
    $supplier_name = $_POST['supplier_name'];
    $model_number = $_POST['model_number'];
    $asset_id = $_POST['asset_id'];
    $tier_1 = $_POST['tier_1'];
    $tier_2 = $_POST['tier_2'];
    $tier_3 = $_POST['tier_3'];
    $received_date = $_POST['received_date'];
    $installation_date = $_POST['istallation_date'];
    $modified_date = $_POST['modified_date'];
    $site_group = $_POST['site_group'];
    $asset_site = $_POST['asset_site'];
    $building = $_POST['building'];
    $floor_room = $_POST['floor_room'];
    $people_relationship_status = $_POST['people_relationship_status'];
    $site = $_POST['site'];
    $psa_code = $_POST['psa_code'];
    $psa_site_name = $_POST['psa_site_name'];
    $organization = $_POST['organization'];
    $department = $_POST['department'];
    $remedy_login_id = $_POST['remedy_login_id'];
    $full_name = $_POST['full_name'];
    $entity_relationship_status = $_POST['entity_relationship_status'];
    $div = $_POST['div'];
    $dept = $_POST['dept'];
    $support_group_supported_by_relationship_status = $_POST['support_group_supported_by_relationship_status'];
    $supported_by_organization = $_POST['supported_by_organization'];
    $supported_by_support_group = $_POST['supported_by_support_group'];
    $support_group_managed_by_relationship_status = $_POST['support_group_managed_by_relationship_status'];
    $managed_by_organization = $_POST['managed_by_organization'];
    $managed_by_support_group = $_POST['managed_by_support_group'];
    $normalized_entity = $_POST['normalized_entity'];
    $organization_merged = $_POST['organization_merged'];
    $department_merged = $_POST['department_merged'];
    $description = $_POST['description'];
    $tag_number = $_POST['tag_number'];
    $siegel_normalized = $_POST['siegel_normalized'];
    $siegel_c = $_POST['siegel_c'];
}

?>