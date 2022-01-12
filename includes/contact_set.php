
<?php include "db.php"; ?>

<?php

if(isset($_POST['send_message']) )
{
    $contact_name = $_POST['name'];
    $contact_email = $_POST['email'];
    $contact_subject = $_POST['subject'];
    $contact_message = $_POST['message'];
    
    
    $contact_name = mysqli_real_escape_string($connection, $contact_name);
    $contact_email = mysqli_real_escape_string($connection, $contact_email);
    $contact_subject = mysqli_real_escape_string($connection, $contact_subject);
    $contact_message = mysqli_real_escape_string($connection, $contact_message);
    
    
    if($contact_name != '' && $contact_email != '' && $contact_subject != '' && $contact_message != '')
    {
        $query = "INSERT INTO contact(name, email, subject, message, date_submitted) ";

        $query .= "VALUES('{$contact_name}','{$contact_email}','{$contact_subject}','{$contact_message}', now()) ";

        $create_contact_query = mysqli_query($connection, $query);    
        
        if(!$create_contact_query)
        {
            die('QUERY FAILED! ' . mysqli_error($connection));
        }
    }
    
    header("Location: ../index.php");


}




?>