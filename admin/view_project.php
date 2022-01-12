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
            <th>Project Name</th>
            <th>Project Detail</th>
            <th>Image</th>
            <th>Delete</th>
        </tr>
    </thead>

 <tbody>
        <tr>

         <?php

        $query = "SELECT * FROM project ";
        $select_project = mysqli_query($connection, $query);


        while($row = mysqli_fetch_assoc($select_project))
        {

            $project_id = $row['project_id'];
            $project_name = $row['project_name'];
            $project_detail = $row['project_detail'];
            $project_image = $row['project_image'];    



            echo "<tr>";
            echo"<td>$project_id</td>";
            echo"<td>$project_name</td>";
            echo"<td>$project_detail</td>";
            echo"<td><img width='100' src='../images/$project_image' alt=''image></td>";          
            echo "<td><a href='view_project.php?delete=$project_id'>Delete</a></td>";
            echo "</tr>";

        } ?>

    </tbody>
</table>



<?php



if(isset($_GET['delete']))
{
    
    $the_project_id = $_GET['delete'];
    
    $query = "DELETE FROM project WHERE project_id = {$the_project_id} ";
    $delete_query = mysqli_query($connection, $query);
    
    header("Location: view_project.php");  //refresh page
    
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