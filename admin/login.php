<?php include "includes/admin_header.php" ?>

    <div id="wrapper">

        <!-- Navigation -->
                <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        
                        
                        <h1 class="page-header">
                            Please Login
                            <small><?php echo ""; ?></small>
                        </h1>
                        
                        <div class="well">
                            <h3>Login</h3>

                            <form action="login_page.php" method="post">

                            <div class="form-group">
                                <input name="username" type="text" class="form-control" placeholder="Enter Username">
                            </div>

                            <div class="input-group">
                                <input name="password" type="password" class="form-control" placeholder="Enter Password">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" name="login" type="submit">Submit</button>
                                </span>
                            </div>
                                <br>
                                <a href="already_login.php"><h4>Already login?</h4></a>

                            </form> <!-- Search form -->
                            <!-- /.input-group -->
                        </div>
                        
                        

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
        
       <?php include "includes/admin_footer.php" ?>