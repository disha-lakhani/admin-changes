<nav class="sidebar bg-dark sidebar-offcanvas text-white" id="sidebar">
    <ul class="nav">

        <li class="nav-item">
            <a class="nav-link" href="dashboard.php">
                <i class="mdi mdi-home menu-icon"></i>
                <span class="menu-title fw-bold ">Dashboard</span>

            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="customer.php" aria-expanded="false">
                <i class="mdi mdi-contacts menu-icon"></i>
                <span class="menu-title fw-bold ">Customer</span>

            </a>

        </li>
        <li class="nav-item">
            <a class="nav-link" href="chart.php" aria-expanded="false">
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                <span class="menu-title fw-bold ">Charts</span>


            </a>

        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                <i class="mdi mdi-chart-bar menu-icon"></i>
                <span class="menu-title fw-bold ">Pages</span>
                <i class="menu-arrow"></i>

            </a>
            <div class="collapse" id="charts">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link fw-bold  " href="register.php">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold  " href="login.php">Login</a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                <i class="mdi mdi-table-large menu-icon"></i>
                <span class="menu-title fw-bold ">forms</span>
                <i class="menu-arrow"></i>

            </a>
            <div class="collapse" id="tables">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link fw-bold " href="member.php">Personal-Info</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="all.php">Add Forms</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="mdi mdi-lock menu-icon"></i>
                <span class="menu-title">Tables</span>
                <i class="menu-arrow"></i>

            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="report.php"> Report </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="progress.php"> Progress </a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="mdi mdi-lock menu-icon"></i>
                <span class="menu-title fw-bold ">Logout</span>

            </a>
        </li>

    </ul>
</nav>