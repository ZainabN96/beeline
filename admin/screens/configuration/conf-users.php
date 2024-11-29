<?php
// code for insertion and updation of User records
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
	foreach ( $_POST as $name => $value ) {
		$$name = $value;
	}

	if ( $status == 'on' ) {
		$status = 1;
	} else {
		$status = 0;
	}

	if ( ! isset( $user_id ) ) {
		// insert
		$password   = base64_encode( base64_encode( $password ) );

		$Insert_Query = "INSERT INTO users (user_name, user_type, email, password, status)
                    VALUES ('$username', '$user_type' , '$email' ,'$password', '$status' )";

		$id = insert( $Insert_Query );

		if ( $id ) {
			$_SESSION['msg-class'] = 'success';
			$_SESSION['msg-text']  = 'Record has been Created Successfully!';
		}
	} else {
		// update
		$user_select_Query = "SELECT * FROM users where user_id = '$user_id'";
		$selected_array    = select( $user_select_Query );
		$record            = mysqli_fetch_array( $selected_array );

		$password = base64_encode( base64_encode( $password ) );

		$Update_Query = "Update users SET user_name= '$username', user_type='$user_type', email = '$email', password = '$password', status = '$status' where user_id = '$user_id'";

		$id = update( $Update_Query );

		if ( $id ) {
			$_SESSION['msg-class'] = 'success';
			$_SESSION['msg-text']  = 'Record has been Updated Successfully!';
		}
	}


		header( 'location: user-list.php' );
}


// for viewing inserted record
if ( isset( $_GET['user_id'] ) ) {
	$user_id = $_GET['user_id'];

	$user_Get_Query = "SELECT * FROM users where user_id= $user_id";
	$selected_array = select( $user_Get_Query );

	$record = mysqli_fetch_array( $selected_array );

	$title     = $record['user_name'];
	$user_type = $record['user_type'];
	$email     = $record['email'];
	$password  = $password = base64_decode( base64_decode( $record['password'] ) );
	$status    = $record['status'];

} else {
	// defining variables default values to pervent PHP Notices
	$title  = $user_type = $email = $password = '';
	$status = 1;
}

?>