<?php include "../includes/db.php"; ?>
<?php include "includes/admin_header.php";?>

<div id="wrapper">

    <!-- Navigation -->
    
<?php include "includes/admin_navigation.php";?>


<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Welcome to admin
                    <small>Author</small>
                </h1>




<?php

if(isset($_POST['create_user']))
{
    $user_firstname = $_POST['user_firstname'];
    $user_lastname = $_POST['user_lastname']; 
    $username = $_POST['username'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    
    $query = "INSERT INTO user(user_firstname, user_lastname, username, user_email, user_password) ";
    
    $query .= "VALUES('{$user_firstname}','{$user_lastname}','{$username}','{$user_email}','{$user_password}') ";
    
    $create_user_query = mysqli_query($connection, $query);
    
    if(!$create_user_query)
    {
        die('QUERY FAILED! ' . mysqli_error($connection));
    }
    
    
    
}

?>


<form action="" method="post" enctype="multipart/form-data">
    
    <div class="form-group">
        <label for="title">Firstname</label>
        <input type="text" class="form-control" name="user_firstname">
    </div>
    
    
    <div class="form-group">
        <label for="post_status">Lastname</label>
        <input type="text" class="form-control" name="user_lastname">
    </div>
    
    
    <div class="form-group">
        <label for="post_tags">Username</label>
        <input type="text" class="form-control" name="username">
    </div>
    
    
    
    <div class="form-group">
        <label for="post_tags">Email</label>
        <input type="email" class="form-control" name="user_email">
    </div>
    
    <div class="form-group">
        <label for="post_tags">Password</label>
        <input type="password" class="form-control" name="user_password">
    </div>
    
    
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="create_user" value="Add User">
    </div>
    
</form>


            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

<?php include "includes/admin_footer.php";?>