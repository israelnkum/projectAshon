<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar bar1"></span>
                <span class="icon-bar bar2"></span>
                <span class="icon-bar bar3"></span>
            </button>
</div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                        <img class="img-circle" src="../assets/img/background.jpg" style="height: 35px; width: 35px;">
                        <p>
                            <?php
                            echo $_SESSION['u_name'];
                            ?>
                        </p>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu list-unstyled">
                        <li><a   href="userProfile.php"> Profile </a> </li>
                        <li><a role="button" data-toggle="modal" data-target="#logoutModal" href="#">Logout</a></li>
                    </ul>
                </li>
            </ul>

        </div>
    </div>
</nav>
