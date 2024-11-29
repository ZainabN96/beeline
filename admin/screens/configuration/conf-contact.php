<?php
// code for insertion and updation of contact records
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
	foreach ( $_POST as $name => $value ) {
		$$name = $value;
	}

	if ( $status == 'on' ) {
		$status = 1;
	} else {
		$status = 0;
	}

	if ( ! isset( $contact_id ) ) {
		// insert
		
		$Insert_Query = "INSERT INTO contact (address, email, whatsApp, location, status)
                    VALUES ('$address', '$email' , '$whatsApp', '$location', '$status' )";

		$id = insert( $Insert_Query );

		if ( $id ) {
			$_SESSION['msg-class'] = 'success';
			$_SESSION['msg-text']  = 'Record has been Created Successfully!';
		}
	} else {
		// update
		$contact_select_Query = "SELECT * FROM contact where contact_id = '$contact_id'";
		$selected_array    = select( $contact_select_Query );
		$record            = mysqli_fetch_array( $selected_array );


		$Update_Query = "Update contact SET address = '$address', email = '$email', whatsApp = '$whatsApp', location = '$location', status = '$status' where contact_id = '$contact_id'";
		$id = update( $Update_Query );

		if ( $id ) {
			$_SESSION['msg-class'] = 'success';
			$_SESSION['msg-text']  = 'Record has been Updated Successfully!';
		}
	}


		header( 'location: contact-list.php' );
}
// for viewing inserted record
if ( isset( $_GET['contact_id'] ) ) {
	$contact_id = $_GET['contact_id'];

	$contact_Get_Query = "SELECT * FROM contact where contact_id = $contact_id";
	$selected_array = select( $contact_Get_Query );

	$record = mysqli_fetch_array( $selected_array );

	$address    = $record['address'];
	$email      = $record['email'];
	$whatsApp   = $record['whatsApp'];
	$location   = $record['location'];
	$status     = $record['status'];

} else {
	// defining variables default values to pervent PHP Notices
	$address = $email = $whatsApp = $location = '';
	$status = 1;
}

?>