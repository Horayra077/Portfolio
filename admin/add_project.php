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

if(isset($_POST['create_project']))
{
    $project_name = $_POST['name'];
    $project_detail = $_POST['detail'];
    
    $project_image = $_FILES['image']['name'];
    $project_image_temp = $_FILES['image']['tmp_name'];
    
    move_uploaded_file($project_image_temp, "../images/$project_image" );
    
    $query = "INSERT INTO project(project_name, project_detail, project_image) ";
    
    $query .= "VALUES('{$project_name}','{$project_detail}','{$project_image}' ) ";
    
    $create_project_query = mysqli_query($connection, $query);
    
    if(!$create_project_query)
    {
        die('QUERY FAILED! ' . mysqli_error($connection));
    }
    
    
    
}

?>


<form action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="title">Project Name</label>
        <input type="text" class="form-control" name="name">
    </div>
    
    
    <div class="form-group">
        <label for="post_status">Project Detail</label>
        <input type="text" class="form-control" name="detail">
    </div>
    
    
    <div class="form-group">
        <label for="project_image">Project Image</label>
        <input type="file"  name="image">
    </div>
    
    
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="create_project" value="Create Project">
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