<!-- Load Header -->
<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!-- NavBar Start -->
<nav class="navbar navbar-expand-md navbar-light bg-light">
    <button class="btn btn-light float-left mr-2" type="button" onclick="openNav()">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Fawlty</a>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
        </ul>
    </div>
</nav>
<!-- NavBar End -->


<!-- Body Start -->

<body>

    <!-- Side Navigation Start -->
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <h1 class="text-light text-center"><i class="fa fa-user"></i></h1>
        <h2 class="text-light text-center"><?php echo $username ?></h2>
        </br>
        <a href="/managers" class="btn btn-light border-dark rounded-0 text-left"><i class="fa fa-tachometer"></i>&nbsp;Dashboard</a>
        <a href="/admin/acl?view=users" class="btn btn-light border-dark rounded-0 text-left"><i class="fa fa-user"></i>&nbsp;Users</a>

        </br>
        <h3 class="text-light text-center">Fault Reports</h3>
        <a href="/faults" class="btn btn-light border-dark rounded-0 text-left"><i class="fa fa-envelope-open-o"></i>&nbsp;All Reports</a>
        <!-- Load List of Stores -->
        <?php if ($user_stores != null) { ?>
            <?php foreach ($user_stores as $r) { ?>
                <a href="/faults/store/<?php echo $r->store_number ?>" class="btn btn-light border-dark rounded-0 text-left"><i class="fa fa-envelope-open-o"></i>&nbsp;<?php echo $r->store_address1; ?></a>
        <?php }
        } ?>
        </br>
        <h3 class="text-light text-center">Equipment</h3>
        <a href="/equipment_types" class="btn btn-light border-dark rounded-0 text-left"><i class="fa fa-tag"></i>&nbsp;Categories</a>
        <a href="/manufacturers" class="btn btn-light border-dark rounded-0 text-left"><i class="fa fa-cog"></i>&nbsp;Manufacturers</a>
        <a href="/equipment" class="btn btn-light border-dark rounded-0 text-left"><i class="fa fa-wrench"></i>&nbsp;Equipment</a>
        </br>
        <h3 class="text-light text-center">Management</h3>
        <a href="/stores" class="btn btn-light border-dark rounded-0 text-left"><i class="fa fa-shopping-basket"></i>&nbsp;Stores</a>
        <a href="/suppliers" class="btn btn-light border-dark rounded-0 text-left"><i class="fa fa-truck"></i>&nbsp;Suppliers</a>
        </br>
        <a class="nav-link btn btn-light border-dark rounded-0 text-left" href="/auth/logout"><i class="fa fa-sign-out"></i>&nbsp;Logout</a>
        </br>

    </div>
    <!-- Side Navigation End -->

    <!-- NavBar Script Start -->
    <script>
        /* Set the width of the side navigation to 250px */
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        /* Set the width of the side navigation to 0 */
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>
    <!-- NavBar Script End -->

    <div class="container-fluid pt-4">