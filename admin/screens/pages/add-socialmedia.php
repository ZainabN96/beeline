<!DOCTYPE html>
<html lang="en-US" dir="ltr">
    <?php
		$title = 'Add Social Media - Admin Panel';
		require '../../includes/header.php';
		require '../../../class/cls_db.php';
		require '../configuration/conf-socialmedia.php';
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
									<h5 class="mb-0">Add Social Media</h5>
									<a href="socialmedia-list.php">
										<button type="button" class="btn btn-sm btn-info"> <i class="fa fa-list"></i> Social Media List</button>
									</a>
								</div>
								<div class="card-body bg-light">
									<?php
										if ( isset( $social_id ) ) {
											echo '<input name="social_id" value="' . $social_id . '" hidden >';
										}
									?>

									<div class="form-row">
										<div class="col-sm-6">
											<div class="form-group">
												<label for="field-name"> Facebook </label>
												<input class="form-control" id="facebook" name="facebook" type="text" placeholder="Enter the link of  your Facebook id" value="<?php echo $facebook; ?>" >
											</div>
										</div>
										
									    <div class="col-sm-6">
											<div class="form-group">
											 	<label for="field-name"> Instagram </label>
												<input class="form-control" id="instagram" name="instagram" type="text" placeholder="Enter the link of Instagram page" value="<?php echo $instagram; ?>" >
											</div>
										</div>

										<div class="col-sm-6">
											<div class="form-group">
												<label for="field-name"> Skype </label>
												<input class="form-control" id="skype" name="skype" type="text" placeholder="Enter the link of your Skype id" value="<?php echo $skype; ?>">
											</div>
										</div>

										<div class="col-sm-6">
											<div class="form-group">
												<label for="field-name"> Twitter </label>
												<input class="form-control" id="twitter" name="twitter" type="text" placeholder="Enter the link of your Twitter" value="<?php echo $twitter; ?>" >
											</div>
										</div>

										<div class="col-sm-6">
											<div class="form-group">
												<label for="field-name"> LinkedIn</label>
												<input class="form-control" id="linkedIn" name="linkedIn" type="text" placeholder="Enter the link of your LinkedIn Account" value="<?php echo $linkedIn; ?>" >
											</div>

										<div class="col-sm-6">
											<div class="form-group">
												<label for="field-name"> YouTube </label>
												<input class="form-control" id="youtube" name="youtube" type="text" placeholder="Enter the link of your YouTube" value="<?php echo $youtube; ?>" >
											</div>
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