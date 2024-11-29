<!DOCTYPE html>
<html>
    <?php
		$title = 'Add User - Admin Panel';
		require '../../includes/header.php';
		require '../../../class/cls_db.php';
		require '../configuration/conf-users.php';

		$user_type_list_Query = 'select * from user_type';
		$user_type_list       = select( $user_type_list_Query );
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
									<h5 class="mb-0">Create User</h5>
									<a href="user-list.php">
										<button type="button" class="btn btn-sm btn-info"> <i class="fa fa-list"></i> User List</button>
									</a>
								</div>
								<div class="card-body bg-light">
									<?php
										if ( isset( $user_id ) ) {
											echo '<input name="user_id" value="' . $user_id . '" hidden >';
										}
									?>

									<div class="form-row">
										<div class="col-sm-6">
											<div class="form-group">
												<label for="field-name">User Name</label>
												<input class="form-control" id="username" name="username" type="text" placeholder="User Name" value="<?php echo $title; ?>" required>
											</div>
										</div>

										<div class="col-sm-6">
											<label for="field-name">User Type</label>
											<select name="user_type" id="user_type" class="form-control custom-select" required="">
												<option value="">Select Type</option>
												<?php
													foreach ( $user_type_list as $record ) {
												?>
												<option value="<?php echo $record['user_type_id']; ?>"
													<?php
														if ( $record['user_type_id'] == $user_type ) {
															echo 'selected';}
													?>
												> <?php echo $record['user_type_title']; ?> </option>
												<?php } ?>
											</select>
									</div>

									<div class="col-sm-6">
										<div class="form-group">
											<label for="field-name">Email</label>
											<input class="form-control" id="email" name="email" type="email" placeholder="e.g example@email.com" value="<?php echo $email; ?>" required>
										</div>
									</div>

									<div class="col-sm-6">
										<div class="form-group">
											<label for="field-name">Password</label>
											<input class="form-control" id="password" name="password" type="password" placeholder="Password" value="<?php echo $password; ?>" required>
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
