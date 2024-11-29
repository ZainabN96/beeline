<?php
if ( ! isset( $_SESSION['admin'] ) ) {
    echo "<script>window.location.href = '" . $admin_path . "screens/login.php?message=Session Expired.'</script>";
}
$admin_id    = $_SESSION['admin'];
$adminQuery  = "SELECT * FROM users WHERE user_id = $admin_id";
$adminArray  = select( $adminQuery );
$adminRecord = mysqli_fetch_array( $adminArray );

//$admin_img = $site_path . 'images/profile/' . $adminRecord['user_image'];
?>

<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="home.php">BEELINE</a>
            
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo $adminRecord['user_name']; ?> </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#!">Settings</a></li>
                <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
            </ul>
        </li>
    </ul>
</nav>