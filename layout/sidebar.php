<!-- <ul class="navbar-nav sidebar text-white" style=" height:700px">
    <li class="nav-item text-white">
        <h1>Sidebar</h1>
        <hr class="sidebar divider">
    <li class="nav-item">
        <a class="text-white" href="index.php">Dashboard </a>
    </li>
    <hr class="sidebar divider">
    <li class="nav-item">
        <a class="text-white" href="users.php">Users</a>
    </li>
    <hr class="sidebar divider">
    <li class="nav-item">
        <a class="text-white" href="form.php">Form</a>
    </li>
</ul> -->

<?php
if(!isset($_SESSION['email']))
{
    header('location:login.php');
}
?>
<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="index.php ">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <a class="nav-link" href="users.php ">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Users
                </a>
                <a class="nav-link" href="login.php ">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Login
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            <?php echo $_SESSION['name']; ?>
        </div>
    </nav>
</div>