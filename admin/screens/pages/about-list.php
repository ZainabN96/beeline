<!DOCTYPE html>
<html lang="en-US" dir="ltr">
    <?php
		$title = ' About List - Admin Panel ';
		require '../../includes/header.php';
		require '../../../class/cls_db.php';

		$Query      = 'SELECT * FROM about';
		$about_list = select( $Query );

		$list_title = 'About list';
	?>
 
<body class="sb-nav-fixed">
    <?php require '../../includes/navbar.php';?>
    <div id="layoutSidenav">
      	<?php  require '../../includes/menu.php'; ?>
        <div id="layoutSidenav_content">
        	<main class="main mt-5 ml-3 mr-3" id="top">
				<?php show_msg(); ?>
				<div class="card mb-3">
					<div class="card-body d-flex justify-content-between">
						<h3 class="mb-0"><?php echo $list_title; ?> </h3>
						<a href="add-about.php">
							<button class="btn btn-sm btn-info"> <i class="fa fa-plus"></i> Add About </button>
						</a>
					</div>
				</div>

				<div class="row no-gutters">
					<div class="bg-light w-100 pt-3 pb-2">
						<table class="table table-sm table-dashboard data-table no-wrap mb-0 fs--1 w-100 ">
							<thead class="bg-200">
								<tr>
									<th>#</th>
									<th>Title</th>
									<th>Subtitle</th>
									<th>Description</th>
									<th>Status</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
									if ( $about_list ) {
										$sr_no = 0;
										foreach ( $about_list as $record ) {
											$record_id = $record['about_id'];
											if ( $record['status'] ) {
												$status = "<a href='../helpingfiles/changestatus.php?tbl=about&val=0&conditionCol=about_id&conditionVal=$record_id' class='btn btn-sm btn-warning'>Enabled <i class='fa fa-check'></i></a>";
											} else {
												$status = "<a href='../helpingfiles/changestatus.php?tbl=about&val=1&conditionCol=about_id&conditionVal=$record_id' class='btn btn-sm btn-secondary'>Disabled <i class='fa fa-ban'></i></a>";
												}

											$sr_no++;
								?>
								<tr>
									<td><?php echo $sr_no; ?></td>
									<td><?php echo $record['about_title']; ?></td>
									<td><?php echo $record['subtitle']; ?></td>
									<td><?php echo $record['description'];?></td>
									<td><?php echo $status; ?></td>
									<td>
										<a href='add-about.php?about_id=<?php echo $record_id; ?>' class='mr-2 btn btn-sm btn-primary'>Edit <i class='fa fa-edit'></i></a>

										<a href='../helpingfiles/delete.php?tbl=about&conditionCol=about_id&conditionVal=<?php echo $record_id; ?>' class='mr-2 btn btn-sm btn-danger' onclick='return confirm("Are You Sure?");'>Delete <i class='fa fa-trash'></i></a>
									</td>
								</tr>
								<?php
									 }
									}
								?>
							</tbody>
						    <tfoot class="bg-200">
								<tr>
									<th>#</th>
									<th>Title</th>
									<th>Subtitle</th>
									<th>Description</th>
									<th>Status</th>
									<th>Action</th>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</main>
		</div>
	</div>        

	<?php require '../../includes/footer-script.php'; ?>

</body>

</html>

