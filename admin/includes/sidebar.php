<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="dashboard.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Product Management</div>

                <!--Categories --->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts"
                    aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Categories
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="add-category.php">Add</a>
                        <a class="nav-link" href="manage-categories.php">Manage</a>
                    </nav>
                </div>

                <!--- Sub-Categories --->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#subcat"
                    aria-expanded="false" aria-controls="subcat">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Sub-Categories
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="subcat" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="add-subcategories.php">Add</a>
                        <a class="nav-link" href="manage-subcategories.php">Manage</a>
                    </nav>
                </div>

                <!--- Products --->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#product"
                    aria-expanded="false" aria-controls="product">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Products
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="product" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="add-product.php">Add</a>
                        <a class="nav-link" href="manage-products.php">Manage</a>
                    </nav>
                </div>


                <div class="sb-sidenav-menu-heading">Reports</div>

                <!--Categories --->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#reports"
                    aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Reports
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="reports" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="bwdates-ordersreport.php">B/w Dates Orders Report</a>
                        <a class="nav-link" href="sales-report.php">Sales Report</a>
                    </nav>
                </div>


                <a class="nav-link" href="registered-users.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                    Registered Users
                </a>






            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            <?php echo $_SESSION['alogin'];?>
        </div>
    </nav>
</div>