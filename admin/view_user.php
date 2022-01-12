<?php ob_start(); ?>
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

<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Id</th>
            <th>Fast Name</th>
            <th>Last name</th>
            <th>Username</th>
            <th>Email</th>
            <th>Delete</th>
        </tr>
    </thead>

 <tbody>
        <tr>

         <?php

        $query = "SELECT * FROM user ";
        $select_user = mysqli_query($connection, $query);


        while($row = mysqli_fetch_assoc($select_user))
        {

            $user_id = $row['user_id'];
            $user_firstname = $row['user_firstname'];
            $user_lastname = $row['user_lastname'];
            $username = $row['username'];    
            $user_email= $row['user_email'];
            $user_password = $row['user_password'];



            echo "<tr>";
            echo"<td>$user_id</td>";
            echo"<td>$user_firstname</td>";
            echo"<td>$user_lastname</td>";  
            echo"<td>$username</td>";
            echo"<td>$user_email</td>";           
            //echo"<td>$user_password</td>";
            echo "<td><a href='view_user.php?delete=$user_id'>Delete</a></td>";
            echo "</tr>";

        } ?>

    </tbody>
</table>



<?php



if(isset($_GET['delete']))
{
    
    $the_user_id = $_GET['delete'];
    
    $query = "DELETE FROM user WHERE user_id = {$the_user_id} ";
    $delete_query = mysqli_query($connection, $query);
    
    header("Location: view_user.php");  //refresh page
    
    if(!$delete_query)
    {
        die('QUERY FAILED' . mysqli_error($connection));
    }
    
}

?>


            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

<?php include "includes/admin_footer.php";?>