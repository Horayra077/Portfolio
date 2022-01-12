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
            <th>Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Message</th>
            <th>Date</th>
            <th>Delete</th>
        </tr>
    </thead>

 <tbody>
        <tr>

         <?php

        $query = "SELECT * FROM contact ";
        $select_contact = mysqli_query($connection, $query);


        while($row = mysqli_fetch_assoc($select_contact))
        {

            $contact_id = $row['contact_id'];
            $contact_name = $row['name'];
            $contact_email = $row['email'];
            $contact_subject = $row['subject'];    
            $contact_message= $row['message'];
            $contact_date = $row['date_submitted'];



            echo "<tr>";
            echo"<td>$contact_id</td>";
            echo"<td>$contact_name</td>";
            echo"<td>$contact_email</td>";  
            echo"<td>$contact_subject</td>";
            echo"<td>$contact_message</td>";           
            echo"<td>$contact_date</td>";
            echo "<td><a href='view_contact.php?delete=$contact_id'>Delete</a></td>";
            echo "</tr>";

        } ?>

    </tbody>
</table>



<?php



if(isset($_GET['delete']))
{
    
    $the_contact_id = $_GET['delete'];
    
    $query = "DELETE FROM contact WHERE contact_id = {$the_contact_id} ";
    $delete_query = mysqli_query($connection, $query);
    
    header("Location: view_contact.php");  //refresh page
    
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