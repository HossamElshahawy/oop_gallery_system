<?php include("includes/header.php"); ?>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <?php include("includes/nav_header.php"); ?>


        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <?php include("includes/sidebar.php"); ?>

        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Photos
                        <small>Subheading</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-file"></i> Blank Page
                        </li>
                    </ol>
                    <?php


//                    $test= User::find_all_users();
//                    while ($row = mysqli_fetch_array($test)) {
//                        echo $row['0'] . "<br>";
//                    }

//                    $test = User::find_all_users();
//                    foreach ($test as $te){
//                       echo $te->id . "<br>";
//
//                    }
                    $test = User::find_user_by_id(104);
                    echo $test->first_name;

                    ?>
                </div>
            </div>
            <!-- /.row -->

        </div>


        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

<?php include("includes/footer.php"); ?>