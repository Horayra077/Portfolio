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
            <th>Skill Name</th>
            <th>Overall(%)</th>
            <th>Last Week(%)</th>
            <th>Last Month(%)</th>
            <th>Delete</th>
        </tr>
    </thead>

 <tbody>
        <tr>

         <?php

        $query = "SELECT * FROM skill ";
        $select_skill = mysqli_query($connection, $query);


        while($row = mysqli_fetch_assoc($select_skill))
        {

            $skill_id = $row['skill_id'];
            $skill_name = $row['skill_name'];
            $overall = $row['overall'];
            $last_week = $row['last_week'];
            $last_month = $row['last_month'];


            echo "<tr>";
            echo"<td>$skill_id</td>";
            echo"<td>$skill_name</td>";
            echo"<td>$overall</td>";
            echo"<td>$last_week</td>";
            echo"<td>$last_month</td>";
            echo "<td><a href='view_skill.php?delete=$skill_id'>Delete</a></td>";
            echo "</tr>";

        } ?>

    </tbody>
</table>



<?php



if(isset($_GET['delete']))
{
    
    $the_skill_id = $_GET['delete'];
    
    $query = "DELETE FROM skill WHERE skill_id = {$the_skill_id} ";
    $delete_query = mysqli_query($connection, $query);
    
    header("Location: view_skill.php");  //refresh page
    
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