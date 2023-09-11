<?php
session_start();

//Connect to Database
$conn = mysqli_connect("localhost", "root", "", "asset_management");

//Edit or Update the Database
if(isset($_POST['update'])){
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
    $phm_status = $_POST['phm_status'];
    $pc_new_model = $_POST['pc_new_model'];
    $company = $_POST['company'];
    $phase = $_POST['phase'];
    
    $update = mysqli_query($conn, "update asset_data set name='$name', status='$status', short_description='$short_description', supplier_name='$supplier_name', model_number='$model_number', asset_id='$asset_id', tier_1='$tier_1', tier_2='$tier_2', tier_3='$tier_3', site_group='$site_group', asset_site='$asset_site', building='$building', floor_room='$floor_room', people_relationship_status='$people_relationship_status', site='$site', psa_code='$psa_code', psa_site_name='$psa_site_name', organization='$organization', department='$department', remedy_login_id='$remedy_login_id', full_name='$full_name', entity_relationship_status='$entity_relationship_status', div='$div', dept='$dept', support_group_supported_by_relationship_status='$support_group_supported_by_relationship_status', supported_by_organization='$supported_by_organization', supported_by_support_group='$supported_by_support_group', support_group_managed_by_relationship_status='$support_group_managed_by_relationship_status', managed_by_organization='$managed_by_organization', managed_by_support_group='$managed_by_support_group', normalized_entity='$normalized_entity', organization_merged='$organization_merged', department_merged='$department_merged', description='$description', tag_number='$tag_number', siegel_normalized='$siegel_normalized', siegel_c='$siegel_c', phm_status='$phm_status', pc_new_model='$pc_new_model', company='$company', phase='$phase' where serial_number='$serial_number'");
    if($update){ 
        header('location:edit.php');
    } else {
        header('location:export.php');
    }

}

?>
