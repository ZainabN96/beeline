<?php
// code for insertion and updation of service records
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
	foreach ( $_POST as $name => $value ) {
		$$name = $value;
	}

	if ( $status == 'on' ) {
		$status = 1;
	} else {
		$status = 0;
	}

	if ( ! isset( $service_id ) ) {
		// insert
		$service_image = upload( 'service_image', '../../../assets/img/service/' );

		$Insert_Query = "INSERT INTO service (service_name, service_image, service_description, status)
                    VALUES ('$service_name', '$service_image' , '$service_description' , '$status' )";

		$id = insert( $Insert_Query );

		if ( $id ) {
			$_SESSION['msg-class'] = 'success';
			$_SESSION['msg-text']  = 'Record has been Created Successfully!';
		}
	} else {
		// update
		$service_select_Query = "SELECT * FROM service where service_id = '$service_id'";
		$selected_array    = select( $service_select_Query );
		$record            = mysqli_fetch_array( $selected_array );

		$service_image = upload( 'service_image', '../../../assets/img/service/', $record['service_image'] );

		$Update_Query = "Update service SET service_name= '$service_name', service_image = '$service_image', service_description = '$service_description', status = '$status' where service_id = '$service_id'";

		$id = update( $Update_Query );

		if ( $id ) {
			$_SESSION['msg-class'] = 'success';
			$_SESSION['msg-text']  = 'Record has been Updated Successfully!';
		}
	}


		header( 'location: service-list.php' );
}


// for viewing inserted record
if ( isset( $_GET['service_id'] ) ) {
	$service_id = $_GET['service_id'];

	$service_Get_Query = "SELECT * FROM service where service_id= $service_id";
	$selected_array = select( $service_Get_Query );

	$record = mysqli_fetch_array( $selected_array );

	$service_name          = $record['service_name'];
	$image_path            = $record['service_image'];
	$image_src             = "../../../assets/img/service/$image_path";
	$service_image         = "<img src='$image_src' class='form-img' />";
	$service_description   = $record['service_description'];
	$status                = $record['status'];

} else {
	// defining variables default values to pervent PHP Notices
	$service_name  = $service_image = $service_description = '';
	$status = 1;
}

?>