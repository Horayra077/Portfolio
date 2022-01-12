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

if(isset($_POST['create_skill']))
{
    $skill_name = $_POST['skill'];
    $overall = $_POST['overall'];
    $last_week = $_POST['last_week'];
    $last_month = $_POST['last_month'];
    
    $query = "INSERT INTO skill(skill_name, overall, last_week, last_month) ";
    
    $query .= "VALUES('{$skill_name}','{$overall}','{$last_week}','{$last_month}') ";
    
    $create_skill_query = mysqli_query($connection, $query);
    
    if(!$create_skill_query)
    {
        die('QUERY FAILED! ' . mysqli_error($connection));
    }
    
    
    
}

?>


<form action="" method="post" enctype="multipart/form-data">
    
    <div class="form-group">
        <label for="post_status">Skill Name</label>
        <input type="text" class="form-control" name="skill" placeholder="Enter Skill: E.g. PHP">
    </div>
    
    <div class="form-group">
        <label for="post_status">Overall Perfom(%)</label>
        <input type="text" class="form-control" name="overall" placeholder="E.g. 85">
    </div>
    
    <div class="form-group">
        <label for="post_status">Last Week Perfom(%)</label>
        <input type="text" class="form-control" name="last_week" placeholder="E.g. 90">
    </div>
       
    <div class="form-group">
        <label for="post_status">Last Month Perfom(%)</label>
        <input type="text" class="form-control" name="last_month" placeholder="E.g. 65">
    </div>

    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="create_skill" value="Add Skill">
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