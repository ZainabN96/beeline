<!DOCTYPE html>
<html lang="en-US" dir="ltr">
    <?php
		$title = ' Contact List - Admin Panel ';
		require '../../includes/header.php';
		require '../../../class/cls_db.php';

		$Query      = 'SELECT * FROM contact';
		$contact_list = select( $Query );

		$list_title = 'Contact list';
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
						<a href="add-contact.php">
							<button class="btn btn-sm btn-info"> <i class="fa fa-plus"></i> Add Contact </button>
						</a>
					</div>
				</div>

				<div class="row no-gutters">
					<div class="bg-light w-100 pt-3 pb-2">
						<table class="table table-sm table-dashboard data-table no-wrap mb-0 fs--1 w-100 ">
							<thead class="bg-200">
								<tr>
									<th>#</th>
									<th>Address</th>
									<th>Email</th>
									<th>WhatsApp Num</th>
									<th>Location</th>
									<th>Status</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
									if ( $contact_list ) {
										$sr_no = 0;
										foreach ( $contact_list as $record ) {
											$record_id = $record['contact_id'];
											if ( $record['status'] ) {
												$status = "<a href='../helpingfiles/changestatus.php?tbl=contact&val=0&conditionCol=contact_id&conditionVal=$record_id' class='btn btn-sm btn-warning'>Enabled <i class='fa fa-check'></i></a>";
											} else {
												$status = "<a href='../helpingfiles/changestatus.php?tbl=contact&val=1&conditionCol=contact_id&conditionVal=$record_id' class='btn btn-sm btn-secondary'>Disabled <i class='fa fa-ban'></i></a>";
												}

											$sr_no++;
								?>
								<tr>
									<td><?php echo $sr_no; ?></td>
									<td><?php echo $record['address']; ?></td>
									<td><?php echo $record['email']; ?></td>
									<td><?php echo $record['whatsApp'];?></td>
									<td><?php echo substr($record['location'],0,15);?></td>
									<td><?php echo $status; ?></td>
									<td>
										<a href='add-contact.php?contact_id=<?php echo $record_id; ?>' class='mr-2 btn btn-sm btn-primary'>Edit <i class='fa fa-edit'></i></a>

										<a href='../helpingfiles/delete.php?tbl=contact&conditionCol=contact_id&conditionVal=<?php echo $record_id; ?>' class='mr-2 btn btn-sm btn-danger' onclick='return confirm("Are You Sure?");'>Delete <i class='fa fa-trash'></i></a>
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
									<th>Address</th>
									<th>Email</th>
									<th>WhatsApp Num</th>
									<th>Location</th>
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

