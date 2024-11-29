<!DOCTYPE html>
<html>
     <?php 
        $title = 'Dashboard - Admin ';
        require '../../includes/header.php';
        require '../../../class/cls_db.php';
        ?> 
    
    <body class="sb-nav-fixed">
        <?php
             require '../../includes/navbar.php';
        ?>
        <div id="layoutSidenav">
            <?php  require '../../includes/menu.php'; ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <?php require 'card.php';?>
                        
                    </div>
                </main>
                
            </div>
        </div>
        <?php 
        require '../../includes/footer-script.php';
        ?>
    </body>
</html>
