<?php
// code for insertion and updation of social records
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
	foreach ( $_POST as $name => $value ) {
		$$name = $value;
	}

	if ( $status == 'on' ) {
		$status = 1;
	} else {
		$status = 0;
	}

	if ( ! isset( $social_id ) ) {
		// insert
		
		$Insert_Query = "INSERT INTO socialmedia (facebook, instagram, skype, twitter, linkedIn, youtube, status)
                    VALUES ('$facebook', '$instagram', '$skype', '$twitter', '$linkedIn', '$youtube', '$status' )";

		$social_id = insert( $Insert_Query );

		if ( $social_id ) {
			$_SESSION['msg-class'] = 'success';
			$_SESSION['msg-text']  = 'Record has been Created Successfully!';
		}
	} else {
		// update
		$social_select_Query = "SELECT * FROM socialmedia where social_id = '$social_id'";
		$selected_array    = select( $social_select_Query );
		$record            = mysqli_fetch_array( $selected_array );


		$Update_Query = "Update socialmedia SET facebook = '$facebook', instagram = '$instagram', skype = '$skype', twitter = '$twitter', linkedIn = '$linkedIn', youtube = '$youtube', status = '$status' where social_id = '$social_id'";

		$id = update( $Update_Query );

		if ( $id ) {
			$_SESSION['msg-class'] = 'success';
			$_SESSION['msg-text']  = 'Record has been Updated Successfully!';
		}
	}


		header( 'location: socialmedia-list.php' );
}
// for viewing inserted record
if ( isset( $_GET['social_id'] ) ) {
	$social_id = $_GET['social_id'];

	$social_Get_Query = "SELECT * FROM socialmedia where social_id= $social_id";
	$selected_array = select( $social_Get_Query );

	$record = mysqli_fetch_array( $selected_array );

	$facebook   = $record['facebook'];
	$instagram  = $record['instagram'];
	$skype      = $record['skype'];
	$twitter    = $record['twitter'];
	$linkedIn   = $record['linkedIn'];
	$youtube    = $record['youtube'];
	$status     = $record['status'];

} else {
	// defining variables default values to pervent PHP Notices
	$facebook = $instagram = $skype = $twitter = $linkedIn = $youtube = '';
	$status = 1;
}

?>