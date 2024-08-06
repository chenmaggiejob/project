<nav class="navbar navbar-expand-sm nav">
            <div class="container-fluid">
                <!-- Links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link 3</a>
                    </li>
                    <?php
                    if (isset($_SESSION['role'])) {
                        if ($_SESSION['role'] == 1) {
                    ?>
                            <li class="nav-item ms-auto">
                                <a class="nav-link" href="./admin.php">CMS</a>
                            </li>
                            <li class="nav-item ms-auto">
                                <a class="nav-link" href="./api/logout.php">Logout</a>
                            </li>
                        <?php
                        } else {
                        ?>
                            <li class="nav-item ms-auto">
                                <a class="nav-link" href="./api/logout.php">Logout</a>
                            </li>
                        <?php
                        }
                        ?>
                    <?php
                    } else {
                    ?>
                        <li class="nav-item ms-auto">
                            <a class="nav-link" href="./frontend/login.php">Login</a>
                        </li>
                    <?php
                    }
                    ?>
                </ul>