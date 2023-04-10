<?php include "in/header.php"  ?>
<body >

<!-- SIDEBAR -->
<section id="sidebar" style= "font-family: Comfortaa, cursive; ">
    <div class="sidebar_top">
        <div class="sidebar-user">
            <img src="assests/image/image_8.png" alt="admin-img">
            <div class="admin-name">
                <h5><?php    echo "$f_name";  ?></h5>
                <span><?php    echo "$cid";  ?></span>
            </div>
        </div>
    </div>

    <ul class="side-menu top">
        <li>
            <a href="blank.php" class="no-underline" style="text-decoration: none;">
                <i class='bx bxs-dashboard'></i>
            Dashboard
            </a>
        </li>
        <li>
            <a href="Client.php" class="no-underline" style="text-decoration: none;"><i class='bx bxs-doughnut-chart'></i>Clients</a>
        </li>
       
        <li>
            <a href="add_client.php" class="no-underline" style="text-decoration: none;"><i class='bx bxs-doughnut-chart'></i>Add Client</a>
        </li>

        <li>
            <a href="reciept.php" class="no-underline" style="text-decoration: none;"><i class='bx bxs-doughnut-chart'></i>Reciept</a>
        </li>
        <div>
            <li >
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="text-decoration: none;"><i
                        class='bx bxs-group'></i> Users</a>

                <ul class="collapse list-unstyled" id="pageSubmenu" style="margin-left: 10%;">
                    <li>
                        <a href="addUser.php">Add Users</a>
                    </li>
                    <li>
                        <a href="allClient.php">All Users </a>
                    </li>
                </ul>
            </li>
        </div>
    </ul>

    <div class="bottom_content">
        <ul class="side-menu">
            <li>
                <a href="#">
                    <i class='bx bxs-cog'></i>
                    <span class="text">Settings</span>
                </a>
            </li>
            <li>
                <a href="logoutCode.php" class="logout">
                    <i class='bx bxs-log-out-circle'></i>
                    <span class="text">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</section>