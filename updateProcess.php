<?php
/**
 * Created by PhpStorm.
 * User: emoblis
 * Date: 6/12/19
 * Time: 6:43 PM
 */

if (isset($_POST['btn_update'])){
    $received_id = $_POST['w'];
    $received_name = $_POST['x'];
    $received_email = $_POST['y'];
    $received_pass = $_POST['z'];
    //To update, connect to the Db
    $conn = mysqli_connect("localhost","root","","evening_system");
    //Check if the connection is successful
    if (!$conn){
        echo "Connection failed";
    }else{
        //Proceed to update data
        //Start by creating the update query
        $updateQuery = "UPDATE majina SET jina='$received_name',
    arafa='$received_email',siri='$received_pass' WHERE id='$received_id'";
        //Check if the update query is correct
        if (!$updateQuery){
            echo "Error on the update query";
        }else{
            //Proceed to finally update
            $update = mysqli_query($conn,$updateQuery);
            //Check if the update was successful
            if (!$update){
                echo "Updating failed";
            }else{
                echo "Record successfully updated";
                //Go back to viewUsers.php to see changes
                header('location:viewUsers.php');
            }
        }
    }
}


?>