<!DOCTYPE html>
<html lang="en-US" dir="ltr">
    <?php
		$title = 'Add Contact - Admin Panel';
		require '../../includes/header.php';
		require '../../../class/cls_db.php';
		require '../configuration/conf-contact.php';
	?>
<body class="sb-nav-fixed">
    <?php require '../../includes/navbar.php';?>
    <div id="layoutSidenav">
      	<?php  require '../../includes/menu.php'; ?>
        <div id="layoutSidenav_content">
        	<main class="main" id="top">
        		<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" class="validate">
					<div class="row no-gutters mt-5 ml-3 mr-3">
						<div class="col-lg-12 pr-lg-2">
							<div class="card mb-3 ">
								<div class="card-header d-flex justify-content-between">
									<h5 class="mb-0">Add Contact</h5>
									<a href="contact-list.php">
										<button type="button" class="btn btn-sm btn-info"> <i class="fa fa-list"></i> Contact List</button>
									</a>
								</div>
								<div class="card-body bg-light">
									<?php
										if ( isset( $contact_id ) ) {
											echo '<input name="contact_id" value="' . $contact_id . '" hidden >';
										}
									?>

									<div class="form-row">
										<div class="col-sm-6">
											<div class="form-group">
												<label for="field-name"> Address </label>
												<input class="form-control" id="address" name="address" type="text" placeholder="Enter your Address" value="<?php echo $address; ?>" required>
											</div>
										</div>
										
									    <div class="col-sm-6">
											<div class="form-group">
											 	<label for="field-name"> Email </label>
												<input class="form-control" id="email" name="email" type="email" placeholder="Enter your Email Address" value="<?php echo $email; ?>" required>
											</div>
										</div>

										<div class="col-sm-6">
											<div class="form-group">
												<label for="field-name"> WhatsApp Number</label>
												<input class="form-control" id="whatsApp" name="whatsApp" type="text" placeholder="Enter your WhatsApp Number" value="<?php echo $whatsApp; ?>" required>
											</div>
										</div>

										<div class="col-sm-6">
											<div class="form-group">
												<label for="field-name"> Location </label>
												<input class="form-control" id="location" name="location" type="text" placeholder="Enter the link for your location" value="<?php echo $location; ?>" required>
											</div>
										</div>
									</div>

								<div class="row">
									<div class="col-12">
										<div class="row justify-content-between align-items-center">
											<div class="col-md">
												<div class="form-group">
													<label for="field-type">Status</label>
													<div class="custom-control custom-switch">
														<input type="checkbox" class="custom-control-input" id="status" name="status"
															<?php
																if ( $status ) {
																	echo 'checked';}
															?>
														/>
														<label class="custom-control-label" for="status"></label>
													</div>
												</div>
											</div>

											<div class="col-auto">
												<button type="submit" class="btn btn-info btn-sm mr-2">Save</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>
			    </form>
	        </main>
	    </div>
	</div>        

	<?php require '../../includes/footer-script.php'; ?>

</body>
</html>