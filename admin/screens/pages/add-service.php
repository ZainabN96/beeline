<!DOCTYPE html>
<html>
    <?php
		$title = 'Add Service - Admin Panel';
		require '../../includes/header.php';
		require '../../../class/cls_db.php';
		require '../configuration/conf-service.php';
	?>

<body class="sb-nav-fixed">
    <?php require '../../includes/navbar.php';?>
    <div id="layoutSidenav">
      	<?php  require '../../includes/menu.php'; ?>
        <div id="layoutSidenav_content">
        	<main>
        		<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" class="validate">
					<div class="row no-gutters  mt-5 ml-3 mr-3">
						<div class="col-lg-12 pr-lg-2">
							<div class="card mb-3">
								<div class="card-header d-flex justify-content-between">
									<h5 class="mb-0">Create Service</h5>
									<a href="service-list.php">
										<button type="button" class="btn btn-sm btn-info"> <i class="fa fa-list"></i> Service List</button>
									</a>
								</div>
								<div class="card-body bg-light">
									<?php
										if ( isset( $service_id ) ) {
											echo '<input name="service_id" value="' . $service_id . '" hidden >';
										}
									?>

									<div class="form-row">
										<div class="col-sm-6">
											<div class="form-group">
												<label for="field-name">Service Name</label>
												<input class="form-control" id="service_name" name="service_name" type="text" placeholder="Service Name" value="<?php echo $service_name; ?>" required>
											</div>
										</div>
									</div>
									<div class="form-group">
										<?php echo $service_image; ?>
										<label for="service_image">Service Image</label> <br>
										<input id="service_image" name="service_image" type="file">
									</div>	

									<div class="col-sm-6">
										<div class="form-group">
											<label for="field-name"> Desription</label>
											<input class="form-control" id="service_description" name="service_description" type="text" placeholder="Explain service" value="<?php echo $service_description; ?>" required>
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
