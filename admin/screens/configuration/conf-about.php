<?php
// code for insertion and updation of about records
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
	foreach ( $_POST as $name => $value ) {
		$$name = $value;
	}

	if ( $status == 'on' ) {
		$status = 1;
	} else {
		$status = 0;
	}

	if ( ! isset( $about_id ) ) {
		// insert
		
		$Insert_Query = "INSERT INTO about (about_title, subtitle, description, status)
                    VALUES ('$about_title', '$subtitle' , '$description', '$status' )";

		$id = insert( $Insert_Query );

		if ( $id ) {
			$_SESSION['msg-class'] = 'success';
			$_SESSION['msg-text']  = 'Record has been Created Successfully!';
		}
	} else {
		// update
		$about_select_Query = "SELECT * FROM about where about_id = '$about_id'";
		$selected_array    = select( $about_select_Query );
		$record            = mysqli_fetch_array( $selected_array );


		$Update_Query = "Update about SET about_title= '$about_title', subtitle='$subtitle', description = '$description', status = '$status' where about_id = '$about_id'";

		$id = update( $Update_Query );

		if ( $id ) {
			$_SESSION['msg-class'] = 'success';
			$_SESSION['msg-text']  = 'Record has been Updated Successfully!';
		}
	}


		header( 'location: about-list.php' );
}
// for viewing inserted record
if ( isset( $_GET['about_id'] ) ) {
	$about_id = $_GET['about_id'];

	$about_Get_Query = "SELECT * FROM about where about_id= $about_id";
	$selected_array = select( $about_Get_Query );

	$record = mysqli_fetch_array( $selected_array );

	$about_title   = $record['about_title'];
	$subtitle      = $record['subtitle'];
	$description   = $record['description'];
	$status        = $record['status'];

} else {
	// defining variables default values to pervent PHP Notices
	$about_title  = $subtitle = $description = '';
	$status = 1;
}

?>