<?php
/**
 * Created by PhpStorm.
 * User: emoblis
 * Date: 6/12/19
 * Time: 5:41 PM
 */

if (isset($_GET['id_yetu'])){
    $received_id = $_GET['id_yetu'];
    //Connect to the Db to delete a record under the Received Id row
    $conn = mysqli_connect("localhost","root","","evening_system");
    //Check if the connection is successful
    if (!$conn){
        echo "Connection failed";
    }else{
        //Proceed to delete
        //Start with the delete query
        $deleteQuery = "DELETE FROM majina WHERE id=$received_id";
        //Check if the delete query is correct
        if (!$deleteQuery){
            echo "Error on the delete query";
        }else{
            //Finally proceed to delete
            $delete = mysqli_query($conn,$deleteQuery);
            // Check if deleting was successful
            if (!$delete){
                echo "Deleting failed";
            }else{
                echo "Record deleted Successfully";
                //Go back to viewUsers.php to see if the file is gone
                header('location:viewUsers.php');
            }
        }
    }
}

?>